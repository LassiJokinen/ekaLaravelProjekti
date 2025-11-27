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
        Schema::create('to_dos', function (Blueprint $table) {
            $table->id();
            $table->text('nimi');
            
            $table->text('tehtavan_kuvaus')->nullable();

            $table->enum('status', [
                'idea',
                'toteutetaan',
                'aloitettu',
                'tehty 50%',
                'tehty 70%',
                'valmis',
                'hylataan ehdotus',
                'tehdaan seuraavaan versioon'
            ])->default('idea');

            $table->date('maarapaiva')->nullable();

            $table->text('kiireellisyys')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('to_dos', function (Blueprint $table) {
        $table->dropColumn('tehtavan_kuvaus');
        $table->dropColumn('status');
    });
    }
};
