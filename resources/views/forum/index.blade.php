@extends('layouts.app')

@section('title')
    Forum - {{ config('app.page_title') }}
@endsection

@section('content')
    <div class="container" style="margin-top: 35px">
        <div class="page-header page-heading">
            <h1 class="float-left-left">Forums</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a title="Mage2 E commerce Discussion forum" href="{{ route('forum.index') }}">
                        Forum
                    </a>
                </li>
                <li class=" breadcrumb-item active">List of topics</li>
            </ol>

        </div>
        <p class="lead">This is the right place to discuss any ideas, critics, feature requests and
            all the ideas regarding our website. Please follow the forum rules and always check FAQ
            before posting to prevent duplicate posts.</p>
        <table class="table forum table-striped">
            <thead>
            <tr class="table-inverse">
                <th>
                    <h3>Open Discussion</h3>
                </th>
                <th class="cell-stat text-center hidden-xs hidden-sm">Topics</th>
                <th class="cell-stat text-center hidden-xs hidden-sm">Posts</th>
                <th class="cell-stat-2x hidden-xs hidden-sm">Last Post</th>
            </tr>
            </thead>
            <tbody>

            @foreach($categories as $category)
                <tr>
                    <td>
                        <h4>
                            <a title="{{ $category->title }}" href="{{ route('category.show',$category->slug) }}">
                                {{ $category->title }}
                            </a>


                        </h4>
                        <small>{{ $category->short_description }}</small>
                    </td>
                    <td class="text-center hidden-xs text-primary hidden-sm">
                        {{ $category->topicCounts }}
                    </td>
                    <td class="text-center text-primary hidden-xs hidden-sm">
                        {{ $category->postCounts }}
                    </td>


                    @if($category->lastPost !== null)

                        <td class="hidden-xs  hidden-sm">by <span >{{ $category->lastPost->user->name }}</span><br>
                            <small><i class="oi oi-star"></i>{{ $category->lastPost->created_at->diffForHumans() }}</small>
                        </td>


                    @else

                        <td class="hidden-xs  hidden-sm">by <span >No User</span><br>
                            <small><i class="oi oi-star"></i></small>
                        </td>


                    @endif

                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
    </div>
@endsection
