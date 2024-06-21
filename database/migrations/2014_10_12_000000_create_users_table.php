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
            $table->string('name');
            $table->string('username');
            $table->string('address');
            $table->string('npwp')->nullable();
            $table->string('employee_status_1');
            $table->string('employee_status_2');
            $table->string('bpjstk')->nullable();
            $table->string('bpjsk')->nullable();
            $table->string('placement');
            $table->string('division');
            $table->string('group');
            $table->string('level');
            $table->date('born_date');
            $table->date('entry_date');
            $table->date('resign_date')->nullable();
            $table->string('num_ktp');
            $table->string('name_ktp');
            $table->string('address_ktp');
            $table->string('tax_status')->nullable();
            $table->boolean('uniform');
            $table->string('bni_acc_num')->nullable();
            $table->string('company');
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
