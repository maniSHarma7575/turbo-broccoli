<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('label')->nullable();
            $table->timestamps();

        });
        Schema::create('abilities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('label')->nullable();
            $table->timestamps();
            
        });

        Schema::create('ability_role', function (Blueprint $table) {
            
            $table->unsignedInteger('role_id');
            $table->unsignedInteger('ability_id');
            $table->primary(['role_id,ability_id']);
            $table->timestamps();

            $table->foreign('role_id')
                ->references('id')
                ->on('roles')
                ->onDelete('cascade');

                $table->foreign('ability_id')
                ->references('id')
                ->on('abilities')
                ->onDelete('cascade');
            
        });
        Schema::create('role_user', function (Blueprint $table) {
            $table->unsignedInteger('role_id');
            $table->unsignedInteger('user_id');
            $table->primary(['user_id,role_id']);

            $table->timestamps();

            $table->foreign('role_id')
                ->references('id')
                ->on('roles')
                ->onDelete('cascade');

                $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
