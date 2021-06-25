<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Langganan extends Model
{
    use HasFactory;
    protected $guarded =["id"];
    public function users()
    {
        return $this->belongsToMany(User::class,"users_langganans");
    }
    public function materis()
    {
        return $this->hasMany(Materi::class);
    }
    public function exams()
    {
        return $this->hasMany(Exam::class);
    }

}
