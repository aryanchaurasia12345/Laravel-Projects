<?php
  use App\Http\Controllers\ProductController;
  $total=0;
  if(session()->has('login')){
    $total=ProductController::card_item();
  }
 
?>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{ url('/my_order') }}">Orders</a>
          </li>
        </ul>
        <form class="d-flex px-4">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success " type="submit">Search</button>
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item ">
              <a class="nav-link" href="{{ url('/card_list') }}">Card({{ $total }})</a>
            </li>           
            <li>
              <div class="dropdown px-4" >
                @if(session()->has('login'))
                  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ session('login') }}
                  </button>
                  <ul class="dropdown-menu dropdown-menu-white" aria-labelledby="dropdownMenuButton2">
                    <li><a class="dropdown-item" href="{{ url('/logout') }}">Logout</a></li>
                  </ul>
                @endif
              </div>
            </li>
        </ul>
      </form>
    </div>
  </div>
</nav>