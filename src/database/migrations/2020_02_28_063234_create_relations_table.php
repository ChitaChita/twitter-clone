<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relations', function (Blueprint $table) {
            $table->bigInteger('user_id')->unsigned();
			$table->bigInteger('follow_id')->unsigned();

			$table->index('user_id');
			$table->index('follow_id');

			$table->foreign('user_id')
				->references('id')
				->on('users')
				->onDelete('cascade')
                ->onUpdate('cascade');

            $table->unique([
                'follow_id',
                'user_id'
            ]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relations');
    }
}
