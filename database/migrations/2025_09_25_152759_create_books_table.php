<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
             $table->string('author_id')->nullable();
            $table->string('name')->nullable();
            $table->integer('pages')->nullable();
            $table->string('isbn')->nullable();
            $table->decimal('price',10, 2)->nullable();
            $table->text('description')->nullable();  //its take long char 65535
            $table->string('image_url')->nullable(); 
            $table->tinyInteger('stock')->default(1)->comment('1=active, 0=inactive');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')
            ->references('id')
            ->on('categories')
            ->onDelete('cascade');
            $table->string('format')->nullable();
          
            $table->string('language')->nullable();
            $table->date('publish_date')->nullable();
            $table->string('edition')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
