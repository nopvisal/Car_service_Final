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

            Schema::table('users', function (Blueprint $table) {
                // Add 'phone' column only if it doesn't exist
                if (!Schema::hasColumn('users', 'phone')) {
                    $table->string('phone')->nullable();
                }

                // Add 'address' column only if it doesn't exist
                if (!Schema::hasColumn('users', 'address')) {
                    $table->string('address')->nullable();
                }
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Remove columns if they exist during rollback
            if (Schema::hasColumn('users', 'phone')) {
                $table->dropColumn('phone');
            }

            if (Schema::hasColumn('users', 'address')) {
                $table->dropColumn('address');
            }
        });
    }
};
