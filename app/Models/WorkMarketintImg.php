<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkMarketintImg extends Model
{
    use HasFactory;
    protected $table = 'work_marketint_imgs';
    protected $fillable = [
        'marketing_title','marketing_sub_title', 'marketing_img'
    ];

}
