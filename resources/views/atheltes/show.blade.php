@extends('layouts.app')

@section('title', 'Athlete Details')

@section('content')
    <h1>Athlete Details</h1>
    <ul>
        <li><strong>Name:</strong> {{ $athlete->name }}</li>
        <li><strong>Age:</strong> {{ $athlete->age }}</li>
        <li><strong>Coach:</strong> {{ $athlete->coach->name }}</li>
    </ul>
    <a href="{{ route('athletes.index') }}" class="btn btn-secondary">Back to List</a>
@endsection
