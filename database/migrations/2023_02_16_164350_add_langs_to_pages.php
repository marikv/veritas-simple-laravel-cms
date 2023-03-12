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
        Schema::table('pages', function (Blueprint $table) {
            $table->text('title_ru')->nullable();
            $table->text('description_ru')->nullable();
            $table->text('content_ru')->nullable();
            $table->text('title_en')->nullable();
            $table->text('description_en')->nullable();
            $table->text('content_en')->nullable();
        });
        Schema::table('articles', function (Blueprint $table) {
            $table->text('title_ru')->nullable();
            $table->text('description_ru')->nullable();
            $table->text('content_ru')->nullable();
            $table->text('title_en')->nullable();
            $table->text('description_en')->nullable();
            $table->text('content_en')->nullable();
        });
        Schema::table('blocks', function (Blueprint $table) {
            $table->text('title_ru')->nullable();
            $table->text('description_ru')->nullable();
            $table->text('content_ru')->nullable();
            $table->text('title_en')->nullable();
            $table->text('description_en')->nullable();
            $table->text('content_en')->nullable();
        });
        Schema::table('categories', function (Blueprint $table) {
            $table->text('content')->nullable();
            $table->text('title_ru')->nullable();
            $table->text('description_ru')->nullable();
            $table->text('content_ru')->nullable();
            $table->text('title_en')->nullable();
            $table->text('description_en')->nullable();
            $table->text('content_en')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pages', function (Blueprint $table) {
            //
        });
    }
};
