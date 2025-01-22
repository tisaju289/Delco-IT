<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('fiverr_profiles', function (Blueprint $table) {
            $table->id();

            // Personal Information
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->date('date_of_birth')->nullable();
            $table->string('nid_or_passport', 50)->nullable();
            $table->string('bank_account_number', 50)->nullable();
            $table->string('branch_name', 100)->nullable();
            $table->string('bank_name', 100)->nullable();
            $table->string('address_line_1', 200);
            $table->string('address_line_2', 200)->nullable();
            $table->string('city', 100);
            $table->string('postal_code', 20);
            $table->string('country', 100);
            $table->date('account_creation_date')->nullable();

            // Common Information
            $table->string('profile_name', 150);
            $table->string('profile_image', 150)->nullable();

            $table->string('category', 100);
            $table->string('mobile_number', 20);
            $table->string('sim_owner', 100)->nullable();
            $table->string('current_sim_holder', 100)->nullable();

            // Email Information
            $table->string('email_address', 150);
            $table->text('email_password'); // Changed to text
            $table->string('backup_email', 150)->nullable();
            $table->string('backup_phone', 20)->nullable();
            $table->string('email_2_address', 150)->nullable();
            $table->text('email_2_password')->nullable(); // Changed to text
            $table->string('backup_2_email', 150)->nullable();
            $table->string('backup_2_phone', 20)->nullable();
            $table->string('email_3_address', 150)->nullable();
            $table->text('email_3_password')->nullable(); // Changed to text
            $table->string('backup_3_email', 150)->nullable();
            $table->string('backup_3_phone', 20)->nullable();

            // Yahoo Information
            $table->string('yahoo_address', 150)->nullable();
            $table->text('yahoo_password')->nullable(); // Changed to text
            $table->string('yahoo_2_address', 150)->nullable();
            $table->text('yahoo_2_password')->nullable(); // Changed to text

            // Technical Information
            $table->string('ip_address', 50)->nullable();
            $table->string('mac_address', 50)->nullable();

            // Social Media Information
            $table->string('facebook', 150)->nullable();
            $table->text('facebook_password')->nullable(); // Changed to text
            $table->string('instagram_username', 150)->nullable();
            $table->text('instagram_password')->nullable(); // Changed to text
            $table->string('linkedin', 150)->nullable();
            $table->text('linkedin_password')->nullable(); // Changed to text
            $table->string('linkedin_username', 150)->nullable();
            $table->string('dribbble', 150)->nullable();
            $table->text('dribbble_password')->nullable(); // Changed to text
            $table->string('stackoverflow', 150)->nullable();
            $table->text('stackoverflow_password')->nullable(); // Changed to text
            $table->string('vimeo', 150)->nullable();
            $table->text('vimeo_password')->nullable(); // Changed to text
            $table->string('twitter', 150)->nullable();
            $table->text('twitter_password')->nullable(); // Changed to text
            $table->string('github_id', 150)->nullable();
            $table->text('github_password')->nullable(); // Changed to text
            $table->string('behance', 150)->nullable();
            $table->text('behance_password')->nullable(); // Changed to text

            // Fiverr Information
            $table->date('fiverr_creation_date')->nullable();
            $table->string('fiverr_verify_status', 100)->nullable();
            $table->string('fiverr_account_status', 100)->nullable();
            $table->string('fiverr_account_category', 100)->nullable();
            $table->date('fiverr_account_create_date')->nullable();
            $table->date('fiverr_account_disable_date')->nullable();
            $table->string('fiverr_mobile_number', 20)->nullable();
            $table->string('fiverr_sim_owner', 100)->nullable();
            $table->string('fiverr_current_sim_holder', 100)->nullable();
            $table->string('fiverr_username', 150)->nullable();
            $table->string('fiverr_email', 150)->nullable();
            $table->text('fiverr_password')->nullable(); // Changed to text
            $table->string('fiverr_security_question_1', 200)->nullable();
            $table->string('fiverr_security_answer_1', 200)->nullable();
            $table->string('fiverr_security_question_2', 200)->nullable();
            $table->string('fiverr_old_email', 150)->nullable();
            $table->text('fiverr_old_password')->nullable(); // Changed to text
            $table->string('fiverr_old_number', 20)->nullable();


           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fiverr_profiles');
    }
};
