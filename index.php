<?php include "includes/pageHeader.php";
require "includes/function.php";
?>
<header>
    <h1 class="text-center p-3 fw-bold">Daftar Kuliner</h1>
</header>

<?php require "includes/navbar.php" ?>
<div class="container mt-4 mb-5">
    <div class="container text-center my-4">
        <a href="?page=home" class="btn btn-primary mx-2">Home</a>
        <a href="?page=makanan" class="btn btn-success mx-2">Makanan</a>
        <a href="?page=minuman" class="btn btn-success mx-2">Minuman</a>
        <a href="?page=about" class="btn btn-info mx-2">About</a>
        <a href="?page=contact" class="btn btn-info mx-2">Contact</a>
    </div>
    <?php require "includes/konten.php" ?>
</div>

<footer>
    <div class="text-bg-dark text-center p-2">
        Pemrograman Web 1 @ <?= date("Y") ?>
    </div>
</footer>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>



