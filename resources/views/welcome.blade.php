@extends('layouts.app')
@section('title', 'Welcome to HR Mannagement Tool')
@section('content')

<div class="hero">
    <div class="icon">
        <i class="fas fa-users"></i>
    </div>
    <h1>Welcome to HR Mannagement Tool</h1>
    <p>Your all-in-one solution for managing employee data efficiently and intuitively.</p>
    <a href="{{ route('employees.index') }}" class="btn btn-primary">Get Started</a>
</div>

@endsection