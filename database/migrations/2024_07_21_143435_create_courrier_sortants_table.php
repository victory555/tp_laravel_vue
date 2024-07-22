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
    {Schema::dropIfExists('courrier_sortants');
        Schema::create('courrier_sortants', function (Blueprint $table) {
        $table->id();
        $table->string('titre');
        $table->text('description');
        $table->timestamp('date_envoi');
        $table->foreignId('user_id')->constrained()->onDelete('cascade');
        $table->timestamps();
    });
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courrier_entrants');
    }
};
