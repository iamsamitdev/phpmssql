<?php

require_once 'connectdb.php';

$data = array(
    ':username' => 'somkid',
    ':password' => '789012',
    ':fullname' => 'Somkid Jaidee',
    ':mobile'   => '0893898398',
    ':email'    => 'somkid@email.com',
    ':status'    => '0'
);

$result = $connect->prepare("INSERT INTO users (
    username,
    password,
    fullname,
    mobile,
    email,
    status
    ) VALUES (
        :username, :password, :fullname, :mobile, :email, :status
    )"
);

if($result->execute($data))
{
    echo "Add new user success";
}else{
    echo "Fail!";
}
