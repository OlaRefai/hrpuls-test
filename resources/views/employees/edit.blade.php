@extends('layouts.app')
@section('title', 'Edit Employee')
@section('content')
    <div class="container mt-5">
        <h1>Edit Employee</h1>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-primary btn-sm" href="{{ route('employees.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
        </div>
        <form action="{{ route('employees.update', $employee->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $employee->name }}" required>
                @error('name')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $employee->email }}" required>
                @error('email')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="telephone" class="form-label">Telephone</label>
                <input type="text" class="form-control" id="telephone" name="telephone" value="{{ $employee->telephone }}">
                @error('telephone')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ $employee->address }}">
                @error('address')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="jobtitle" class="form-label">Job Title</label>
                <input type="text" class="form-control" id="jobtitle" name="jobtitle" value="{{ $employee->jobtitle }}">
                @error('jobtitle')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
@endsection
