<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email_id');
            $table->string('mobile_number');
            $table->text('address')->nullable()->default(null);
            $table->string('gender');
            $table->string('classX_board')->nullable();
            $table->string('classX_percentage')->nullable();
            $table->string('classX_passing')->nullable();
            $table->string('classXII_board')->nullable();
            $table->string('classXII_percentage')->nullable();
            $table->string('classXII_passing')->nullable();
            $table->string('graduation_board')->nullable();
            $table->string('graduation_percentage')->nullable();
            $table->string('graduation_passing')->nullable();
            $table->string('masters_board')->nullable();
            $table->string('masters_percentage')->nullable();
            $table->string('masters_passing')->nullable();

            $table->string('hindi')->nullable();
            $table->string('hindi_read')->nullable();
            $table->string('hindi_write')->nullable();
            $table->string('hindi_speak')->nullable();

            $table->string('gujrati')->nullable();
            $table->string('gujrati_read')->nullable();
            $table->string('gujrati_write')->nullable();
            $table->string('gujrati_speak')->nullable();

            $table->string('english')->nullable();
            $table->string('english_read')->nullable();
            $table->string('english_write')->nullable();
            $table->string('english_speak')->nullable();

            $table->string('php')->nullable();
            $table->string('php_type')->nullable();

            $table->string('mysql')->nullable();
            $table->string('mysql_type')->nullable();

            $table->string('laravel')->nullable();
            $table->string('laravel_type')->nullable();
            
            $table->string('oracle')->nullable();
            $table->string('oracle_type')->nullable();

            $table->string('preferred_location')->nullable();
            $table->string('expected_ctc')->nullable();
            $table->string('current_ctc')->nullable();
            $table->string('notice_period')->nullable();


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
        Schema::dropIfExists('applications');
    }
}
