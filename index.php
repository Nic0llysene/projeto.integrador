<?php
require_once 'dados.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nossa equipe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #fff;
            color: #333;
        }
        h1 {
            font-weight: 400;
        }
        .card {
            border: none;
            border-radius: 10px;
            transition: transform 0.2s;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .card img {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            height: 350px;
            object-fit: cover;
        }
        .card-title {
            font-weight: 600;
        }
        .text-muted {
            font-size: 0.9rem;
        }
        .divider {
            width: 60px;
            height: 2px;
            background-color: #ccc;
            margin: 15px auto;
        }
    </style>
</head>
<body>
    <div class="container py-5 text-center">
        <small class="text-uppercase text-muted">Nossa Equipe</small>
        <h1 class="my-3">Com nossa equipe, você pode esperar um atendimento personalizado.</h1>
        <div class="divider"></div>

        <div class="row justify-content-center mt-5">
            <?php foreach ($equipe as $membro): ?>
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <img src="img/<?= $membro['imagem'] ?>" class="card-img-top" alt="Foto de <?= $membro['nome'] ?>">
                        <div class="card-body text-start">
                            <h5 class="card-title"><?= $membro['nome'] ?></h5>
                            <p class="card-text"><?= $membro['bio'] ?></p>
                            <p class="text-muted">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gem" viewBox="0 0 16 16">
                                    <path d="M3.1.7A1 1 0 0 1 4.04 0h7.92a1 1 0 0 1 .94.7l2 6a1 1 0 0 1-.16.9l-6 8a1 1 0 0 1-1.58 0l-6-8a1 1 0 0 1-.16-.9l2-6z"/>
                                </svg>
                                <?= $membro['cargo'] ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>