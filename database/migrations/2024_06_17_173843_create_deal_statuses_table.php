<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('deal_statuses', function (Blueprint $table) {
            $table->id();

            $table->string('status');

            $table->timestamps();
        });

        DB::table('deal_statuses')
            ->insert([
                'status' => 'pending',
            ]);

        DB::table('deal_statuses')
            ->insert([
                'status' => 'canceled',
            ]);

        DB::table('deal_statuses')
            ->insert([
                'status' => 'completed',
            ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deal_statuses');
    }
};
