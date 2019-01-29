<?php
/*-----------------------------------------------
* @package Module Permissions
* @author  Sanae
* @copyright   Copyright (c) 2018 - MolenGeek (https://molengeek.com/)
* @license http://opensource.org/licenses/MIT  MIT License
* @since   Version 1.0.0
* @TODO (??)
* @param type
* @param2 type
* @return TypeObjet
-----------------------------------------------*/
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('categorie_role_id');
            $table->foreign('categorie_role_id')->references('id')->on('categorie_roles');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
