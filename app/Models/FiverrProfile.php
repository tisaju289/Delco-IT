<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FiverrProfile extends Model
{
    protected $fillable = [
        // 'first_name',
        // 'last_name',
        // 'profile_name',
        // 'category',
        // 'mobile_number',
        // 'email_address',
        // 'email_password',
        // 'address_line_1',
        // 'city',
        // 'postal_code',
        // 'country',
        'first_name', 'last_name', 'date_of_birth', 'nid_or_passport',
        'bank_account_number', 'branch_name', 'bank_name', 'address_line_1',
        'address_line_2', 'city', 'postal_code', 'country', 'account_creation_date',
        'profile_name', 
        'profile_image','category', 'mobile_number', 'sim_owner', 'current_sim_holder',
        'email_address', 'email_password', 'backup_email', 'backup_phone',
        'email_2_address', 'email_2_password', 'backup_2_email', 
        'backup_2_phone',
        'email_3_address',
        'email_3_password',
        'backup_3_email',
        'backup_3_phone',

        'yahoo_address', 'yahoo_password', 'yahoo_2_address', 'yahoo_2_password',
        'ip_address', 'mac_address',
        'facebook', 'facebook_password', 'instagram_username', 'instagram_password',
        'linkedin', 'linkedin_password', 'dribbble', 'dribbble_password',
        'stackoverflow', 'stackoverflow_password', 'vimeo', 'vimeo_password',
        'twitter', 'twitter_password', 'github_id', 'github_password',
        'behance', 'behance_password', 'fiverr_creation_date', 'fiverr_verify_status',
        'fiverr_account_status', 'fiverr_account_category', 'fiverr_account_create_date',
        'fiverr_account_disable_date', 'fiverr_mobile_number', 'fiverr_sim_owner',
        'fiverr_current_sim_holder', 'fiverr_username', 'fiverr_email', 'fiverr_password',
        'fiverr_security_question_1', 'fiverr_security_answer_1', 'fiverr_security_question_2',
        'fiverr_old_email', 'fiverr_old_password', 'fiverr_old_number',
    ];
}
