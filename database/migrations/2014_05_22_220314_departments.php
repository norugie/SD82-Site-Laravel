<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Departments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->string('abbv');
            $table->string('name');
            $table->mediumText('addr')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('fax')->nullable();
            $table->string('principal')->nullable();
            $table->enum('status', ['Active', 'Archived']);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });

        DB::table('departments')->insert(
            array(
                [
                    'abbv'   => 'CMSD82',
                    'name'   => 'Coast Mountain School District No. 82',
                    'addr'   => '3211 Kenney St., Terrace, British Columbia, Canada V8G 3E9',
                    'email'  => 'sd82@cmsd.bc.ca',
                    'phone'  => '+1 (250) 635-4931',
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
        Schema::dropIfExists('departments');
    }
}
