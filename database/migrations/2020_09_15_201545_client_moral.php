<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ClientMoral extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients_morals', function (Blueprint $table) {
            $table->increments('idmoral');
            $table->string('nom_entreprise');
            $table->string('adresse_entreprise');
            $table->string('telephone');
            $table->string('email');
            $table->string('type_entreprise');
            $table->string('raison_social');
            $table->string('identifiant_entreprise');
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
