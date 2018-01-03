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

                <h1>Orders view/update status in Mage2 E commerce</h1>
                <h6>Order View/update Status </h6>

                <p>How to view Orders in Mage2 E commerce</p>
                <p>Step1: Logon to Admin Panel of Website</p>
                <p>Step2: From Navigation please click on sales->orders->click view</p>

                <h3>Order update Status </h3>

                <p>How to view Orders in Mage2 E commerce</p>
                <p>Step1: Logon to Admin Panel of Website</p>
                <p>Step2: From Navigation please click on sales->orders->click view</p>
                <p>Step3: From Right side please select option->change status as shown in image below</p>
                <p>Step3: Select appropriate status and click save</p>

                <img src="{{ asset('images/orders-update-status-mage2-laravel-ecommerce.jpg') }}"
                     class="img img-responsive img-thumbnail"
                     alt="Mage2 Laravel E commerce Order Update Status" title="Mage2 Laravel E commerce Order Update Status" />

            </div>
        </div>
    </div>
    </div>
@endsection
