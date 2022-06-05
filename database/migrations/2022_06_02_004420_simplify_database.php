<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SimplifyDatabase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table(
            'gifts', function (Blueprint $table) {
                $table->unsignedInteger('theme_id')->nullable()->change();
            }
        );

       Schema::table(
            'profiles', function (Blueprint $table) {
                $table->unsignedInteger('segment_id')->nullable()->change();
                $table->unsignedInteger('relax_id')->nullable()->change();
                $table->unsignedInteger('sexual_option_id')->nullable()->change();
                $table->boolean('like_day')->nullable()->default(null)->change();
                $table->boolean('like_animal')->nullable()->default(null)->change();
                $table->unsignedInteger('hobby_id')->nullable();
                $table->foreign('hobby_id')->references('id')->on('options');
            }
        );

        Schema::table(
            'contacts', function (Blueprint $table) {
                $table->unsignedInteger('state_id')->nullable()->change();
                $table->boolean('is_woman')->nullable()->default(null)->change();
                $table->integer('age')->nullable()->change();
            }
        ); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table(
            'gifts', function (Blueprint $table) {
                $table->unsignedInteger('theme_id')->nullable(false)->change();
            }
        );

        Schema::table(
            'profiles', function (Blueprint $table) {
                $table->unsignedInteger('segment_id')->nullable(false)->change();
                $table->unsignedInteger('relax_id')->nullable(false)->change();
                $table->unsignedInteger('sexual_option_id')->nullable(false)->change();
                $table->boolean('like_day')->nullable(false)->change();
                $table->boolean('like_animal')->nullable(false)->change();
                $table->dropforeign('profiles_hobby_id_foreign');
                $table->dropColumn('hobby_id');
            }
        ); 
        
        Schema::table(
            'contacts', function (Blueprint $table) {
                $table->unsignedInteger('state_id')->nullable(false)->change();
                $table->boolean('is_woman')->nullable(false)->change();
                $table->tinyInteger('age')->nullable(false)->change();
            }
        ); 
    }
}
