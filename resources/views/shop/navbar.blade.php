<header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.html">
          <span>
            Kapor-Chopor
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  ">
            <li class="nav-item ">
            <a class="nav-link" href="{{url('/home')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/shop') }}">
                Category
              </a>
            </li>
           
            
          </ul>
          
          <div class="user_option">
            <!-- This ensures that after login user will not see the login and reg page -->
            @if (Route::has('login')) 
            @auth
              <form method="POST" action="{{ route('logout') }}" style="display: inline-block; margin-right: 10px;">
              @csrf
              <input type="submit" value="Logout" class="btn btn-outline-danger">
              </form>
              <a href="{{ route('profile.edit') }}" class="btn btn-primary">
                Profile
              </a>
            @else
                <a href="{{url('/login')}}">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <span>
                    Login
                  </span>
                </a>

                <a href="{{url('/register')}}">
                  <i class="fa fa-vcard" aria-hidden="true"></i>
                  <span>
                    Register
                  </span>
                </a>
            @endauth
            @endif
            <a class="nav-link" href="{{ url('/shop') }}">
            <i class="fa fa-search" aria-hidden="true"></i>
              search
            </a>
            <a href="">
              <i class="fa fa-shopping-bag" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </nav>
    </header>