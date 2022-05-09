<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use App\Models\Hint;

class AlterHintCodeDelete extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table(
            'hints', function (Blueprint $table) {
                $table->dropColumn('expired_at');
            }
        );
        
        Schema::table(
            'hints', function (Blueprint $table) {
                $table->uuid('code')->index();
                $table->softDeletes();
            }
        );

        foreach (Hint::all() as $hint) {
            $code = Str::uuid()->toString();
            DB::statement("update hints set code = '$code' where id = $hint->id");
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table(
            'hints', function (Blueprint $table) {
                $table->dropColumn('code');
            }
        );

        Schema::table(
            'hints', function (Blueprint $table) {
                $table->datetime('expired_at')->nullable();
            }
        );

    }
}
