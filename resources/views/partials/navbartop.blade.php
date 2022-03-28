<ul class="navbar-nav  ">
    <li class="nav-item" id="about">
      <a href="{{route('about')}}" class="nav-link waves-effect " id="text-about">
          {{ trans('global.about') }}  {{ trans('panel.site_title') }}
        </a>
    </li>
    <li class="nav-item" >
      <a href="{{route('promo')}}" id="promo" class="nav-link waves-effect ">
          {{ trans('global.promo') }}
        </a>
    </li>
</ul>
