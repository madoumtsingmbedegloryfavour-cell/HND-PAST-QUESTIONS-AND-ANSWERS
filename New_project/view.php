<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>File Upload System</title>
</head>
<body>
<h2>Upload File</h2>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file" required>
    <button type="submit" name="upload">Upload</button>
</form>

<h2>Uploaded Files</h2>
<table border="1" cellpadding="10">
<tr>
<th>File Name</th>
<th>Action</th>
</tr>

<?php
$sql = "SELECT * FROM files";
$result = mysqli_query($conn, $sql);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
?>
<tr>
<td><?php echo $row['filename']; ?></td>
<td>
<a href="uploads/<?php echo $row['file']; ?>" target="_blank">View</a>
<a href="correction.php" target="_blank">correction</a>
</td>
</tr>
<?php
    }
} else {
    echo "<tr><td colspan='2'>No files found.</td></tr>";
}
?>
</table>
</body>
</html>