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
        Schema::create('kams', function (Blueprint $table) {
            $table->id();
            $table->string('employee_id', 20)->nullable(); // Employee ID
            $table->string('employee_name')->nullable(); // Employee Name
            $table->date('inc_date')->nullable(); // Inc_Date
            $table->string('profile_name')->nullable(); // Profile Name
            $table->decimal('gross_sales', 10, 2)->nullable(); // Gross Sales
            $table->decimal('deduction_percentage', 5, 2)->nullable(); // Deduction Percentage
            $table->decimal('deduction_amount', 10, 2)->nullable(); // Deduction Amount
            $table->string('client_name')->nullable(); // Client's Name
            $table->string('order_id')->nullable(); // Order ID
            $table->string('order_page_url')->nullable(); // Order Page URL
            $table->string('order_sheet_url')->nullable(); // Order Sheet URL
            $table->text('remarks')->nullable(); // Remarks
            $table->string('assigned_person')->nullable(); // Assigned Person
            $table->string('order_status')->nullable(); // Order Status
            $table->string('service_line')->nullable(); // Service Line
            $table->string('delivered_by')->nullable(); // Delivered By
            $table->date('fiverr_delivery_date')->nullable(); // Fiverr Delivery Date
            $table->decimal('net_amount', 10, 2)->nullable(); // Net Amount
            $table->dateTime('actual_delivery_last_time')->nullable(); // Actual Delivery Last Time
            $table->date('deadline')->nullable(); // Deadline
            $table->string('op_department')->nullable(); // Op. Department
            $table->string('platform_source')->nullable(); // Platform Source
            $table->string('order_source')->nullable(); // Order Source
            $table->string('platform_status')->nullable(); // Platform Status
            $table->text('client_feedback')->nullable(); // Client Feedback
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kams');
    }
};
