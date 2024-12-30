@extends('layouts.app')

@section('title', 'Coaches List')

@section('content')
    <h1>Coaches</h1>
    <a href="{{ route('coaches.create') }}" class="btn btn-primary">Add Coach</a>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($coaches as $coach)
                <tr>
                    <td>{{ $coach->name }}</td>
                    <td>{{ $coach->email }}</td>
                    <td>
                        <a href="{{ route('coaches.show', $coach->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('coaches.edit', $coach->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('coaches.destroy', $coach->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $coaches->links('pagination::bootstrap-5') }}
    </div>
@endsection
