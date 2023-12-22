<?php

namespace Dovutuan\Lararole\Databases\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('screen_permissions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('screen_id')->constrained();
            $table->foreignId('permission_id')->constrained();
            $table->unique(['screen_id', 'permission_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('screen_permissions');
    }
};
