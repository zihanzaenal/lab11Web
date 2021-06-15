<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title><?= $title; ?></title>
</head>
<body>
    <div id="container">
    <header>
        <h1>Layout Sederhana</h1>
    </header>
    <nav>
        <a href="<?= base_url('/');?>" class="active">Home</a>
        <a href="<?= base_url('/artikel');?>" class="active">Artikel</a>
        <a href="<?= base_url('/about');?>" class="active">About</a>
        <a href="<?= base_url('/contact');?>" class="active">Contact</a>
    </nav>
    <section id="wrapper">
        <section id="main">
    </div>