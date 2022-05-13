<?php

use App\Models\Admin;
use App\Models\Customer;
use App\Models\Book;
use App\Models\Invoice;

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
            $table->id('id');
            $table->string('name')->nullable(false);
            $table->bigInteger('stock', false, true);
            $table->string('synopsis')->nullable();
            $table->bigInteger('price')->nullable(false);
            $table->timestamps();
        });

        Schema::table('books', function(Blueprint $table){
            $table->unsignedBigInteger('books_admins');
            $table->unsignedBigInteger('books_customers');
            $table->unsignedBigInteger('books_invoices');
            $table->foreign('books_admins')->references('id')->on('admins')->onUpdate('cascade');
            $table->foreign('books_customers')->references('id')->on('customers')->onUpdate('cascade');
            $table->foreign('books_invoices')->references('id')->on('invoices')->onUpdate('cascade');
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
