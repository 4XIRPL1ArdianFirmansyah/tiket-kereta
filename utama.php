<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Tiket Kereta Api</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <header>
        <h1>Selamat Datang di Situs Pemesanan Tiket Kereta Api</h1><br>
    </header>
    <main>
        <section class="search-form">
            <h2>Pemesanan Tiket Kereta Api</h2>
            <button type="button" class="pull-right btn btn-primary change-cols collapsed" data-toggle="collapse" data-target="#collapseForm" aria-expanded="false" aria-controls="collapseForm"> Ganti Pencarian </button>
            <form action="ticket.php" method="post">

                <label for="tiket">Jenis Kereta:</label>
                <select id="tiket" name=""tiket>
                    <option value=""></option>
                    <option value="kajj">KAJJ</option>
                    <option value="krl">KRl</option>
                </select>
    
                <label for="kota-asal">Kota Asal:</label>
                <select id="kota-asal" name="kota-asal">
                    <option value=""></option>
                    <option value="jakarta">Jakarta</option>
                    <option value="surabaya">Surabaya</option>
                    <option value="jakarta">Jakarta</option>
                    <option value="malang">Malang</option>
                    <option value="solo">Solo</option>
                </select>

                <label for="kota-tujuan">Kota Tujuan:</label>
                <select id="kota-tujuan" name="kota-tujuan">
                    <option value=""></option>
                    <option value="surabaya">Surabaya</option>
                    <option value="bandung">Bandung</option>
                    <option value="jakarta">Jakarta</option>
                    <option value="malang">Malang</option>
                    <option value="solo">Solo</option>
                </select>

                <label for="tanggal-keberangkatan">Tanggal Keberangkatan:</label>
                <input type="date" id="tanggal-keberangkatan" name="tanggal-keberangkatan">

                <label for="jumlah-penumpang">Jumlah Penumpang:</label>
                <input type="number" id="jumlah-penumpang" name="jumlah-penumpang" min="1">

                <button type="submit">Cari Tiket</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 Situs Pemesanan Tiket Kereta Api</p>
    </footer>
</body>
</html>
