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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->foreignId("cat_id")->constrained("categories")->cascadeOnDelete();
            $table->string('title');
            $table->string('description');
            $table->float('price', 8, 2);
            $table->float('discount', 8, 2);
            $table->float('price_disc', 8, 2);
            $table->string('made_in');
            $table->string('details');
            $table->text('image');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
