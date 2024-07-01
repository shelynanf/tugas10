<?php

// Inisialisasi pesan kosong
$pesan = " ";

// Lakukan pengecekan apakah form sudah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tangkap data yang dikirimkan melalui form
    $nilai = $_POST["nilai"];
    $nilai = floatval($nilai); // Nilai diubah menjadi float    

    if ($nilai >= 80.00 && $nilai <= 100.00) {
        $pesan = "Nilai Angka :  $nilai | Nilai Huruf : A";
    } elseif ($nilai >= 76.25 && $nilai <= 79.99) {
        $pesan = "Nilai Angka :  $nilai | Nilai Huruf : A-";
    } elseif ($nilai >= 68.75 && $nilai <= 76.24) {
        $pesan = "Nilai Angka :  $nilai | Nilai Huruf : B+";
    } elseif ($nilai >= 65.00 && $nilai <= 68.74) {
        $pesan = "Nilai Angka :  $nilai | Nilai Huruf : B";
    } elseif ($nilai >= 62.50 && $nilai <= 64.99) {
        $pesan = "Nilai Angka :  $nilai | Nilai Huruf : B-";
    } elseif ($nilai >= 57.50 && $nilai <= 62.49) {
        $pesan = "Nilai Angka :  $nilai | Nilai Huruf : C+";
    } elseif ($nilai >= 55.00 && $nilai <= 57.49) {
        $pesan = "Nilai Angka :  $nilai | Nilai Huruf : C";
    } elseif ($nilai >= 51.25 && $nilai <= 54.99) {
        $pesan = "Nilai Angka :  $nilai | Nilai Huruf : C-";
    } elseif ($nilai >= 43.75 && $nilai <= 51.24) {
        $pesan = "Nilai Angka :  $nilai | Nilai Huruf : D+";
    } elseif ($nilai >= 40.00 && $nilai <= 43.74) {
        $pesan = "Nilai Angka :  $nilai | Nilai Huruf : D";
    } elseif ($nilai >= 0.00 && $nilai <= 39.99) {
        $pesan = "Nilai Angka :  $nilai | Nilai Huruf : E";
    } else {
        $pesan = "Nilai tidak valid!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Input PHP</title>
    <style>
        /* CSS untuk memposisikan form di tengah halaman */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form {
            width: 300px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        input[type="number"],
        input[type="submit"] {
            width: 100%;
            margin-bottom: 10px;
            padding: 8px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>

<form method="post">
    Nilai: <input type="number" name="nilai" value="<?php echo isset($_POST['nilai']) ? htmlspecialchars($_POST['nilai']) : ''; ?>"><br>
    <?php 
    
    if ($pesan) {
        echo $pesan;
    } 
    
    ?>    
    <input type="submit" value="Submit">
</form>

</body>
</html>