

CREATE TABLE faizan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(100) NOT NULL,
    lname VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    upassword VARCHAR(100) NOT NULL,
    phone VARCHAR(100) NOT NULL,
    dob VARCHAR(100) NOT NULL,
    gender VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
