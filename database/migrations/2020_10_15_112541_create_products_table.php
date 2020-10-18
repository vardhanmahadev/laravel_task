<?php
 
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
  
class CreateProductsTable extends Migration
{
  public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->integer('phone');
            $table->text('address');
            $table->string('image');
            $table->timestamps();
        });
    }
  public function down()
    {
        Schema::dropIfExists('products');
    }
}