<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengenalan Stack</title>
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
        <h1>Pengenalan Stack</h1>
        <p>Memahami Konsep Stack dalam Struktur Data</p>
    </div>

    <div class="content">
        <h2>Apa itu Stack?</h2>
        <p>Stack adalah struktur data linear yang mengikuti prinsip LIFO (Last In, First Out). Artinya, elemen terakhir yang dimasukkan ke dalam stack akan menjadi elemen pertama yang dikeluarkan. Stack dapat diibaratkan seperti tumpukan buku; buku yang terakhir ditumpuk adalah yang pertama diambil.</p>
        
        <h3>Operasi Dasar pada Stack</h3>
        <ul>
            <li><strong>Push:</strong> Menambahkan elemen ke atas stack.</li>
            <li><strong>Pop:</strong> Menghapus elemen dari atas stack.</li>
            <li><strong>Peek:</strong> Melihat elemen teratas tanpa menghapusnya.</li>
            <li><strong>IsEmpty:</strong> Memeriksa apakah stack kosong.</li>
        </ul>

        <h3>Contoh Implementasi</h3>
        <div class="example-code">
            <pre>
class Stack {
    Node top;

    void push(int data) {
        // implementasi
    }

    void pop() {
        // implementasi
    }
}
            </pre>
        </div>
        <a href="stack.html">Lihat Implementasi</a>
        <h2 class="mt-5">Kesimpulan</h2>
        <p>Stack adalah struktur data yang banyak digunakan dalam pemrograman, terutama dalam algoritma rekursif, evaluasi ekspresi, dan undo pada aplikasi. Memahami stack sangat penting dalam pengembangan perangkat lunak.</p>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
