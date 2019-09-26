<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFooterCopyWritesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footer_copy_writes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('footer_copyright_string');
            $table->text('footer_site_name_string');
            $table->text('footer_designer_title');
            $table->text('footer_developer_name');
            $table->text('footer_url');
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
        Schema::dropIfExists('footer_copy_writes');
    }
}
