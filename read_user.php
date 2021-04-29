<?php

require_once 'connectdb.php'; // ถ้าไม่พบไฟล์ แสดง error และหยุดการทำงาน
// include 'connectdb.php'; // ถ้าไม่พบไฟล์ แสดง error และทำงานส่วนอื่นต่อ

$sql = "SELECT * FROM users ORDER BY id DESC";
$result = $connect->prepare($sql);
$result->execute();

// Fetch data
$data = $result->fetchAll(PDO::FETCH_BOTH);

// echo "<pre>";
// print_r($data);
// echo "</pre>";

echo "<table border=1>";

echo "<thead>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Username</th>";
echo "<th>Fullname</th>";
echo "<th>Mobile</th>";
echo "<th>Email</th>";
echo "<th>Status</th>";
echo "</tr>";
echo "</thead>";

echo "<tbody>";

foreach($data as $row)
{
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['username']."</td>";
    echo "<td>".$row['fullname']."</td>";
    echo "<td>".$row['mobile']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['status']."</td>";
    echo "<tr>";
}

echo "</tbody>";

echo "</table>";
