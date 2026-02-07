<?php
$valid_userid = "admin";
$valid_password = "admin123";

$userid = $_POST['userid'] ?? '';
$password = $_POST['password'] ?? '';

if ($userid === $valid_userid && $password === $valid_password) {
    echo "success";
} else {
    echo "error";
}
