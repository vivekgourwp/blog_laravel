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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->text('excerpt')->nullable();
            $table->string('status');
            $table->unsignedBigInteger('author_id')->nullable();  // Nullable author_id with unsignedBigInteger
            $table->string('type');
            $table->unsignedBigInteger('parent_id')->nullable();
            // $table->string('guid')->unique();
            
            // Foreign key constraint with onDelete('set null')
            $table->foreign('author_id')->references('id')->on('users')->onDelete('set null');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
