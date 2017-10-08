<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#">
      <img src="/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
      Bootstrap
    </a>
    <form class="form-inline my-2 my-lg-0">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-search"></i></span>
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      </div>
      <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
    </form>
    <ul class="navbar-nav mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa fa-home fa-lg"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{(Route::currentRouteName() == 'admin.master.about-us.index') ? 'active' : ''}}" href="{{route('admin.master.about-us.index')}}">About Us</a>
      </li>
    </ul>
    
  </div>
</nav>