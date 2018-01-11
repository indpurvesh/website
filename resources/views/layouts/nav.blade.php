<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
        <a class="navbar-brand" href="{{ asset('/') }}">
            <img src="{{ asset('images/mage2-ecommerce-logo.png') }}"
                 style="max-height: 40px"
                 alt="Mage2 E commerce" title Mage2 E commerce />

        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="nav navbar-nav">


                @if(Auth::user()->email == "ind.purvesh@gmail.com")

                    <li class="nav-item "><a class="nav-link"
                                             title="Mage2 Issue Management"
                                             href="{{ route('issue.index') }}">Issues</a></li>


                @endif



                <li class="nav-item "><a class="nav-link"
                                         title="Demo Mage2 E commerce"
                                         href="http://demo.mage2.website">Demo</a></li>




                <li class="nav-item ">
                    <a class="nav-link"
                       title="Documantation Mage2 E commerce"
                       href="{{ route('docs.index') }}">Documentations</a></li>


                @if(Auth::user()!==null && Auth::user()->id == 1)
                    <li class="nav-item "><a class="nav-link" href="{{ route('category.index') }}">Category</a></li>
                @endif
                <li class="nav-item ">
                    <a class="nav-link"
                       title="Forum Mage2 E commerce"
                       href="{{ route('forum.index') }}">Forum</a>
                </li>
                @if (Auth::guest())
                    <li class="nav-item ">
                        <a class="nav-link"
                           title="Login Mage2 E commerce"
                           href="{{ route('login') }}">
                            Login
                        </a></li>
                    <li class="nav-item ">
                        <a class="nav-link" title="Register Mage2 E commerce" href="{{ route('register') }}">Register</a></li>
                @else
                    <li  class="dropdown">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" >
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li class="nav-item ">
                                <a class="nav-link"
                                   rel="nofollow"
                                   title="Logout Mage2 E commerce"
                                   href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>

        </div>

    </nav>
</div>