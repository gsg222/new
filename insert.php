<?php
$conn=mysqli_connect("localhost","root","seongmin","opentutorials");
mysqli_query($conn,"
INSERT INTO topic(
title, description, created)
VALUES(
'MYSQL',
'Mysql is...',
NOW())"
);

?>
