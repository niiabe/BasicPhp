<?php
// query
function query($sql){
    global $connection;
    if($connection){
        return mysqli_query($connection,$sql);
    }
}

//confirm
function confirm($query){
    global $connection;
    if (!$query){
        popMSG("Request unavailable!");
    }
}
function fetch_array($query){
    return mysqli_fetch_array($query);
}

function escape($query){
    global $connection;
    return mysqli_real_escape_string($connection,$query);
}

function getNumRows($query){
    return mysqli_num_rows($query);
}