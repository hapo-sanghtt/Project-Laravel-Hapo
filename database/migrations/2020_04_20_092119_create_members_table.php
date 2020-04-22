<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('image');
            $table->string('full_name', 255);
            $table->string('password', 255);
            $table->tinyInteger('gender');
            $table->string('email', 255)->unique();
            $table->bigInteger('phone');
            $table->string('address', 255);
            $table->tinyInteger('role');
            $table->bigInteger('project_id')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
