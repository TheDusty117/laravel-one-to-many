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
    {
        Schema::table('projects', function (Blueprint $table) {
            //definisco la connessione tra tabelle, nullable e dove si deve collocare, in questo caso dopo id
            $table->unsignedBigInteger('category_id')-nullable()->after('id');
            //uso la foreign key per agganciare la nuova colonna,
            $table->foreign('category_id')->references('id')->on('caterogies')
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projects', function (Blueprint $table) {
            //
        });
    }
};
