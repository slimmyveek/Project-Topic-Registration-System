<?php
$connect = new mysqli("localhost", "root", "", "projectregdb");

if (!$connect) {
die(mysqli_error($connect));
}
