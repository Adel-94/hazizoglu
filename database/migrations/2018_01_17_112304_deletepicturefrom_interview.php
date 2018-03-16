<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeletepicturefromInterview extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
                   Schema::table('interview', function($table) {
             $table->dropColumn('interview_picture');
           
          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
              Schema::table('interview', function($table) {
             $table->string('interview_picture');
         
          });
    }
}
