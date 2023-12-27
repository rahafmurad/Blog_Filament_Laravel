<?php

namespace App\Models;

use App\Models\Category;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model implements HasMedia
{
    use HasFactory , InteractsWithMedia;

    protected $fillable=['slug' ,'name','category_id','content','user_id'];
    public function category(){
       return $this->belongsTo(Category::class);
    }  public function comments(){
        return $this->hasMany(Comment::class);
     }
}
