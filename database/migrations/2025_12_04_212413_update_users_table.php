<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::table("users", function (Blueprint $table) {
            $table->unsignedInteger("age")->after("password")->default(18);
            $table->string("address")->after("age")->nullable();
            $table->unsignedInteger("zipCode")->after("address")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::table("users", function (Blueprint $table) {
            $table->dropColumn("age");
            $table->dropColumn("address");
            $table->dropColumn("zipCode");
        });
    }
};
