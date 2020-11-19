<?php

function connection($sql) {
    
    $host = 'localhost';
    $database = 'bookphones'; 
    $user = 'root'; 
    $password = 'root'; 

    $link = mysqli_connect($host, $user, $password, $database);
    if (!$link) {
        echo mysqli_error($link);
        return false;
    } 
    $result = mysqli_query($link, $sql);
    if (!$result) {
        echo mysqli_error($link);
        mysqli_close($link);
        return false;
    } 
    mysqli_close($link);
    return $result;

}

function count_contacts() {
    $sql = "SELECT id FROM contacts;";
    $result = connection($sql);
    $count = mysqli_fetch_all($result, MYSQLI_NUM);
    return end(end($count));
}

?>