@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-md-12">
        <div class="">
        <span class="title">Category </span>
            <span class="pull-right">
                <a href="{{ route('category.create') }}" class="btn btn-primary">Create Category</a>
            </span>
        </div>


        @if($categories->count() <= 0)
            <p>Sorry No Category Found</p>
        @else
        <table class="table">
            <thead>
            <th>ID</th>
            <th>Title</th>
            <th>Slug</th>
            <th>Edit</th>
            <th>Destroy</th>
            </thead>
            @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->title}}</td>
              <td>{{ $category->slug }}</td>
                <td>
                    <a href="{{ route('category.edit',$category->id) }}" class="edit">
                        Edit
                    </a>
                </td>
                <td>
                    <a href="{{ url('/category/'. $category->id) }}"
                       onclick="event.preventDefault();
                               document.getElementById('category-{{ $category->id}}' ).submit();">
                        Destroy
                    </a>

                     {!! Form::open(['method' => 'delete',
                                    'id' => 'category-'. $category->id,
                                    'route' => ['category.destroy' , $category->id]
                                    ]) !!}
                     {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </table>

        <div class="pagination">
            {!! $categories->render() !!}
        </div>
        @endif
    </div>

</div>
</div>
@endsection