<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'status',
        'category_id',
        
    ];
    public function tags()
    {
        return $this->belongsToMany(Tag::class,'tags_posts', 'post_id', 'tag_id');
    }
    public function category()
    {
        return $this->hasOne(Category::class);
    }
    public function images()
    {
        return $this->hasMany(Image::class);
    }
    public function comments()
    {
        return $this->hasMany(Commenter::class);
    }
    public function user()
    {
        return $this->hasOne(User::class);
    }
}
