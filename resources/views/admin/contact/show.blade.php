@extends('admin.master')
@section('title', __('keywords.contacts'))
@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card h-100 shadow">
                <div class="card-body text-center">
                    <!-- اسم المرسل -->
                    <h3 class="card-title">{{ $contact->name }}</h3>
                    <!-- البريد الإلكتروني -->
                    <p class="card-text"><strong>{{ __('keywords.email') }}:</strong> {{ $contact->email }}</p>
                    <!-- الموضوع -->
                    <p class="card-text"><strong>{{ __('keywords.subject') }}:</strong> {{ $contact->subject }}</p>
                    <!-- الرسالة -->
                    <p class="card-text"><strong>{{ __('keywords.message') }}:</strong> {{ ($contact->message ) }}</p>
                </div>
                <div class="card-footer bg-dark text-center">
<form action="{{ route('admin.contact.destroy', ['contact' => $contact]) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this contact?')">{{ __('keywords.remove') }}</button>
                    </form>
                </div>
            </div>
        </div>
      
</div>
@endsection