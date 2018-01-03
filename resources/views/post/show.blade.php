@extends('layouts.app')

@section('title')
    {{ $post->title }} - {{ config('app.page_title') }}
@endsection


@section('content')
    <div class="container" style="margin-top: 35px">

        <div class="col-md-12">
            <div class="card">

                <div class="card-header">

                    <span class=" float-left">{{ $post->title }}</span>

                    <div class="dropdown float-right">
                        @if(Auth::check() && (Auth::user()->id || Auth::user()->id == $post->user_id ) )
                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <span class="glyphicon glyphicon-cog"></span>
                                <span class="caret"></span>
                            </button>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">

                                <li class="nav-item"><a
                                            class="nav-link"
                                            href="{{ route('forum.post.edit', ['category' => $category->slug ,'slug' => $post->slug]) }}">
                                        Edit</a></li>
                                <li role="separator" class="divider"></li>
                                <li class="nav-item">
                                    <a
                                            class="nav-link"
                                            href="{{ route('forum.post.destroy', ['category' => $category->slug ,'slug' => $post->slug]) }}"
                                            onclick="event.preventDefault();
                                                    document.getElementById('post-destroy-form-{{ $post->id }}').submit();">
                                        Destroy

                                    </a>
                                </li>

                                {{ Form::open(['method' => 'delete' ,
                                                'id' => 'post-destroy-form-'.$post->id,
                                                'url' => route('forum.post.destroy', ['category' => $category->slug ,'slug' => $post->slug])  ]) }}
                                {{ Form::close() }}
                            </ul>
                        @endif
                    </div>
                </div>

                <div class="card-body">
                    <p class="lead">
                        {!! $post->content !!}
                    </p>

                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            @foreach($post->childPosts()->get() as $childPost)
                <div class="col-md-8 mt-3">
                    <div class="card">
                        <div class="card-body">
                            <p class="lead">
                                {!! $childPost->content  !!}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


        @if(Auth::check())
            <div class="row justify-content-center mt-3">
                <div class="col-md-8 ">
                    <div class="card">
                        <div class="card-header">
                            Create Post Reply
                        </div>

                        <div class="card-body">
                            {{ Form::open(['url' =>  route('forum.post.store',['category'=> $category->slug])  ]) }}

                            <div class="form-group">
                                {{ Form::label('content','Content') }}
                                {{ Form::textarea('content',null,['class' => 'form-control']) }}
                            </div>

                            {{ Form::hidden('parent_slug', $post->slug) }}
                            <div class="form-group">
                                {{ Form::submit('Save',['class' => 'btn btn-primary']) }}
                            </div>

                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
        @endif


    </div>
    </div>
@endsection
