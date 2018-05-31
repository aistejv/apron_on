<!-- Website Footer
=================== -->
<footer>
  <nav class="navbar navbar-expand-lg navbar-dark bg-color-purple">
  <div class="container">
    <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbar9">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="navbar9">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <form action="{{route('search')}}" method="GET">
                  @csrf
                <input type="text" name="search">
                <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
              </li>
              @guest
                  <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                  <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
              @else
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>
                          <a class="dropdown-item" href="{{route('all.categories')}}" class="btn btn-primary btn-sm">Categories</a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>
                  </li>
              @endguest

          </ul>
        </nav>

    </div>




</footer>
