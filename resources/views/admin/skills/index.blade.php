@extends('admin.master')
@section('title',__('keywords.skills'))
 
@section('content')
<div class="container">
    <h1>Skills List</h1>
    <a href="{{ route('admin.skills.create') }}" class="btn btn-primary mb-3">Create New Skill</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Percentage</th>
                <th>Progress</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($skills as $skill)
                <tr>
                    <td>{{ $skill->name }}</td>
                    <td>{{ $skill->proficiency }}%</td>
                    <td>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: {{ $skill->proficiency }}%;" aria-valuenow="{{ $skill->proficiency }}" aria-valuemin="0" aria-valuemax="100">
                                {{ $skill->proficiency }}%
                            </div>
                        </div>
                    </td>
                    <td>
                        <a href="{{ route('admin.skills.edit', ['skill'=>$skill]) }}" class="btn btn-warning btn-sm">{{__('keywords.edit')}}</a>
                        <form action="{{ route('admin.skills.destroy', ['skill'=>$skill]) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this skill?')">{{__('keywords.remove')}}</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection