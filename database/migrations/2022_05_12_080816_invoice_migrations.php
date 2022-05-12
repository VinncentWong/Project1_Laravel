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
            $blueprint->bigIncrements('id')->primary();
            $blueprint->string('name')->nullable(false);
            $blueprint->bigInteger('price', false, true)->nullable(false);
            $blueprint->foreign('customers_invoices')->references('id')->on('customers');
            $blueprint->date('created_at');
            $blueprint->date('updated_at');
            $blueprint->date('deleted_at');
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
