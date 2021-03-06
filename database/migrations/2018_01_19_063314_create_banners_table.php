<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
             $table->increments('id');
             $table->timestamps();
             $table->string('top_banner_path');
             $table->string('left_banner_path');
             $table->string('right_banner_path');
             $table->string('right_banner_link');
             $table->string('left_banner_link');
             $table->string('top_banner_link');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('banners');
    }
}
