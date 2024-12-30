@extends('layouts.app')

@section('title', 'Coach Details')

@section('content')
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4>Coach Details</h4>
        </div>
        <div class="card-body">
            <h5 class="card-title">Name: {{ $coach->name }}</h5>
            <p class="card-text">Email: {{ $coach->email }}</p>
        </div>
    </div>

    <div class="mt-4">
        <h4>Athletes Managed by {{ $coach->name }}</h4>
        @if ($coach->athletes->count() > 0)
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($coach->athletes as $athlete)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $athlete->name }}</td>
                            <td>{{ $athlete->age }}</td>
                            <td>
                                <a href="{{ route('athletes.show', $athlete->id) }}" class="btn btn-info btn-sm">View</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p class="text-muted">This coach has no athletes assigned.</p>
        @endif
    </div>

    <a href="{{ route('coaches.index') }}" class="btn btn-secondary mt-4">Back to Coaches</a>
@endsection
