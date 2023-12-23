<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //brinda seguridad y crea un array

   protected $fillable = ['title', 'slug' , 'content' , 'image', 'category_id', 'description', 'posted'];

}
