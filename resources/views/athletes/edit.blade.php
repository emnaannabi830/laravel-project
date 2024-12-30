@extends('layouts.app')

@section('title', 'Edit Athlete')

@section('content')
    <h1>Edit Athlete</h1>
    <form action="{{ route('athletes.update', $athlete->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $athlete->name) }}" required>
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" name="age" id="age" class="form-control" value="{{ old('age', $athlete->age) }}" required>
        </div>
        <div class="mb-3">
            <label for="coach_id" class="form-label">Coach</label>
            <select name="coach_id" id="coach_id" class="form-control" required>
                @foreach ($coaches as $coach)
                    <option value="{{ $coach->id }}" {{ old('coach_id', $athlete->coach_id) == $coach->id ? 'selected' : '' }}>
                        {{ $coach->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('athletes.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
