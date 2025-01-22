@extends('admin-panel.layouts.master')

@section('content')

<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Update Kam</h4>
                <h6><a href="{{ route('kams.index')}}">All Kam /</a> Update Kam</h6>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="{{ route('kams.update', $kam->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <!-- Employee Information -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="employee_id">Employee ID</label>
                                <input type="text" name="employee_id" id="employee_id" class="form-control" value="{{ $kam->employee_id }}" required>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="employee_name">Employee Name</label>
                                <input type="text" name="employee_name" id="employee_name" class="form-control" value="{{ $kam->employee_name }}" required>
                            </div>
                        </div>

                        <!-- Dates -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="inc_date">Inc Date</label>
                                <input type="date" name="inc_date" id="inc_date" class="form-control" value="{{ $kam->inc_date }}" required>
                            </div>
                        </div>

                        <!-- Profile Name -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="profile_name">Profile Name</label>
                                <input type="text" name="profile_name" id="profile_name" class="form-control" value="{{ $kam->profile_name }}" required>
                            </div>
                        </div>

                        <!-- Financial Information -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="gross_sales">Gross Sales</label>
                                <input type="number" step="0.01" name="gross_sales" id="gross_sales" class="form-control" value="{{ $kam->gross_sales }}" required>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="deduction_percentage">Deduction Percentage</label>
                                <input type="number" step="0.01" name="deduction_percentage" id="deduction_percentage" class="form-control" value="{{ $kam->deduction_percentage }}" required>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="deduction_amount">Deduction Amount</label>
                                <input type="number" step="0.01" name="deduction_amount" id="deduction_amount" class="form-control" value="{{ $kam->deduction_amount }}" required>
                            </div>
                        </div>

                        <!-- Client and kam Details -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="client_name">Client's Name</label>
                                <input type="text" name="client_name" id="client_name" class="form-control" value="{{ $kam->client_name }}" required>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="kam_id">kam ID</label>
                                <input type="text" name="kam_id" id="kam_id" class="form-control" value="{{ $kam->kam_id }}" required>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="kam_page_url">kam Page URL</label>
                                <input type="url" name="kam_page_url" id="kam_page_url" class="form-control" value="{{ $kam->kam_page_url }}">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="kam_sheet_url">kam Sheet URL</label>
                                <input type="url" name="kam_sheet_url" id="kam_sheet_url" class="form-control" value="{{ $kam->kam_sheet_url }}">
                            </div>
                        </div>

                        <!-- Remarks -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="remarks">Remarks</label>
                                <textarea name="remarks" id="remarks" class="form-control" rows="3">{{ $kam->remarks }}</textarea>
                            </div>
                        </div>

                        <!-- Assigned Person -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="assigned_person">Assigned Person</label>
                                <input type="text" name="assigned_person" id="assigned_person" class="form-control" value="{{ $kam->assigned_person }}" required>
                            </div>
                        </div>

                        <!-- kam Status -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="kam_status">kam Status</label>
                                <input type="text" name="kam_status" id="kam_status" class="form-control" value="{{ $kam->kam_status }}" required>
                            </div>
                        </div>

                        <!-- Service Line -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="service_line">Service Line</label>
                                <input type="text" name="service_line" id="service_line" class="form-control" value="{{ $kam->service_line }}" required>
                            </div>
                        </div>

                        <!-- Delivered By -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="delivered_by">Delivered By</label>
                                <input type="text" name="delivered_by" id="delivered_by" class="form-control" value="{{ $kam->delivered_by }}">
                            </div>
                        </div>

                        <!-- Dates -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="fiverr_delivery_date">Fiverr Delivery Date</label>
                                <input type="date" name="fiverr_delivery_date" id="fiverr_delivery_date" class="form-control" value="{{ $kam->fiverr_delivery_date }}">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="actual_delivery_last_time">Actual Delivery Last Time</label>
                                <input type="datetime-local" name="actual_delivery_last_time" id="actual_delivery_last_time" class="form-control" value="{{ $kam->actual_delivery_last_time }}">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="deadline">Deadline</label>
                                <input type="date" name="deadline" id="deadline" class="form-control" value="{{ $kam->deadline }}">
                            </div>
                        </div>

                        <!-- Operation Department -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="op_department">Op. Department</label>
                                <input type="text" name="op_department" id="op_department" class="form-control" value="{{ $kam->op_department }}">
                            </div>
                        </div>

                        <!-- Platform Details -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="platform_source">Platform Source</label>
                                <input type="text" name="platform_source" id="platform_source" class="form-control" value="{{ $kam->platform_source }}">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="kam_source">kam Source</label>
                                <input type="text" name="kam_source" id="kam_source" class="form-control" value="{{ $kam->kam_source }}">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="platform_status">Platform Status</label>
                                <input type="text" name="platform_status" id="platform_status" class="form-control" value="{{ $kam->platform_status }}">
                            </div>
                        </div>

                        <!-- Client Feedback -->
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="client_feedback">Client Feedback</label>
                                <textarea name="client_feedback" id="client_feedback" class="form-control" rows="3">{{ $kam->client_feedback }}</textarea>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-primary">Update kam</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
