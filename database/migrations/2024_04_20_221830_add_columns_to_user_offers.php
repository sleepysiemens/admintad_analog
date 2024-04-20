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
            $table->unsignedInteger('tb')->default(0);

            $table->decimal('unique_cr')->default(0);
            $table->decimal('cr')->default(0);
            $table->decimal('approval_rate')->default(0);

            $table->unsignedInteger('total')->default(0);
            $table->unsignedInteger('approved')->default(0);
            $table->unsignedInteger('waiting')->default(0);
            $table->unsignedInteger('hold')->default(0);
            $table->unsignedInteger('canceled')->default(0);
            $table->unsignedInteger('trash')->default(0);

            $table->decimal('rub')->default(0);
            $table->decimal('usd')->default(0);
            $table->decimal('eur')->default(0);
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
