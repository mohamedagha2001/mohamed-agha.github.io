<section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Contact</h2>
      </div><!-- End Section Title -->

    <div class="container" data-aos="fade" data-aos-delay="100">

      <div class="row gy-4">

        <div class="col-lg-4">
          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <i class="bi bi-geo-alt flex-shrink-0"></i>
            <div>
              <h3>{{__('keywords.address')}}</h3>
              <p>{{$about->address}}</p>
            </div>
          </div><!-- End Info Item -->

          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <i class="bi bi-telephone flex-shrink-0"></i>
            <div>
              <h3>Call Us</h3>
              <p>{{$about->phone}}</p>
            </div>
          </div><!-- End Info Item -->

          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
            <i class="bi bi-envelope flex-shrink-0"></i>
            <div>
              <h3>Email Us</h3>
              <p><p>{{$about->email}}</p></p>
            </div>
          </div><!-- End Info Item -->

        </div>

        <div class="col-lg-8">
            <form action="{{ route('admin.contact.store') }}" method="POST">
                @csrf
                <div class="form-group m-3">
                  <label for="name">{{__('keywords.name')}}</label>
                  <input type="text" name="name" class="form-control"  >
                  @error('name')<div class="alert alert-danger mt-3">{{ $message }}</div>@enderror
                </div>
                <div class="form-group m-3">
                  <label for="email">{{__('keywords.email')}}</label>
                  <input type="email" name="email" class="form-control"  >
                  @error('email')<div class="alert alert-danger mt-3">{{ $message }}</div>@enderror

                </div>
                <div class="form-group m-3">
                  <label for="subject">{{__('keywords.subject')}}</label>
                  <input type="text" name="subject" class="form-control"  >
                  @error('subject')<div class="alert alert-danger mt-3">{{ $message }}</div>@enderror
                </div>
                <div class="form-group m-3">
                  <label for="message">{{__('keywords.message')}}</label>
                  <textarea name="message" class="form-control" rows="5"  ></textarea>
                  @error('message')<div class="alert alert-danger mt-3">{{ $message }}</div>@enderror
                </div>
                <button type="submit" class="btn btn-primary ">Send</button>
              </form>
              
              @if(session('success'))
                <div class="alert alert-success mt-3">
                  {{ session('success') }}
                </div>
              @endif
        </div><!-- End Contact Form -->

      </div>

    </div>

  </section>