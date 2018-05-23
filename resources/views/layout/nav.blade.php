<nav class="navbar navbar-expand-lg navbar-dark bg-color-purple">
    <div class="container">
        <a href="/" class="navbar-brand">Apron On</a>
        <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbar9">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbar9">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Codeply</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                @if (Route::has('login'))
                        @auth
                          <li class="nav-item">
                            <a  class="nav-link" href="{{ url('/home') }}">Home</a>
                          </li>
                        @else
                          <li class="nav-item">
                            <a  class="nav-link" href="{{ route('login') }}">Login</a>
                          </li>
                          <li class="nav-item">
                            <a  class="nav-link" href="{{ route('register') }}">Register</a>
                          </li>
                        @endauth

                @endif

            </ul>
        </div>
    </div>
</nav>
