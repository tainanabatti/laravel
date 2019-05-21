<?php

    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;

    class CreateClientesTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('clientes', function (Blueprint $table) {
                $table->increments('id');
                $table->string('nome', 30);
                $table->integer('telefone');
                $table->string('rua');
                $table->text('complemento');
                $table->string('bairro', 50)    ;
                $table->integer('cep');
                $table->string('cidade', 50);
                $table->string('estado', 25);
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
            Schema::dropIfExists('clientes');
        }
    }
