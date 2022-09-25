<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'danhmuc';
    protected $fillable = ['dm_ma', 'dm_ten', 'dm_hinhanh'];
}
