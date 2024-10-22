<?php
include "conn.php";

$query = "
    CREATE TABLE Admin (
    a_id INT PRIMARY KEY AUTO_INCREMENT,
    a_uname VARCHAR(50) NOT NULL UNIQUE,
    pwd VARCHAR(30) NOT NULL,
    a_name VARCHAR(50) NOT NULL
);";

mysqli_query($conn, $query);

$query = "
        CREATE TABLE Faculty (
    f_id INT PRIMARY KEY AUTO_INCREMENT,
    f_name VARCHAR(50) NOT NULL,
    f_uname VARCHAR(50) NOT NULL UNIQUE,
    pwd VARCHAR(30) NOT NULL,
     email VARCHAR(150) UNIQUE
);
    ";
mysqli_query($conn, $query);

$query = "
        CREATE TABLE Courses (
    c_id INT PRIMARY KEY AUTO_INCREMENT,
    c_code VARCHAR(20) UNIQUE NOT NULL,
    c_name VARCHAR(50) NOT NULL,
    c_credit VARCHAR(20) NOT NULL,
    f_id INT,
    FOREIGN KEY (f_id) REFERENCES Faculty(f_id)
);
    ";

mysqli_query($conn, $query);


$query = "
        CREATE TABLE Students (
    s_id INT PRIMARY KEY AUTO_INCREMENT,
    s_name VARCHAR(50) NOT NULL,
    email VARCHAR(70) NOT NULL,
    regno VARCHAR(50) UNIQUE NOT NULL,
    semester VARCHAR(7),
    Enroll_Year DATETIME NOT NULL
    
);
    ";

mysqli_query($conn, $query);


$query = "
       CREATE TABLE Attendance (
    attendance_id INT PRIMARY KEY AUTO_INCREMENT,
    s_id INT,
    c_id INT,
    date DATE,
    status ENUM('Present', 'Absent'),
    FOREIGN KEY (s_id) REFERENCES Students(s_id),
    FOREIGN KEY (c_id) REFERENCES Courses(c_id)
);";

mysqli_query($conn, $query);

$query="
        CREATE TABLE Schedule (
    schedule_id INT PRIMARY KEY AUTO_INCREMENT,
    c_id INT,
    class_day ENUM('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'),
    start_time DATETIME,
    end_time DATETIME,
    FOREIGN KEY (c_id) REFERENCES Courses(c_id)
);
";
mysqli_query($conn, $query);

$query = "
        CREATE TABLE Audit (
    au_id INT PRIMARY KEY AUTO_INCREMENT,
    u_id VARCHAR(20) NOT NULL,
    u_role VARCHAR(10) NOT NULL,
    Time DATETIME NOT NULL
);

    ";

mysqli_query($conn, $query);
?>