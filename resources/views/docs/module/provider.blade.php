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

                <h1>Mage2 Laravel E commerce Module Service Provider</h1>
                
                <p>
                    Modules are the primary way of adding functionality to Mage2 E commerce App.
                </p>
                <p>
                    These modules may have routes, controllers, views, admin menus, permission, and configuration specifically
                    intended to enhance a Mage2 E commerce app.
                    This guide primarily covers the development of those modules that are Mage2 E commerce specific.
                </p>
                <h3># Directory Structure</h3>
                <img src="{{ asset('images/module-directory-structure-mage2-laravel-ecommerce.jpg') }}"
                     alt="Modules Directory Structure for Laravel E commerce"
                     title="Modules Directory Structure for Laravel E commerce" />

                <p>&nbsp;</p>
                <p>
                As you can see <span class="label-default label">Module.php</span> file is the Entry point for your modules. Which contains the code for registering your Route,
                views, migration, configs and etc. It does have two main method <span class="label-primary label">boot</span> and <span class="label-primary label">register</span>
                </p>


                <h3># Routes</h3>

                <p>
                    To register your modules's routes with Mage2 E commerce you need to tell application where the routes are located.
                    You may load the routes using the <span class="label-primary label">loadRoutesFrom</span> method.
                    The loadViewsFrom method accepts one arguments: the path to your routes file.
                    This method will automatically determine if the application's routes are cached and will not load your routes file
                    if the routes have already been cached:
                </p>
                <p>
                    <pre class="language-php">/**
 * Perform post-registration booting of services.
 *
 * @return void
 */
public function boot()
{
    $this->loadRoutesFrom(__DIR__.'/routes/web.php');
}</pre>

                </p>

                <h3># Views</h3>
                <p>
                    To register your modules's views with Mage2 E commerce you need to tell application where the views are located.
                    You may load the views using the <span class="label label-primary">loadViewsFrom</span> method.
                    The loadViewsFrom method accepts one arguments: the path to your view templates and your modules's namespace.
                    For example, if your module's namespace is <span class="label label-info">mage2-hello-world</span>,
                    you would add the following to your <span class="label label-default">Module.php</span> file <span class="label label-primary">boot</span> method:
                </p>

                <p>
                    <pre class="language-php">/**
 * Perform post-registration booting of services.
 *
 * @return void
 */
public function boot()
{
     $this->loadViewsFrom(__DIR__.'/views', 'mage2-hello-world');
}</pre>

                </p>


                <h3># Migration</h3>
                <p>
                    To register your modules's migration with Mage2 E commerce you need to tell application where the migration files are located.
                    You may load the migration using the <span class="label label-primary">loadMigrationsFrom</span> method.
                    The loadMigrationsFrom method accepts two arguments: the path to your migration files.
                </p>

                <p>
                    <pre class="language-php">/**
 * Perform post-registration booting of services.
 *
 * @return void
 */
public function boot()
{
     $this->loadMigrationsFrom(__DIR__.'/database');
}</pre>

                </p>

                <h3># Admin Menu</h3>
                <p>
                    To register your modules's admin menu with Mage2 E commerce you need to use the <span class="label label-primary">register</span> method.
                    You may use the AdminFacade to register it.
                </p>

                <p>
                    <pre class="language-php">use Mage2\Framework\AdminMenu\Facades\AdminMenu;
/*
 * Register bindings in the container.
 *
 * @return void
 */
public function register()
{
     // This menu will display under catalog dropdwon
     $adminUserMenu = ['catalog' => [
            'submenu' => [
                'hello-world' => [
                    'label' => 'Admin Hello World',
                    'route' => 'admin.hello-world.index',
                ]
            ]
        ]];
        AdminMenu::registerMenu('mage2-catalog', $adminUserMenu);
}</pre>

                </p>

            </div>
        </div>
    </div>
    </div>
@endsection
