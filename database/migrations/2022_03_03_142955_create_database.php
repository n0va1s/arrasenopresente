<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatabase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('options', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->char('group', 3);
            $table->softDeletes();
        });

        Schema::create('gifts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('occasion_id');
            $table->unsignedInteger('price_range_id');
            $table->unsignedInteger('theme_id');
            $table->text('good_gift')->nullable();
            $table->text('bad_gift')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('occasion_id')->references('id')->on('options');
            $table->foreign('price_range_id')->references('id')->on('options');
            $table->foreign('theme_id')->references('id')->on('options');
        });

        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('gift_id');
            $table->unsignedInteger('age_range_id');
            $table->unsignedInteger('segment_id');
            $table->unsignedInteger('relax_id');
            $table->unsignedInteger('sexual_option_id');
            $table->unsignedInteger('sign_id');
            $table->boolean('is_woman')->default(false);
            $table->boolean('like_day')->default(false);
            $table->boolean('like_animal')->default(false);
            $table->text('more_information')->nullable();
            $table->foreign('gift_id')->references('id')->on('gifts');
            $table->foreign('age_range_id')->references('id')->on('options');
            $table->foreign('segment_id')->references('id')->on('options');
            $table->foreign('relax_id')->references('id')->on('options');
            $table->foreign('sexual_option_id')->references('id')->on('options');
            $table->foreign('sign_id')->references('id')->on('options');
        });

        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('gift_id');
            $table->unsignedInteger('state_id');
            $table->string('emailFrom');
            $table->string('emailTo')->nullable();
            $table->string('name');
            $table->boolean('is_woman')->default(false);
            $table->tinyInteger('age');
            $table->foreign('gift_id')->references('id')->on('gifts');
            $table->foreign('state_id')->references('id')->on('options');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
        Schema::dropIfExists('profiles');
        Schema::dropIfExists('gifts');
        Schema::dropIfExists('options');
    }
}
