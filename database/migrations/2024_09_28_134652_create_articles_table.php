<?php

use App\Models\Category;
use App\Models\User;
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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(User::class)->constrained();
            $table->foreignIdFor(Category::class)->constrained();

            $table->string('title'); // tiêu đề
            $table->text('content'); // nội dung tin tức
            $table->text('summary'); //tóm tắt nội dung
            $table->enum('status', ['published', 'draft', 'archived']); // trạng thái đã xuất bản, dự thảo, lưu trữ
            $table->timestamp('published_at'); // thời gian xuất bản
            $table->string('image')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
