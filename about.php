<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        .header {
            background-color: #007bff;
            color: white;
            padding: 30px 0;
            text-align: center;
        }
        .content {
            margin: 30px auto;
            max-width: 800px;
        }
        .profile-picture {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            margin-bottom: 20px;
        }
        .social-icons a {
            color: #007bff;
            margin: 0 10px;
            font-size: 24px;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="dashboard.php">Structure Data</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="struktur.php"><i class="bi bi-speedometer2"></i> Struktur Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php"><i class="bi bi-info-circle"></i> About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php"><i class="bi bi-box-arrow-right"></i> Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="header">
        <h1>Tentang Saya</h1>
        <p>Mengenal lebih dekat tentang saya</p>
    </div>

    <div class="content text-center">
        <img src="danis.jpg" alt="Foto Profil" class="profile-picture">
        <h2>Danis</h2>
        <p>Saya adalah seorang pengembang web yang berfokus pada pengembangan aplikasi berbasis web dan struktur data. Saya memiliki minat yang kuat dalam menciptakan solusi yang efisien dan inovatif melalui teknologi modern. Dengan pengalaman dalam berbagai proyek, saya berusaha untuk terus belajar dan berkembang.</p>
        
        <h3>Keahlian Saya</h3>
        <ul class="list-unstyled">
            <li><i class="bi bi-code-slash"></i> Pengembangan Web</li>
            <li><i class="bi bi-database"></i> Manajemen Database</li>
            <li><i class="bi bi-diagram-3"></i> Struktur Data dan Algoritma</li>
            <li><i class="bi bi-bootstrap"></i> Bootstrap dan Desain Responsif</li>
        </ul>

        <h3>Hubungi Saya</h3>
        <div class="social-icons">
            <a href="https://www.linkedin.com/in/danis-herlana-899026297/" target="_blank"><i class="bi bi-linkedin"></i></a>
            <a href="https://github.com/danis-sky" target="_blank"><i class="bi bi-github"></i></a>
            <a href="https://www.instagram.com/daniskep/?hl=en"><i class="bi bi-instagram"></i></a>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
