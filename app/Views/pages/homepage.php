<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>"> -->
    <link rel="icon" href="<?= base_url('assets/images/favicon.ico') ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?= base_url('favicon.ico') ?>" type="image/x-icon">
</head>
<body class="bg-light">
    <!-- Header Section -->
    <header class="bg-primary text-white py-3">
        <div class="container">
            <h1 id="headerH1" class="text-center">Ini adalah header</h1>
            <nav>
                <ul class="nav justify-content-center">
                    <li class="nav-item"><a class="nav-link text-white" href="<?= base_url('/') ?>">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="<?= base_url('about') ?>">About</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="<?= base_url('contact') ?>">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Main Content Section -->
    <main class="container mt-5">
        <div class="text-center">
            <h1 id="title-tag" class="display-4">Welcome to the HomePage</h1>
            <p class="lead">This is a simple homepage styled with Bootstrap.</p>
            <a href="<?= base_url('about') ?>" class="btn btn-primary btn-lg">Learn More</a>
        </div>
    </main>

    <!-- Footer Section -->
    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p>&copy; 2025 Sistem Multimedia Ujian. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>