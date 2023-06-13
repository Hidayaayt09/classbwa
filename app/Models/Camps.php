<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
//use App\Models\Users;

class Camps extends Model
{
    use HasFactory, softDeletes;

    protected $fillable = ['title', 'price'];

}
