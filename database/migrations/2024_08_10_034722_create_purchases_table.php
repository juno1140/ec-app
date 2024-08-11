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
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->decimal('price', 8, 2)->comment('税込み');
            $table->tinyInteger('status')->comment('1:未配送, 2:配送中, 3:発送済み, 4:キャンセル');
            $table->timestamp('cancel_at')->nullable();
            $table->string('title')->comment('マスタが変わったとき用');
            $table->text('description')->comment('マスタが変わったとき用');
            $table->string('image_path')->comment('マスタが変わったとき用');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchases');
    }
};
