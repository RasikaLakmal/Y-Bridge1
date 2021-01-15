<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
           
           
            $table->String('StudentID')->unique(); 
            $table->string('photo');
            $table->Text('FirstName');
            $table->Text('LastName');
            $table->Text('Gender');
            $table->Date('DateOfBirth')->nullable();
            $table->String('HomeAddress');
            $table->String('EmailID')->unique();
            $table->String('LinkedIn')->unique();
            $table->Integer('ContactNumber');
            $table->String('YearOfStudy');
            $table->Text('StudyProgramme');
            $table->Text('SubjectsOffered');
            

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
        Schema::dropIfExists('students');
    }
}
