<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('name');
            $table->enum('status', ['Active', 'Archived']);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });

        DB::table('categories')->insert(
            array(
                [
                    'slug'   => 'cat-school-district',
                    'name'   => 'School District',
                    'status'  => 'Active'
                ],
                [
                    'slug'   => 'cat-school',
                    'name'   => 'School',
                    'status'  => 'Active'
                ],
                [
                    'slug'   => 'cat-education',
                    'name'   => 'Education',
                    'status'  => 'Active'
                ],
                [
                    'slug'   => 'cat-events',
                    'name'   => 'Events',
                    'status'  => 'Active'
                ],
                [
                    'slug'   => 'cat-announcements',
                    'name'   => 'Announcements',
                    'status'  => 'Active'
                ],
                [
                    'slug'   => 'cat-board-of-education',
                    'name'   => 'Board of Education',
                    'status'  => 'Active'
                ],
                [
                    'slug'   => 'cat-language-and-culture',
                    'name'   => 'Language and Culture',
                    'status'  => 'Active'
                ],
                [
                    'slug'   => 'cat-celebration',
                    'name'   => 'Celebration',
                    'status'  => 'Active'
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
        Schema::dropIfExists('categories');
    }
}
