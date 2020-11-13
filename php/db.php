<?php 

function createdb(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "CR10_Matzer_BigLibary";

    // Create connection
    $con = mysqli_connect($servername, $username, $password);

    // check Connection
    if(!$con){
        die("Connection Failed:" . mysqli_connect_error());
    }

    // create database
    $sql = "create database if not exists $dbname";

    //  ##### Not necessary anymore #####
    //  if(mysqli_query($con, $sql)){
    //     echo "Hallo";
    // } else {
    //     echo "cannnot create table!" . mysqli_error($con);
    // }

    if(mysqli_query($con, $sql)) {
        $con = mysqli_connect($servername, $username, $password, $dbname);

    $sql = "
        create table if not exists author(
            author_id int auto_increment primary key,
            first_name varchar(30),
            last_name varchar(30)
            ) 
    ";

    // if(mysqli_query($con, $sql)){
    //     echo "created table author!";
    //     // return $con;
    // } else {
    //     echo "cannnot create table author!";
    // }
    
    }

    // ########################################
    if(mysqli_query($con, $sql)) {
        $con = mysqli_connect($servername, $username, $password, $dbname);

    $sql = "
        create table if not exists publisher(
            publisher_id int auto_increment primary key,
            publisher_name varchar(30),
            publisher_adress varchar(30),
            publisher_size varchar(10)
            ) 
    ";

    // if(mysqli_query($con, $sql)){
    //     echo "created table publisher!";
    //     return $con;
    // } else {
    //     echo "cannnot create table publisher!";
    // }
    
    }


// #############################################
    if(mysqli_query($con, $sql)) {
        $con = mysqli_connect($servername, $username, $password, $dbname);

    $sql = "
        create table if not exists media(
            media_id int auto_increment primary key,
            media_title varchar(100),
            media_img varchar(30),
            media_isbn int,
            media_description varchar(100),
            media_publish_date date,
            media_type varchar(10),
            media_available varchar(20),
            fk_author_id int,
            fk_publisher_id int,
            foreign key (fk_author_id) references author (author_id),
            foreign key (fk_publisher_id) references publisher (publisher_id)
            ) 
    ";
    if(mysqli_query($con, $sql)){
        // echo "created table media!";
        return $con;
    } else {
        echo "cannnot create table media!" . mysqli_error($con);
    }
    
    }

//    Note: there are three if statements because i don't know yet if there will be a problem with creating the foreign keys.
//    Note2: I added on every column the name from the table to play it safe only for this time.

}