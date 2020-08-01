<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSizesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sizes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('size', 10);
            $table->timestamps();
        });

        DB::table('sizes')->insert(
            array(
                'size' => 'Nhỏ'
            )
        );

        DB::table('sizes')->insert(
            array(
                'size' => 'Vừa'
            )
        );

        DB::table('sizes')->insert(
            array(
                'size' => 'Lớn'
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
        Schema::dropIfExists('sizes');
    }
}
