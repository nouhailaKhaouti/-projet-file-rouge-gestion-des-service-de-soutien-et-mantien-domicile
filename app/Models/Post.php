<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
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
        return $this->belongsTo(Category::class);
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
        return $this->belongsTo(User::class);
    }

    public function likePosts()
    {
        return $this->hasMany(LikePost::class);
    }
}
