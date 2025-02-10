<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengenalan Queue</title>
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
        .example-code {
            background-color: #f8f9fa;
            border-left: 4px solid #007bff;
            padding: 10px;
            margin-bottom: 20px;
            font-family: 'Courier New', Courier, monospace;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="../dashboard.php">Structure Data</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../struktur.php"><i class="bi bi-speedometer2"></i> Struktur Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../about.php"><i class="bi bi-info-circle"></i> About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../login.php"><i class="bi bi-box-arrow-right"></i> Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="header">
        <h1>Pengenalan Queue</h1>
        <p>Memahami Konsep Queue dalam Struktur Data</p>
    </div>

    <div class="content">
        <h2>Apa itu Queue?</h2>
        <p>Queue adalah struktur data yang mengikuti prinsip FIFO (First In, First Out), di mana elemen yang pertama kali dimasukkan adalah elemen yang pertama kali dihapus. Ini mirip dengan antrean di dunia nyata, di mana orang pertama yang berdiri di antrean adalah orang pertama yang dilayani.</p>
        
        <h3>Operasi Dasar pada Queue</h3>
        <ul>
            <li><strong>Enqueue:</strong> Menambahkan elemen ke belakang antrean.</li>
            <li><strong>Dequeue:</strong> Menghapus elemen dari depan antrean.</li>
            <li><strong>Peek:</strong> Melihat elemen terdepan tanpa menghapusnya.</li>
            <li><strong>IsEmpty:</strong> Memeriksa apakah antrean kosong.</li>
        </ul>

        <h3>Contoh Implementasi</h3>
        <div class="example-code">
            <pre>
class Queue {
    Node front, rear;

    void enqueue(int data) {
        // implementasi
    }

    void dequeue() {
        // implementasi
    }
}
            </pre>
        </div>
        <a href="queue.html">Lihat Implementasi</a>
        <h2 class="mt-5">Kesimpulan</h2>
        <p>Queue adalah struktur data yang penting dan banyak digunakan dalam berbagai aplikasi, seperti sistem antrian, pengelolaan tugas, dan banyak lagi. Memahami cara kerja dan implementasi queue akan sangat membantu dalam pengembangan perangkat lunak Anda.</p>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
