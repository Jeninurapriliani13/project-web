<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Catatan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #e0f7fa; /* Light blue background */
            color: #004d40; /* Dark teal text */
        }
        h2 {
            color: #00796b; /* Teal for headings */
        }
        .form-control {
            border: 2px solid #00897b; /* Teal border */
        }
        .form-control:focus {
            border-color: #004d40; /* Darker teal on focus */
            box-shadow: 0 0 5px rgba(0, 128, 128, 0.5); /* Glow effect */
        }
        .submit {
            background-color: #00897b; /* Teal button */
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px; /* Rounded corners */
            cursor: pointer;
        }
        .submit:hover {
            background-color: #00796b; /* Darker teal on hover */
        }
        .form-group {
            margin-bottom: 20px; /* Spacing between fields */
        }
    </style>
</head>

<body class="p-5">
    <h2>Tambah Catatan Baru</h2>
    <form action="../actions/store.php" method="POST">
        <div class="form-group">
            <label for="judul">Judul:</label>
            <input class="form-control" type="text" id="judul" name="judul" required>
        </div>
        <div class="form-group">
            <label for="isi">Isi Catatan:</label>
            <textarea class="form-control" id="isi" name="isi" rows="5" required></textarea>
        </div>
        <button class="submit">Simpan</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>