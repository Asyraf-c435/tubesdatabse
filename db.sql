-- Drop tables in reverse order to avoid foreign key constraints
DROP TABLE IF EXISTS user_votes;
DROP TABLE IF EXISTS user_courses;
DROP TABLE IF EXISTS website_votes;
DROP TABLE IF EXISTS website_elements;
DROP TABLE IF EXISTS website_collections;
DROP TABLE IF EXISTS website_collaborators;
DROP TABLE IF EXISTS website_tags;
DROP TABLE IF EXISTS website_categories;
DROP TABLE IF EXISTS job_listings;
DROP TABLE IF EXISTS lessons;
DROP TABLE IF EXISTS courses;
DROP TABLE IF EXISTS collections;
DROP TABLE IF EXISTS awards;
DROP TABLE IF EXISTS websites;
DROP TABLE IF EXISTS tags;
DROP TABLE IF EXISTS categories;
DROP TABLE IF EXISTS app_users;
DROP TABLE IF EXISTS subscriptions;
DROP TABLE IF EXISTS countries;

CREATE TABLE countries (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL UNIQUE
);

CREATE TABLE subscriptions (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    plan TINYINT NOT NULL,
    price INT NOT NULL,
    is_annual BOOLEAN NOT NULL,
    purchased_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE app_users (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL UNIQUE,
    display_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    description TEXT,
    country_id BIGINT UNSIGNED,
    subscription_id BIGINT UNSIGNED,
    image_link TEXT,
    user_link TEXT,
    twitter TEXT,
    facebook TEXT,
    linkedin TEXT,
    instagram TEXT,
    tiktok TEXT,
    type TINYINT DEFAULT 0,
    rank TINYINT DEFAULT 0,
    status_points INT DEFAULT 0,
    remember_token VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (country_id) REFERENCES countries(id) ON DELETE CASCADE,
    FOREIGN KEY (subscription_id) REFERENCES subscriptions(id) ON DELETE SET NULL
);

CREATE TABLE categories (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL UNIQUE
);

CREATE TABLE tags (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL UNIQUE
);

CREATE TABLE websites (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_id BIGINT UNSIGNED NOT NULL,
    name VARCHAR(255) NOT NULL UNIQUE,
    description TEXT NOT NULL,
    link TEXT NOT NULL,
    image_link TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES app_users(id) ON DELETE CASCADE
);

CREATE TABLE awards (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    website_id BIGINT UNSIGNED NOT NULL,
    type TINYINT NOT NULL,
    awarded_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (website_id) REFERENCES websites(id) ON DELETE CASCADE
);

CREATE TABLE collections (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_id BIGINT UNSIGNED NOT NULL,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    category TINYINT NOT NULL,
    is_private BOOLEAN NOT NULL,
    FOREIGN KEY (user_id) REFERENCES app_users(id) ON DELETE CASCADE
);

CREATE TABLE courses (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    teacher_id BIGINT UNSIGNED NOT NULL,
    name VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    rating TINYINT NOT NULL,
    price INT NOT NULL,
    FOREIGN KEY (teacher_id) REFERENCES app_users(id) ON DELETE CASCADE
);

CREATE TABLE lessons (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    course_id BIGINT UNSIGNED NOT NULL,
    name VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    content TEXT NOT NULL,
    FOREIGN KEY (course_id) REFERENCES courses(id) ON DELETE CASCADE
);

CREATE TABLE job_listings (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    employer_id BIGINT UNSIGNED NOT NULL,
    employee_id BIGINT UNSIGNED,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    category TINYINT NOT NULL,
    type TINYINT NOT NULL,
    is_remote BOOLEAN NOT NULL,
    company_name VARCHAR(255),
    company_website VARCHAR(255),
    company_logo VARCHAR(255),
    apply_with TINYINT NOT NULL,
    apply_at VARCHAR(255) NOT NULL,
    location TEXT,
    FOREIGN KEY (employer_id) REFERENCES app_users(id) ON DELETE CASCADE,
    FOREIGN KEY (employee_id) REFERENCES app_users(id) ON DELETE SET NULL
);

CREATE TABLE website_categories (
    category_id BIGINT UNSIGNED NOT NULL,
    website_id BIGINT UNSIGNED NOT NULL,
    PRIMARY KEY (category_id, website_id),
    FOREIGN KEY (category_id) REFERENCES categories(id) ON DELETE CASCADE,
    FOREIGN KEY (website_id) REFERENCES websites(id) ON DELETE CASCADE
);

CREATE TABLE website_tags (
    website_id BIGINT UNSIGNED NOT NULL,
    tag_id BIGINT UNSIGNED NOT NULL,
    PRIMARY KEY (website_id, tag_id),
    FOREIGN KEY (website_id) REFERENCES websites(id) ON DELETE CASCADE,
    FOREIGN KEY (tag_id) REFERENCES tags(id) ON DELETE CASCADE
);

CREATE TABLE website_collaborators (
    website_id BIGINT UNSIGNED NOT NULL,
    user_id BIGINT UNSIGNED NOT NULL,
    PRIMARY KEY (website_id, user_id),
    FOREIGN KEY (website_id) REFERENCES websites(id) ON DELETE CASCADE,
    FOREIGN KEY (user_id) REFERENCES app_users(id) ON DELETE CASCADE
);

CREATE TABLE website_collections (
    collection_id BIGINT UNSIGNED NOT NULL,
    website_id BIGINT UNSIGNED NOT NULL,
    PRIMARY KEY (collection_id, website_id),
    FOREIGN KEY (collection_id) REFERENCES collections(id) ON DELETE CASCADE,
    FOREIGN KEY (website_id) REFERENCES websites(id) ON DELETE CASCADE
);

CREATE TABLE website_elements (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    website_id BIGINT UNSIGNED NOT NULL,
    name VARCHAR(255) NOT NULL,
    image_link TEXT NOT NULL,
    FOREIGN KEY (website_id) REFERENCES websites(id) ON DELETE CASCADE
);

CREATE TABLE website_votes (
    website_id BIGINT UNSIGNED NOT NULL,
    user_id BIGINT UNSIGNED NOT NULL,
    is_rejected BOOLEAN NOT NULL,
    design TINYINT NOT NULL,
    usability TINYINT NOT NULL,
    creativity TINYINT NOT NULL,
    content TINYINT NOT NULL,
    PRIMARY KEY (website_id, user_id),
    FOREIGN KEY (website_id) REFERENCES websites(id) ON DELETE CASCADE,
    FOREIGN KEY (user_id) REFERENCES app_users(id) ON DELETE CASCADE
);

CREATE TABLE user_courses (
    user_id BIGINT UNSIGNED NOT NULL,
    course_id BIGINT UNSIGNED NOT NULL,
    PRIMARY KEY (user_id, course_id),
    FOREIGN KEY (user_id) REFERENCES app_users(id) ON DELETE CASCADE,
    FOREIGN KEY (course_id) REFERENCES courses(id) ON DELETE CASCADE
);

CREATE TABLE user_votes (
    website_id BIGINT UNSIGNED NOT NULL,
    user_id BIGINT UNSIGNED NOT NULL,
    is_rejected BOOLEAN NOT NULL,
    semantics TINYINT NOT NULL,
    animations TINYINT NOT NULL,
    accessibility TINYINT NOT NULL,
    wpo TINYINT NOT NULL,
    responsive_design TINYINT NOT NULL,
    markup TINYINT NOT NULL,
    PRIMARY KEY (website_id, user_id),
    FOREIGN KEY (website_id) REFERENCES websites(id) ON DELETE CASCADE,
    FOREIGN KEY (user_id) REFERENCES app_users(id) ON DELETE CASCADE
);