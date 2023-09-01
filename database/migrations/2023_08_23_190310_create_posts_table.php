<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('point', 50);
            $table->foreignId('area_id')->constrained()->onDelete('cascade');
            $table->string('spot', 50);
            $table->foreignId('entry_id')->constrained()->onDelete('cascade');
            $table->foreignId('level_id')->constrained()->onDelete('cascade');
            $table->Integer('depth')->nullable();
            $table->foreignId('month_id')->constrained()->onDelete('cascade');
            $table->string('shop', 50)->nullable();
            $table->string('comment', 4000)->nullable();
            $table->foreignId('evaluation_id')->constrained()->onDelete('cascade');
            $table->string('image_url')->nullable();
            $table->bigInteger('user_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
