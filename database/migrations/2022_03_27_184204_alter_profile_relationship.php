<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterProfileRelationship extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table(
            'profiles', function (Blueprint $table) {
                $table->unsignedInteger('relationship_id')->after('sign_id')->nullable();
                $table->char('who_is', 1)->after('is_woman');
                $table->foreign('relationship_id')->references('id')->on('options');
            }
        );

        DB::statement("update profiles set who_is = 'F' where is_woman = true");
        DB::statement("update profiles set who_is = 'M' where is_woman = false");

        Schema::table(
            'profiles', function (Blueprint $table) {
                $table->dropColumn('is_woman');
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
            'profiles', function (Blueprint $table) {
                $table->dropColumn('relationship_id');
                $table->dropColumn('who_is');
            }
        );
    }
}
