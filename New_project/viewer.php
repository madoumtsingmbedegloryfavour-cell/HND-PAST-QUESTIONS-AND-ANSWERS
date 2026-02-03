<?php
$uploadDir = __DIR__ . "/uploads/";

// Create uploads folder if it doesn't exist
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

// Handle file upload
if (isset($_POST['upload'])) {
    if (isset($_FILES['file']) && $_FILES['file']['error'] === 0) {

        $fileTmp  = $_FILES['file']['tmp_name'];
        $fileName = basename($_FILES['file']['name']);
        $fileType = mime_content_type($fileTmp);

        // Allow only PDF
        if ($fileType === "application/pdf") {
            $newName = time() . "_" . $fileName;
            move_uploaded_file($fileTmp, $uploadDir . $newName);
        }
    }
}

// Read uploaded files
$files = array_diff(scandir($uploadDir), ['.', '..']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload File</title>

    <style>
        body { font-family: Arial; padding: 20px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid black; padding: 8px; }
        th { background: #f2f2f2; }
        input[type="text"] {
            width: 300px;
            padding: 6px;
            margin-bottom: 10px;
        }
    </style>

    <script>
        function searchFiles() {
            let input = document.getElementById("search").value.toLowerCase();
            let rows = document.querySelectorAll("#fileTable tr");

            rows.forEach((row, index) => {
                if (index === 0) return;
                let fileName = row.cells[0].innerText.toLowerCase();
                row.style.display = fileName.includes(input) ? "" : "none";
            });
        }
    </script>
</head>
<body>

<h2>Upload File</h2>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="file" accept="application/pdf" required>
    <button type="submit" name="upload">Upload</button>
</form>

<h2>Uploaded Files</h2>

<!-- 🔍 Search bar -->
<input type="text" id="search" placeholder="Search file..." onkeyup="searchFiles()">

<table id="fileTable">
    <tr>
        <th>File Name</th>
        <th>Action</th>
    </tr>

    <?php foreach ($files as $file): ?>
        <tr>
            <td><?php echo htmlspecialchars($file); ?></td>
            <td>
                <!-- ✅ CORRECT LINK -->
                <a href="view_pdf.php?file=<?php echo urlencode($file); ?>" target="_blank">
                    View correction
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>

