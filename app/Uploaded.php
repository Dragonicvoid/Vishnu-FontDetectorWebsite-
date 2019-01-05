<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uploaded extends Model
{
    protected $table = 'uploaded';
    protected $primaryKey = 'id_transaction';
    protected $foreignKey = 'user_id';
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
