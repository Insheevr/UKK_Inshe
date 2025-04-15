<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    exit();
}
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="../assets/favicon.ico" type="image/x-icon">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <ul>
                <div class="sidebar-hero">
                    <img src="../assets/anime1.gif" alt="logo">
                </div>
                <li><a href="dashboard_admin.php"><i class="fi fi-rr-home"></i> Dashboard</a></li>
                <li><a href="../administrator/data_pengguna.php" class="menu"><i class="fi fi-rr-clipboard-user"></i> Data Pengguna</a></li>
                <li><a href="../administrator/data_barang.php" class="menu"><i class="fi fi-rr-apps-add"></i> Data Barang</a></li>
                <li><a href="../administrator/pembelian.php" class="menu"><i class="fi fi-rr-shopping-cart-add"></i> Pembelian</a></li>
                <li><a href="logout.php" class="logout"><i class="fi fi-rr-sign-out-alt"></i> Logout</a></li>
            </ul>
        </div>
        <div class="main-content">
            <div class="content-nav">
                <h4>Selamat Datang, <?php echo htmlspecialchars($username); ?>!</h4>
            </div>
        </div>
    </div>
</body>

</html>