<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id('customer_id');
            $table->string('first_name', 60);
            $table->string('last_name', 60);
            $table->string('email', 100);
            $table->enum('gender', ["M","F", "O"])->nullable();
            $table->date('dob')->nullable();
            $table->text('address');
            $table->string('password');
            $table->boolean('status')->default('1');
            $table->integer('points')->default('1');
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
        Schema::dropIfExists('customers');
    }
}
