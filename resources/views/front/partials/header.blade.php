<header id="header" class="header d-flex flex-column justify-content-center">

    <i class="header-toggle d-xl-none bi bi-list"></i>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="#hero"  class="active"><i class="bi bi-house navicon"></i><span>{{__('keywords.home')}}</span></a></li>
        <li><a href="#about" ><i class="bi bi-person navicon"></i><span>{{__('keywords.about')}}</span></a></li>
        <li><a href="#services" ><i class="bi bi-hdd-stack navicon"></i><span>{{__('keywords.services')}}</span></a></li>
        <li><a href="#contact" ><i class="bi bi-envelope navicon"></i><span>{{__('keywords.contact')}}</span></a></li>
        @if (auth()->user())
        <li><a href="{{route('admin.index')}}"><i class="bi bi-columns-gap"></i><span>{{__('keywords.dashboard')}}</span></a></li>
        @endif
      </ul>
    </nav>

  </header>
