<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlatinumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('platinums', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('title');
            $table->string('code');
            $table->string('song_by');
            $table->string('status');
            $table->dateTime('created_at')->nullable();
            $table->uuid('created_by')->nullable();
            $table->dateTime('updated_at')->nullable();
            $table->uuid('updated_by')->nullable();
            $table->dateTime('deleted_at')->nullable();
            $table->uuid('deleted_by')->nullable();
            $table->index(['updated_at']);
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('platinums');
    }
}
