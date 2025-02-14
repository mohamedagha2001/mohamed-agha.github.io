@extends('admin.master')
@section('content')
<div class="col-md-10 mx-auto mt-5">
  <div class="card shadow-lg border-0 rounded-lg">
      <div class="card-header bg-primary text-white text-center py-4">
          <h4 class="mb-0">{{__('keywords.about_info')}}</h4>
      </div>
      @if(session('success'))
      <div class="alert alert-success">
          {{ session('success') }}
      </div>
  @endif
      <div class="card-body p-4">
        
          <div class="row align-items-center">
             
              <div class="col-md-8">
                <ul class="list-group list-group-flush">
                      <li class="list-group-item"><strong>{{ __('keywords.description') }}:</strong> {{ $about->description }}</li>
                      <li class="list-group-item"><strong>{{ __('keywords.job_title') }}:</strong> {{ $about->job_title }}</li>
                      <li class="list-group-item"><strong>{{ __('keywords.email') }}:</strong> {{ $about->email }}</li>
                      <li class="list-group-item"><strong>{{ __('keywords.phone') }}:</strong> {{ $about->phone }}</li>
                      <li class="list-group-item"><strong>{{ __('keywords.address') }}:</strong> {{ $about->address }}</li>
                      <li class="list-group-item"><strong>{{ __('keywords.age') }}:</strong> {{ $about->age }}</li>
                      <li class="list-group-item"><strong>{{ __('keywords.degree') }}:</strong> {{ $about->degree }}</li>
                      <li class="list-group-item"><strong>{{ __('keywords.freelance') }}:</strong> {{ $about->freelance }}</li>
                  </ul>
              </div>
              
               <div class="col-md-4 text-center">
                <img src="{{ asset('storage/about/'.$about->image) }}" class="img-fluid rounded shadow" width="300" alt="Profile Image">
                <h4 class="mt-3 text-primary">{{ $about->name }}</h4>
                <p class="text-muted">{{ $about->job_title }}</p>
            </div>
            <div class="col-md-4 text-center">
                <p class="text-muted">{{__('keywords.hero_img')}}</p>
                <img src="{{ asset('storage/about/'.$about->hero_img) }}" class="img-fluid rounded shadow" width="400" alt="Profile Image">
            </div> 
          </div>
          
      </div>
      <div class="card-footer text-center">
          <a href="{{ route('admin.about.edit', ['about' => $about]) }}" class="btn btn-primary">
              <i class="fe fe-edit me-2"></i> {{__('keywords.edit')}}
          </a>
      </div>
  </div>
</div>

@endsection