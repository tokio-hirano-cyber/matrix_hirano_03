CREATE TABLE IF NOT EXISTS engineers (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(128) NOT NULL,
  email VARCHAR(255) NOT NULL,
  phone VARCHAR(50),
  skills TEXT,
  level VARCHAR(50),
  years_exp INT,
  location VARCHAR(100),
  desired_rate INT,
  note TEXT,
  indate DATETIME NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;