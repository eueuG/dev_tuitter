<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTweetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tweets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->unsignedBigInteger('user_id')->comment('ユーザーID');
            $table->foreign('user_id')->references('id')->on('users');

            $table->bigInteger('reply_to_id')->nullable()->comment('リプライ元ID');
            $table->bigInteger('retweet_id')->nullable()->comment('リツイート元ID');

            $table->string('content')->nullable()->comment('内容');
            $table->string('img_path')->nullable()->comment('画像URL');
            $table->string('img_path2')->nullable()->comment('画像URL2');
            $table->string('img_path3')->nullable()->comment('画像URL3');
            $table->string('img_path4')->nullable()->comment('画像URL4');

            $table->bigInteger('fav_count')->nullable()->comment('お気に入り数');
            $table->bigInteger('retw_count')->nullable()->comment('リツイート数');

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
        Schema::dropIfExists('tweets');
    }
}
