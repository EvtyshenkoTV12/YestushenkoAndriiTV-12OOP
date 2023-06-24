<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTableProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->string('title', 255);
            $table->string('description', 255);
            $table->string('img', 255);
            $table->integer('price');
        });

        DB::table('products')->insert([
            [
                'title' => 'Корм',
                'category_id' => 1,
                'description' => 'Для котів',
                'img' => 'images/main-food.png',
                'price' => 200
            ],
            [
                'title' => 'Корм',
                'category_id' => 2,
                'description' => 'Для собак',
                'img' => 'images/main-food.png',
                'price' => 265
            ],
            [
                'title' => 'Корм',
                'category_id' => 2,
                'description' => 'Для собак',
                'img' => 'images/main-food.png',
                'price' => 212
            ],
            [
                'title' => 'Корм',
                'category_id' => 1,
                'description' => 'Для котів',
                'img' => 'images/main-food.png',
                'price' => 234
            ],
            [
                'title' => 'Корм',
                'category_id' => 3,
                'description' => 'Для гризунів',
                'img' => 'images/main-food.png',
                'price' => 275
            ],
            [
                'title' => 'Корм',
                'category_id' => 3,
                'description' => 'Для гризунів',
                'img' => 'images/main-food.png',
                'price' => 321
            ],
            [
                'title' => 'Корм',
                'category_id' => 4,
                'description' => 'Для птахів',
                'img' => 'images/main-food.png',
                'price' => 123
            ],
            [
                'title' => 'Корм',
                'category_id' => 4,
                'description' => 'Для птахів',
                'img' => 'images/main-food.png',
                'price' => 232
            ],
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
