<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjelasan tentang Array</title>
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
            <a class="navbar-brand" href="../../dashboard.php">Structure Data</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../../struktur.php"><i class="bi bi-speedometer2"></i> Struktur Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../about.php"><i class="bi bi-info-circle"></i> About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../login.php"><i class="bi bi-box-arrow-right"></i> Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="header">
        <h1>Array dalam Struktur Data</h1>
        <p>Memahami dasar-dasar array dan penggunaannya</p>
    </div>

    <div class="content">
        <h2>Pengenalan</h2>
        <p>Array adalah struktur data yang menyimpan elemen dengan tipe yang sama dalam urutan tertentu. Setiap elemen dalam array dapat diakses menggunakan indeks, yang biasanya dimulai dari 0.</p>

        <h2>Karakteristik Array</h2>
        <ul>
            <li>Ukuran tetap: Setelah dideklarasikan, ukuran array tidak dapat diubah.</li>
            <li>Akses cepat: Elemen dapat diakses dengan cepat menggunakan indeks.</li>
            <li>Tipe data sama: Semua elemen dalam array harus memiliki tipe data yang sama.</li>
        </ul>

        <h2>Contoh Penggunaan</h2>
        <div class="example-code">
            <pre>
int[] numbers = {1, 2, 3, 4, 5};
System.out.println(numbers[0]); // Output: 1
            </pre>
        </div>
        <p>Dalam contoh di atas, kita mendeklarasikan array bernama <code>numbers</code> yang menyimpan lima bilangan bulat. Kita dapat mengakses elemen pertama menggunakan indeks 0.</p>

        <h2>Array 2D (Dua Dimensi)</h2>
        <p>Array dua dimensi adalah struktur data yang menyimpan elemen dalam bentuk matriks atau tabel. Dalam array 2D, elemen diatur dalam baris dan kolom. Setiap elemen diakses menggunakan dua indeks, satu untuk baris dan satu untuk kolom.</p>
        
        <h3>Contoh Penggunaan Array 2D</h3>
        <div class="example-code">
            <pre>
int[][] matrix = {
    {1, 2, 3},
    {4, 5, 6},
    {7, 8, 9}
};
System.out.println(matrix[0][0]); // Output: 1
            </pre>
        </div>
        <a href="inple.php">Lihat Implementasi</a>
<br><br>
        <p>Pada contoh di atas, kita mendeklarasikan array 2D bernama <code>matrix</code> yang menyimpan nilai dalam bentuk tabel 3x3. Kita dapat mengakses elemen pada baris pertama dan kolom pertama menggunakan <code>matrix[0][0]</code>.</p>

        <h2>Array 3D (Tiga Dimensi)</h2>
        <p>Array tiga dimensi adalah ekstensi dari array dua dimensi, di mana elemen disusun dalam bentuk kubus atau array dari array dua dimensi. Setiap elemen diakses menggunakan tiga indeks, mewakili tiga tingkat dimensi.</p>
        
        <h3>Contoh Penggunaan Array 3D</h3>
        <div class="example-code">
            <pre>
int[][][] array3D = {
    {
        {1, 2, 3},
        {4, 5, 6}
    },
    {
        {7, 8, 9},
        {10, 11, 12}
    }
};
System.out.println(array3D[0][1][2]); // Output: 6
            </pre>
        </div>
        <p>Pada contoh di atas, kita mendeklarasikan array 3D bernama <code>array3D</code>. Kita dapat mengakses elemen pada dimensi pertama, baris kedua, dan kolom ketiga menggunakan <code>array3D[0][1][2]</code>.</p>
        <a href="index.html">Lihat Implementasi</a>
<br><br>
        <h2>Kesimpulan</h2>
        <p>Array adalah alat yang kuat untuk menyimpan dan mengelola data terstruktur. Array 1D berguna untuk menyimpan data linier, sementara array 2D dan 3D digunakan untuk data yang lebih kompleks seperti matriks dan kubus. Array memberikan cara yang efisien untuk menyimpan data dalam jumlah besar dengan akses cepat ke elemen individual. Memahami cara kerja array adalah langkah penting dalam pengembangan perangkat lunak.</p>
    </div>
    

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
