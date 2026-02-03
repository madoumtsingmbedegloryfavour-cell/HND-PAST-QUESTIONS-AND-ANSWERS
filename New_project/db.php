<?php
$conn = mysqli_connect("localhost","root","","hnd_past_questions");
if(!$conn){
    die("Database connection failed: " . mysqli_connect_error());
}
?>