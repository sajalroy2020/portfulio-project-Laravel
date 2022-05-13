<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $fillable = [
        'name', 'main_title', 'sub_title', 'bg_img'
    ];
}
