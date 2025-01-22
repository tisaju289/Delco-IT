@extends('admin-panel.layouts.master')

@section('content')

<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Update Employee</h4>
                <h6><a href="{{ route('employees.index')}}">All Employee /</a> Update Employee</h6>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('employees.update', $employee->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <!-- Employee ID -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="employee_id">Employee ID</label>
                                <input type="text" name="employee_id" id="employee_id" class="form-control" value="{{ old('employee_id', $employee->employee_id) }}">
                            </div>
                        </div>

                        <!-- Name -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $employee->name) }}" required>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $employee->email) }}">
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone', $employee->phone) }}">
                            </div>
                        </div>

                        <!-- Image -->
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name="image" id="image" class="form-control" onchange="previewImage(event)">
                            </div>
                            <div class="mt-3 mb-3">
                                <img id="imagePreview" src="{{ $employee->image ? asset('storage/' . $employee->image) : '#' }}" alt="Selected Image" style="display: {{ $employee->image ? 'block' : 'none' }}; width: 150px; height: 150px; object-fit: cover; border: 1px solid #ddd; padding: 5px; border-radius: 5px;">
                            </div>
                        </div>

                        {{-- <div class="col-lg-12">
                            <div class="form-group">
                                <label for="image">Image</label>
                                <div class="image-upload">
                                    <input type="file" name="image" class="form-control-file" id="imageInput" accept="image/*">
                                    <div class="image-uploads mt-3">
                                        @if($employee->image)
                                            <img src="{{ asset('storage/' . $employee->image) }}" alt="Current Image" id="imagePreview" style="width: 50px; height: 50px; object-fit: cover; border: 1px solid #ddd;">
                                        @else
                                            
                                        <img src="/admin-panel/assets/img/icons/upload.svg" alt="Placeholder Image" id="imagePreview" style="width: 50px; height: 50px; object-fit: cover; border: 1px solid #ddd;">
                                     
                                        @endif
                                        <h4 class="mt-2">Drag and drop a file to upload</h4>
                                        
                                    </div>
                                </div>
                            </div>
                        </div> --}}


                        
                        <!-- Address -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" name="address" id="address" class="form-control" value="{{ old('address', $employee->address) }}">
                            </div>
                        </div>

                        <!-- City -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" name="city" id="city" class="form-control" value="{{ old('city', $employee->city) }}">
                            </div>
                        </div>

                        <!-- State -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="state">State</label>
                                <input type="text" name="state" id="state" class="form-control" value="{{ old('state', $employee->state) }}">
                            </div>
                        </div>

                        <!-- Country -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="country">Country</label>
                                <input type="text" name="country" id="country" class="form-control" value="{{ old('country', $employee->country) }}">
                            </div>
                        </div>

                        <!-- ZIP -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="zip">ZIP Code</label>
                                <input type="text" name="zip" id="zip" class="form-control" value="{{ old('zip', $employee->zip) }}">
                            </div>
                        </div>

                        <!-- Position -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="position">Position</label>
                                <input type="text" name="position" id="position" class="form-control" value="{{ old('position', $employee->position) }}">
                            </div>
                        </div>

                        <!-- Department -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="department">Department</label>
                                <input type="text" name="department" id="department" class="form-control" value="{{ old('department', $employee->department) }}">
                            </div>
                        </div>

                        <!-- Salary -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="salary">Salary</label>
                                <input type="number" name="salary" id="salary" class="form-control" value="{{ old('salary', $employee->salary) }}">
                            </div>
                        </div>

                        <!-- Start Date -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="start_date">Start Date</label>
                                <input type="date" name="start_date" id="start_date" class="form-control" value="{{ old('start_date', $employee->start_date) }}">
                            </div>
                        </div>

                        <!-- End Date -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="end_date">End Date</label>
                                <input type="date" name="end_date" id="end_date" class="form-control" value="{{ old('end_date', $employee->end_date) }}">
                            </div>
                        </div>

                        <div class="col-lg-12 mb-3">
                            <h3 class="text-center bg-warning text-black p-2">Bank Details</h3>
                        </div>

                        <!-- Bank Details -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="bank_name">Bank Name</label>
                                <input type="text" name="bank_name" id="bank_name" class="form-control" value="{{ old('bank_name', $employee->bank_name) }}">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="account_number">Account Number</label>
                                <input type="text" name="account_number" id="account_number" class="form-control" value="{{ old('account_number', $employee->account_number) }}">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="account_name">Account Name</label>
                                <input type="text" name="account_name" id="account_name" class="form-control" value="{{ old('account_name', $employee->account_name) }}">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="branch_address">Branch Address</label>
                                <input type="text" name="branch_address" id="branch_address" class="form-control" value="{{ old('branch_address', $employee->branch_address) }}">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="branch_no">Branch Number</label>
                                <input type="text" name="branch_no" id="branch_no" class="form-control" value="{{ old('branch_no', $employee->branch_no) }}">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="routing_no">Routing Number</label>
                                <input type="text" name="routing_no" id="routing_no" class="form-control" value="{{ old('routing_no', $employee->routing_no) }}">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="swift_code">SWIFT Code</label>
                                <input type="text" name="swift_code" id="swift_code" class="form-control" value="{{ old('swift_code', $employee->swift_code) }}">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="mobile">Mobile</label>
                                <input type="text" name="mobile" id="mobile" class="form-control" value="{{ old('mobile', $employee->mobile) }}">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="bank_email">Bank Email</label>
                                <input type="email" name="bank_email" id="bank_email" class="form-control" value="{{ old('bank_email', $employee->bank_email) }}">
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-primary">Update Employee</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function previewImage(event) {
        const imagePreview = document.getElementById('imagePreview');
        const file = event.target.files[0];

        if (file) {
            const reader = new FileReader();

            reader.onload = function(e) {
                imagePreview.src = e.target.result;
                imagePreview.style.display = 'block';
            };

            reader.readAsDataURL(file);
        } else {
            imagePreview.src = "#";
            imagePreview.style.display = 'none';
        }
    }




</script>

@endsection
