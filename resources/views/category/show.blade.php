@extends('layouts.app')

@section('title')
    {{ $category->title }} Forum - Mage2 Laravel Ecommerce
@endsection

@section('content')
    <div class="container" style="margin-top: 35px">
        <div class="page-header page-heading">
            <h1 class="float-left">{{ $category->title }}</h1>

            <a href="{{ route('forum.post.create', ['category-slug' => $category->slug]) }}"
               class="float-right btn btn-primary">Create Post</a>

            <div class="clearfix"></div>
        </div>
        <p class="small">
            {{ $category->short_description }}
        </p>
        <table class="table forum table-striped">
            <thead>
            <tr class="table-inverse">
                <th>
                    <h3>{{ $category->title }} Topics</h3>
                </th>
                <th class="cell-stat text-center hidden-xs hidden-sm">Replies</th>

                <th class="cell-stat-2x hidden-xs hidden-sm">Last Reply</th>
            </tr>
            </thead>
            <tbody>

            @foreach($category->posts()->where('parent_id','=', NULL)->get() as $post)

                <tr>
                    <td>
                        <h4>
                            <a title="{{ $post->title }}"
                               href="{{ route('forum.post.show',['category'=> $category->slug, 'post'=>$post->slug]) }}">
                                {{ $post->title }}
                            </a>
                            <br>
                        </h4>
                    </td>

                    <td class="text-center text-primary hidden-xs hidden-sm">
                        {{ $post->postReplyCount }}
                    </td>

                    <?php
                    $name = null;
                    $humanReadableDate = "";
                    $lastReply = $post->lastReply;

                    //$lastPost = $category->lastPost;
                    if (isset($lastReply->user->name)) {
                        $name = $lastReply->user->name;
                        $humanReadableDate = $lastReply->created_at->diffForHumans();
                    }
                    ?>

                    @if(null !== $name)
                        <td class="hidden-xs hidden-sm">by <span>{{ $name }}</span><br>
                            <small><i class="fa fa-clock-o">{{ $humanReadableDate }}</i></small>
                        </td>
                    @else

                        <td class="hidden-xs hidden-sm"><span>No Reply</span><br>

                        </td>
                    @endif
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection
