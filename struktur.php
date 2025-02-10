<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengenalan Struktur Data</title>
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
        <h1>Pengenalan Struktur Data</h1>
        <p>Dasar-dasar Struktur Data dan Penerapannya</p>
    </div>

    <div class="content">
        <h2>Apa itu Struktur Data?</h2>
        <p>Struktur data adalah cara menyimpan dan mengatur data dalam komputer sehingga data tersebut dapat digunakan secara efisien. Struktur data digunakan dalam hampir semua program atau perangkat lunak untuk mengelola, mengakses, dan memproses data.</p>

        <h3>Kategori Struktur Data</h3>
        <ul>
            <li><strong>Struktur Data Linear:</strong> Data disimpan secara berurutan. Contohnya termasuk array, linked list, stack, dan queue.</li>
            <li><strong>Struktur Data Non-Linear:</strong> Data disimpan dalam cara yang tidak berurutan. Contohnya termasuk tree dan graph.</li>
        </ul>

        <h2 class="mt-5">Struktur Data Linear</h2>
        <p>Struktur data linear menyimpan elemen data secara berurutan. Setiap elemen memiliki tetangga sebelum dan sesudahnya, kecuali elemen pertama dan terakhir. Berikut adalah beberapa contoh struktur data linear:</p>
        
        <h3>Array</h3>
        <p>Array adalah struktur data yang menyimpan elemen-elemen dengan tipe data yang sama di lokasi memori yang berdekatan. Ini memungkinkan akses cepat menggunakan indeks.</p>
        
        <h3>Linked List</h3>
        <p>Linked list adalah kumpulan elemen, yang disebut node, di mana setiap node berisi data dan referensi ke node berikutnya.</p>
        
        <h3>Stack</h3>
        <p>Stack adalah struktur data yang mengikuti prinsip LIFO (Last In, First Out). Elemen terakhir yang dimasukkan adalah elemen pertama yang akan dihapus.</p>

        <h3>Queue</h3>
        <p>Queue mengikuti prinsip FIFO (First In, First Out). Elemen pertama yang dimasukkan adalah elemen pertama yang dikeluarkan.</p>

        <h2 class="mt-5">Struktur Data Non-Linear</h2>
        <p>Struktur data non-linear tidak menyimpan data dalam urutan linear. Elemen-elemen dihubungkan satu sama lain dengan cara yang lebih kompleks. Berikut adalah beberapa contohnya:</p>

        <h3>Tree</h3>
        <p>Tree adalah struktur data hierarkis di mana elemen-elemen data diatur dalam simpul-simpul (nodes) yang dihubungkan dengan cabang (edges). Contoh paling umum adalah Binary Tree, di mana setiap simpul memiliki maksimal dua anak.</p>
        
        <h3>Graph</h3>
        <p>Graph adalah sekumpulan simpul yang terhubung dengan tepi (edges). Ini digunakan untuk mewakili hubungan atau konektivitas di antara objek.</p>

        <h2 class="mt-5">Kesimpulan</h2>
        <p>Pemahaman tentang struktur data adalah fundamental dalam pengembangan perangkat lunak. Pemilihan struktur data yang tepat dapat meningkatkan efisiensi algoritma dan mengoptimalkan penggunaan memori dan waktu eksekusi program Anda.</p>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
