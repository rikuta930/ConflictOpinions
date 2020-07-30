<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNonApprovedTopicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('non_approved_topic', function (Blueprint $table) {
            $table->id();
            $table->string('topic_name');
            $table->string('category');
            $table->string('file_name');
            $table->string('pro1');
            $table->string('con1');
            $table->string('pro2');
            $table->string('con2');
            $table->string('pro3');
            $table->string('con3');
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
        Schema::dropIfExists('non_approved_topic');
    }
}
