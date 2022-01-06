<?php

//function for generating random 32 length id
function generate_random_id(): string
{
    $values = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $id = array();
    for ($i=1; $i < 32; $i++) { 
        $rand = random_int(0, strlen($values) - 1);
        $id[$i] = $values[$rand];
    }
    return implode($id);
}


?>