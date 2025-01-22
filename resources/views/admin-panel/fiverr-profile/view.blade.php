@extends('admin-panel.layouts.master')

@section('content')

<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Fiverr Profile Details</h4>
                <h6><a href="{{ route('fiverr-profiles.index') }}">All Profiles /</a> View Profile</h6>
            </div>
        </div>

        <div class="card" style="max-width: 800px; margin: auto; padding: 20px; border-radius: 15px; background-color: #ffffff; position: relative; box-shadow: 0px 0px 10px rgba(0,0,0,0.1);">
            <!-- Background Shape -->
            <div style="position: absolute; top: 0; left: 50%; transform: translateX(-50%); width: 100%; height: 120px; background: linear-gradient(135deg, #343a40, #6c757d); border-bottom-left-radius: 50%; border-bottom-right-radius: 50%;"></div>

            <div class="text-center" style="position: relative; z-index: 2;">
                <!-- Profile Image -->
                <div class="profile-image mb-3">
                    <img src="{{ asset('storage/' . $fiverrProfile->profile_image) }}" alt="Profile Image" style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover; border: 3px solid #ffc107; margin-top: 40px;">
                </div>
            </div>

            <hr>

            <div class="details" style="padding: 10px 20px;">
                <h4 class="section-title text-white bg-primary p-2 rounded">Personal Information</h4>
                @foreach(['first_name', 'last_name', 'date_of_birth', 'nid_or_passport', 'bank_account_number', 'branch_name', 'bank_name', 'address_line_1', 'address_line_2', 'city', 'postal_code', 'country', 'account_creation_date'] as $field)
                    <p><strong>{{ ucwords(str_replace('_', ' ', $field)) }}:</strong> {{ $fiverrProfile->$field ?? 'N/A' }}</p>
                @endforeach

                <h4 class="section-title text-white bg-success p-2 rounded">Common Information</h4>
                @foreach(['profile_name', 'profile_image', 'category', 'mobile_number', 'sim_owner', 'current_sim_holder'] as $field)
                    <p><strong>{{ ucwords(str_replace('_', ' ', $field)) }}:</strong> {{ $fiverrProfile->$field ?? 'N/A' }}</p>
                @endforeach

                <h4 class="section-title text-white bg-info p-2 rounded">Email Information</h4>
                @foreach(['email_address', 'email_password', 'backup_email', 'backup_phone', 'email_2_address', 'email_2_password', 'backup_2_email', 'backup_2_phone', 'email_3_address', 'email_3_password', 'backup_3_email', 'backup_3_phone'] as $field)
                    <p><strong>{{ ucwords(str_replace('_', ' ', $field)) }}:</strong> {{ $fiverrProfile->$field ?? 'N/A' }}</p>
                @endforeach

                <h4 class="section-title text-white bg-danger p-2 rounded">Fiverr Information</h4>
                @foreach(['fiverr_creation_date', 'fiverr_verify_status', 'fiverr_account_status', 'fiverr_account_category', 'fiverr_account_create_date', 'fiverr_account_disable_date', 'fiverr_mobile_number', 'fiverr_sim_owner', 'fiverr_current_sim_holder', 'fiverr_username', 'fiverr_email', 'fiverr_password', 'fiverr_security_question_1', 'fiverr_security_answer_1', 'fiverr_security_question_2', 'fiverr_old_email', 'fiverr_old_password', 'fiverr_old_number'] as $field)
                    <p><strong>{{ ucwords(str_replace('_', ' ', $field)) }}:</strong> {{ $fiverrProfile->$field ?? 'N/A' }}</p>
                @endforeach
            </div>

            <div class="text-center mt-4">
                <a href="{{ route('fiverr-profiles.index') }}" class="btn btn-primary" style="padding: 10px 20px; border-radius: 5px;">Back to All Profiles</a>
            </div>
        </div>
    </div>
</div>

@endsection
