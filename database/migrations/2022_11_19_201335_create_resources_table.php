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
        Schema::create('resources', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->enum('type', ['Link', 'File']);
            $table->string('location');
            $table->string('thumbnail')->default('default_thumbnail.png');
            $table->mediumText('desc')->nullable();
            $table->string('content');
            $table->enum('status', ['Active', 'Archived']);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });

        DB::table('resources')->insert(
            array(
                [
                    'title'   => 'Sample Link 1',
                    'type'   => 'Link',
                    'location' => 'staff',
                    'thumbnail'   => 'thumbnail_sample.png',
                    'desc'    => 'Sample description for this resource.',
                    'content'  => 'http://www.company.com',
                    'status' => 'Active'
                ],
                [
                    'title'   => 'Sample Link 2',
                    'type'   => 'Link',
                    'location' => 'staff',
                    'thumbnail'   => 'thumbnail_sample.png',
                    'desc'    => 'Sample description for this resource.',
                    'content'  => 'http://www.company.com',
                    'status' => 'Active'
                ],
                [
                    'title'   => 'Sample Link 3',
                    'type'   => 'Link',
                    'location' => 'staff',
                    'thumbnail'   => 'thumbnail_sample.png',
                    'desc'    => 'Sample description for this resource.',
                    'content'  => 'http://www.company.com',
                    'status' => 'Active'
                ],
                [
                    'title'   => 'Sample Link 4',
                    'type'   => 'Link',
                    'location' => 'staff',
                    'thumbnail'   => 'thumbnail_sample.png',
                    'desc'    => 'Sample description for this resource.',
                    'content'  => 'http://www.company.com',
                    'status' => 'Active'
                ],
                [
                    'title'   => 'Sample Link 5',
                    'type'   => 'Link',
                    'location' => 'staff',
                    'thumbnail'   => 'thumbnail_sample.png',
                    'desc'    => 'Sample description for this resource.',
                    'content'  => 'http://www.company.com',
                    'status' => 'Active'
                ],
                [
                    'title'   => 'Sample Link 6',
                    'type'   => 'Link',
                    'location' => 'staff',
                    'thumbnail'   => 'thumbnail_sample.png',
                    'desc'    => 'Sample description for this resource.',
                    'content'  => 'http://www.company.com',
                    'status' => 'Active'
                ],
                [
                    'title'   => 'Sample Link 7',
                    'type'   => 'Link',
                    'location' => 'staff',
                    'thumbnail'   => 'thumbnail_sample.png',
                    'desc'    => 'Sample description for this resource.',
                    'content'  => 'http://www.company.com',
                    'status' => 'Active'
                ],
                [
                    'title'   => 'Sample Link 8',
                    'type'   => 'Link',
                    'location' => 'staff',
                    'thumbnail'   => 'thumbnail_sample.png',
                    'desc'    => 'Sample description for this resource.',
                    'content'  => 'http://www.company.com',
                    'status' => 'Active'
                ],
                [
                    'title'   => 'Sample Link 9',
                    'type'   => 'Link',
                    'location' => 'staff',
                    'thumbnail'   => 'thumbnail_sample.png',
                    'desc'    => 'Sample description for this resource.',
                    'content'  => 'http://www.company.com',
                    'status' => 'Active'
                ],
                [
                    'title'   => 'Sample Link 10',
                    'type'   => 'Link',
                    'location' => 'staff',
                    'thumbnail'   => 'thumbnail_sample.png',
                    'desc'    => 'Sample description for this resource.',
                    'content'  => 'http://www.company.com',
                    'status' => 'Active'
                ],
                [
                    'title'   => 'Sample Link 11',
                    'type'   => 'Link',
                    'location' => 'staff',
                    'thumbnail'   => 'thumbnail_sample.png',
                    'desc'    => 'Sample description for this resource.',
                    'content'  => 'http://www.company.com',
                    'status' => 'Active'
                ],
                [
                    'title'   => 'Sample Link 12',
                    'type'   => 'Link',
                    'location' => 'staff',
                    'thumbnail'   => 'thumbnail_sample.png',
                    'desc'    => 'Sample description for this resource.',
                    'content'  => 'http://www.company.com',
                    'status' => 'Active'
                ],
                [
                    'title'   => 'Sample Link 13',
                    'type'   => 'Link',
                    'location' => 'staff',
                    'thumbnail'   => 'thumbnail_sample.png',
                    'desc'    => 'Sample description for this resource.',
                    'content'  => 'http://www.company.com',
                    'status' => 'Active'
                ],
                [
                    'title'   => 'Sample Link 14',
                    'type'   => 'Link',
                    'location' => 'staff',
                    'thumbnail'   => 'thumbnail_sample.png',
                    'desc'    => 'Sample description for this resource.',
                    'content'  => 'http://www.company.com',
                    'status' => 'Active'
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
        Schema::dropIfExists('resources');
    }
};
