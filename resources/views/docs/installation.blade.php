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

                <h1>Documantation - Mage2 Laravel E commerce</h1>

                <p>Mage2 Laravel E commerce is an open source project for building an Top Class E-commerce.
                    It is built on one of the best PHP framework out in market which is Laravel itself. It has the
                    flexibility to build an complicated requirement.
                    Because of its elegant core system which is designed and build for all those requirement.
                </p>

                <article>

                    <p><a name="installation"></a></p>

                    <div class="h2">Installation</div>
                    <p><a name="server-requirements"></a></p>

                    <div class="h5">Server Requirements for </div>

                    <p>
                        Mage2 E commerce app has a few system requirements.
                        You will need to make sure your server meets the
                        following requirements:
                    </p>

                    <div class="content-list">
                        <ul>
                            <li>PHP &gt;= 7.0</li>
                            <li>OpenSSL PHP Extension</li>
                            <li>GD PHP Extension (Image Resize)</li>
                            <li>PDO PHP Extension</li>
                            <li>Mbstring PHP Extension</li>
                            <li>Tokenizer PHP Extension</li>
                            <li>XML PHP Extension</li>
                        </ul>
                    </div>
                    <div class="h4">
                        <a id="user-content-step-1-install-mage2-commerce-using-git" class="anchor"
                           href="#step-1-install-mage2-commerce-using-git" aria-hidden="true">
                        </a>Step 1: Install Mage2 E commerce using <a href="https://git-scm.com/">Git</a>
                    </div>
                    <p>Clone the repository using command:</p>
                    <pre class="bg-dark text-white p-3"><code>git clone https://github.com/mage2/laravel-ecommerce.git</code></pre>

                    <pre class="bg-dark text-white p-3">composer update</pre>
                    <p>Set up your environment config file:</p>

                    <pre class="bg-dark text-white p-3"><code>mage2/laravel-ecommerce/.env</code></pre>
                    <pre class="bg-dark text-white p-3">composer update</pre>
                    <p>Create Application Key using</p>
                    <pre class="bg-dark text-white p-3">php artisan key:generate</pre>

                    <div class="h4">
                        Step 1: Install Mage2 E commerce using <a
                                href="https://getcomposer.org/download/">Composer</a>
                    </div>
                    <p>Run composer to create the Mage2 e commerce application:</p>

                    <pre class="bg-dark text-white p-3"><code>composer create-project mage2/laravel-ecommerce --stability=dev</code></pre>

                    <p>Set up your environment config file:</p>
                    <pre class="bg-dark text-white p-3"><code>mage2/laravel-ecommerce/.env</code></pre>

                    <h3>Step 2: go to url</h3>
                    <pre class="bg-dark text-white p-3"><code>Yoursite.com/install</code></pre>

                    <p>That's it & follow the steps.</p>

                    <p>If you find any bug or problem please submit here
                        <a href="http://mage2.website/forum/">Mage2
                            Ecommerce Forum
                        </a>
                    </p>


                </article>
            </div>
        </div>
    </div>
    </div>
@endsection
