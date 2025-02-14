@extends('admin.master')

@section('content')
<div class="container">
    <h1>Edit Skill</h1>
    <form action="{{ route('admin.skills.update', ['skill'=>$skill]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="name">Skill Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $skill->name }}" >
            @error('name')<div class="alert alert-danger mt-3">{{ $message }}</div>@enderror
          </div>
          <div class="form-group mb-3">
            <label for="proficiency">Skill Percentage (0-100)</label>
            <input type="number" name="proficiency" id="proficiency" class="form-control" value="{{ $skill->proficiency }}" min="0" max="100" >
            @error('proficiency')<div class="alert alert-danger mt-3">{{ $message }}</div>@enderror
        </div>
        <button type="submit" class="btn btn-primary">Update Skill</button>
        <a href="{{ route('admin.skills.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection