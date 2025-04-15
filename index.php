<?php
session_start();
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="../assets/favicon.ico" type="image/x-icon">
</head>
<body>
    <section id="login">
    <div class="login-left">
            <div class="text-hero">
                <h2>KASIR-TOKO KECIL</h2>
                <p>Adalah sebuah aplikasi kasir berbasis web yang dikembangkan oleh Inshe Valerie Ribel</p>
            </div>
            <img src="../assets/bg2.gif" alt="logo">
    </div>

    <div class="login-right">
        <div class="login-form">
            <img src="../assets/pikachu.gif" alt="logo">
            <h3>Selamat Datang</h3>
            <form action="cek_login.php" method="post">

            <div class="text-login">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="username" required>
                
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="password" required>
            </div>
            <div class="button">
                <button type="reset">Cancel</button>
                <button type="submit">Login</button>
            </div>
            </form>
        </div>
    </div>
    </section>
</body>
</html>