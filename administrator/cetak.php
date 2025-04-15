<!DOCTYPE html>
<html>

<head>
    <title>Cetak Transaksi</title>
    <link rel="icon" href="../assets/favicon.ico" type="icon/x-favicon">
</head>

<body>
    <style type="text/css">
    body {
        font-family: sans-serif;
    }

    img {
        justify-content: center;
    }

    table {
        margin: 20px auto;
        border-collapse: collapse;
    }

    table th,
    table td {
        border: 1px solid #3c3c3c;
        padding: 3px 8px;

    }

    a {
        background: blue;
        color: #fff;
        padding: 8px 10px;
        text-decoration: none;
        border-radius: 2px;
    }

    .tengah {
        text-align: center;
    }
    </style>
    <div class=".tengah"><img src="../assets/anime1.gif" height="10%" width="10%">
    <h3 align="center">LAPORAN TRANSAKSI KASIR-TOKO KECIL</h3>
    </div>
    <table>
        <tr>
            <th>ID Pembelian</th>
            <th>Nama Pelanggan</th>
            <th>Nomor Telepon</th>
            <th>Tanggal Pembelian</th>
            <th>Total Harga</th>
        </tr>
        <?php 
 // koneksi database
 $koneksi = mysqli_connect("localhost","root","","kashier_inshe");

 // menampilkan data pegawai
 $data = mysqli_query($koneksi,"SELECT * FROM penjualan INNER JOIN pelanggan ON pelanggan.PelangganID=penjualan.PelangganID");
 while($d = mysqli_fetch_array($data)){
 ?>
        <tr>
            <td style='text-align: center;'><?php echo $d['PenjualanID'] ?></td>
            <td><?php echo $d['NamaPelanggan']; ?></td>
            <td><?php echo $d['NomorTelepon']; ?></td>
            <td><?php echo $d['TanggalPenjualan']; ?></td>
            <td><?php echo $d['TotalHarga']; ?></td>
        </tr>
        <?php 
 }
 ?>
    </table>
    <script>
    window.print();
    </script>
</body>

</html>