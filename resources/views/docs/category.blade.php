@extends('layouts.app')

@section('title')
    Documantation - {{ config('app.page_title') }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('docs._sidebar')
            </div>
            <div class="col-md-9">

                <h1>Category Setup/Create</h1>
                <p>How to setup/create Category in Mage2 E commerce</p>
                <p>Step1: Logon to Admin Panel of Website</p>
                <p>Step1: From Navigation please click on catalog->category->click on create</p>
                <p>Just fill in details of the category and click save/create category.</p>

                <p>
                    <img src="{{ asset('images/create-category-mage2-laravel-ecommerce.JPG') }}"
                         class="img-thumbnail img-responsive" alt="Mage2 E commerce Create Category Snippet" />
                </p>
            </div>
        </div>
    </div>
    </div>
@endsection
