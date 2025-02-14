<section id="about" class="about section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>{{__('keywords.about')}}</h2></div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4 justify-content-center">
        <div class="col-lg-4">
          <img src="{{asset('storage/about/'.$about->image)}}" class="img-fluid rounded" alt="">
        </div>
        <div class="col-lg-8 content">
          <h2>PHP & Laravel Web Developer.</h2>
          <div class="row mt-3">
              <div class="col-lg-6">
                  <ul>
                      <li><i class="bi bi-chevron-right"></i> <strong>{{__('keywords.age')}} :</strong> <span>{{$about->age}}</span></li>
                      <li><i class="bi bi-chevron-right"></i> <strong>{{__('keywords.phone')}} :</strong> <span>{{$about->phone}}</span></li>
                      <li><i class="bi bi-chevron-right"></i> <strong>{{__('keywords.address')}} :</strong> <span>{{$about->address}}</span></li>
                      <li><i class="bi bi-chevron-right"></i> <strong>{{__('keywords.degree')}} :</strong> <span>{{$about->degree}}</span></li>
                      <li><i class="bi bi-chevron-right"></i> <strong>{{__('keywords.email')}} :</strong> <span>{{$about->email}}</span></li>
                      <li><i class="bi bi-chevron-right"></i> <strong>{{__('keywords.freelance')}} :</strong> <span>{{$about->freelance}}</span></li>
                    </ul>
                </div>
            </div>
            <strong class="fst-italic py-3 ">
              {{$about->description}}
            </strong>
        </div>
      </div>

    </div>

  </section>