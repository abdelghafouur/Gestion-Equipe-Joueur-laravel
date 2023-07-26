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
        Schema::create('joueurs', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->integer('numero');
            $table->string('position');
            $table->integer('anneeNaissance');
            $table->string('nationnalite');
            // $table->unsignedBigInteger('equipe_id');
            // $table->foreign('equipe_id')->references('id')->on('equipes')->onUpdate('Cascade')->onDelete('Cascade');
            $table->foreignId('equipe_id')->constrained()
                ->onUpdate('Cascade')
                ->onDelete('Cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('joueurs');
    }
};
