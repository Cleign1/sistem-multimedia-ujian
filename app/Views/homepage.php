<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>">
    <link rel="icon" href="<?= base_url('assets/images/favicon.ico') ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?= base_url('favicon.ico') ?>" type="image/x-icon">
</head>
<body>
    <header>
        <h1 id="headerH1">Ini adalah header</h1>
        <nav>
            <ul>
                <li><a href="<?= base_url('/') ?>">Home</a></li>
                <li><a href="<?= base_url('about') ?>">About</a></li>
                <li><a href="<?= base_url('contact') ?>">Contact</a></li>
            </ul>
        </nav>
    </header>
    <h1 id="title-tag">Welcome to the HomePage</h1>
</body>
</html>