<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFooterContectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footer_contects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('description');
            $table->text('address');
            $table->text('fb_link')->nullable();
            $table->text('twitter_link')->nullable();
            $table->text('instagram_link')->nullable();
            $table->text('pinterest_link')->nullable();
            $table->text('gplus_link')->nullable();
            $table->text('watsapp_number')->nullable();
            $table->text('watsapp_text')->nullable();
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
        Schema::dropIfExists('footer_contects');
    }
}
