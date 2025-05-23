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
        Schema::disableForeignKeyConstraints();

        Schema::create('channels', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('name');
            $table->boolean('enabled')->default(false);
            $table->unsignedInteger('channel')->nullable();
            $table->unsignedInteger('shift')->default(0);
            $table->mediumText('url')->nullable();
            $table->mediumText('logo')->nullable();
            $table->string('group')->nullable();
            $table->string('group_internal')->nullable();
            $table->string('stream_id')->nullable();
            $table->string('lang')->nullable();
            $table->string('country')->nullable();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('playlist_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('group_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
            $table->unique(['title', 'name', 'group_internal', 'playlist_id']);
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('channels');
    }
};
