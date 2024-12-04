<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id(); // Creates an auto-incrementing ID column
            $table->string('name', 255); // Name column with a maximum size of 250
            $table->string('job_title', 100); // Job title column with a maximum size of 100
            $table->date('joining_date'); // Joining date column
            $table->float('salary',10,2); // Salary column
            $table->string('email')->nullable(); // Email column with a unique constraint
            $table->string('mobile_no'); // Mobile number column
            $table->text('address'); // Address column
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
