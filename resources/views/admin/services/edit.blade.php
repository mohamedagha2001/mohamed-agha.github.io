@extends('admin.master')

@section('content')
<div class="container">
    <h1>{{__('keywords.edit_service')}}</h1>
    <form action="{{ route('admin.services.update', ['service'=>$service]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="title">{{__('keywords.title')}}</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $service->title }}">
        </div>
        <div class="form-group mb-3">
            <label for="description">{{__('keywords.description')}}</label>
            <textarea name="description" id="description" class="form-control">{{ $service->description }}</textarea>
        </div>
        <div class="form-group mb-3">
            <label for="icon">{{__('keywords.icon')}} (Font Awesome class)</label>
            <input type="text" name="icon" id="icon" class="form-control" value="{{ $service->icon }}" >
        </div>
        <button type="submit" class="btn btn-primary">Update Service</button>
        <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">{{__('keywords.cancel')}}</a>
    </form>
</div>
@endsection