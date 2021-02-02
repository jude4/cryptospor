<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeatureSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feature_sections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('home_page_id')->constrained('home_pages')->onDelete('cascade');
            $table->string('name')->nullable();
            $table->string('title')->nullable();
            $table->string('icon')->nullable();
            $table->string('sub_title')->nullable();
            $table->string('description')->nullable();
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
        Schema::dropIfExists('feature_sections');
    }
}