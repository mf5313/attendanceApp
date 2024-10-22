<?php
    require_once "databaseConn.php";

    $dbo=new DatabaseConn();

//   $query="
//     create table faculty(
//         f_id int primary key,
//         f_name varchar(50) not null,
//         f_uname varchar(80) not null,
//         f_pwd varchar(50) not null,
//         f_email varchar(100) not null,
//         f_image varchar(70)
//     )
//   ";
// $stmt = $dbo->conn->prepare($query);
// $stmt->execute();



// $query="
// create table student(
//         s_id int primary key,
//         rollno varchar(50) not null,
//         regno varchar(50) not null,
//         name varchar(50) not null,
//         uname varchar(50) not null,
//         pwd varchar(50) not null,
//         email varchar(100) not null,
//         semester int not null,
// constraint chk_sem check(semester in(1,2,3,4,5,6,7,8)) 
// )
// ";
// $stmt = $dbo->conn->prepare($query);
// $stmt->execute();


// $query="
// create table course(
//         c_id int primary key,
//         c_code varchar(30) not null,
//         c_name varchar(100) not null,
//         c_credit varchar(20) not null,
//         c_sem varchar(10) not null,
//         c_faculty varchar(50) not null

// ";
// $stmt = $dbo->conn->prepare($query);
// $stmt->execute();


// $query="
// create table Admin(
//         a_id int primary key,
//         a_name varchar(50) not null,
//         u_name varchar(50) not null,
//         pwd varchar(50) not null,
//         image varchar(70)
// )
// ";
// $stmt = $dbo->conn->prepare($query);
// $stmt->execute();



// $query="
// create table Attendance(
//         id int primary key,
//         c_code varchar(30) not null,
//         rollno varchar(50) not null,
//         regno varchar(50) not null,
//         name varchar(50) not null,  
//         semester int not null,
//         status varchar(30) check(status='present' or status='absent')
// )
// ";
// $stmt = $dbo->conn->prepare($query);
// $stmt->execute();