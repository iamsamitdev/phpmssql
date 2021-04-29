<?php

require_once 'connectdb.php';

$data = array(
    ':id'  => '3',
);

$result = $connect->prepare("DELETE FROM users WHERE id=:id");

if($result->execute($data))
{
    echo "Delete user success";
}else{
    echo "Fail!";
}
