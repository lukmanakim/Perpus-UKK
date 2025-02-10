<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengenalan Graph</title>
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
        <h1>Pengenalan Graph</h1>
        <p>Memahami Konsep Graph dalam Struktur Data</p>
    </div>

    <div class="content">
        <h2>Apa itu Graph?</h2>
        <p>Graph adalah struktur data non-linear yang terdiri dari simpul (nodes) dan tepi (edges) yang menghubungkan simpul-simpul tersebut. Graph digunakan untuk mewakili berbagai hubungan antar objek seperti jaringan komputer, rute transportasi, atau hubungan antar entitas dalam sebuah sistem.</p>
        
        <h3>Komponen pada Graph</h3>
        <ul>
            <li><strong>Vertex (Node):</strong> Simpul yang mewakili suatu entitas atau objek dalam graph.</li>
            <li><strong>Edge:</strong> Tepi yang menghubungkan dua simpul, menggambarkan hubungan atau koneksi antar simpul.</li>
        </ul>

        <h3>Jenis-Jenis Graph</h3>
        <ul>
            <li><strong>Graph Berarah (Directed Graph):</strong> Tepi-tepi memiliki arah dari satu simpul ke simpul lainnya.</li>
            <li><strong>Graph Tak Berarah (Undirected Graph):</strong> Tepi-tepi tidak memiliki arah, sehingga hubungan antara dua simpul bersifat dua arah.</li>
            <li><strong>Graph Berbobot (Weighted Graph):</strong> Setiap tepi memiliki bobot atau nilai yang menggambarkan kekuatan hubungan antar simpul.</li>
        </ul>

        <h3>Contoh Implementasi</h3>
        <div class="example-code">
            <pre>
class Graph {
    constructor() {
        this.adjacencyList = new Map();
    }

    addVertex(v) {
        this.adjacencyList.set(v, []);
    }

    addEdge(v, w) {
        this.adjacencyList.get(v).push(w);
        this.adjacencyList.get(w).push(v);
    }
}
            </pre>
        </div>
        <a href="graph.html">Lihat Implementasi</a>

        <h2 class="mt-5">Kesimpulan</h2>
        <p>Graph adalah struktur data yang sangat penting dalam ilmu komputer dan rekayasa perangkat lunak, khususnya untuk memodelkan jaringan, hubungan, dan rute. Memahami konsep graph akan membantu dalam menyelesaikan berbagai masalah kompleks dalam dunia nyata.</p>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
