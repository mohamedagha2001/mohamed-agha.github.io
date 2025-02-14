@extends('admin.master')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title text-center">{{ $service->title }}</h3>
                </div>
                <div class="card-body text-center">
                    <!-- الأيقونة -->
                    <div class="icon mb-4">
                        <i class="{{ $service->icon }} fa-4x"></i>
                    </div>
                    <!-- الوصف -->
                    <p class="card-text">{{ $service->description }}</p>
                </div>
                <div class="card-footer bg-white">
                    <div class="d-flex justify-content-between">
                        <!-- زر العودة -->
                        <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">
                            <i class="fa fa-arrow-left"></i> Back to Services
                        </a>
                        <!-- زر التعديل -->
                        <a href="{{ route('admin.services.edit', $service->id) }}" class="btn btn-warning">
                            <i class="fa fa-edit"></i> {{__('keywords.edit')}}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection