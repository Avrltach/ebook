<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar E-Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
    .sidebar {
        width: 250px;
        height: 100vh;
        position: fixed;
        top: 0;
        left: 0;
        background-color: #343a40;
        padding: 20px;
    }
    .sidebar a {
        display: block;
        padding: 10px;
        color: white;
        text-decoration: none;
        border-radius: 5px;
    }
    .sidebar a:hover {
        background-color: #495057;
    }
</style>
</head>
<body>
<div class="sidebar text-white">
    <h4 class="text-center">E-Book</h4>
    <hr class="border-light">
    <a href="index.php"><i class="fa fa-chart-line"></i> Dashboard</a>
    <a href="buku_view.php"><i class="fa fa-book"></i> Buku</a>
    <a href="peminjaman.php"><i class="fa fa-exchange-alt"></i> Peminjaman</a>
    <a href="pengembalian.php"><i class="fa fa-undo"></i> Pengembalian</a>
</div>
</body>
</html>
