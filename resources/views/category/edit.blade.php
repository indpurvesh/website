@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-md-12">
        <div class="title">
            Edit Company
        </div>
        
        <div class="form-wrap">
            {!! Form::model($category,['method' => 'put',
                                            'route' => ['category.update',$category->id]]) !!}
            @include('category._field')
            <div class="form-group">
                {!! Form::submit('Update',['class' => 'btn btn-primary']) !!}
            </div> 
            {!! Form::close() !!}
            
        </div>
        
    </div>
    
</div>
</div>
@endsection