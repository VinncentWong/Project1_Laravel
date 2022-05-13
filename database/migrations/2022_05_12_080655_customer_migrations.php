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
        Schema::create('customers', function(Blueprint $table){
            $table->id('id');
            $table->string('name')->nullable(false)->default('Anonymous');
            $table->string('email')->nullable(false)->default('Anonymous');
            $table->string('password')->nullable(false)->default('912309812470812837182401231203812737');
            $table->string('address')->nullable(false)->default('Anonymous');
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
};
