<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_post', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained();
            $table->foreignId('post_id')->constrained();
        });

        DB::table('category_post')->insert(
            array(
                [
                    'category_id'   => 1,
                    'post_id'  => 1
                ],
                [
                    'category_id'   => 2,
                    'post_id'  => 1
                ],
                [
                    'category_id'   => 3,
                    'post_id'  => 1
                ],
                [
                    'category_id'   => 4,
                    'post_id'  => 2
                ],
                [
                    'category_id'   => 5,
                    'post_id'  => 2
                ],
                [
                    'category_id'   => 8,
                    'post_id'  => 2
                ],
                [
                    'category_id'   => 6,
                    'post_id'  => 3
                ],
                [
                    'category_id'   => 7,
                    'post_id'  => 3
                ],
                [
                    'category_id'   => 4,
                    'post_id'  => 4
                ],
                [
                    'category_id'   => 5,
                    'post_id'  => 4
                ],
                [
                    'category_id'   => 8,
                    'post_id'  => 5
                ],
                [
                    'category_id'   => 6,
                    'post_id'  => 5
                ],
                [
                    'category_id'   => 7,
                    'post_id'  => 5
                ]
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_post');
    }
}
