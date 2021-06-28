<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->longText('description');
            $table->timestamp('startDate')->nullable(true);
            $table->timestamp('deliverDate')->nullable(true);
            $table->time('standbyTime');
            $table->unsignedBigInteger('member_id');
            $table->foreign('member_id')->references('id')->on('members')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('state_id');
            /* $table->unsignedBigInteger('priority_id'); */
            $table->foreign('state_id')->references('id')->on('states')
                ->onDelete('cascade')->onUpdate('cascade');
            /* $table->foreign('priority_id')->references('id')->on('priorities')
                ->onDelete('cascade')->onUpdate('cascade'); */
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
        Schema::dropIfExists('tasks');
    }
}
