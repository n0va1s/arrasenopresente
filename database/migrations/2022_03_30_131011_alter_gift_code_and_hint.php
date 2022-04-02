<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use App\Models\Gift;

class AlterGiftCodeAndHint extends Migration
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
                $table->uuid('code')->index();
            }
        );

        foreach (Gift::all() as $gift) {
            $code = Str::uuid()->toString();
            DB::statement("update gifts set code = '$code' where id = $gift->id");
        }

        Schema::create(
            'hints', function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedInteger('gift_id');
                $table->unsignedInteger('group_id');
                $table->string('title');
                $table->string('link')->nullable();
                $table->datetime('expired_at')->nullable();
                $table->boolean('is_confirmed')->default(false);
                $table->foreign('gift_id')->references('id')->on('gifts');
                $table->foreign('group_id')->references('id')->on('options');
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
                $table->dropColumn('code');
            }
        );

        Schema::dropIfExists('hints');
    }
}
