<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id_user';
    public function uploadedes(){
        return $this->hasMany(Uploaded::class);
    }
}
