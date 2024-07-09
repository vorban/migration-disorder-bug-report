<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('customers')->insert([
            'name' => 'Default Customer',
            'email' => 'default@example.com',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('customers')
            ->where('email', 'default@example.com')
            ->delete();
    }
};
