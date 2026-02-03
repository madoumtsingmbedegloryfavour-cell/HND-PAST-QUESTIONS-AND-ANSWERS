<?php
include 'db.php';

if(isset($_POST['upload'])){
    $filename = $_FILES['file']['name'];
    $tmp = $_FILES['file']['tmp_name'];
    $path = "uploads/".$filename;

    move_uploaded_file($tmp,$path);

    mysqli_query($conn,"INSERT INTO files(filename,file) VALUES('$filename','$filename')");
    header("Location: index.php");
}
?>