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
        Schema::create('task_statuses', function (Blueprint $table) {
            $table->id();

            $table->string('status');

            $table->timestamps();
        });

        DB::table('task_statuses')
            ->insert([
                'status' => 'pending',
            ]);

        DB::table('task_statuses')
            ->insert([
                'status' => 'in_progress',
            ]);

        DB::table('task_statuses')
            ->insert([
                'status' => 'completed',
            ]);

        DB::table('task_statuses')
            ->insert([
                'status' => 'canceled',
            ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('task_statuses');
    }
};
