<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestmentPlanSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investment_plan_sections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('home_page_id')->constrained('home_pages')->onDelete('cascade');
            $table->string('name')->nullable();
            $table->string('title')->nullable();
            $table->string('icon')->nullable();
            $table->string('min_price')->nullable();
            $table->string('max_price')->nullable();
            $table->string('plan')->nullable();
            
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
        Schema::dropIfExists('investment_plan_sections');
    }
}