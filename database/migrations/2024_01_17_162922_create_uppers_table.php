<?php

use App\Models\Upper;
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
        Schema::create('uppers', function (Blueprint $table) {
            $table->id('upper_id');
            $table->string('name');
            $table->string('description');
            $table->timestamps();
        });

        Upper::create([
            'name' => 'Bőrdzseki',
            'description' => 'Egy fekete, bőr dzseki'
        ]);

        Upper::create([
            'name' => 'Kabát',
            'description' => 'Egy pufi, meleg kabát'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uppers');
    }
};
