@extends('layouts.app')

@section('title', 'Athletes List')

@section('content')
    <h1>Athletes</h1>
    <a href="{{ route('athletes.create') }}" class="btn btn-primary">Add Athlete</a>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Coach</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($athletes as $athlete)
                <tr>
                    <td>{{ $athlete->name }}</td>
                    <td>{{ $athlete->age }}</td>
                    <td>{{ $athlete->coach->name }}</td>
                    <td>
                        <a href="{{ route('athletes.edit', $athlete->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('athletes.destroy', $athlete->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
