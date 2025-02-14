@extends('admin.master')

@section('content')
<div class="container">
    <h1>{{__('keywords.add_new_service')}}</h1>
    <form action="{{ route('admin.services.store') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="title">{{__('keywords.title')}}</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="{{__('keywords.title')}}" >
        </div>
        <div class="form-group mb-3">
            <label for="description">{{__('keywords.description')}}</label>
            <textarea name="description" id="description" class="form-control" placeholder="{{__('keywords.description')}}"></textarea>
        </div>
        <div class="form-group mb-3">
            <label for="icon">{{__('keywords.icon')}} (Font Awesome class)</label>
            <input type="text" name="icon" id="icon" class="form-control" placeholder="Example: fa fa-home" >
        </div>
        <button type="submit" class="btn btn-primary">{{__('keywords.add_new_service')}}</button>
        <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">{{__('keywords.cancel')}}</a>
    </form>
</div>
@endsection