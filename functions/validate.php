<?php

function Check_empty($val){
    if(empty($val)) return false;
    return true;
}

function check_less($val, $min){
    if(trim(strlen($val)) <= $min)return false;
    else return true;
}

function ValidEmail($email){
    if(!filter_var($email, FILTER_VALIDATE_EMAIL))return false;
    else return true;
}


?>