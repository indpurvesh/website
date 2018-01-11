@extends('layouts.app')

@section('title')
    {{ $issue->title }} Forum - Mage2 Laravel Ecommerce
@endsection

@section('content')
    <div class="container" style="margin-top: 35px">
        <div class="page-header page-heading">
            <h1 class="float-left">{{ $issue->title }}</h1>
            <div class="clearfix"></div>
        </div>
        <p class="small">
            {{ $issue->content }}
        </p>

    </div>
@endsection
