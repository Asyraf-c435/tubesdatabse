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
        // CreateCountriesTable
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
        });
        // CREATE TABLE countries (
        //     id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        //     name VARCHAR(255) NOT NULL UNIQUE
        // );

        // CreateSubscriptionsTable
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('plan');
            $table->integer('price');
            $table->boolean('is_annual');
            $table->timestamp('purchased_at')->useCurrent();
        });
        // CREATE TABLE subscriptions (
        //     id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        //     plan TINYINT NOT NULL,
        //     price INT NOT NULL,
        //     is_annual BOOLEAN NOT NULL,
        //     purchased_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        // );

        // CreateAppUsersTable
        Schema::create('app_users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('display_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->text('description')->nullable();
            $table->foreignId('country_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('subscription_id')->nullable()->constrained()->onDelete('set null');
            $table->text('image_link')->nullable();
            $table->text('user_link')->nullable();
            $table->text('twitter')->nullable();
            $table->text('facebook')->nullable();
            $table->text('linkedin')->nullable();
            $table->text('instagram')->nullable();
            $table->text('tiktok')->nullable();
            $table->tinyInteger('type')->default(0);
            $table->tinyInteger('rank')->default(0);
            $table->integer('status_points')->default(0);
            $table->string('remember_token', 100)->nullable();
            $table->timestamp('created_at')->useCurrent();
        });
        // CREATE TABLE app_users (
        //     id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        //     name VARCHAR(255) NOT NULL UNIQUE,
        //     display_name VARCHAR(255) NOT NULL,
        //     email VARCHAR(255) NOT NULL UNIQUE,
        //     password VARCHAR(255) NOT NULL,
        //     description TEXT,
        //     country_id BIGINT UNSIGNED,
        //     subscription_id BIGINT UNSIGNED,
        //     image_link TEXT,
        //     user_link TEXT,
        //     twitter TEXT,
        //     facebook TEXT,
        //     linkedin TEXT,
        //     instagram TEXT,
        //     tiktok TEXT,
        //     type TINYINT DEFAULT 0,
        //     rank TINYINT DEFAULT 0,
        //     status_points INT DEFAULT 0,
        //     remember_token VARCHAR(100),
        //     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        //     FOREIGN KEY (country_id) REFERENCES countries(id) ON DELETE CASCADE,
        //     FOREIGN KEY (subscription_id) REFERENCES subscriptions(id) ON DELETE SET NULL
        // );

        // CreateCategoriesTable
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
        });
        // CREATE TABLE categories (
        //     id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        //     name VARCHAR(255) NOT NULL UNIQUE
        // );

        // CreateTagsTable
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
        });
        // CREATE TABLE tags (
        //     id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        //     name VARCHAR(255) NOT NULL UNIQUE
        // );

        // CreateWebsitesTable
        Schema::create('websites', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('app_users')->onDelete('cascade');
            $table->string('name')->unique();
            $table->text('description');
            $table->text('link');
            $table->text('image_link');
            $table->timestamp('created_at')->useCurrent();
        });
        // CREATE TABLE websites (
        //     id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        //     user_id BIGINT UNSIGNED NOT NULL,
        //     name VARCHAR(255) NOT NULL UNIQUE,
        //     description TEXT NOT NULL,
        //     link TEXT NOT NULL,
        //     image_link TEXT NOT NULL,
        //     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        //     FOREIGN KEY (user_id) REFERENCES app_users(id) ON DELETE CASCADE
        // );

        // CreateAwardsTable
        Schema::create('awards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('website_id')->constrained()->onDelete('cascade');
            $table->tinyInteger('type');
            $table->timestamp('awarded_date')->useCurrent();
        });
        // CREATE TABLE awards (
        //     id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        //     website_id BIGINT UNSIGNED NOT NULL,
        //     type TINYINT NOT NULL,
        //     awarded_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        //     FOREIGN KEY (website_id) REFERENCES websites(id) ON DELETE CASCADE
        // );

        // CreateCollectionsTable
        Schema::create('collections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('app_users')->onDelete('cascade');
            $table->string('name');
            $table->text('description')->nullable();
            $table->tinyInteger('category');
            $table->boolean('is_private');
        });
        // CREATE TABLE collections (
        //     id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        //     user_id BIGINT UNSIGNED NOT NULL,
        //     name VARCHAR(255) NOT NULL,
        //     description TEXT,
        //     category TINYINT NOT NULL,
        //     is_private BOOLEAN NOT NULL,
        //     FOREIGN KEY (user_id) REFERENCES app_users(id) ON DELETE CASCADE
        // );

        // CreateCoursesTable
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teacher_id')->constrained('app_users')->onDelete('cascade');
            $table->string('name');
            $table->text('description');
            $table->tinyInteger('rating');
            $table->integer('price');
        });
        // CREATE TABLE courses (
        //     id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        //     teacher_id BIGINT UNSIGNED NOT NULL,
        //     name VARCHAR(255) NOT NULL,
        //     description TEXT NOT NULL,
        //     rating TINYINT NOT NULL,
        //     price INT NOT NULL,
        //     FOREIGN KEY (teacher_id) REFERENCES app_users(id) ON DELETE CASCADE
        // );

        // CreateLessonsTable
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->text('description');
            $table->text('content');
        });
        // CREATE TABLE lessons (
        //     id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        //     course_id BIGINT UNSIGNED NOT NULL,
        //     name VARCHAR(255) NOT NULL,
        //     description TEXT NOT NULL,
        //     content TEXT NOT NULL,
        //     FOREIGN KEY (course_id) REFERENCES courses(id) ON DELETE CASCADE
        // );

        // CreateJobListingsTable
        Schema::create('job_listings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employer_id')->constrained('app_users')->onDelete('cascade');
            $table->foreignId('employee_id')->nullable()->constrained('app_users')->onDelete('set null');
            $table->timestamp('created_at')->useCurrent();
            $table->string('title');
            $table->text('description');
            $table->tinyInteger('category');
            $table->tinyInteger('type');
            $table->boolean('is_remote');
            $table->string('company_name')->nullable();
            $table->string('company_website')->nullable();
            $table->string('company_logo')->nullable();
            $table->tinyInteger('apply_with');
            $table->string('apply_at');
            $table->text('location')->nullable();
        });
        // CREATE TABLE job_listings (
        //     id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        //     employer_id BIGINT UNSIGNED NOT NULL,
        //     employee_id BIGINT UNSIGNED,
        //     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        //     title VARCHAR(255) NOT NULL,
        //     description TEXT NOT NULL,
        //     category TINYINT NOT NULL,
        //     type TINYINT NOT NULL,
        //     is_remote BOOLEAN NOT NULL,
        //     company_name VARCHAR(255),
        //     company_website VARCHAR(255),
        //     company_logo VARCHAR(255),
        //     apply_with TINYINT NOT NULL,
        //     apply_at VARCHAR(255) NOT NULL,
        //     location TEXT,
        //     FOREIGN KEY (employer_id) REFERENCES app_users(id) ON DELETE CASCADE,
        //     FOREIGN KEY (employee_id) REFERENCES app_users(id) ON DELETE SET NULL
        // );

        // CreateWebsiteCategoriesTable
        Schema::create('website_categories', function (Blueprint $table) {
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->foreignId('website_id')->constrained()->onDelete('cascade');
        });
        // CREATE TABLE website_categories (
        //     category_id BIGINT UNSIGNED NOT NULL,
        //     website_id BIGINT UNSIGNED NOT NULL,
        //     PRIMARY KEY (category_id, website_id),
        //     FOREIGN KEY (category_id) REFERENCES categories(id) ON DELETE CASCADE,
        //     FOREIGN KEY (website_id) REFERENCES websites(id) ON DELETE CASCADE
        // );

        // CreateWebsiteTagsTable
        Schema::create('website_tags', function (Blueprint $table) {
            $table->foreignId('website_id')->constrained()->onDelete('cascade');
            $table->foreignId('tag_id')->constrained()->onDelete('cascade');
        });
        // CREATE TABLE website_tags (
        //     website_id BIGINT UNSIGNED NOT NULL,
        //     tag_id BIGINT UNSIGNED NOT NULL,
        //     PRIMARY KEY (website_id, tag_id),
        //     FOREIGN KEY (website_id) REFERENCES websites(id) ON DELETE CASCADE,
        //     FOREIGN KEY (tag_id) REFERENCES tags(id) ON DELETE CASCADE
        // );

        // CreateWebsiteCollaboratorsTable
        Schema::create('website_collaborators', function (Blueprint $table) {
            $table->foreignId('website_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained('app_users')->onDelete('cascade');
        });
        // CREATE TABLE website_collaborators (
        //     website_id BIGINT UNSIGNED NOT NULL,
        //     user_id BIGINT UNSIGNED NOT NULL,
        //     PRIMARY KEY (website_id, user_id),
        //     FOREIGN KEY (website_id) REFERENCES websites(id) ON DELETE CASCADE,
        //     FOREIGN KEY (user_id) REFERENCES app_users(id) ON DELETE CASCADE
        // );

        // CreateWebsiteCollectionsTable
        Schema::create('website_collections', function (Blueprint $table) {
            $table->foreignId('collection_id')->constrained()->onDelete('cascade');
            $table->foreignId('website_id')->constrained()->onDelete('cascade');
        });
        // CREATE TABLE website_collections (
        //     collection_id BIGINT UNSIGNED NOT NULL,
        //     website_id BIGINT UNSIGNED NOT NULL,
        //     PRIMARY KEY (collection_id, website_id),
        //     FOREIGN KEY (collection_id) REFERENCES collections(id) ON DELETE CASCADE,
        //     FOREIGN KEY (website_id) REFERENCES websites(id) ON DELETE CASCADE
        // );


        // CreateWebsiteElementsTable
        Schema::create('website_elements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('website_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->text('image_link');
        });
        // CREATE TABLE website_elements (
        //     id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        //     website_id BIGINT UNSIGNED NOT NULL,
        //     name VARCHAR(255) NOT NULL,
        //     image_link TEXT NOT NULL,
        //     FOREIGN KEY (website_id) REFERENCES websites(id) ON DELETE CASCADE
        // );

        // CreateWebsiteVotesTable
        Schema::create('website_votes', function (Blueprint $table) {
            $table->foreignId('website_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained('app_users')->onDelete('cascade');
            $table->boolean('is_rejected');
            $table->tinyInteger('design');
            $table->tinyInteger('usability');
            $table->tinyInteger('creativity');
            $table->tinyInteger('content');
        });
        // CREATE TABLE website_votes (
        //     website_id BIGINT UNSIGNED NOT NULL,
        //     user_id BIGINT UNSIGNED NOT NULL,
        //     is_rejected BOOLEAN NOT NULL,
        //     design TINYINT NOT NULL,
        //     usability TINYINT NOT NULL,
        //     creativity TINYINT NOT NULL,
        //     content TINYINT NOT NULL,
        //     PRIMARY KEY (website_id, user_id),
        //     FOREIGN KEY (website_id) REFERENCES websites(id) ON DELETE CASCADE,
        //     FOREIGN KEY (user_id) REFERENCES app_users(id) ON DELETE CASCADE
        // );

        // CreateUserCoursesTable
        Schema::create('user_courses', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained('app_users')->onDelete('cascade');
            $table->foreignId('course_id')->constrained()->onDelete('cascade');
        });
        // CREATE TABLE user_courses (
        //     user_id BIGINT UNSIGNED NOT NULL,
        //     course_id BIGINT UNSIGNED NOT NULL,
        //     PRIMARY KEY (user_id, course_id),
        //     FOREIGN KEY (user_id) REFERENCES app_users(id) ON DELETE CASCADE,
        //     FOREIGN KEY (course_id) REFERENCES courses(id) ON DELETE CASCADE
        // );

        // CreateUserVotesTable
        Schema::create('user_votes', function (Blueprint $table) {
            $table->foreignId('website_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained('app_users')->onDelete('cascade');
            $table->boolean('is_rejected');
            $table->tinyInteger('semantics');
            $table->tinyInteger('animations');
            $table->tinyInteger('accessibility');
            $table->tinyInteger('wpo');
            $table->tinyInteger('responsive_design');
            $table->tinyInteger('markup');
        });
        // CREATE TABLE user_votes (
        //     website_id BIGINT UNSIGNED NOT NULL,
        //     user_id BIGINT UNSIGNED NOT NULL,
        //     is_rejected BOOLEAN NOT NULL,
        //     semantics TINYINT NOT NULL,
        //     animations TINYINT NOT NULL,
        //     accessibility TINYINT NOT NULL,
        //     wpo TINYINT NOT NULL,
        //     responsive_design TINYINT NOT NULL,
        //     markup TINYINT NOT NULL,
        //     PRIMARY KEY (website_id, user_id),
        //     FOREIGN KEY (website_id) REFERENCES websites(id) ON DELETE CASCADE,
        //     FOREIGN KEY (user_id) REFERENCES app_users(id) ON DELETE CASCADE
        // );
    }

};
