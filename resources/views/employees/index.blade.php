@extends('layouts.app')
@section('title', 'Employee List')
@section('content')

<div class="container mt-5">
        <br>
        <a href="{{ route('employees.create') }}" class="btn btn-primary mb-3">Add New Employee</a>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Telephone</th>
                    <th>Job Title</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($employees as $employee)
                    <tr>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->telephone }}</td>
                        <td>{{ $employee->jobtitle }}</td>
                        <td>
                        <a href="{{ route('employees.show', $employee) }}" class="btn btn-info btn-sm">Show</a>   
                        <a href="{{ route('employees.edit', $employee) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('employees.destroy', $employee) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">There are no data.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        {{ $employees->links() }}
    </div>

@endsection