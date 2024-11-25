<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;
    protected $fillable = ['title' , 'slug' , 'author' , 'blog', 'image'];


    protected static function booted(){
        static::creating(function ($model){
            if (is_null($model->image)){
                $model->image = "https://i.pinimg.com/736x/f4/64/4e/f4644ee99c39adba3202845430d1aeae.jpg";
            }
        });
    }
}
