<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModificacionLogin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
           
 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
           
    {
        //

            Schema::drop('users');

            Schema::drop('pareja');

            Schema::drop('integrante');
    }
}
