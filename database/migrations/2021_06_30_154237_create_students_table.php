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
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->string('birth');
            $table->string('lang');
            $table->string('citizenship');
            $table->string('namechange');
            $table->string('passportnumber');
            $table->string('dob');
            $table->string('gender');
            $table->string('marital');
            $table->string('skype')->nullable();
            $table->string('address');
            $table->string('city');
            $table->string('country');
            $table->string('state')->nullable();
            $table->string('post')->nullable();
            $table->string('mobile');
            $table->string('email');
            $table->string('englishlevel');
            $table->string('score')->nullable();
            $table->string('written')->nullable();
            $table->string('reading')->nullable();
            $table->string('spoken')->nullable();
            $table->string('listen')->nullable();
            $table->string('heightleveledu')->nullable();
            $table->string('gradingscheme')->nullable();
            $table->string('gradeoutof')->nullable();
            $table->string('edulevel')->nullable();
            $table->string('sscinst')->nullable();
            $table->string('sscyear')->nullable();
            $table->string('sscgroup')->nullable();
            $table->string('sscresult')->nullable();
            $table->string('hscinst')->nullable();
            $table->string('hscyear')->nullable();
            $table->string('hscgroup')->nullable();
            $table->string('hscresult')->nullable();
            $table->string('countryins')->nullable();
            $table->string('institute')->nullable();
            $table->string('primarylanguage')->nullable();
            $table->string('attendedfrom')->nullable();
            $table->string('attendedto')->nullable();
            $table->string('degreeaward')->nullable();
            $table->string('instituteaddress')->nullable();
            $table->string('inscountry')->nullable();
            $table->string('instzip')->nullable();
            $table->string('insttown')->nullable();
            $table->string('refused')->nullable();
            $table->string('passport')->nullable();
            $table->string('cv')->nullable();
            $table->string('ref1')->nullable();
            $table->string('ref2')->nullable();
            $table->string('ssccer')->nullable();
            $table->string('ssctrans')->nullable();
            $table->string('hsccer')->nullable();
            $table->string('hsctrns')->nullable();
            $table->string('sop')->nullable();
            $table->string('sign')->nullable();
            $table->string('photos')->nullable();
            $table->string('status')->nullable();
            $table->string('user')->nullable();

          
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
