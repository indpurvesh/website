@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-md-12">
        <div class="title">
            Create Issue
        </div>
        
        <div class="form-wrap">
            {!! Form::open(['route' => 'issue.store']) !!}
            
            @include('issue._field')

            <div class="form-group">
                {!! Form::submit('Create',['class' => 'btn btn-primary']) !!}
            </div> 
            {!! Form::close() !!}
            
        </div>
        
    </div>
    
</div>
</div>
@endsection