@extends('admin.master')
@section('title',__('keywords.services'))

@section('content')
<div class="container">
    <h1 class="text-center mb-5">Our Services</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="row">
        @foreach($services as $service)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow">
                    <div class="card-body text-center">
                        <!-- الأيقونة -->
                        <div class="icon mb-3">
                            <i class="{{ $service->icon }} fa-3x"></i>
                        </div>
                        <!-- العنوان -->
                        <h3 class="card-title">{{ $service->title }}</h3>
                        <!-- الوصف -->
                        <p class="card-text">{{ $service->description }}</p>
                    </div>
                    
                    <div class="card-footer bg-dark text-center">
                        <a href="{{ route('admin.services.edit', ['service'=>$service]) }}" class="btn btn-warning btn-sm">{{__('keywords.edit')}}</a>
                        <a href="{{ route('admin.services.show', ['service'=>$service]) }}" class="btn btn-primary btn-sm">{{__('keywords.show')}}</a>
                        <form action="{{ route('admin.services.destroy', ['service'=>$service])}}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this service?')">{{__('keywords.remove')}}</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="text-center mt-5">
        <a href="{{ route('admin.services.create') }}" class="btn btn-primary">{{__('keywords.add_new_service')}}</a>
    </div>
</div>
@endsection