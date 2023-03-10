<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ministry extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function department()
    {
        return $this->hasMany(Department::class);
    }


    public function user()
    {
        return $this->hasMany(User::class);
    }
}
