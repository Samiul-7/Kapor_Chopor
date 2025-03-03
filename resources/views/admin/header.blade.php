<header class="header">   
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid d-flex align-items-center justify-content-between">
          <div class="navbar-header">
            <!-- Navbar Header-->
            <div class="brand-text brand-big visible text-uppercase"><strong>Admin</strong></div>
          </div>
            <!-- Log out-->
            <div class="list-inline-item logout">                   
                <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <input type="submit" value="Logout">
                        </form>
            </div>
          </div>
        </div>
      </nav>
    </header>