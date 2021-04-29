<?php

require_once 'connectdb.php';

$data = array(
    ':id'       => '3',
    ':username' => 'somsak',
    ':password' => '112233',
    ':fullname' => 'Somsak'
);

$result = $connect->prepare(
    "UPDATE users SET 
        username=:username,
        password=:password, 
        fullname=:fullname 
    WHERE id=:id"
);

if($result->execute($data))
{
    echo "Update user success";
}else{
    echo "Fail!";
}
