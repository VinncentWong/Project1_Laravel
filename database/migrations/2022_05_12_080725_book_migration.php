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
        Schema::create('books', function(Blueprint $table){
            $table->bigIncrements('id')->primary();
            $table->bigInteger('stock', false, true);
            $table->string('synopsis')->nullable();
            $table->bigInteger('price')->nullable(false);
            $table->foreign('books_admins')->references('id')->on('admins');
            $table->foreign('books_customers')->references('id')->on('customers');
            $table->foreign('books_invoices')->references('id')->on('invoices');
            $table->date('created_at');
            $table->date('updated_at');
            $table->date('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
};
