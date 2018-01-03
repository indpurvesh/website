@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-md-12">
        <div class="title">
            Create Company
        </div>
        
        <div class="form-wrap">
            {!! Form::open(['route' => 'category.store']) !!}
            
            @include('category._field')
            <div class="form-group">
                {!! Form::submit('Create',['class' => 'btn btn-primary']) !!}
            </div> 
            {!! Form::close() !!}
            
        </div>
        
    </div>
    
</div>
</div>
@endsection