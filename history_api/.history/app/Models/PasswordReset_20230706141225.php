<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Password extends Model
{
    use HasFactory;
    protected $table = 'password_resets';
    protected $primaryKey = 'id';
    protected $fillable = ['email','token','creared_at'];

}

