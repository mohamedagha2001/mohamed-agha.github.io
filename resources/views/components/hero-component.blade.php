<section id="hero" class="hero section light-background">
    @if ($about->hero_img)
    <img src="{{asset('/storage/about/'.$about->hero_img)}}"  alt="">
            @endif
    <div class="container" data-aos="zoom-out">
      <div class="row justify-content-center">
        <div class="col-lg-9">
          <h2>{{$about->name}}</h2>
          <p>{{__('keywords.iam')}} <span class="typed" data-typed-items="{{$about->job_title}}">{{$about->job_title }}</span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
          <div class="social-links">
            @if ($about->x)
            <a href="{{$about->x}}"  target="_blank"><i class="bi bi-twitter-x"></i></a>
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
        </div>
      </div>
    </div>

  </section>