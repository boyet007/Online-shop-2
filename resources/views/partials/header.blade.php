<nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <a class="navbar-brand" href="#">Brand</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('product.shoppingCart') }}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Shopping Cart <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : ''  }}</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <i class="fa fa-user-o" aria-hidden="true"></i> User Management</a>
         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          @if(Auth::check())
              <a class="dropdown-item" href="{{ route('user.profile') }}">User Profile</a>
              <a class="dropdown-item" href="{{ route('user.logout')}}">Logout</a>
          @else
              <a class="dropdown-item" href="{{ route('user.signup') }}">Signup</a> 
              <a class="dropdown-item" href="{{ route('user.signin') }}">Signin</a>
          @endif          
        </div>
      </li>
    </ul>
  </div>
</nav>