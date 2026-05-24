<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    // الأعمدة المسموح تعبئتها في قاعدة البيانات
    protected $fillable = ['title', 'description', 'language', 'level'];
}