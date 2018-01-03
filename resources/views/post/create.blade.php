@extends('layouts.app')

@section('title')
    Create Forum Post - {{ config('app.page_title') }}
@endsection


@section('content')
<div class="container">
<div class="row">
    <div class="col-md-12">
        <div class="title">
            Create Forum Post
        </div>
        
        <div class="form-wrap">
            {!! Form::open(['route' => ['forum.post.store' ,$category->slug ]]) !!}
            
            @include('post._field')
            <div class="form-group">
                {!! Form::submit('Create',['class' => 'btn btn-primary']) !!}
            </div> 
            {!! Form::close() !!}
            
        </div>
        
    </div>
    
</div>
</div>
@endsection