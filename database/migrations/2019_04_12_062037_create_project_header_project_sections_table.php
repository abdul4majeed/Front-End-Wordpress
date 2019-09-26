<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectHeaderProjectSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_header_project_sections', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('url');
            $table->string('name');
            $table->string('tag');
            $table->integer('link_id');
            $table->text('description')->nullable();
            $table->text('home_page')->nullable();

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
        Schema::dropIfExists('project_header_project_sections');
    }
}
