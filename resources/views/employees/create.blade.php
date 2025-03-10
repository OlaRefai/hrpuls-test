@extends('layouts.app')
@section('title', 'Add Employee')
@section('content')
    <div class="container mt-5">
        <h1>Add New Employee</h1>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-primary btn-sm" href="{{ route('employees.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
        </div>
        <form action="{{ route('employees.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
                @error('name')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
                @error('email')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="telephone" class="form-label">Telephone</label>
                <input type="text" class="form-control" id="telephone" name="telephone">
                @error('telephone')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address">
                @error('address')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="jobtitle" class="form-label">Job Title</label>
                <input type="text" class="form-control" id="jobtitle" name="jobtitle">
                @error('jobtitle')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
