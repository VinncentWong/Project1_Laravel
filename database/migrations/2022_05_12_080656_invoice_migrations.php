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
        Schema::create('invoices', function(Blueprint $blueprint){
            $blueprint->id('id');
            $blueprint->string('name')->nullable(false);
            $blueprint->unsignedBigInteger('price', false, true)->nullable(false);
            $blueprint->timestamps();
        });

        Schema::table('invoices', function(Blueprint $blueprint){
            $blueprint->unsignedBigInteger('customers_invoices');
            $blueprint->foreign('customers_invoices')->references('id')->on('customers')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
};
