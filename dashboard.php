<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Structure Data</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f7f6;
        }
        .navbar {
            margin-bottom: 20px;
        }
        .list-group-item {
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            margin-bottom: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            transition: background-color 0.2s ease-in-out;
        }
        .list-group-item:hover {
            background-color: #e9ecef;
        }
        .list-group-item h5 {
            color: #007bff;
            font-weight: bold;
        }
        .list-group-item p {
            font-size: 14px;
            color: #6c757d;
        }
        .dashboard-title {
            margin: 40px 0;
            text-align: center;
        }
        .dashboard-title h1 {
            color: #343a40;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Structure Data</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="struktur.php"><i class="bi bi-speedometer2"></i> Struktur Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php"><i class="bi bi-person"></i> About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php"><i class="bi bi-box-arrow-right"></i> Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="dashboard-title">
            <h1>Dashboard</h1>
            <p>Selamat Datang Di Kumpulan Pelajaran Struktur Data</p>
        </div>

        <!-- List to summarize structure data -->
        <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    <h5>Array</h5>
                    <p>Rangkuman tentang array dalam struktur data.</p>
                </div>
                <a href="array/array2/index.php" class="btn btn-primary">Pelajari Lebih Lanjut</a>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    <h5>Linked List</h5>
                    <p>Rangkuman tentang linked list dalam struktur data.</p>
                </div>
                <a href="linkedlist/index.php" class="btn btn-primary">Pelajari Lebih Lanjut</a>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    <h5>Queue</h5>
                    <p>Rangkuman tentang queue dalam struktur data.</p>
                </div>
                <a href="queue/index.php" class="btn btn-primary">Pelajari Lebih Lanjut</a>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    <h5>Stack</h5>
                    <p>Rangkuman tentang stack dalam struktur data.</p>
                </div>
                <a href="stack/index.php" class="btn btn-primary">Pelajari Lebih Lanjut</a>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    <h5>Graph</h5>
                    <p>Rangkuman tentang graph dalam struktur data.</p>
                </div>
                <a href="graph/index.php" class="btn btn-primary">Pelajari Lebih Lanjut</a>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    <h5>Tree</h5>
                    <p>Rangkuman tentang tree dalam struktur data.</p>
                </div>
                <a href="tree/index.php" class="btn btn-primary">Pelajari Lebih Lanjut</a>
            </li>
        </ul>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
