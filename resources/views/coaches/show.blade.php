@extends('layouts.app')

@section('title', 'Coach Details')

@section('content')
    <h1>Coach Details</h1>
    <ul>
        <li><strong>Name:</strong> {{ $coach->name }}</li>
        <li><strong>Email:</strong> {{ $coach->email }}</li>
    </ul>
    <h2>Athletes</h2>
    @if ($coach->athletes->count() > 0)
        <ul>
            @foreach ($coach->athletes as $athlete)
                <li>{{ $athlete->name }} (Age: {{ $athlete->age }})</li>
            @endforeach
        </ul>
    @else
        <p>No athletes assigned to this coach.</p>
    @endif
    <a href="{{ route('coaches.index') }}" class="btn btn-secondary">Back to List</a>
@endsection
