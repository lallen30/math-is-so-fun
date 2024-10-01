-- Create the database
CREATE DATABASE IF NOT EXISTS kidsmath;
-- Use the kidsmath database
USE kidsmath;
-- Create the users table
CREATE TABLE IF NOT EXISTS users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  email VARCHAR(100),
  role_id INT NOT NULL,
  parent_id INT,
  active TINYINT(1) DEFAULT 0
);
-- Create an index on the username column for faster lookups
CREATE INDEX idx_username ON users(username);
-- Insert a sample admin user (you should change this password!)
INSERT INTO users (username, password, email, role_id, active)
VALUES ('admin', 'changeme', 'admin@example.com', 1, 1);
-- Create a missed table (based on the code we saw earlier)
CREATE TABLE IF NOT EXISTS missed (
  missed_id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT,
  first INT,
  second INT,
  answers VARCHAR(255),
  type INT,
  currentdate DATETIME,
  FOREIGN KEY (user_id) REFERENCES users(id)
);
-- You may need to add more tables based on your application's requirements