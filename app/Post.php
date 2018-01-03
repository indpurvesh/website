<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=['category_id','title','slug','content','user_id','parent_id', 'likes', 'dislikes'];

    public static function boot()
    {
        parent::boot();

        // registering a callback to be executed upon the creation of an activity AR
        static::creating(function($post) {

            // produce a slug based on the activity title
            $slug = Str::slug($post->title);

            // check to see if any other slugs exist that are the same & count them
            $count = static::whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();

            // if other slugs exist that are the same, append the count to the slug
            $post->slug = $count ? "{$slug}-{$count}" : $slug;

        });

    }

    public function category() {
        return $this->belongsTo(Category::class);
    }


    public function postLikes() {
        return $this->hasMany(PostLike::class);
    }

    public function postDislikes() {
        return $this->hasMany(PostDislike::class);
    }

    public function childPosts() {
        return $this->where('parent_id','=' , $this->attributes['id']);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function getLastReplyAttribute() {
        return $this->whereParentId($this->attributes['id'])->orderBy('created_at','DESC')->first();
    }

    public function getPostReplyCountAttribute() {
        $postCounts = $this->where('parent_id','=',$this->attributes['id'])->count();

        return $postCounts;
    }
}
