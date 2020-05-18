<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUjsoftWechetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ujsoft_wechets', function (Blueprint $table) {
            $table->increments('id');
            $table->string("appid",50)->comment("公众号appid")->default("");
            $table->string("unionid","50")->comment("开放平台标识")->default("");
            $table->string("wx_openid",50)->comment("公众号openid")->default("");
            $table->string("nickname",100)->comment("用户昵称")->default("");
            $table->string("headimgurl",200)->comment("用户头像")->default("");
            $table->string("sex",100)->comment("性别")->default("");
            $table->string("city",100)->comment("城市")->default("");

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
        Schema::dropIfExists('ujsoft_wechets');
    }
}
