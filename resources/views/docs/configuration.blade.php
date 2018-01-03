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

                <h1>Configuration Mage2 Laravel E commerce</h1>

                <p>Basic info about store (general), taxclass,, address ,catalog and paypal configuration for the
                    Mage2 Laravel E ecommerce.
                </p>

                <article>

                    <p><a name="configuration"></a></p>
                    <h2><a href="#configuration">Configuration</a></h2>


                    <div  id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="card ">
                            <div class="card-header"  role="tab" id="headingOne">
                                <h4 class="card-title">
                                    <a role="button" data-toggle="collapse"
                                       data-parent="#accordion" href="#general-configuration" aria-expanded="true" aria-controls="collapseOne">
                                        General Configuration
                                    </a>
                                </h4>
                            </div>
                            <div id="general-configuration" class="show collapse"
                                 role="tabcard" aria-labelledby="headingOne">
                                <div class="card-body">
                                    <p>If you like to change the Site Default page title, page description Please you can set into general Configuration.</p>
                                    <p>Please Create and Select the Term & Condition Page for the Checkout here too.</p>
                                    <p>

                                        <img src="{{ asset('images/general-configuration-mage2-laravel-ecommerce.jpg') }}"
                                             class="img img-responsive img-thumbnail"
                                             alt="Mage2 Laravel E commerce General Configuration" title="Mage2 Laravel E commerce General Configuration" />
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card ">
                            <div class="card-header" role="tab" id="headingTwo">
                                <h4 class="card-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#catalog-configuration" aria-expanded="false" aria-controls="collapseTwo">
                                        Catalog Configuration
                                    </a>
                                </h4>
                            </div>
                            <div id="catalog-configuration" class="card-collapse collapse" role="tabcard" aria-labelledby="headingTwo">
                                <div class="card-body">
                                    <p>In Catalog Configuration you can set the no of products to display on category page.</p>
                                    <p>Please Select If you like to display a tax on Cart Page or not?</p>
                                    <p>
                                        <img src="{{ asset('images/catalog-configuration-mage2-laravel-ecommerce.jpg') }}"
                                             class="img img-responsive img-thumbnail"
                                             alt="Mage2 Laravel E commerce General Configuration" title="Mage2 Laravel E commerce General Configuration" />
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card ">
                            <div class="card-header" role="tab" id="headingThree">
                                <h4 class="card-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#tax-configuration" aria-expanded="false" aria-controls="collapseThree">
                                        Tax Configuration
                                    </a>
                                </h4>
                            </div>
                            <div id="tax-configuration" class="card-collapse collapse" role="tabcard" aria-labelledby="headingThree">
                                <div class="card-body">
                                    <div class="card-body">
                                        <p>Please Select the default country for the tax calculation.</p>
                                        <p>

                                            <img src="{{ asset('images/taxclass-configuration-mage2-laravel-ecommerce.jpg') }}"
                                                 class="img img-responsive img-thumbnail"
                                                 alt="Mage2 Laravel E commerce General Configuration" title="Mage2 Laravel E commerce General Configuration" />
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card ">
                            <div class="card-header" role="tab" id="headingThree">
                                <h4 class="card-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#paypal-configuration" aria-expanded="false" aria-controls="collapseThree">
                                        Paypal Configuration
                                    </a>
                                </h4>
                            </div>
                            <div id="paypal-configuration" class="card-collapse collapse" role="tabcard" aria-labelledby="headingThree">
                                <div class="card-body">
                                    <div class="card-body">
                                        <p>Would you like to use Paypal as an Payment Option?</p>
                                        <p>Please get your client ID from Paypal website and put it here</p>
                                        <p>Please get your client SECRET from Paypal website and put it here</p>
                                        <p>Paypal Payment mode Sandbox (Testing) or Live</p>
                                        <p>Paypal Payment URL</p>
                                        <p>Would you like to Enable Payment Log?</p>
                                        <p>

                                            <img src="{{ asset('images/paypal-configuration-mage2-laravel-ecommerce.jpg') }}"
                                                 class="img img-responsive img-thumbnail"
                                                 alt="Mage2 Laravel E commerce General Configuration" title="Mage2 Laravel E commerce General Configuration" />
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card ">
                            <div class="card-header" role="tab" id="headingThree">
                                <h4 class="card-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#address-configuration" aria-expanded="false" aria-controls="collapseThree">
                                        Address Configuration
                                    </a>
                                </h4>
                            </div>
                            <div id="address-configuration" class="card-collapse collapse" role="tabcard" aria-labelledby="headingThree">
                                <div class="card-body">
                                    <p>Please Select Default Country for Customer Address</p>
                                    <p>

                                        <img src="{{ asset('images/address-configuration-mage2-laravel-ecommerce.jpg') }}"
                                             class="img img-responsive img-thumbnail"
                                             alt="Mage2 Laravel E commerce General Configuration" title="Mage2 Laravel E commerce General Configuration" />
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>



                </article>
            </div>
        </div>
    </div>
    </div>
@endsection
