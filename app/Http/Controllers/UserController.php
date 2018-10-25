<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Symfony\Component\Debug\Debug;

class UserController extends Controller
{
    public function home($userName = 'Guest'){
        return view('home', ['userName'=>$userName]);
    }

    public function upload(Request $req){
        $image = $req->uploaded_image;
        $real_name = $image->getClientOriginalName();
        $dir_upload = public_path('images');
        if(!empty($req->userName)) {
            DB::table('uploaded')->insert([
                "id_user" => 'lol',
                "nama_user" => $req->userName,
                "alamat_gambar" => $real_name,
                "hasil_scan" => 'hidup',
            ]);
            $image->move($dir_upload,  $real_name);
            return view('home', ['image'=>$real_name, 'userName'=>$req->userName]);
        }else{
            return view('home');
        }
    }

    public function showTable($userName = 'userName'){
        $images = DB::table('uploaded')->where('nama_user', $userName)->get();
        return view('home2', compact('images'));
    }
}
