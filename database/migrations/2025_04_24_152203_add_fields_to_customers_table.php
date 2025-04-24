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
        Schema::table('customers', function (Blueprint $table) {
            Schema::table('customers', function (Blueprint $table) {
                // Add 'phone' column only if it doesn't exist
                if (!Schema::hasColumn('customers', 'phone')) {
                    $table->string('phone')->nullable();
                }

                // Add 'address' column only if it doesn't exist
                if (!Schema::hasColumn('customers', 'address')) {
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
        Schema::table('customers', function (Blueprint $table) {
            if (Schema::hasColumn('customers', 'phone')) {
                $table->dropColumn('phone');
            }

            if (Schema::hasColumn('customers', 'address')) {
                $table->dropColumn('address');
            }
        });
        
    }
};
