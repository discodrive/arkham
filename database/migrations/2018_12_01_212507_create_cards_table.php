<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {

            foreach (\App\cardMap() as $type => $field) {
                foreach ($field as $item) {
                    switch ($type) {
                        case 'boolean':
                            $table->$type($item)->default(false);
                            break;
                        case 'integer':
                            $table->$type($item)->default(0);
                            break;
                        case 'string':
                            $table->$type($item)->default('');
                            break;
                        default:
                            $table->$type($item)->nullable();
                    }
                }
            }

            $table->increments('id');
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
        Schema::dropIfExists('cards');
    }
}
