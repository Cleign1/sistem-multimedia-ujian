<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>">
    <link rel="icon" href="<?= base_url('assets/images/favicon.ico') ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?= base_url('favicon.ico') ?>" type="image/x-icon">
</head>

<body>
<div class="flex flex-col min-h-screen">
    <nav class="bg-gray-800 flex items-center justify-center py-3">
        <div class="flex space-x-4">
            <a href="/" class="rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-gray-700 hover:text-white">Home</a>
            <a href="/about" class="rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-gray-700 hover:text-white">About us</a>
            <a href="/kanban" class="rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-gray-700 hover:text-white">Kanban</a>
        </div>
    </nav>