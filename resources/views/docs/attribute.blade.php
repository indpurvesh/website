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

                <h1>Attribute Setup/Create</h1>
                <pre>
                    Upgrade comming soon
                </pre>
                <p>How to setup/create Attribute in Mage2 E commerce</p>
                <p>Step1: Logon to Admin Panel of Website</p>
                <p>Step1: From Navigation please click on catalog->attribute->click on create</p>
                <p>Just fill in details of the attribute and click save/create attribute.</p>

                <p>
                    <img src="{{ asset('images/create-attribute-mage2-laravel-ecommerce.JPG') }}"
                         class="img-thumbnail img-responsive" alt="Mage2 E commerce Create Attribute  Snippet" />
                </p>
            </div>
        </div>
    </div>
    </div>
@endsection
