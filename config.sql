CREATE TABLE pg_list (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  location VARCHAR(100),
  price_per_month INT,
  description TEXT,
  image VARCHAR(255)
);

CREATE TABLE bookings (
  id INT AUTO_INCREMENT PRIMARY KEY,
  pg_id INT,
  name VARCHAR(100),
  email VARCHAR(100),
  phone VARCHAR(20),
  message TEXT,
  FOREIGN KEY (pg_id) REFERENCES pg_list(id)
);

CREATE TABLE admin (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50),
  password VARCHAR(255)
);

-- Insert admin user (username: admin, password: admin123)
INSERT INTO admin (username, password) VALUES ('admin', MD5('admin123'));
