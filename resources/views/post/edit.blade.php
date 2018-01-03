@extends('layouts.app')

@section('title')
    Edit Forum  Post - {{ config('app.page_title') }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="">
                    Edit Forum Post
                </div>

                <div class="form-wrap">
                    {!! Form::model($post, ['method' => 'put','url' => route ('forum.post.update' ,['category' => $category->slug ,'slug' => $post->slug])]) !!}

                    @include('post._field')
                    <div class="form-group">
                        {!! Form::submit('Update',['class' => 'btn btn-primary']) !!}
                    </div>
                    {!! Form::close() !!}

                </div>

            </div>

        </div>
    </div>
@endsection