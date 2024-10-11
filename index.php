<?php
$conn = new mysqli("localhost", "root", "", "pertemuan2");
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
$sql = "SELECT * FROM notes ORDER BY created_at DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Catatan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #e0f7fa; /* Light blue background */
            color: #006064; /* Dark teal text */
        }
        h2 {
            color: #004d40; /* Darker teal for headings */
        }
        .table {
            background-color: #ffffff; /* White table background */
            border-radius: 10px; /* Rounded corners */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); /* Soft shadow */
        }
        .btn-primary {
            background-color: #00897b; /* Teal button */
            border: none;
        }
        .btn-primary:hover {
            background-color: #00796b; /* Darker teal on hover */
        }
        .action-links a {
            margin-right: 10px;
            color: #00796b; /* Teal link color */
        }
        .action-links a:hover {
            text-decoration: underline; /* Underline on hover */
        }
    </style>
</head>

<body class="p-5">
    <h2 class="mb-5">Daftar Catatan</h2>
    <a class="btn btn-primary" href="pages/create.php">Tambah Catatan Baru</a>
    <br><br>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Isi Catatan</th>
                <th>Tanggal Dibuat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                $no = 1;
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $no++ . "</td>";
                    echo "<td>" . $row['judul'] . "</td>";
                    echo "<td>" . $row['isi'] . "</td>";
                    echo "<td>" . date('d-m-Y H:i', strtotime($row['created_at'])) . "</td>";
                    echo "<td class='action-links'>";
                    echo "<a href='./pages/edit.php?id=" . $row['id'] . "'>Edit</a>";
                    echo "<a href='./actions/delete.php?id=" . $row['id'] . "' onclick='return confirm(\"Apakah anda yakin ingin menghapus catatan ini?\");'>Hapus</a>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>Belum ada catatan.</td></tr>";
            }
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
<?php
$conn->close();
?>