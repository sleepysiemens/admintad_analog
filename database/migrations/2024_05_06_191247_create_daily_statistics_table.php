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
        Schema::create('daily_statistics', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('user_offer_id');
            $table->json('hosts')->nullable();

            $table->unsignedBigInteger('hosts_count')->default(0);
            $table->unsignedBigInteger('hits')->default(0);
            $table->unsignedBigInteger('tb')->default(0);

            $table->unsignedBigInteger('unique_cr')->default(0);
            $table->unsignedBigInteger('cr')->default(0);
            $table->unsignedBigInteger('approval_rate')->default(0);

            $table->unsignedBigInteger('total')->default(0);
            $table->unsignedBigInteger('approval')->default(0);
            $table->unsignedBigInteger('waiting')->default(0);
            $table->unsignedBigInteger('hold')->default(0);
            $table->unsignedBigInteger('canceled')->default(0);
            $table->unsignedBigInteger('trash')->default(0);

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
        Schema::dropIfExists('daily_statistics');
    }
};
