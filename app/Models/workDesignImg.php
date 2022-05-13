<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class workDesignImg extends Model
{
    use HasFactory;
    protected $table = 'work_design_imgs';
    protected $fillable = [
        'work_main_title','work_sub_title', 'design_img'
    ];
}
