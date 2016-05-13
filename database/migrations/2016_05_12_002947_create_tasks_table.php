<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('tasks', function (Blueprint $table) {

         $table->increments('id');

         $table->integer('list_id')->unsigned();
         $table->foreign('list_id')->references('id')->on('tasklists');
         $table->string('task');
         $table->string('note');
         $table->boolean('complete')->default(0);

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
         Schema::drop('tasks');
     }
}
