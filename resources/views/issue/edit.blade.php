@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-md-12">
        <div class="title">
            Edit Company
        </div>
        
        <div class="form-wrap">
            {!! Form::model($issue,['method' => 'put',
                                            'route' => ['issue.update',$issue->id]]) !!}
            @include('issue._field')
            <div class="form-group">
                {!! Form::submit('Update',['class' => 'btn btn-primary']) !!}
            </div> 
            {!! Form::close() !!}
            
        </div>
        
    </div>
    
</div>
</div>
@endsection