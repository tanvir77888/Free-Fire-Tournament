CREATE DATABASE IF NOT EXISTS tanvir_shop;
USE tanvir_shop;

-- Users Table
CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100),
    phone VARCHAR(20),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255),
    balance DECIMAL(10,2) DEFAULT 0.00,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Games Table
CREATE TABLE games (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100),
    image VARCHAR(255),
    type ENUM('uid', 'voucher') DEFAULT 'uid',
    description TEXT
);

-- Products/Recharge Table
CREATE TABLE products (
    id INT PRIMARY KEY AUTO_INCREMENT,
    game_id INT,
    name VARCHAR(100),
    price DECIMAL(10,2),
    FOREIGN KEY (game_id) REFERENCES games(id) ON DELETE CASCADE
);

-- Orders Table
CREATE TABLE orders (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    product_id INT,
    player_id VARCHAR(50),
    amount DECIMAL(10,2),
    method VARCHAR(50),
    status ENUM('pending', 'completed', 'cancelled') DEFAULT 'pending',
    trx_id VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Settings Table
CREATE TABLE settings (
    id INT PRIMARY KEY DEFAULT 1,
    site_name VARCHAR(100),
    marquee_text TEXT,
    marquee_status TINYINT DEFAULT 1,
    support_link VARCHAR(255),
    yt_link VARCHAR(255)
);
