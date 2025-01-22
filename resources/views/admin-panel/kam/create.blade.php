@extends('admin-panel.layouts.master')

@section('content')

<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Add Kam</h4>
                <h6><a href="{{ route('kams.index')}}">All Kam /</a> Create new Kam</h6>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('kams.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <!-- Employee Information -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="employee_id">Employee ID</label>
                                <select name="employee_id" id="employee_id" class="form-control" required>
                                    <option value="">Select Employee ID</option>
                                    @foreach ($employees as $employee)
                                        <option value="{{ $employee->employee_id }}">{{ $employee->employee_id }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="employee_name">Employee Name</label>
                                <input type="text" name="employee_name" id="employee_name" class="form-control" readonly>
                            </div>
                        </div>

                        <!-- Dates -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="inc_date">Inc Date</label>
                                <input type="date" name="inc_date" id="inc_date" class="form-control" required>
                            </div>
                        </div>

                        <!-- Profile Name -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="profile_name">Profile Name</label>
                                <select name="profile_name" id="profile_name" class="form-control" required>
                                    <option value="">Select Profile Name</option>
                                    @foreach ($fiverrProfiles as $fiverrProfile)
                                        <option value="{{ $fiverrProfile->profile_name }}">{{ $fiverrProfile->profile_name }}</option>
                                    @endforeach
                                </select>                            </div>
                        </div>

                        <!-- Financial Information -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="gross_sales">Gross Sales</label>
                                <input type="number" step="0.01" name="gross_sales" id="gross_sales" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="deduction_percentage">Deduction Percentage</label>
                                <input type="number" step="0.01" name="deduction_percentage" id="deduction_percentage" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="deduction_amount">Deduction Amount</label>
                                <input type="number" step="0.01" name="deduction_amount" id="deduction_amount" class="form-control" required>
                            </div>
                        </div>

                        <!-- Client and Order Details -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="client_name">Client's Name</label>
                                <input type="text" name="client_name" id="client_name" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="order_id">Order ID</label>
                                <input type="text" name="order_id" id="order_id" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="order_page_url">Order Page URL</label>
                                <input type="url" name="order_page_url" id="order_page_url" class="form-control">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="order_sheet_url">Order Sheet URL</label>
                                <input type="url" name="order_sheet_url" id="order_sheet_url" class="form-control">
                            </div>
                        </div>

                     

                        <!-- Assigned Person -->
                    
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="assigned_person">Assigned Person</label>
                                <select id="assigned_person" name="assigned_person" id="assigned_person" class="form-control" >
                                   
                                        <option value="">Select</option>
                                        @foreach ($employees as $employee)
                                            <option value="{{ $employee->name }}">{{ $employee->name }}</option>
                                        @endforeach
                                   
                                </select>
                            </div>
                        </div>
                        <!-- Order Status -->
            
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="order_status">Order Status</label>
                                <select id="order_status" name="order_status" id="order_status" class="form-control" >
                                    <option value="">select</option>
                                    <option value="NRA">NRA</option>
                                    <option value="WIP">WIP</option>
                                    <option value="Delivered">Delivered</option>
                                    <option value="Revision">Revision</option>
                                    <option value="Issus">Issus</option>
                                    <option value="Cancelled">Cancelled</option>
                                    <option value="C_Forword">C_Forword</option>
                                   
                                </select>
                            </div>
                        </div>




                        <!-- Service Line -->
                      
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="service_line">Service Line</label>
                                <select id="service_line" name="service_line" id="service_line" class="form-control" >
                                    <option value="">select</option>
                                    <option value="SMD">SMD</option>
                                    <option value="SMM">SMM</option>
                                    <option value="Upwork">Upwork</option>
                                </select>
                            </div>
                        </div>
                        <!-- Delivered By -->
                 
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="delivered_by">Delivered By</label>
                                <select id="delivered_by" name="delivered_by" id="delivered_by" class="form-control" >
                                    <option value="">select</option>
                                    <option value="SMD Team">SMD Team</option>
                                    <option value="SMM Team">SMM Team</option>
                                    <option value="Upwork Team">Upwork Team</option>
                                </select>
                            </div>
                        </div>
                        <!-- Dates -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="fiverr_delivery_date">Fiverr Delivery Date</label>
                                <input type="date" name="fiverr_delivery_date" id="fiverr_delivery_date" class="form-control">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="actual_delivery_last_time">Actual Delivery Last Time</label>
                                <input type="datetime-local" name="actual_delivery_last_time" id="actual_delivery_last_time" class="form-control">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="deadline">Deadline</label>
                                <input type="date" name="deadline" id="deadline" class="form-control">
                            </div>
                        </div>

                        <!-- Operation Department -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="op_department">Op. Department</label>
                                <input type="text" name="op_department" id="op_department" class="form-control">
                            </div>
                        </div>

                        <!-- Platform Details -->
                   

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="platform_source">Platform Source</label>
                                <select id="platform_source" name="platform_source" id="platform_source" class="form-control" >
                                    <option value="">select</option>
                                    <option value="B2B">B2B</option>
                                    <option value="Fiverr">Fiverr</option>
                                    <option value="Upwork">Upwork</option>
                                    <option value="Special Order">Special Order</option>
                                </select>
                            </div>
                        </div>


                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="order_source">Order Source</label>
                                <select id="order_source" name="order_source" class="form-control">
                                    <option value="">select</option>
                                    <option value="B2B Direct Order">B2B Direct Order</option>
                                    <option value="Bid/Proposal Order">Bid/Proposal Order</option>
                                    <option value="Brief/Invitation">Brief/Invitation</option>
                                    <option value="Conversion/Query">Conversion/Query</option>
                                    <option value="Fixed Client">Fixed Client</option>
                                    <option value="Repeat Order">Repeat Order</option>
                                    <option value="Tips">Tips</option>
                                    <option value="Project Based">Project Based</option>
                                    <option value="Special_Order">Special Order</option>
                                    <option value="C_Forward_Sales">C Forward Sales</option>
                                </select>
                            </div>
                        </div>                        

                       

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="platform_status">Platform Status</label>
                                <input type="text" name="platform_status" id="platform_status" class="form-control">
                            </div>
                        </div>
                           <!-- Remarks -->
                           <div class="col-lg-12">
                            <div class="form-group">
                                <label for="remarks">Remarks</label>
                                <textarea name="remarks" id="remarks" class="form-control" rows="3"></textarea>
                            </div>
                        </div>

                        <!-- Client Feedback -->
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="client_feedback">Client Feedback</label>
                                <textarea name="client_feedback" id="client_feedback" class="form-control" rows="3"></textarea>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-primary">Create Order</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




<script>

document.getElementById('employee_id').addEventListener('change', function () {
    let employeeId = this.value;
    if (employeeId) {
        fetch(`/get-employee/${employeeId}`)
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    document.getElementById('employee_name').value = data.data.name;
                } else {
                    document.getElementById('employee_name').value = '';
                    alert(data.message);
                }
            })
            .catch(error => {
                console.error('Error fetching employee data:', error);
                alert('Something went wrong. Please try again.');
            });
    } else {
        document.getElementById('employee_name').value = '';
    }
});

</script>


@endsection