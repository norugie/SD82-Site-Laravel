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
        Schema::create('submenus', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('menu_id')->constrained();
            $table->string('content')->nullable();
            $table->enum('status', ['Active', 'Archived']);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });

        DB::table('submenus')->insert(
            array(
                [
                    'title'   => 'Teacher (CMTF) Job Postings',
                    'menu_id'   => 4,
                    'content'   => '/careers/cmtf',
                    'status'  => 'Active'
                ],
                [
                    'title'   => 'Support Staff (CUPE) Job Postings',
                    'menu_id'   => 4,
                    'content'   => '/careers/cupe',
                    'status'  => 'Active'
                ],
                [
                    'title'   => 'Administrative and Exempt Job Postings',
                    'menu_id'   => 4,
                    'content'   => '/careers/exempt',
                    'status'  => 'Active'
                ],
                [
                    'title'   => 'Link Sample',
                    'menu_id'   => 6,
                    'content'   => '/careers/exempt',
                    'status'  => 'Active'
                ],
                [
                    'title'   => 'Link Sample',
                    'menu_id'   => 6,
                    'content'   => '/careers/exempt',
                    'status'  => 'Active'
                ],
                [
                    'title'   => 'Link Sample',
                    'menu_id'   => 6,
                    'content'   => '/careers/exempt',
                    'status'  => 'Active'
                ],
                [
                    'title'   => 'Link Sample',
                    'menu_id'   => 6,
                    'content'   => '/careers/exempt',
                    'status'  => 'Active'
                ],
                [
                    'title'   => 'Link Sample',
                    'menu_id'   => 6,
                    'content'   => '/careers/exempt',
                    'status'  => 'Active'
                ],
                [
                    'title'   => 'Link Sample',
                    'menu_id'   => 7,
                    'content'   => '/careers/exempt',
                    'status'  => 'Active'
                ],
                [
                    'title'   => 'Link Sample',
                    'menu_id'   => 7,
                    'content'   => '/careers/exempt',
                    'status'  => 'Active'
                ],
                [
                    'title'   => 'Link Sample',
                    'menu_id'   => 7,
                    'content'   => '/careers/exempt',
                    'status'  => 'Active'
                ],
                [
                    'title'   => 'Link Sample',
                    'menu_id'   => 7,
                    'content'   => '/careers/exempt',
                    'status'  => 'Active'
                ],
                [
                    'title'   => 'School Administration',
                    'menu_id'   => 8,
                    'content'   => '/careers/exempt',
                    'status'  => 'Active'
                ],
                [
                    'title'   => 'All Schools',
                    'menu_id'   => 8,
                    'content'   => '/careers/exempt',
                    'status'  => 'Active'
                ],
                [
                    'title'   => 'School Growth Plan',
                    'menu_id'   => 8,
                    'content'   => '/careers/exempt',
                    'status'  => 'Active'
                ],
                [
                    'title'   => 'Link Sample',
                    'menu_id'   => 9,
                    'content'   => '/careers/exempt',
                    'status'  => 'Active'
                ],
                [
                    'title'   => 'Link Sample',
                    'menu_id'   => 9,
                    'content'   => '/careers/exempt',
                    'status'  => 'Active'
                ],
                [
                    'title'   => 'Link Sample',
                    'menu_id'   => 9,
                    'content'   => '/careers/exempt',
                    'status'  => 'Active'
                ],
                [
                    'title'   => 'Link Sample',
                    'menu_id'   => 9,
                    'content'   => '/careers/exempt',
                    'status'  => 'Active'
                ],
                [
                    'title'   => 'Link Sample',
                    'menu_id'   => 9,
                    'content'   => '/careers/exempt',
                    'status'  => 'Active'
                ],
                [
                    'title'   => 'Link Sample',
                    'menu_id'   => 9,
                    'content'   => '/careers/exempt',
                    'status'  => 'Active'
                ],
                [
                    'title'   => 'Link Sample',
                    'menu_id'   => 10,
                    'content'   => '/careers/exempt',
                    'status'  => 'Active'
                ],
                [
                    'title'   => 'Link Sample',
                    'menu_id'   => 10,
                    'content'   => '/careers/exempt',
                    'status'  => 'Active'
                ],
                [
                    'title'   => 'Link Sample',
                    'menu_id'   => 10,
                    'content'   => '/careers/exempt',
                    'status'  => 'Active'
                ],
                [
                    'title'   => 'Link Sample',
                    'menu_id'   => 10,
                    'content'   => '/careers/exempt',
                    'status'  => 'Active'
                ],
                [
                    'title'   => 'Link Sample',
                    'menu_id'   => 10,
                    'content'   => '/careers/exempt',
                    'status'  => 'Active'
                ],
                [
                    'title'   => 'Link Sample',
                    'menu_id'   => 10,
                    'content'   => '/careers/exempt',
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
        Schema::dropIfExists('submenus');
    }
};
