<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndustrialistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('industrialists', function (Blueprint $table) {
            
            $table->String('Photo');
            $table->String('CompanyPersonalEmailID')->unique();
            $table->Text('NameWithInitials');
            $table->String('Designation');
            $table->String('LinkedIn')->unique();
            $table->String('FieldOfInterests');
            $table->Integer('ContactNumber');
            $table->String('CompanyName');
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
        Schema::dropIfExists('industrialists');
    }
}
