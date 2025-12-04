<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('notes', function (Blueprint $table) {
            $table->integer("note_id")->primary()->autoIncrement();
            $table->string('title', 255);
            $table->text('description');
            $table->string("author")->nullable();
            $table->boolean('done')->default(false);
            $table->date('deadline')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('notes');
    }
};
