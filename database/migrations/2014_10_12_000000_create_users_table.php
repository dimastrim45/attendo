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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->tinyText('employee_num');
            $table->tinyText('name');
            $table->tinyText('username');
            $table->string('address');
            $table->tinyText('npwp')->nullable();
            $table->tinyText('employee_status_1');
            $table->tinyText('employee_status_2');
            $table->tinyText('bpjstk')->nullable();
            $table->tinyText('bpjsk')->nullable();
            $table->foreignId('placement');
            $table->foreignId('division_id');
            $table->foreignId('employee_group_id');
            $table->tinyText('level');
            $table->date('born_date');
            $table->date('entry_date');
            $table->date('resign_date')->nullable();
            $table->tinyText('num_ktp');
            $table->tinyText('name_ktp');
            $table->string('address_ktp');
            $table->foreignId('tax_status_id')->nullable();
            $table->boolean('uniform');
            $table->tinyText('bni_acc_num')->nullable();
            $table->foreignId('facility_id');
            $table->foreignId('company_id');
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
