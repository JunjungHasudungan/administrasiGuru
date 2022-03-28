<div class="row mb-2">
    <div class="col-sm-12">
      <!-- Navbar -->

<nav class="navbar navbar-expand-lg navbar-light bg-light" >
    <a class="navbar-brand" href="{{route('home')}}" id="title"> <strong> {{ trans('panel.site_title') }} </strong></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    {{-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> --}}
        <ul class="navbar-nav mr-2">
          {{-- <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form> --}}
          <li class="nav-item active "  id = "categories">
            <a class="nav-link" ><span>  {{ trans('global.category') }} </span></a>
          </li>
          <form class="form-inline ml-2 ">
            <div class="input-group input-group-md w-2" id="input-group">
              <input class="form-control form-control-navbar"  type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </form>
        <li class="nav-item" id="log-in">
          <a class="nav-link" href="{{route('login')}}">{{ trans('global.login') }}</a>
        </li>
      </ul>
    {{-- </div> --}}
  </nav>
      <!-- Navbar -->
    </div>
  </div>
