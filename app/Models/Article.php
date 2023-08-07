<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    // المسموح بالملئ
    // protected $fillable = ['title', 'content'];
    // الممنوع من الملئ
    protected $guarded = [];
}
