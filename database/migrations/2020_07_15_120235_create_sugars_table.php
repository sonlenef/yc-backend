<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSugarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sugars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sugar', 50);
            $table->timestamps();
        });

        DB::table('sugars')->insert(
            array(
                'sugar' => 'Không đường'
            )
        );

        DB::table('sugars')->insert(
            array(
                'sugar' => 'Ít đường'
            )
        );

        DB::table('sugars')->insert(
            array(
                'sugar' => 'Vừa'
            )
        );

        DB::table('sugars')->insert(
            array(
                'sugar' => 'Nhiều đường'
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sugars');
    }
}
