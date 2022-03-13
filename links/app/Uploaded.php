<?php

namespace App;
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Uploaded extends Model
{
    protected $table = 'uploadedes';
    protected $primaryKey = 'id_transaction';
    protected $foreignKey = 'user_id';
    public function users(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
