<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('blogs', function (Blueprint $table) {
            //
            $table->enum('status', ['PUBLISHED', 'DRAFT', 'PENDING', 'REJECT'])->default('DRAFT')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('blogs', function (Blueprint $table) {
            //
            $table->enum('status', ['PUBLISHED', 'DRAFT', 'PENDING'])->default('DRAFT')->change();
        });
    }
}
