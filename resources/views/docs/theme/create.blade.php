@extends('layouts.app')

@section('title')
    Create Theme - {{ config('app.page_title') }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('docs._sidebar')
            </div>
            <div class="col-md-9">

                <h1>Create Theme - Mage2 E commerce</h1>

                <p>
                    Theme are the primary way of adding new view for the Mage2 E commerce front end.
                </p>
                <p>
                    These theme may have assets, css, js and views specifically
                    intended to enhance a Mage2 E commerce app designs.
                    This guide primarily covers the development of these themes that are Mage2 E commerce specific.
                </p>

            </div>
        </div>
    </div>
    </div>
@endsection
