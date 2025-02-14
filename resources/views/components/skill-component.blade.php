@if (count($skills)> 0 )
<section id="skills" class="skills section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>{{__('keywords.skills')}}</h2>
      <p>{{__('keywords.about_me')}}</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row skills-content skills-animation">

        <div class="row">

         @foreach ($skills as $skill)
             
         <div class="progress  col-md-6">
             <span class="skill"><span>{{$skill->name}}</span> <i class="val">{{$skill->proficiency}}%</i></span>
             <div class="progress-bar-wrap">
                 <div class="progress-bar" role="progressbar" aria-valuenow="{{$skill->proficiency}}" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div><!-- End Skills Item -->
            
            @endforeach
        </div>

     

      </div>

    </div>

  </section>
@endif