<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TaoBangProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            
            $table->increments('id');
            $table->char('name',100);
            $table->longText('description');
            $table->char('image',200);
            $table->unsignedDecimal('price', 10, 2); // DECLIMAL với 8 là tổng các chữ số 2 là giới hạn phần thập phân
            $table->timestamps('create_at');
            $table->timestamps('update_at');
            $table->timestamps('delete_at');
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
        Schema::dropIfExists('products');
    }
}
