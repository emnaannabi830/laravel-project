@extends('layouts.app')

@section('title', 'Add Coach')

@section('content')
    <h1>Add Coach</h1>
    <form action="{{ route('coaches.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ route('coaches.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
