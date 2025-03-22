<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ebook Dashboard</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
         .content {
            margin-left: 250px; /* Supaya tidak ketindih sidebar */
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <?php require 'sidebar_view.php'; ?>


            <!-- Konten Dashboard -->
            <div class="content">
                <h1 class="fw-bold text-primary" style="font-size: 2rem;">Selamat Datang di E-Book</h1>
                <p class="text-secondary fs-5" style="font-size: 1rem;">Gunakan menu di sidebar untuk mengakses fitur yang tersedia.</p>

                <div class="row">
                    <div class="col-lg-3 col-xs-6">
                        <div class="card text-white bg-info mb-1 position-relative">
                            <div class="card-body">
                                <h3 class="card-title">150</h3>
                                <p class="card-text">Buku</p>
                            </div>
                            <div class="icon position-absolute top-0 end-0 p-3">
                                <i class="fa fa-book"></i>
                            </div>
                            <div class="card-footer">
                                <a href="buku_view.php" class="btn btn-light">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-6">
                        <div class="card text-white bg-success mb-1 position-relative">
                            <div class="card-body">
                                <h3 class="card-title">150</h3>
                                <p class="card-text">Dipinjam</p>
                            </div>
                            <div class="icon position-absolute top-0 end-0 p-3">
                                <i class="fa fa-user-plus"></i>
                            </div>
                            <div class="card-footer">
                                <a href="books.php" class="btn btn-light">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-6">
                        <div class="card text-white bg-danger mb-1 position-relative">
                            <div class="card-body">
                                <h3 class="card-title">150</h3>
                                <p class="card-text">Dikembalikan</p>
                            </div>
                            <div class="icon position-absolute top-0 end-0 p-3">
                                <i class="fa fa-list"></i>
                            </div>
                            <div class="card-footer">
                                <a href="books.php" class="btn btn-light">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End content -->
        </div> <!-- End row -->
    </div> <!-- End container-fluid -->
</body>
</html>
