<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutExperience extends Model
{
    use HasFactory;
    protected $table = 'about_experiences';
    protected $fillable = [
        'about_img','Year_1', 'Year_1_exprience','Year_2','Year_2_exprience','Year_3','Year_3_exprience'
    ];
    
}
