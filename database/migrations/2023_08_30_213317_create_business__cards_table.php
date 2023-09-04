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
        Schema::create('business__cards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('business_name');
            $table->string('tagline');
            $table->string('business_category');
            $table->string('your_name');
            $table->string('job_title');
            $table->string('phone');
            $table->string('email');
            $table->string('website');
            $table->string('physical_address');
            $table->string('linkedin');
            $table->string('twitter');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('youtube');
            $table->string('pinterest');
            $table->timestamp('date_of_entry');
            $table->string('qr')->nullable();
            $table->string('logo')->nullable();
            $table->string('profile_picture')->nullable();
            $table->string('document')->nullable();
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
        Schema::dropIfExists('business__cards');
    }
};
