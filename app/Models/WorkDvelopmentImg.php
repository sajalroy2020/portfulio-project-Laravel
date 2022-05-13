<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkDvelopmentImg extends Model
{
    use HasFactory;
    protected $table = 'work_dvelopment_imgs';
    protected $fillable = [
        'work_development_title','work_development_sub_title', 'development_img'
    ];
}
