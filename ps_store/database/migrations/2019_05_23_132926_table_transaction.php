<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableTransaction extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code'); #grouping untuk pembelian lbh dari 1 produk
            //member
            $table->unsignedInteger('user_id')->nullable();
            $table->foreign('user_id')
                ->on('users')
                ->references('id')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            //product
            $table->unsignedInteger('product_id')->nullable();
            $table->foreign('product_id')
                ->on('products')
                ->references('id')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('qty');
            $table->integer('subtotal');
            //pengiriman
            $table->string('name');
            $table->string('address');
            $table->integer('portal_code');
            $table->string('ekspedisi');
            $table->enum('status pembayaran',['0','1']);
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
        Schema::dropIfExists('transactions');
    }
}
