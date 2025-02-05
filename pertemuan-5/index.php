<?php 
require 'config/db.php';
require 'backend/login.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Link ke Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4" style="max-width: 400px; width: 100%;">
            <h3 class="text-center mb-4">Login</h3>
            <form action="backend/login.php" method="post">
                <!-- Email Input -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan email anda" required>
                </div>
                <!-- Password Input -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan password anda" required>
                </div>
                <!-- Submit Button -->
                <div class="d-grid gap-2">
                    <input type="submit" class="btn btn-primary" value="Login" name="submit">
                </div>
            </form>
            <div class="text-center mt-3">
                <p>Belum punya akun? <a href="/teoripemweb/pertemuan-5/register.php">Daftar disini</a></p>
            </div>
        </div>
    </div>

    <!-- Link ke Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
