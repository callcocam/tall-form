<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGaleriaInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gallery_infos', function (Blueprint $table) {
            $table->uuid('id')->primary();        
            $table->string('name', 255)->nullable();   
            $table->string('slug', 255)->nullable();   
            $table->string('type', 255)->nullable()->default('name');   
            $table->foreignUuid('gallery_item_id')->nullable()->constrained('gallery_items')->cascadeOnDelete();
            $table->foreignUuid('user_id')->nullable()->constrained('users')->cascadeOnDelete();
            $table->foreignUuid('status_id')->nullable()->constrained('statuses')->cascadeOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gallery_infos');
    }
}
