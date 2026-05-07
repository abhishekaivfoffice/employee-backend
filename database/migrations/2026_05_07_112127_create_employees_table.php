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
       Schema::create('employees', function (Blueprint $table) {

    $table->id();

    $table->string('employee_id')->unique();

    $table->string('name');

    $table->string('email')->unique();

    $table->string('phone');

    $table->enum('gender', ['male', 'female']);

    $table->date('dob');

    $table->string('designation');

    $table->string('department');

    $table->string('location');

    $table->text('address');

    $table->decimal('salary', 10, 2);

    $table->string('blood_group');

    $table->string('emergency_contact');

    $table->text('profile_image')->nullable();

    $table->date('joining_date');

    $table->enum('employment_type', [
        'full_time',
        'part_time'
    ]);

    $table->enum('status', [
        'active',
        'inactive'
    ]);

    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
