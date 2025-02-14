@extends('admin.master')
@section('title', __('keywords.contacts'))

@section('content')
<div class="container">
    <h1 class="text-center mb-5">{{ __('keywords.contacts') }}</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="row">
        @if(count($contacts)>0)
        @foreach($contacts as $contact)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow">
                    <div class="card-body text-center">
                        <!-- اسم المرسل -->
                        <h3 class="card-title">{{ $contact->name }}</h3>
                        <!-- البريد الإلكتروني -->
                        <p class="card-text"><strong>{{ __('keywords.email') }}:</strong> {{ $contact->email }}</p>
                        <!-- الموضوع -->
                        <p class="card-text"><strong>{{ __('keywords.subject') }}:</strong> {{ $contact->subject }}</p>
                        <!-- الرسالة -->
                        <p class="card-text"><strong>{{ __('keywords.message') }}:</strong> {{ Str::limit($contact->message, 50) }}</p>
                    </div>
                    <div class="card-footer bg-dark text-center">
                        <a href="{{ route('admin.contact.show', ['contact' => $contact]) }}" class="btn btn-primary btn-sm">{{ __('keywords.show') }}</a>
                        <form action="{{ route('admin.contact.destroy', ['contact' => $contact]) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this contact?')">{{ __('keywords.remove') }}</button>
                        </form>
                        <p class="card-text text-white"><strong class="text-white">{{ __('keywords.created_at') }}:</strong> {{$contact->created_at}}</p>
                    </div>
                </div>
            </div>
        @endforeach
        @else
        <p>
            <strong colspan="100%">
                <div class="alert alert-danger">
                    <i class="fe fe-x-square"></i>
                    {{__('keywords.no_records-founds')}}</div>
            </strong>
        </p>
        @endif
    </div>
    {{$contacts->render('pagination::bootstrap-5')}}
</div>
@endsection