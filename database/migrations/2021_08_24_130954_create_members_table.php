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
            $table->string('name');
            $table->string('firstname');
            $table->enum('geslacht', ['male', 'female']);
            $table->date('dateofbirth');
            $table->enum('group', ['sensei', 'member', 'passive member']);
            $table->string('email');
            $table->enum('level' , ['6Dan', '5Dan', '4Dan', '3Dan', '2Dan', '1Dan', '1Kyu', '2Kyu', '3Kyu', '4Kyu', '5Kyu', '6Kyu']);
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
