<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\PostRequest;
use App\Post;
use App\PostDislike;
use App\PostLike;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    public function __construct() {
        $this->middleware('auth')->except(['index','show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate(10);

        return view('post.index')->with('posts', $posts);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($slug)
    {
        $category = Category::where('slug', '=', $slug)->get()->first();

        return view('post.create')->with('category', $category);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\PostRequest $request
     * @param  string $categorySlug
     * @param  string $slug
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request, $categorySlug)
    {

        if ($request->get('parent_slug')) {
            $post = Post::where('slug', '=', $request->get('parent_slug'))->get()->first();
            $request->merge(['parent_id' => $post->id]);
        }

        $category = Category::where('slug', '=', $categorySlug)->get()->first();


        $user = Auth::user();

        $request->merge(['user_id' => $user->id]);
        $request->merge(['category_id' => $category->id]);


        Post::create($request->all());

        return redirect()->route('category.show', $categorySlug);
    }

    /**
     * Display the specified resource.
     *
     * @param  string $categorySlug
     * @param  string $postSlug
     * @return \Illuminate\Http\Response
     */
    public function show($categorySlug, $postSlug)
    {
        $category = Category::where('slug', '=', $categorySlug)->get()->first();
        $post = Post::where('slug', '=', $postSlug)->get()->first();

        return view('post.show')
            ->with('post', $post)
            ->with('category', $category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string $categorySlug
     * @param  string $postSlug
     * @return \Illuminate\Http\Response
     */
    public function edit($categorySlug, $postSlug)
    {
        $post = Post::where('slug', '=', $postSlug)->get()->first();
        $category = Category::where('slug', '=', $categorySlug)->get()->first();

        return view('post.edit')
                ->with('post', $post)
                ->with('category', $category)
            ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\PostRequest $request
     * @param  string $categorySlug
     * @param  string $postSlug
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, $categorySlug, $postSlug)
    {
        $post = Post::where('slug', '=', $postSlug)->get()->first();

        $post->update($request->all());

        return redirect()->route('category.show', $categorySlug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string $categorySlug
     * @param  string $postSlug
     * @return \Illuminate\Http\Response
     */
    public function destroy($categorySlug, $postSlug)
    {


        $post = Post::where('slug', '=', $postSlug)->delete();

        return redirect()->route('category.show', $categorySlug);
    }



    /**
     * Display the specified resource.
     *
     * @param  string $categorySlug
     * @param  string $postSlug
     * @return \Illuminate\Http\Response
     */
    public function likePost($categorySlug, $postSlug)
    {
        $user = Auth::user();
        $post = Post::where('slug', '=', $postSlug)->get()->first();

        $postDislike = $post->postDislikes()->whereUserId($user->id)->first();

        if(NULL !== $postDislike) {
            $postDislike->delete();

            $postDislikeCount = $post->postDislikes->count();
            $post->update(['dislikes' => $postDislikeCount]);
        }



        $postLikeModel = PostLike::whereUserId( $user->id)->wherePostId($post->id)->first();

        if(null === $postLikeModel) {
            PostLike::create(['post_id' => $post->id,'user_id' => $user->id]);
        }

        $postLikeCount = $post->postLikes->count();
        $post->update(['likes' => $postLikeCount]);



        return back()->with('successMessage','You just like the Post!');
    }
    /**
     * Display the specified resource.
     *
     * @param  string $categorySlug
     * @param  string $postSlug
     * @return \Illuminate\Http\Response
     */
    public function dislikePost($categorySlug, $postSlug)
    {

        $user = Auth::user();
        $post = Post::where('slug', '=', $postSlug)->get()->first();

        $postLike = $post->postLikes()->whereUserId($user->id)->first();
        if(NULL !== $postLike) {
            $postLike->delete();

            $postLikeCount = $post->postLikes->count();
            $post->update(['likes' => $postLikeCount]);
        }


        $postDisikeModel = PostDislike::whereUserId( $user->id)->wherePostId($post->id)->first();

        if(null === $postDisikeModel) {
            PostDislike::create(['post_id' => $post->id,'user_id' => $user->id]);
        }

        $postDislikeCount = $post->postDislikes->count();
        $post->update(['dislikes' => $postDislikeCount]);




        return back()->with('warningMessage','You just dislike the Post!');
    }
}
