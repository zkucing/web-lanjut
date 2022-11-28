<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    use HasFactory;
    protected $table = "buku";



    public function user (){
        return $this->hasMany(user::class, "user_id");
    }

    public function pinjaman (){
        return $this->belongsToMany( buku ::class, "user");
    }
}