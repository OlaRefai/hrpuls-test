@extends('layouts.app')
@section('title', 'Schedule Changes')

@section('content')
    <div class="container mt-5">
        <h1>Schedule Changes for {{ $employee->name }}</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('employees.storeSchedule', $employee) }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>Original Values</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="original_name">Name</label>
                                <input type="text" id="original_name" class="form-control" value="{{ $employee->name }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="original_email">Email</label>
                                <input type="email" id="original_email" class="form-control" value="{{ $employee->email }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="original_telephone">Telephone</label>
                                <input type="text" id="original_telephone" class="form-control" value="{{ $employee->telephone }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="original_address">Address</label>
                                <input type="text" id="original_address" class="form-control" value="{{ $employee->address }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="original_jobtitle">Job Title</label>
                                <input type="text" id="original_jobtitle" class="form-control" value="{{ $employee->jobtitle }}" readonly>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>New Values</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="new_name">Name</label>
                                <input type="text" name="name" id="new_name" class="form-control" placeholder="Enter new name">
                            </div>
                            <div class="form-group">
                                <label for="new_email">Email</label>
                                <input type="email" name="email" id="new_email" class="form-control" placeholder="Enter new email">
                            </div>
                            <div class="form-group">
                                <label for="new_telephone">Telephone</label>
                                <input type="text" name="telephone" id="new_telephone" class="form-control" placeholder="Enter new telephone">
                            </div>
                            <div class="form-group">
                                <label for="new_address">Address</label>
                                <input type="text" name="address" id="new_address" class="form-control" placeholder="Enter new address">
                            </div>
                            <div class="form-group">
                                <label for="new_jobtitle">Job Title</label>
                                <input type="text" name="jobtitle" id="new_jobtitle" class="form-control" placeholder="Enter new job title">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group mt-3">
                <label for="change_date">Change Date</label>
                <input type="date" name="change_date" id="change_date" class="form-control" required min="{{ now()->addDay()->format('Y-m-d') }}">
            </div>

            <button type="submit" id="scheduleButton" class="btn btn-primary mb-3" disabled>Schedule Change</button>
        </form>
    </div>

<!-- JavaScript to Enable/Disable Schedule Change Button -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.querySelector('form');
        const inputs = form.querySelectorAll('input[name="name"], input[name="email"], input[name="telephone"], input[name="address"], input[name="jobtitle"]');
        const scheduleButton = document.getElementById('scheduleButton');

        function checkInputs() {
            let hasValue = false;
            inputs.forEach(input => {
                if (input.value.trim() !== '') {
                    hasValue = true;
                }
            });
            scheduleButton.disabled = !hasValue;
        }

        inputs.forEach(input => {
            input.addEventListener('input', checkInputs);
        });
    });
</script>
@endsection