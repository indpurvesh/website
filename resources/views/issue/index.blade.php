@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-md-12">

        <div class="title">
            <h1 class="pull-left">Issue</h1>
            <span class="pull-right">
                <a href="{{ route('issue.create') }}" class="btn btn-primary">Create Issue</a>
            </span>
        </div>


        @if($issues->count() <= 0)
            <p>Sorry No Issue Found</p>
        @else
        <table class="table">
            <thead>
            <th>ID</th>
            <th>Title</th>
            <th>Show</th>
            <th>Edit</th>
            <th>Destroy</th>
            </thead>
            @foreach($issues as $issue)
            <tr>
                <td>{{ $issue->id }}</td>
                <td>{{ $issue->title}}</td>

                <td>
                    <a href="{{ route('issue.show',$issue->id) }}" class="edit">
                        Show
                    </a>
                </td>


                <td>
                    <a href="{{ route('issue.edit',$issue->id) }}" class="edit">
                        Edit
                    </a>
                </td>
                <td>
                    <a href="{{ url('/issue/'. $issue->id) }}"
                       onclick="event.preventDefault();
                               document.getElementById('issue-{{ $issue->id}}' ).submit();">
                        Destroy
                    </a>

                     {!! Form::open(['method' => 'delete',
                                    'id' => 'issue-'. $issue->id,
                                    'route' => ['issue.destroy' , $issue->id]
                                    ]) !!}
                     {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </table>

        <div class="pagination">
            {!! $issues->render() !!}
        </div>
        @endif
    </div>

</div>
</div>
@endsection