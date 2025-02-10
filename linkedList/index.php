<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linked List Penjelasan</title>
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
        <h1>Pengenalan Linked List</h1>
        <p>Memahami Single Linked List, Double Linked List, Single Circular Linked List, dan Double Circular Linked List</p>
    </div>

    <div class="content">
        <h2>Single Linked List</h2>
        <p>Single linked list adalah struktur data di mana setiap elemen (node) memiliki dua bagian: data dan referensi ke node berikutnya. Ini memungkinkan kita untuk menyimpan data dalam urutan tertentu dan menjelajahi elemen-elemen tersebut secara linear.</p>
        <h3>Contoh Struktur Node</h3>
        <div class="example-code">
            <pre>
class Node {
    int data;
    Node next;
}
            </pre>
        </div>
        <h3>Contoh Implementasi</h3>
        <div class="example-code">
            <pre>
class SingleLinkedList {
    Node head;

    void insert(int data) {
        Node newNode = new Node();
        newNode.data = data;
        newNode.next = head;
        head = newNode;
    }
}
            </pre>
        </div>
        <a href="single/index.html">Lihat Implementasi</a>

        <h2 class="mt-5">Double Linked List</h2>
        <p>Double linked list adalah struktur data di mana setiap elemen (node) memiliki tiga bagian: data, referensi ke node sebelumnya, dan referensi ke node berikutnya. Ini memungkinkan traversal di kedua arah (maju dan mundur).</p>
        <h3>Contoh Struktur Node</h3>
        <div class="example-code">
            <pre>
class Node {
    int data;
    Node next;
    Node prev;
}
            </pre>
        </div>
        <h3>Contoh Implementasi</h3>
        <div class="example-code">
            <pre>
class DoubleLinkedList {
    Node head;

    void insert(int data) {
        Node newNode = new Node();
        newNode.data = data;
        newNode.next = head;
        if (head != null) {
            head.prev = newNode;
        }
        head = newNode;
        newNode.prev = null;
    }
}
            </pre>
        </div>
        <a href="double/double.html">Lihat Implementasi</a>

        <h2 class="mt-5">Single Circular Linked List</h2>
        <p>Single Circular Linked List adalah variasi dari single linked list, di mana node terakhir menunjuk kembali ke node pertama, membentuk lingkaran. Ini memungkinkan kita untuk terus menjelajahi list tanpa titik akhir.</p>
        <h3>Contoh Struktur Node</h3>
        <div class="example-code">
            <pre>
class Node {
    int data;
    Node next;
}
            </pre>
        </div>
        <h3>Contoh Implementasi</h3>
        <div class="example-code">
            <pre>
class SingleCircularLinkedList {
    Node head;

    void insert(int data) {
        Node newNode = new Node();
        newNode.data = data;

        if (head == null) {
            head = newNode;
            newNode.next = head;
        } else {
            Node temp = head;
            while (temp.next != head) {
                temp = temp.next;
            }
            temp.next = newNode;
            newNode.next = head;
        }
    }
}
            </pre>
        </div>
        <a href="sc.html">Lihat Implementasi</a>

        <h2 class="mt-5">Double Circular Linked List</h2>
        <p>Double Circular Linked List adalah variasi dari double linked list di mana node terakhir menunjuk kembali ke node pertama, dan node pertama menunjuk ke node terakhir, membentuk lingkaran ganda. Ini memungkinkan traversal maju dan mundur tanpa batas.</p>
        <h3>Contoh Struktur Node</h3>
        <div class="example-code">
            <pre>
class Node {
    int data;
    Node next;
    Node prev;
}
            </pre>
        </div>
        <h3>Contoh Implementasi</h3>
        <div class="example-code">
            <pre>
class DoubleCircularLinkedList {
    Node head;

    void insert(int data) {
        Node newNode = new Node();
        newNode.data = data;

        if (head == null) {
            head = newNode;
            newNode.next = head;
            newNode.prev = head;
        } else {
            Node temp = head;
            while (temp.next != head) {
                temp = temp.next;
            }
            temp.next = newNode;
            newNode.prev = temp;
            newNode.next = head;
            head.prev = newNode;
        }
    }
}
            </pre>
        </div>
        <a href="dc.html">Lihat Implementasi</a>

        <h2 class="mt-5">Kesimpulan</h2>
        <p>Linked list adalah struktur data yang berguna untuk menyimpan dan mengelola data dengan efisien. Setiap jenis linked list memiliki karakteristiknya sendiri, baik single, double, single circular, maupun double circular linked list. Memahami perbedaan mereka sangat penting untuk memilih struktur yang paling sesuai dengan kebutuhan pemrograman Anda.</p>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
