<?php
$servername='mariadb114.r103.websupport.se';
$username='MIDIADMIN';
$password='Kanopus88!';
$db='MKAY88';

$conn=mysqli_connect($servername, $username, $password, $db);

if ($conn) {
    echo "Successfully connected !!";
}