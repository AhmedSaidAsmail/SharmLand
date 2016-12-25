<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSortsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('sorts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('basicsort_id');
            $table->string('name')->unique();
            $table->integer('arrangement')->default(0);
            $table->string('title');
            $table->string('img')->nullable();
            $table->text('keywords')->nullable();
            $table->text('description')->nullable();
            $table->integer('status')->default(0);
            $table->integer('recommended')->default(0);
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
        Schema::dropIfExists('sorts');
    }

}