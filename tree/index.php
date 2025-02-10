<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengenalan Tree</title>
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
        <h1>Pengenalan Tree</h1>
        <p>Memahami Konsep Tree dalam Struktur Data</p>
    </div>

    <div class="content">
        <h2>Apa itu Tree?</h2>
        <p>Tree adalah struktur data hierarkis yang terdiri dari simpul (nodes) dan hubungan antar simpul yang disebut tepi (edges). Tree memiliki satu simpul yang disebut root, dan setiap simpul dapat memiliki nol atau lebih simpul anak.</p>
        
        <h3>Jenis-Jenis Tree</h3>
        <ul>
            <li><strong>Binary Tree:</strong> Setiap simpul memiliki maksimal dua anak.</li>
            <li><strong>Binary Search Tree:</strong> Suatu binary tree yang memenuhi sifat khusus, di mana simpul anak kiri memiliki nilai lebih kecil, dan simpul anak kanan memiliki nilai lebih besar.</li>
            <li><strong>AVL Tree:</strong> Binary search tree yang seimbang, di mana perbedaan tinggi antara anak kiri dan kanan tidak lebih dari satu.</li>
        </ul>

        <h3>Contoh Implementasi</h3>
        <div class="example-code">
            <pre>
class Node {
    int value;
    Node left;
    Node right;
    
    Node(int value) {
        this.value = value;
        left = right = null;
    }
}

class Tree {
    Node root;

    void insert(int value) {
        // implementasi
    }
}
            </pre>
        </div>
        <a href="tree.html">Lihat Implementasi</a>
        <h2 class="mt-5">Kesimpulan</h2>
        <p>Tree adalah struktur data yang sangat penting dalam pemrograman dan digunakan dalam berbagai aplikasi seperti basis data, pengorganisasian data, dan algoritma pencarian. Memahami tree dan variasinya sangat penting dalam pengembangan perangkat lunak.</p>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
