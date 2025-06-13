CREATE TABLE countries (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) UNIQUE NOT NULL
);

CREATE TABLE subscriptions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    plan TINYINT NOT NULL,
    price INT NOT NULL,
    is_annual BOOLEAN NOT NULL,
    purchased_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE app_users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) UNIQUE NOT NULL,
    display_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    description TEXT,
    image_link TEXT NOT NULL,
    country_id INT,
    subscription_id INT,
    twitter TEXT,
    facebook TEXT,
    linkedin TEXT,
    instagram TEXT,
    tiktok TEXT,
    type TINYINT NOT NULL,
    rank TINYINT NOT NULL,
    status_points INT NOT NULL DEFAULT 0,
    remember_token VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (country_id) REFERENCES countries(id),
    FOREIGN KEY (subscription_id) REFERENCES subscriptions(id)
);

CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) UNIQUE NOT NULL
);

CREATE TABLE websites (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    name VARCHAR(255) UNIQUE NOT NULL,
    description TEXT NOT NULL,
    link TEXT NOT NULL,
    image_link TEXT NOT NULL,
    category_id INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES app_users(id),
    FOREIGN KEY (category_id) REFERENCES categories(id)
);

CREATE TABLE website_elements (
    id INT AUTO_INCREMENT PRIMARY KEY,
    website_id INT NOT NULL,
    name VARCHAR(255) NOT NULL,
    image_link TEXT NOT NULL,
    UNIQUE (website_id, name),
    FOREIGN KEY (website_id) REFERENCES websites(id)
);

CREATE TABLE website_collaborators (
    website_id INT NOT NULL,
    user_id INT NOT NULL,
    FOREIGN KEY (website_id) REFERENCES websites(id),
    FOREIGN KEY (user_id) REFERENCES app_users(id)
);

CREATE TABLE website_votes (
    website_id INT NOT NULL,
    user_id INT NOT NULL,
    is_rejected BOOLEAN NOT NULL,
    design TINYINT NOT NULL,
    usability TINYINT NOT NULL,
    creativity TINYINT NOT NULL,
    content TINYINT NOT NULL,
    FOREIGN KEY (website_id) REFERENCES websites(id),
    FOREIGN KEY (user_id) REFERENCES app_users(id)
);

CREATE TABLE user_votes (
    website_id INT NOT NULL,
    user_id INT NOT NULL,
    is_rejected BOOLEAN NOT NULL,
    semantics TINYINT NOT NULL,
    animations TINYINT NOT NULL,
    accessibility TINYINT NOT NULL,
    wpo TINYINT NOT NULL,
    responsive_design TINYINT NOT NULL,
    markup TINYINT NOT NULL,
    FOREIGN KEY (website_id) REFERENCES websites(id),
    FOREIGN KEY (user_id) REFERENCES app_users(id)
);

CREATE TABLE tags (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) UNIQUE NOT NULL
);

CREATE TABLE website_tags (
    website_id INT NOT NULL,
    tag_id INT NOT NULL,
    FOREIGN KEY (website_id) REFERENCES websites(id),
    FOREIGN KEY (tag_id) REFERENCES tags(id)
);

CREATE TABLE awards (
    id INT AUTO_INCREMENT PRIMARY KEY,
    website_id INT NOT NULL,
    type TINYINT NOT NULL,
    awarded_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (website_id) REFERENCES websites(id)
);

CREATE TABLE job_listings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    employer_id INT NOT NULL,
    employee_id INT,
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
    FOREIGN KEY (employer_id) REFERENCES app_users(id),
    FOREIGN KEY (employee_id) REFERENCES app_users(id)
);

CREATE TABLE courses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    teacher_id INT NOT NULL,
    name VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    rating TINYINT NOT NULL,
    price INT NOT NULL,
    FOREIGN KEY (teacher_id) REFERENCES app_users(id)
);

CREATE TABLE lessons (
    id INT AUTO_INCREMENT PRIMARY KEY,
    course_id INT NOT NULL,
    name VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    content TEXT NOT NULL,
    FOREIGN KEY (course_id) REFERENCES courses(id)
);

CREATE TABLE user_courses (
    user_id INT NOT NULL,
    course_id INT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES app_users(id),
    FOREIGN KEY (course_id) REFERENCES courses(id)
);

CREATE TABLE collections (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    category TINYINT NOT NULL,
    is_private BOOLEAN NOT NULL,
    FOREIGN KEY (user_id) REFERENCES app_users(id)
);

CREATE TABLE website_collections (
    collection_id INT NOT NULL,
    website_id INT NOT NULL,
    FOREIGN KEY (collection_id) REFERENCES collections(id),
    FOREIGN KEY (website_id) REFERENCES websites(id)
);
