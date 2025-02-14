@extends('admin.master')
@section('title',__('keywords.edit'))
@section('content')


<div class="col-md-12">
    <div class="card shadow mb-4">
      <div class="card-header">
        <strong class="card-title">{{__('keywords.about_info')}}</strong>
      </div>
      <div class="card-body">
        <form  method="POST" action="{{ route('admin.about.update',['about'=>$about])}}" enctype="multipart/form-data" >
          @method('PUT')
          @csrf
          
          <div class="form-row">
            <div class="col-md-8 mb-3">
              <label for="email">{{__('keywords.email')}}</label>
              <input type="email" class="form-control" name="email" value="{{ old('email', $about->email) }}" >
              @error('email')<div class="alert alert-danger mt-3">{{ $message }}</div>@enderror
              <small class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="col-md-4 mb-3">
              <label for="name">{{__('keywords.name')}}</label>
              <input type="text" class="form-control" name="name" value="{{ old('name', $about->name) }}" >
              @error('name')<div class="alert alert-danger mt-3">{{ $message }}</div>@enderror
            </div>
          </div>
          
          <div class="form-row">
            <div class="col-md-6 mb-3">
              <label for="job_title">{{__('keywords.job_title')}}</label>
              <input type="text" class="form-control" name="job_title" value="{{ old('job_title', $about->job_title) }}" >
              @error('job_title')<div class="alert alert-danger mt-3">{{ $message }}</div>@enderror
            </div>
            <div class="col-md-6 mb-3">
              <label for="phone">{{__('keywords.phone')}}</label>
              <input type="tel" class="form-control" name="phone" value="{{ old('phone', $about->phone) }}" >
              @error('phone')<div class="alert alert-danger mt-3">{{ $message }}</div>@enderror
            </div>
          </div>
          
          <div class="form-row">
            <div class="col-md-6 mb-3">
              <label for="address">{{__('keywords.address')}}</label>
              <input type="text" class="form-control" name="address" value="{{ old('address', $about->address) }}" >
              @error('address')<div class="alert alert-danger mt-3">{{ $message }}</div>@enderror
            </div>
            <div class="col-md-3 mb-3">
              <label for="age">{{__('keywords.age')}}</label>
              <input type="number" class="form-control" name="age" value="{{ old('age', $about->age) }}" >
              @error('age')<div class="alert alert-danger mt-3">{{ $message }}</div>@enderror
            </div>
            <div class="col-md-3 mb-3">
              <label for="degree">{{__('keywords.degree')}}</label>
              <input type="text" class="form-control" name="degree" value="{{ old('degree', $about->degree) }}" >
              @error('degree')<div class="alert alert-danger mt-3">{{ $message }}</div>@enderror
            </div>
          </div>
          
          <div class="form-group mb-3">
            <label for="description">About Yourself</label>
            <textarea class="form-control" name="description" requied>{{ old('description', $about->description) }}</textarea>
            @error('description')<div class="alert alert-danger mt-3">{{ $message }}</div>@enderror
          </div>
          
          <div class="custom-file mb-3">
            <input type="file" class="custom-file-input" name="image">
            <label class="custom-file-label">Choose file...</label>
          </div>
          
          <button class="btn btn-primary" type="submit">{{__('keywords.submit')}}</button>
        </form>
      </div>
    </div>
  </div>
@endsection