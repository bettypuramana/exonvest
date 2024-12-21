<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('title_en',100);
            $table->string('title_ar',100);
            $table->string('name_en',100);
            $table->string('name_ar',100);
            $table->string('job_title_en',100);
            $table->string('job_title_ar',100);
            $table->string('image',100);
            $table->string('description_en',1000);
            $table->string('description_ar',1000);
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
        Schema::dropIfExists('testimonials');
    }
};
