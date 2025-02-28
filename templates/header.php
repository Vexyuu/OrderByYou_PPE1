<?php
require_once './config/database.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OrderByYou - Votre Boutique en Ligne</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
<header class="glass-header">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a href="index.php?pages=home" class="navbar-brand">
                <img src="./assets/img/OrderByYou.png" alt="Logo" class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php?pages=home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?pages=cart">Panier</a></li>
                    <?php if (!isset($_SESSION['user'])): ?>
                        <li class="nav-item"><a class="nav-link btn-login" href="index.php?pages=login">Connexion</a></li>
                    <?php else: ?>
                        <li class="nav-item"><a class="nav-link" href="index.php?pages=profil">Profil</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php?pages=logout">Déconnexion</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    <div class="profil-name">
        <strong><?php echo isset($_SESSION['user']) ? htmlspecialchars($_SESSION['user']) : 'Invité'; ?></strong>
    </div>
</header>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<style>

</style>
