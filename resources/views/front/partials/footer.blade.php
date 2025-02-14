@php
       $about = \App\Models\About::find(1);
@endphp
<footer id="footer" class="footer position-relative light-background">
    <div class="container">
      <h3 class="sitename">{{$about->name}}</h3>
      <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
      <div class="social-links d-flex justify-content-center">
        @if ($about->x)
        <a href="{{$about->x}}" target="_blank"><i class="bi bi-twitter-x"></i></a>
        @endif
        @if ($about->facebook)
        <a href="{{$about->facebook}}" target="_blank"><i class="bi bi-facebook"></i></a>
        @endif
        @if ($about->instagram)
        <a href="{{$about->instagram}}" target="_blank"><i class="bi bi-instagram"></i></a>
        @endif
        @if ($about->linkedin)
        <a href="{{$about->linkedin}}" target="_blank"><i class="bi bi-linkedin"></i></a>
        @endif
      </div>
      <div class="container">
        <div class="copyright">
          <span>Copyright ©</span> <strong class="px-1 sitename">2025</strong> <span>All Rights Reserved | Mohamed Agha</span>
        </div>
      </div>
    </div>
  </footer>