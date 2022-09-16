<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credit_cards', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('last',8);
            $table->integer('month');
            $table->integer('year');
            $table->integer('cvv');
            $table->binary('cypher');
            $table->string('keygen');
            $table->integer('key_id')->unsigned()->default(1);
            $table->integer('type_id')->unsigned()->default(1);
            $table->integer('entity_id')->unsigned()->default(1);
            $table->integer('status_id')->unsigned()->default(1);
            $table->integer('clients_id')->unsigned()->default(1);
            $table->timestamps();
            
            $table->foreign('key_id')->references('id')->on('credit_card_keys');
            $table->foreign('type_id')->references('id')->on('credit_card_types');
            $table->foreign('entity_id')->references('id')->on('credit_card_entities');
            $table->foreign('status_id')->references('id')->on('statuses');
            $table->foreign('clients_id')->references('id')->on('clients');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('credit_cards');
    }
}
