<?php
include_once("config.php");

// Ambil data pemesanan dari database
$result = mysqli_query($mysqli, "SELECT * FROM buku ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style>
        .content {
            margin-left: 250px; /* Sesuaikan dengan lebar sidebar */
            padding: 20px;
        }
    </style>
</head>

<body>
    <?php require 'sidebar_view.php'; ?>

    <div class="content">
        <div class="container mt-4">
            <h2 class="text-center">Daftar Buku</h2>
            <a href="add.php" class="btn btn-primary mb-3">Tambah Buku Baru</a>

            <table class="table table-bordered table-striped">
                <thead class="table-info">
                    <tr>
                        <th>Judul</th>
                        <th>Pengarang</th>
                        <th>Penerbit</th>
                        <th>Tahun Terbit</th>
                        <th>Kategori</th>
                        <th>Stok</th>
                        <th>Deskripsi</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($data = mysqli_fetch_array($result)) { ?>
                        <tr>
                            <td><?= htmlspecialchars($data['Judul']); ?></td>
                            <td><?= htmlspecialchars($data['Pengarang']); ?></td>
                            <td><?= htmlspecialchars($data['Penerbit']); ?></td>
                            <td><?= htmlspecialchars($data['Tahun_terbit']); ?></td>
                            <td><?= htmlspecialchars($data['Kategori']); ?></td>
                            <td><?= htmlspecialchars($data['Stok']); ?></td>
                            <td><?= htmlspecialchars($data['Deskripsi']); ?></td>
                            <td><?= htmlspecialchars($data['Gambar']); ?></td>

                            <td>
                                <a href="edit.php?id=<?= $data['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="delete.php?id=<?= $data['id']; ?>" class="btn btn-danger btn-sm btn-delete" data-id="<?= $data['id']; ?>">Hapus</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Tambahkan SweetAlert2 & Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const deleteButtons = document.querySelectorAll(".btn-delete");

            deleteButtons.forEach(button => {
                button.addEventListener("click", function (event) {
                    event.preventDefault(); // Mencegah link langsung dijalankan

                    let deleteUrl = this.getAttribute("href");

                    Swal.fire({
                        title: "Apakah Anda yakin?",
                        text: "Data yang dihapus tidak bisa dikembalikan!",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#d33",
                        cancelButtonColor: "#3085d6",
                        confirmButtonText: "Ya, hapus!",
                        cancelButtonText: "Batal"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = deleteUrl; // Jika dikonfirmasi, arahkan ke delete.php
                        }
                    });
                });
            });
        });
    </script>
</body>

</html>
