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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->enum('type', ['Link', 'Dropdown', 'Megamenu']);
            $table->enum('placement', ['Primary', 'Secondary']);
            $table->string('content')->nullable();
            $table->enum('status', ['Active', 'Archived']);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });

        DB::table('menus')->insert(
            array(
                [
                    'title'   => 'Home',
                    'type'   => 'Link',
                    'placement'   => 'Primary',
                    'content'  => '/',
                    'status'  => 'Active'
                ],
                [
                    'title'   => 'Calendar',
                    'type'   => 'Link',
                    'placement'   => 'Primary',
                    'content'  => '/events/calender',
                    'status'  => 'Active'
                ],
                [
                    'title'   => 'News',
                    'type'   => 'Link',
                    'placement'   => 'Primary',
                    'content'  => '/news',
                    'status'  => 'Active'
                ],
                [
                    'title'   => 'Work With Us',
                    'type'   => 'Dropdown',
                    'placement'   => 'Primary',
                    'content'  => NULL,
                    'status'  => 'Active'
                ],
                [
                    'title'   => 'Staff',
                    'type'   => 'Link',
                    'placement'   => 'Primary',
                    'content'  => '/staff',
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
        Schema::dropIfExists('menus');
    }
};
