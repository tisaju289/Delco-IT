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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_type');
            $table->string('client_name');
            $table->string('order_id');
            $table->string('price');
            $table->string('profile_name');

            $table->string('name');
            $table->date('deadline'); 
            $table->string('assigned_to'); 
            $table->string('team_leader'); 
            $table->string('created_by'); 
          
            $table->string('client_drive_url')->nullable(); 
            $table->text('client_instructions')->nullable();
            $table->text('login_credentials')->nullable();
            $table->text('special_requirements')->nullable(); 
            $table->text('text')->nullable(); 
            $table->string('client_social_media_link')->nullable();
            $table->string('reference_file')->nullable();
            $table->string('reference_website')->nullable();
            $table->string('client_details_screenshot')->nullable();
            $table->string('client_requirements_screenshot')->nullable();
            $table->string('conversation_screenshot')->nullable();
            $table->string('shared_files')->nullable();
            $table->json('revisions')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
