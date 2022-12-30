<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->unique();
            // $table->foreignId('role_id')->constrained();
            // $table->foreignId('department_id')->constrained();
            $table->enum('status', ['Active', 'Archived']);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });

        DB::table('users')->insert(
            array(
                [
                    'username'   => 'Tess.Ture',
                    'firstname'   => 'Tess',
                    'lastname'   => 'Ture',
                    'email'  => 'Tess.Ture@cmsd.bc.ca',
                    'status'  => 'Active'
                ],
                [
                    'username'   => 'Sute.Erst',
                    'firstname'   => 'Sute',
                    'lastname'   => 'Erst',
                    'email'  => 'Sute.Erst@cmsd.bc.ca',
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
        Schema::dropIfExists('users');
    }
}
