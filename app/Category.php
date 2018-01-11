<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    protected $fillable = ['title','slug','short_description'];

    public static function boot()
    {
        parent::boot();

        // registering a callback to be executed upon the creation of an activity AR
        static::creating(function($category) {

            // produce a slug based on the activity title
            $slug = Str::slug($category->title);

            // check to see if any other slugs exist that are the same & count them
            $count = static::whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();

            // if other slugs exist that are the same, append the count to the slug
            $category->slug = $count ? "{$slug}-{$count}" : $slug;

        });

    }

    public function posts() {
        return $this->hasMany(Post::class);
    }



    public function getLastPostUserAttribute() {
        $post  = $this->posts()->orderBy('created_at','DESC')->get()->first();

        if(isset($post->user_id)) {
            return User::find($post->user_id);
        }

        return null;
    }

    public function getLastPostAttribute() {
        $post  = $this->posts()->orderBy('created_at','DESC')->first();

        if(null !== $post  ) {
            return $post;
        }

        return null;
    }

    public function getTopicCountsAttribute() {
        $postCounts = $this->posts()->where('parent_id','=',null)->count();

        return $postCounts;
    }

    public function getPostCountsAttribute() {
        $postCounts = $this->posts()->count();
        return $postCounts;
    }
}
