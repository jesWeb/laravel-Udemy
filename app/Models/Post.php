<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    //brinda seguridad y crea un array
   protected $fillable = ['title', 'slug' , 'categories_id' , 'posted' , 'description', 'content' , 'image' ];

   //relacion  base de datos  uno a muchos 
    public function category(){
        return $this->BelongsTo(Category::class);
    }


}
