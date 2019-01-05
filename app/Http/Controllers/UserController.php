<?php

namespace App\Http\Controllers;

use App\Uploaded;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Debug\Debug;

class UserController extends Controller
{
    public function login(Request $req){
        $validator = Validator::make($req->all(), [

            'email' => 'required',
            'password' => 'required',
        ],[
            'email.required'=>'Email harus diIsi !',
            'password.required'=>'Password harus diIsi !',
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $user = User::where('email', $req->email)->first();

        if($user){
            if(Hash::check($req->password, $user->password)){
                Cache::put('id', $user->id_user, 120);
                Cache::put('isLogin', TRUE, 120);
                return redirect('/home');
            }else{
                return redirect()->back()->with('alert', 'Password atau Email yang dituliskan salah');
            }
        }else{
            return redirect()->back()->with('alert', 'Password atau Email yang dituliskan salah');
        }
        return view('home');
    }

    public function viewregister(){
        return view('register');
    }

    public function viewlogin(){
        return view('login');
    }

    public function home(){
        $user = DB::table('user')->where('id_user', '=', Cache::get('id'))->first();
        $username = '';
        if($user){
            $username = $user->username;
        }else{
            $username = '';
        }
        return view('home', compact('username'));
    }

    public function toHome(){
        return redirect('/home');
    }

    public function upload(Request $req){
        $validator = Validator::make($req->all(), [
            'photo' => 'required|mimes:jpeg,bmp,png',
        ],[
            'photo.required'=>'foto harus diIsi !',
            'photo.mimes'=>'format foto harus jpeg,bmp,png !'
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $photo_nama_baru = '';
        if(Cache::get('id')){
            $user = User::where('id_user', Cache::get('id'))->first();
            $count = DB::select("SHOW TABLE STATUS LIKE 'user'");
            $nextId = $count[0]->Auto_increment;
            $photo_nama_baru = $user->username .'-' .Cache::get('id') .'-' .($user->has_upload + 1) .'.jpg';
        }else{
            $photo_nama_baru = 'temp.jpg';
        }
        $req->photo->move('images', $photo_nama_baru);

        $user = DB::table('user')->where('id_user', '=', Cache::get('id'))->first();
        $username = '';
        if($user){
            $username = $user->username;
        }else{
            $username = '';
        }

        return view('homeScan', compact('photo_nama_baru', 'username'));
    }

    public function showTable(){
        $images = Uploaded::where('id_user', Cache::get('id'))->with('user')->get();

        $user = DB::table('user')->where('id_user', '=', Cache::get('id'))->first();
        $username = '';
        if($user){
            $username = $user->username;
        }else{
            $username = '';
        }

        return view('profile', compact('images', 'username'));
    }

    public function addUser(Request $req){
        $validator = Validator::make($req->all(), [
            'name' => 'required|max:255',
            'email' => 'required|unique:user',
            'password' => 'required|min:5|confirmed',
            'phone' => 'required|numeric',
            'gender' => 'required|in:male,female',
            'address' => 'required',
            'photo' => 'required|mimes:jpeg,bmp,png',
        ],[
            'name.required'=>'Nama Harus diIsi !',
            'name.max'=>'Nama terlalu panjang !',
            'email.required'=>'Email Harus diIsi !',
            'email.unique'=>'Email sudah terdaftar !',
            'password.required'=>'Password harus diIsi !',
            'password.min'=>'Password minimal 5 char !',
            'password.confirmed'=>'Confirmasi password salah !',
            'phone.required'=>'No Telpon harus diIsi ! ',
            'phone.numeric'=>'No Telpon harus angka ! ',
            'gender.required'=>'Gender harus diIsi ! ',
            'address.required'=>'Alamat harus diIsi!',
            'photo.required'=>'foto harus ada',
            'photo.mimes'=>'format foto harus jpeg,bmp,png !'
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        $hashed = Hash::make($req->password);
        $count = DB::select("SHOW TABLE STATUS LIKE 'user'");
        $nextId = $count[0]->Auto_increment;
        $image = $req->name .'-' .$nextId .'.jpg';
        $req->photo->move('images', $image);
        User::insert(
            [
                'username' => $req->name,
                'password' => $hashed,
                'email' => $req->email,
                'phone' => $req->phone,
                'gender' => $req->gender,
                'address' => $req->address,
                'has_upload' => 0,
                'photo' => $image
            ]
        );

        return redirect('/login');
    }

    public function scan(){
        if(Cache::get('id')){
            $user = User::where('id_user', Cache::get('id'))->first();
            $count = DB::select("SHOW TABLE STATUS LIKE 'user'");
            $nextId = $count[0]->Auto_increment;
            $photo_nama_baru = $user->username .'-' .Cache::get('id') .'-' .($user->has_upload + 1) .'.jpg';
        }else{
            $photo_nama_baru = 'temp.jpg';
        }

        return view('/homeScan');
    }

    public function logout(){
        Cache::flush();

        return redirect('/home');
    }

    public function save($hasil){
        $user = User::where('id_user', Cache::get('id'))->first();
        $nama_gambar = $user->username .'-' .$user->id_user .'-' .($user->has_upload + 1) .'.jpg';
        Uploaded::insert(
            [
                'id_user' => $user->id_user,
                'alamat_gambar' => $nama_gambar,
                'hasil_scan' => $hasil
            ]
        );

        User::where('id_user', Cache::get('id'))->update(
            [
                'has_upload' => $user->has_upload + 1
            ]
        );

        return redirect('/');
    }

    public function lookimage($gambar){
        return view('gambar', compact('gambar'));
    }
}
