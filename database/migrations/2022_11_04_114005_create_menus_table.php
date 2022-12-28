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
            $table->enum('type', ['Dropdown', 'Link', 'Megamenu']);
            $table->enum('placement', ['Index', 'Primary', 'Secondary']);
            $table->string('icon')->nullable();
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
                    'icon'   => NULL,
                    'content'  => '/',
                    'status'  => 'Active'
                ],
                [
                    'title'   => 'Calendar',
                    'type'   => 'Link',
                    'placement'   => 'Primary',
                    'icon'   => NULL,
                    'content'  => '/events',
                    'status'  => 'Active'
                ],
                [
                    'title'   => 'News',
                    'type'   => 'Link',
                    'placement'   => 'Primary',
                    'icon'   => NULL,
                    'content'  => '/news',
                    'status'  => 'Active'
                ],
                [
                    'title'   => 'Work With Us',
                    'type'   => 'Dropdown',
                    'placement'   => 'Primary',
                    'icon'   => NULL,
                    'content'  => NULL,
                    'status'  => 'Active'
                ],
                [
                    'title'   => 'Staff',
                    'type'   => 'Link',
                    'placement'   => 'Primary',
                    'icon'   => NULL,
                    'content'  => '/staff',
                    'status'  => 'Active'
                ],
                [
                    'title'   => 'Learner Resources',
                    'type'   => 'Megamenu',
                    'placement'   => 'Secondary',
                    'icon'   => NULL,
                    'content'  => NULL,
                    'status'  => 'Active'
                ],
                [
                    'title'   => 'Parents and Caregivers',
                    'type'   => 'Dropdown',
                    'placement'   => 'Secondary',
                    'icon'   => NULL,
                    'content'  => NULL,
                    'status'  => 'Active'
                ],
                [
                    'title'   => 'Schools',
                    'type'   => 'Dropdown',
                    'placement'   => 'Secondary',
                    'icon'   => NULL,
                    'content'  => NULL,
                    'status'  => 'Active'
                ],
                [
                    'title'   => 'Programs and Services',
                    'type'   => 'Dropdown',
                    'placement'   => 'Secondary',
                    'icon'   => NULL,
                    'content'  => NULL,
                    'status'  => 'Active'
                ],
                [
                    'title'   => 'Board of Education',
                    'type'   => 'Dropdown',
                    'placement'   => 'Secondary',
                    'icon'   => NULL,
                    'content'  => NULL,
                    'status'  => 'Active'
                ],
                [
                    'title'   => 'Schools & Registration',
                    'type'   => 'Link',
                    'placement'   => 'Index',
                    'icon'   => 'fa-school',
                    'content'  => NULL,
                    'status'  => 'Active'
                ],
                [
                    'title'   => 'Health & Wellness',
                    'type'   => 'Link',
                    'placement'   => 'Index',
                    'icon'   => 'fa-heartbeat',
                    'content'  => NULL,
                    'status'  => 'Active'
                ],
                [
                    'title'   => 'Learner Programs',
                    'type'   => 'Link',
                    'placement'   => 'Index',
                    'icon'   => 'fa-book',
                    'content'  => NULL,
                    'status'  => 'Active'
                ],
                [
                    'title'   => 'Indigenous Education',
                    'type'   => 'Link',
                    'placement'   => 'Index',
                    'icon'   => 'fa-book-reader',
                    'content'  => NULL,
                    'status'  => 'Active'
                ],
                [
                    'title'   => 'Transportation Services',
                    'type'   => 'Link',
                    'placement'   => 'Index',
                    'icon'   => 'fa-bus',
                    'content'  => NULL,
                    'status'  => 'Active'
                ],
                [
                    'title'   => 'Strategic Plans',
                    'type'   => 'Link',
                    'placement'   => 'Index',
                    'icon'   => 'fa-file-signature',
                    'content'  => NULL,
                    'status'  => 'Active'
                ],
                [
                    'title'   => 'Food & Nutrition',
                    'type'   => 'Link',
                    'placement'   => 'Index',
                    'icon'   => 'fa-utensils',
                    'content'  => NULL,
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
