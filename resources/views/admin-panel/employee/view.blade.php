@extends('admin-panel.layouts.master')

@section('content')

<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Employee Details</h4>
                <h6><a href="{{ route('employees.index') }}">All Employees /</a> View Employee</h6>
            </div>
        </div>

        <div class="card" style="max-width: 800px; margin: auto; padding: 20px; border-radius: 15px; background-color: #f9f9f9; position: relative;">
            <!-- Background Shape -->
            <div style="position: absolute; top: 0; left: 50%; transform: translateX(-50%); width: 100%; height: 120px; background: linear-gradient(135deg, #1b2850, #1b2850); border-bottom-left-radius: 50%; border-bottom-right-radius: 50%;"></div>

            <div class="text-center" style="position: relative; z-index: 2;">
                <!-- Employee Image -->
                <div class="profile-image mb-3">
                    <img src="{{ asset('storage/' . $employee->image) }}" alt="Employee Image" style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover; border: 3px solid #f8cf36; margin-top: 40px;">
                </div>

                <!-- Employee Name and Position -->
                <h3 style="margin: 0; color: #333;">{{ $employee->name }}</h3>
                <p style="color: #888;">{{ $employee->position }}</p>
                {{-- <p style="color: #888;">{{ $employee->department }}</p> --}}

                <!-- Employee ID and Email -->
                {{-- <p style="color: #555;">Employee ID: {{ $employee->employee_id }}</p>
                <p style="color: #555;">Email: {{ $employee->email }}</p> --}}
            </div>

            <hr>

            <div class="details" style="padding: 10px 20px;">
                <h4 style="color: #f7fbf9; margin-bottom: 15px; background-color: #1b2850; padding: 10px; border-radius: 5px;">Personal Details</h4>
                <p><strong>Employee Id:</strong> {{ $employee->employee_id }}</p>
                <p><strong>Department:</strong> {{ $employee->department }}</p>
                <p><strong>Phone:</strong> {{ $employee->phone }}</p>
                <p><strong>Email:</strong> {{ $employee->email }}</p>
                <p><strong>Address:</strong> {{ $employee->address }}</p>
                <p><strong>City:</strong> {{ $employee->city }}</p>
                <p><strong>State:</strong> {{ $employee->state }}</p>
                <p><strong>Country:</strong> {{ $employee->country }}</p>
                <p><strong>ZIP Code:</strong> {{ $employee->zip }}</p>

                <h4 style="color: #f7fbf9; margin-bottom: 15px; background-color: #1b2850; padding: 10px; border-radius: 5px;">Job Details</h4>
                <p><strong>Start Date:</strong> {{ $employee->start_date }}</p>
                <p><strong>End Date:</strong> {{ $employee->end_date ?? 'N/A' }}</p>
                <p><strong>Salary:</strong> {{ $employee->salary }}</p>
            </div>

            <hr>

            <div class="bank-details" style="padding: 10px 20px;">
                <h4 style="color: #f7fbf9; margin-bottom: 15px; background-color: #1b2850; padding: 10px; border-radius: 5px;">Bank Details</h4>
                <p><strong>Bank Name:</strong> {{ $employee->bank_name }}</p>
                <p><strong>Account Number:</strong> {{ $employee->account_number }}</p>
                <p><strong>Account Name:</strong> {{ $employee->account_name }}</p>
                <p><strong>Branch Address:</strong> {{ $employee->branch_address }}</p>
                <p><strong>Branch Number:</strong> {{ $employee->branch_no }}</p>
                <p><strong>Routing Number:</strong> {{ $employee->routing_no }}</p>
                <p><strong>SWIFT Code:</strong> {{ $employee->swift_code }}</p>
                <p><strong>Mobile:</strong> {{ $employee->mobile }}</p>
                <p><strong>Bank Email:</strong> {{ $employee->bank_email }}</p>
            </div>

            <div class="text-center mt-4">
                <a href="{{ route('employees.index') }}" class="btn btn-primary" style="padding: 10px 20px; border-radius: 5px;">Back to All Employees</a>
            </div>
        </div>
    </div>
</div>

@endsection
