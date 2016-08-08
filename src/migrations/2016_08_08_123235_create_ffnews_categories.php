<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFfnewsCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ffnews_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('parent_id')->nullable();
            $table->string('title');
            $table->string('slug')->nullable;
            $table->text('note')->nullable;
            $table->text('desc')->nullable;
            $table->timestamps();
            $table->index([ 'parent_id', 'slug' ]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ffnews_categories');
    }
}
