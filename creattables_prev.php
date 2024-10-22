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
    email VARCHAR(70) NOT NULL
);
    ";
mysqli_query($conn, $query);

$query = "
        CREATE TABLE Course (
    c_id INT PRIMARY KEY AUTO_INCREMENT,
    c_code VARCHAR(20) UNIQUE NOT NULL,
    c_name VARCHAR(50) NOT NULL,
    c_credit VARCHAR(20) NOT NULL,
    c_faculty VARCHAR(50),
    FOREIGN KEY (c_faculty) REFERENCES Faculty(f_uname)
);
    ";

mysqli_query($conn, $query);


$query = "
        CREATE TABLE Student (
    id INT PRIMARY KEY AUTO_INCREMENT,
    s_name VARCHAR(50) NOT NULL,
    email VARCHAR(70) NOT NULL,
    regno VARCHAR(50) UNIQUE NOT NULL,
    semester VARCHAR(7),
    Enroll_Year DATETIME NOT NULL,
    FOREIGN KEY (semester) REFERENCES Course(c_code)
);
    ";

mysqli_query($conn, $query);


$query = "
        CREATE TABLE Attendance (
    at_id INT PRIMARY KEY AUTO_INCREMENT,
    regno VARCHAR(20),
    c_code VARCHAR(10),
    status VARCHAR(10) CHECK (status IN ('Present', 'Absent')),
    date DATETIME NOT NULL,
    FOREIGN KEY (regno) REFERENCES Student(regno),
    FOREIGN KEY (c_code) REFERENCES Course(c_code)
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