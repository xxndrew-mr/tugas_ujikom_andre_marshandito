<?php include "config/db_connect.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koperasi Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="d-flex">
    <!-- Sidebar -->
    <div class="bg-primary text-white p-3 sidebar">
        <h4>Koperasi Pegawai</h4>
        <ul class="nav flex-column">
            <li class="nav-item"><a href="index.php?page=dashboard" class="nav-link text-white">🏠 Dashboard</a></li>
            <li class="nav-item"><a href="index.php?page=customer" class="nav-link text-white">👥 Customer</a></li>
        </ul>
    </div>

    <!-- Content -->
    <div class="container p-4">
        <?php
        $page = isset($_GET['page']) ? $_GET['page'] : "dashboard";
        include "pages/$page.php";
        ?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
