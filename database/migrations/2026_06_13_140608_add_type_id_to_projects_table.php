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
        Schema::table('projects', function (Blueprint $table) {
            // Rimuovere Colonna Category
            $table->dropColumn('category');

            // Creo Colonna type_id e assegno foreign key e constrained
            $table->foreignId('type_id')->default(1)->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            // Inserisco Colonna Category
            $table->string('category')->after('customer');

            // Rimuovo foreign key e constrained
            $table->dropForeign('projects_type_id_foreign');

            // Rimuovo Colonna type_id
            $table->dropColumn('type_id');
        });
    }
};
