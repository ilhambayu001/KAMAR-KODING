<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users_Langganans extends Model
{
    use HasFactory;
    protected $table = "users_langganans";
    protected $fillable = ['user_id','langganan_id'];
}
