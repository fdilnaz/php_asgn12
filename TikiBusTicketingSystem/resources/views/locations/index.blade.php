@extends('layouts.app')

@section('content')
    <h1>Locations</h1>

    <a href="{{ route('locations.create') }}" class="btn btn-success">Create Location</a>

    @if ($locations->isEmpty())
        <p>No locations found.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($locations as $location)
                    <tr>
                        <td>{{ $location->id }}</td>
                        <td>{{ $location->name }}</td>
                        <td>
                            <a href="{{ route('locations.show', $location->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('locations.edit', $location->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('locations.destroy', $location->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
