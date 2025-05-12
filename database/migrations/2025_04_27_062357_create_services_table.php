<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name');  // Service name
            $table->text('description')->nullable();  // Service description
            $table->timestamps();
        });

        DB::table('services')->insert([
            [
                'name' => 'Oil Change',
                'description' => 'A comprehensive oil change service for your vehicle.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tire Replacement',
                'description' => 'Replacing old tires with high-quality new tires.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Brake Service',
                'description' => 'Full inspection and replacement of brakes and pads.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Battery Replacement',
                'description' => 'Replacing old or faulty batteries to ensure vehicle reliability.',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
};
