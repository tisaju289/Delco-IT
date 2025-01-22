@extends('admin-panel.layouts.master')

@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Add Fiverr Profile</h4>
                <h6><a href="{{ route('fiverr-profiles.index') }}">All Profiles /</a> Create New Profile</h6>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('fiverr-profiles.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <h3 class="text-center bg-warning text-black p-2">Personal Information</h3>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="profile_image">Profile Image</label>
                                <input type="file" name="profile_image" class="form-control">
                            </div>
                        </div>
                        @foreach(['first_name', 'last_name', 'date_of_birth', 'nid_or_passport', 'bank_account_number', 'branch_name', 'bank_name', 'address_line_1', 'address_line_2', 'city', 'postal_code', 'country', 'account_creation_date'] as $field)
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="{{ $field }}">{{ ucwords(str_replace('_', ' ', $field)) }}</label>
                                <input type="text" name="{{ $field }}" class="form-control" placeholder="Enter {{ ucwords(str_replace('_', ' ', $field)) }}">
                            </div>
                        </div>
                        @endforeach

                        <div class="col-lg-12 mb-3">
                            <h3 class="text-center bg-warning text-black p-2">Contact Information</h3>
                        </div>
                        @foreach(['profile_name', 'category', 'mobile_number', 'sim_owner', 'current_sim_holder', 'email_address', 'email_password', 'backup_email', 'backup_phone', 'email_2_address', 'email_2_password', 'backup_2_email', 'backup_2_phone', 'email_3_address', 'email_3_password', 'backup_3_email', 'backup_3_phone'] as $field)
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="{{ $field }}">{{ ucwords(str_replace('_', ' ', $field)) }}</label>
                                <input type="text" name="{{ $field }}" class="form-control" placeholder="Enter {{ ucwords(str_replace('_', ' ', $field)) }}">
                            </div>
                        </div>
                        @endforeach

                        <div class="col-lg-12 mb-3">
                            <h3 class="text-center bg-warning text-black p-2">Social Media Accounts</h3>
                        </div>
                        @foreach(['facebook', 'facebook_password', 'instagram_username', 'instagram_password', 'linkedin', 'linkedin_password', 'dribbble', 'dribbble_password', 'stackoverflow', 'stackoverflow_password', 'vimeo', 'vimeo_password', 'twitter', 'twitter_password', 'github_id', 'github_password', 'behance', 'behance_password'] as $field)
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="{{ $field }}">{{ ucwords(str_replace('_', ' ', $field)) }}</label>
                                <input type="text" name="{{ $field }}" class="form-control" placeholder="Enter {{ ucwords(str_replace('_', ' ', $field)) }}">
                            </div>
                        </div>
                        @endforeach
                        
                        <div class="col-lg-12 mb-3">
                            <h3 class="text-center bg-warning text-black p-2">Fiverr Account</h3>
                        </div>
                        @foreach(['fiverr_creation_date', 'fiverr_verify_status', 'fiverr_account_status', 'fiverr_account_category', 'fiverr_account_create_date', 'fiverr_account_disable_date', 'fiverr_mobile_number', 'fiverr_sim_owner', 'fiverr_current_sim_holder', 'fiverr_username', 'fiverr_email', 'fiverr_password', 'fiverr_security_question_1', 'fiverr_security_answer_1', 'fiverr_security_question_2', 'fiverr_old_email', 'fiverr_old_password', 'fiverr_old_number'] as $field)
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="{{ $field }}">{{ ucwords(str_replace('_', ' ', $field)) }}</label>
                                <input type="text" name="{{ $field }}" class="form-control" placeholder="Enter {{ ucwords(str_replace('_', ' ', $field)) }}">
                            </div>
                        </div>
                        @endforeach

                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-primary">Create Fiverr Profile</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
