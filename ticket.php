<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pencarian Tiket Kereta Api</title>
    <link rel="stylesheet" href="style.css">  
</head>
<body>
    <header>
        <h1>Hasil Pencarian Tiket Kereta Api</h1>
    </header>
    <main>
        <section class="search-results">
            <h2>Daftar Tiket Kereta Api</h2>
            <!-- Di sini Anda dapat menggunakan PHP untuk menampilkan hasil pencarian dari database -->
            <?php
            // Lakukan koneksi ke database dan query data tiket kereta api sesuai dengan pilihan pengguna
            $conn = mysqli_connect("localhost", "root", "", "kereta");
            if (!$conn) {
                die("Koneksi ke database gagal: " . mysqli_connect_error());
            }

            // Ambil data dari form pencarian (contoh: kota asal, kota tujuan, tanggal, jumlah penumpang)
            $kotaAsal = $_POST['kota-asal'];
            $kotaTujuan = $_POST['kota-tujuan'];
            $tanggalKeberangkatan = $_POST['tanggal-keberangkatan'];
            $jumlahPenumpang = $_POST['jumlah-penumpang'];
            // Buat query sesuai dengan pilihan pengguna
            $query = "SELECT * FROM tiket WHERE kota_asal='$kotaAsal' AND kota_tujuan='$kotaTujuan' AND tanggal_keberangkatan='$tanggalKeberangkatan'";

            // Eksekusi query dan tampilkan hasil
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
                echo "<table>";
                echo "<tr><th>Nama Kereta</th><th>Kota Asal</th><th>Kota Tujuan</th><th>Tanggal Keberangkatan</th><th>Harga</th></tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["nama_kereta"] . "</td>";
                    echo "<td>" . $row["kota_asal"] . "</td>";
                    echo "<td>" . $row["kota_tujuan"] . "</td>";
                    echo "<td>" . $row["tanggal_keberangkatan"] . "</td>";
                    echo "<td>" . $row["harga"] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "Tidak ada tiket yang tersedia untuk pencarian ini.";
            }

            // Tutup koneksi database
            mysqli_close($conn);
            ?>
            <!-- Akhir blok PHP -->
        </section>
    </main>
    <footer>
        <p>&copy; 2023 Situs Pemesanan Tiket Kereta Api</p>
    </footer>
</body>
</html>
