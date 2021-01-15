<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academics', function (Blueprint $table) {
            $table->String('EmployeeID')->unique();
            $table->String('Photo');
            $table->Text('Title');
            $table->Text('FirstName');
            $table->Text('LastName');
            $table->Text('Gender');
            $table->Date('DateOfBirth')->nullable();
            $table->String('Designation');
            $table->Text('AdminRole');
            $table->String('EmailID')->unique();
            $table->String('LinkedIn')->unique();
            $table->Integer('ContactNumber');
            $table->Text('Faculty');
            $table->Text('Department');
            $table->String('OfficialWebsite');
            $table->Text('ResearchInterest');
            $table->Text('FieldOfSpecialization');
            $table->String('ResearchID');

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
        Schema::dropIfExists('academics');
    }
}
