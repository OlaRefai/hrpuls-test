@extends('layouts.app')
@section('title', 'Employee Details')
@section('content')

    <div class="container mt-5">
        <div class="card mt-5">
            <h2 class="card-header">Employee Details</h2>
            <div class="card-body">
            
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a class="btn btn-primary btn-sm" href="{{ route('employees.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
                </div>
            
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <p><strong>Name:</strong> {{ $employee->name }}</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                        <div class="form-group">
                        <p><strong>Email:</strong> {{ $employee->email }}</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                        <div class="form-group">
                        <p><strong>Telephone:</strong> {{ $employee->telephone ?? 'N/A' }}</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                        <div class="form-group">
                        <p><strong>Address:</strong> {{ $employee->address ?? 'N/A' }}</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                        <div class="form-group">
                        <p><strong>Job Title:</strong> {{ $employee->jobtitle ?? 'N/A' }}</p>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </div>


@endsection
   
