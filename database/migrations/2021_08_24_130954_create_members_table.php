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
            $table->id('member_id');
            $table->string('lastname');
            $table->string('firstname');
            $table->enum('gender', ['male', 'female']);
            $table->dateTime('dateofbirth');
            $table->foreignId('group')->constrained('grouptype', 'group_id');
            $table->string('email')->unique();
            $table->foreignId('level')->constrained('levels', 'level_id');
            $table->timestamps();
        });

        Schema::create('levels', function (Blueprint $table){
            $table->id('level_id');
            $table->string('level_name');
        });

        Schema::create('grouptype', function (Blueprint $table){
            $table->id('group_id');
            $table->string('group_name');
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
