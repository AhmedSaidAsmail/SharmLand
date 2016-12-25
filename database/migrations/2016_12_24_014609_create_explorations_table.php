<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExplorationsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('explorations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('item_id');
            $table->time('started_at')->nullable();
            $table->time('ended_at')->nullable();
            $table->string('txt');
            $table->rememberToken();
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('explorations');
    }

}