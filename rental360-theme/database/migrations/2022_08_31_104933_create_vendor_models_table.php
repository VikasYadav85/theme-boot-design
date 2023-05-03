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
        Schema::create('vendor', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid'); 
            $table->string('full_name');
            $table->string('user_name');
            $table->string('email');
            $table->string('contact');
            $table->string('company'); 
            $table->string('customer_type'); 

            $table->boolean('status')->default(1); 
            $table->string('birth_date')->nullable(); 
            $table->string('mobile')->nullable(); 
            $table->string('website')->nullable(); 
            $table->string('language')->nullable(); 
            $table->string('gender')->nullable(); 
            $table->string('contact_option')->nullable(); 
            $table->string('address_line1')->nullable(); 
            $table->string('address_line2')->nullable(); 
            $table->string('postcode')->nullable(); 
            $table->string('city')->nullable(); 
            $table->string('state')->nullable(); 
            $table->string('country')->nullable(); 
            $table->string('twitter')->nullable(); 
            $table->string('facebook')->nullable(); 
            $table->string('instagram')->nullable(); 
            $table->string('github')->nullable(); 
            $table->string('codepen')->nullable(); 
            $table->string('stack')->nullable(); 
            $table->rememberToken();

            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendor');
    }
};
