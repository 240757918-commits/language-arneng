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
    Schema::create('lessons', function (Blueprint $table) {
        $table->id();
        $table->string('title'); // عنوان الدرس
        $table->text('content')->nullable(); // محتوى الدرس
        $table->string('language'); // نوع اللغة (عربي، إنجليزي، تركي)
        $table->string('video_url')->nullable(); // رابط فيديو (اختياري)
        $table->text('description'); // وصف الدرس
        $table->string('level'); // مستوى الدرس (مبتدئ - متوسط - متقدم)
        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lessons');
    }
};
