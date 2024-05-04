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
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone')->nullable();

            $table->string('webmoney_wmz')->nullable();
            $table->string('webmoney_wme')->nullable();

            $table->string('yandex_money_number')->nullable();

            $table->string('qiwi_wallet')->nullable();

            $table->string('capitalist_usd')->nullable();
            $table->string('capitalist_rub')->nullable();

            $table->string('usdt_trc20_address')->nullable();

            $table->string('debit_card')->nullable();
            $table->string('bank_name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
