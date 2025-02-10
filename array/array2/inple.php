<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2D Array CRUD Application</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
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

    <div class="container-c">
    <h1 class="mt-5">Implementasi Crud Array</h1>
    <a href="index.php" class="btn btn-success">Kembali</a>
    <div class="input-group mt-5">
        <label for="rows">Rows:</label>
        <input type="number" id="rows" min="1" value="3">
        
        <label for="cols">Columns:</label>
        <input type="number" id="cols" min="1" value="3">
        
        <button onclick="createMatrix()">Create Matrix</button>
        <button onclick="addColumn()">Add Column</button>
        <button onclick="deleteColumn()">Delete Column</button>
        <button onclick="resetMatrix()">Reset Matrix</button>
    </div>
    
    <div id="matrix" class="matrix"></div>
</div>

    <script src="script.js"></script>
</body>
</html>
