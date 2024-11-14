<?php require_once 'partials/header.php'; ?>

<?php require_once 'partials/navbar.php'; ?>
<main class="bg-dark min-vh-100 py-5 px-5">
    
    <?php require('partials/apps-terutama-carousel.php'); ?>

    <h5 class="text-white">Aplikasi komunitas teratas</h5>
    <?php $carouselId = 'appTeratas'; ?>
    <?php $appImg = 'assets/images/dummy2.png'; ?>
    <?php $appName = 'Tulis'; ?>
    <?php $appRating = '4.5'; ?>
    <?php require('partials/apps-carousel.php'); ?>

    <h5 class="text-white">Aplikasi terbaru</h5>
    <?php $carouselId = 'appTerbaru'; ?>
    <?php $appImg = 'assets/images/dummy3.png'; ?>
    <?php $appName = 'Foto'; ?>
    <?php $appRating = '5.0'; ?>
    <?php require('partials/apps-carousel.php'); ?>
</main>
<?php require_once 'partials/footer.php'; ?>
</body>

</html>