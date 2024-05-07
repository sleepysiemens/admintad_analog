<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('user_offers', function (Blueprint $table) {
            /*$table->dropColumn('click');
            $table->dropColumn('host');
            $table->dropColumn('host_count');
            $table->dropColumn('country');
            $table->dropColumn('tb');
            $table->dropColumn('unique_cr');
            $table->dropColumn('cr');
            $table->dropColumn('approval_rate');
            $table->dropColumn('approved');
            $table->dropColumn('total');
            $table->dropColumn('waiting');
            $table->dropColumn('hold');
            $table->dropColumn('canceled');
            $table->dropColumn('trash');
            $table->dropColumn('rub');
            $table->dropColumn('usd');
            $table->dropColumn('eur');
            $table->dropColumn('sources');
            $table->dropColumn('daily_leads');*/
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user_offers', function (Blueprint $table) {
            //
        });
    }
};
