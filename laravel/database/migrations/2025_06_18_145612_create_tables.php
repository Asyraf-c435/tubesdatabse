<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::dropIfExists('reports');
        Schema::dropIfExists('badge_user');
        Schema::dropIfExists('badges');
        Schema::dropIfExists('comment_user');
        Schema::dropIfExists('comments');
        Schema::dropIfExists('lesson_user');
        Schema::dropIfExists('lessons');
        Schema::dropIfExists('course_user');
        Schema::dropIfExists('courses');
        Schema::dropIfExists('users');
        
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->unique();
            $table->string('slug', 255)->charset('ascii')->collation('ascii_bin')->unique();
            $table->string('display_name', 255)->nullable();
            $table->string('email', 255)->unique();
            $table->string('password');
            $table->rememberToken();
            $table->text('image_link')->nullable();
            $table->text('description')->nullable();
            $table->boolean('is_admin')->default(false);
            $table->softDeletes();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();
        });

        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('name', 255)->unique();
            $table->string('slug', 255)->charset('ascii')->collation('ascii_bin')->unique();
            $table->text('image_link');
            $table->text('description');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('course_user', function (Blueprint $table) {
            $table->foreignId('course_id')->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->tinyInteger('rating')->nullable();
            $table->tinyInteger('vote')->default(0);
            $table->primary(['course_id', 'user_id']);
        });

        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained()->cascadeOnDelete();
            $table->string('name', 255);
            $table->string('slug', 255)->charset('ascii')->collation('ascii_bin')->unique();
            $table->text('description');
            $table->text('image_link')->nullable();
            $table->text('content');
            $table->softDeletes();
            $table->timestamps();
            
            $table->unique(['course_id', 'name']);
            $table->unique(['course_id', 'slug']);
        });

        Schema::create('lesson_user', function (Blueprint $table) {
            $table->foreignId('lesson_id')->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->boolean('is_finished')->default(false);
            $table->tinyInteger('rating')->nullable();
            $table->tinyInteger('vote')->default(0);
            $table->primary(['lesson_id', 'user_id']);
        });

        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->text('content');
            $table->morphs('commentable');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('comment_user', function (Blueprint $table) {
            $table->foreignId('comment_id')->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->tinyInteger('vote')->default(0);
            $table->primary(['comment_id', 'user_id']);
        });

        Schema::create('badges', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained()->cascadeOnDelete();
            $table->string('name', 255);
            $table->text('image_link');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('badge_user', function (Blueprint $table) {
            $table->foreignId('badge_id')->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->timestamp('obtained_date')->useCurrent();
            $table->primary(['badge_id', 'user_id']);
        });

        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->morphs('reportable');
            $table->text('content');
            $table->tinyInteger('state')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reports');
        Schema::dropIfExists('badge_user');
        Schema::dropIfExists('badges');
        Schema::dropIfExists('comment_user');
        Schema::dropIfExists('comments');
        Schema::dropIfExists('lesson_user');
        Schema::dropIfExists('lessons');
        Schema::dropIfExists('course_user');
        Schema::dropIfExists('courses');
        Schema::dropIfExists('users');
    }
};