<?php

use App\Models\Bottom;
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
        Schema::create('bottoms', function (Blueprint $table) {
            $table->id('bottom_id');
            $table->string('name');
            $table->string('description');
            $table->timestamps();
        });

        Bottom::create([
            'name' => 'Szoknya',
            'description' => 'Egy színes szoknya.'
        ]);

        
        Bottom::create([
            'name' => 'Farmer nadrág',
            'description' => 'Egy kék, farmer nadrág.'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bottoms');
    }
};
