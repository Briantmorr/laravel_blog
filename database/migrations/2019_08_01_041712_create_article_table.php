<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 50)->index();
            $table->text('body')->nullable();
            $table->integer('author_id')->unsigned()->index();
            $table->integer('category_id')->unsigned()->index()->nullable();
            $table->integer('status_id')->unsigned()->index();
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('author_id')->references('id')->on('users');
            $table->foreign('category_id')->references('id')->on('mscategory');
            $table->foreign('status_id')->references('id')->on('msstatus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article');
    }
}
