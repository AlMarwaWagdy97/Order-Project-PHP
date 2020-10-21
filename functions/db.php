<?php

$server ="localhost";
$username ="root";
$password ="";
$dbname ="medical_serv";

$conn = mysqli_connect($server, $username, $password, $dbname);

if(!$conn ){
    die( "Error Connection :"  . mysqli_connect_error());
    
}

function db_if_exist($sql){
    global $conn;
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0) return true;
    else return false;
}

function db_insert($sql){
    global   $conn;
    $result = mysqli_query($conn, $sql);
    if($result)return " Added Successfully";
    else false;
}

function db_update($sql){
    global   $conn;
    $result = mysqli_query($conn, $sql);
    if($result)return " Updated Successfully";
    else false;
}

function db_delete($sql){
    global $conn;
    $result = mysqli_query($conn, $sql);
    if($result)return " Deleted Successfully";
    else false;
}

function getRow($table, $field, $value){
    global $conn;
    $sql = "SELECT * FROM `$table` WHERE `$field`='$value' ";
    $result = mysqli_query($conn,$sql);
    if($result) {
        $rows = [];
        if(mysqli_num_rows($result) >0){
            $rows[] = mysqli_fetch_assoc($result);
            return $rows[0];
        }
    }
    else false;
}

function getRows($table){
    global $conn;
    $sql = "SELECT * FROM `$table` ";
    $result = mysqli_query($conn, $sql);
    if($result){
        $rows = [];
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                $rows[] = $row;
            }
        }
        return $rows;
    }
}








