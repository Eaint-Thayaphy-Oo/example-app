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
        Schema::create('data_tables', function (Blueprint $table) {
            $table->id('customer_id');
            $table->boolean('confirmed');
            $table->string('customer_name')->nullable(true);
            $table->string('name',50);
            $table->char('charName',20)->nullable(true);
            $table->date('birthday')->nullable(true);
            $table->dateTime('order_date');
            $table->timestamp('release_date');
            $table->float('amount')->default(10000);
            $table->integer('votes');
            $table->string('myText');
            $table->text('description');
            $table->mediumInteger('myTextMedium');
            $table->longText('myTextLong');
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
        Schema::dropIfExists('data_tables');
    }
};
