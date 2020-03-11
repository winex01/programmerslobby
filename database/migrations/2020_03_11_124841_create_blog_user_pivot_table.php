<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogUserPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_views', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->unsignedBigInteger('blog_id')->index();
            $table->foreign('blog_id')->references('id')->on('blogs')->onDelete('cascade');

            $table->unsignedBigInteger('user_id')->index()->default(2); //2 = guest user;
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('blog_views');
    }
}
