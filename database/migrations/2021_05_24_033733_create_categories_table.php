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
            $table->string('slug')->unique();
            $table->string('name');
            $table->enum('status', ['Active', 'Archived']);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });

        DB::table('categories')->insert(
            array(
                [
                    'slug'   => 'school-district',
                    'name'   => 'School District',
                    'status'  => 'Active'
                ],
                [
                    'slug'   => 'school',
                    'name'   => 'School',
                    'status'  => 'Active'
                ],
                [
                    'slug'   => 'education',
                    'name'   => 'Education',
                    'status'  => 'Active'
                ],
                [
                    'slug'   => 'events',
                    'name'   => 'Events',
                    'status'  => 'Active'
                ],
                [
                    'slug'   => 'announcements',
                    'name'   => 'Announcements',
                    'status'  => 'Active'
                ],
                [
                    'slug'   => 'board-of-education',
                    'name'   => 'Board of Education',
                    'status'  => 'Active'
                ],
                [
                    'slug'   => 'language-and-culture',
                    'name'   => 'Language and Culture',
                    'status'  => 'Active'
                ],
                [
                    'slug'   => 'celebration',
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
