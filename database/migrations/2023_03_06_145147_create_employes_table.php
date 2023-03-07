<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
    public function up(): void
    {
        Schema::create('employes', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('firstName')->nullable();
            $table->char('number')->nullable();
            $table->string('mail')->nullable();
            $table->decimal('salary')->unsigned()->nullable();
            $table->string('head')->nullable();
            $table->unsignedBigInteger('position_id')->nullable();
            $table->timestamps();

            $table->softDeletes();

            $table->index('position_id', 'employe_position_idx');
            $table->foreign('position_id', 'employe_position_fk')->on('positions')->references('id');
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('employes');
    }
};
