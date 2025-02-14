@extends('admin.master')

@section('title',__('keywords.create'))
@section('content')
<div class="container">
    <h1>Create New Skill</h1>
    <form action="{{ route('admin.skills.store') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="name">Skill Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Enter skill name" >
            @error('name')<div class="alert alert-danger mt-3">{{ $message }}</div>@enderror
        </div>
        <div class="form-group mb-3">
            <label for="proficiency">Skill Percentage (0-100)</label>
            <input type="number" name="proficiency" id="proficiency" class="form-control" placeholder="Enter percentage (0-100)" min="0" max="100" >
            @error('proficiency')<div class="alert alert-danger mt-3">{{ $message }}</div>@enderror
        </div>
        <button type="submit" class="btn btn-primary">Create Skill</button>
        <a href="{{ route('admin.skills.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection