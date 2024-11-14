<?php require_once 'partials/header.php'; ?>

<?php require_once 'partials/navbar.php'; ?>
<main class="bg-dark min-vh-100 py-3 px-5">
    <div class="container text-white mt-5">
        <div class="row mb-3">
            <div class="col-4">
                <img src="assets/images/dummy2.png" alt="Aplikasi" class="img-fluid bg-primary border rounded-circle ">
                <h1>Tulis</h1>
                <p>Produktivitas</p>
                <button onclick="downloadApp()" class="btn btn-primary w-100">Unduh</a>
            </div>
            <div class="col-1"></div>
            <div class="col-7">
                <div class="card bg-secondary text-white">
                    <div class="card-body">
                        <h5 class="card-title">Screenshots</h5>
                        <hr>
                        <div id="carouselScreenshots" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselScreenshots" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselScreenshots" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselScreenshots" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner" style="padding-left: 5rem; padding-right:5rem;">
                                <div class="carousel-item active">
                                    <img src="assets/images/dummyss.png" class="d-block w-100" style="height:360px" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/images/dummyss.png" class="d-block w-100" style="height:360px" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/images/dummyss.png" class="d-block w-100" style="height:360px" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselScreenshots" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselScreenshots" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row mb-3">
            <div class="col-4">
                <div class="card bg-secondary text-white d-flex h-100">
                    <div class="card-body">
                        <h5 class="card-title">System Requirements</h5>
                        <hr>
                        <p class="card-text">- Windows 10 atau lebih</p>
                        <p class="card-text">- RAM 600MB atau lebih</p>
                        <p class="card-text">- Penyimpanan internal 1GB atau lebih</p>
                        <p class="card-text">- Prosesor Intel Core i3 atau lebih</p>
                    </div>
                </div>

            </div>
            <div class="col-1"></div>
            <div class="col-7">
                <div class="card bg-secondary text-white d-flex h-100">
                    <div class="card-body">
                        <h5 class="card-title">Deskripsi</h5>
                        <hr>
                        <p class="card-text">Tulis adalah aplikasi yang memungkinkan pengguna untuk menulis dan mengedit dokumen dengan mudah. Aplikasi ini memiliki fitur-fitur yang memudahkan pengguna dalam menulis dokumen, seperti fitur auto-save, spell-check, dan lain-lain. Dengan aplikasi ini, pengguna dapat menulis dokumen dengan cepat dan mudah.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-4">
                <div class="card bg-secondary text-white d-flex h-100">
                    <div class="card-body">
                        <h5 class="card-title">Rating dan ulasan</h5>
                        <hr>
                        <p class="card-text fw-bold fst-italic"> 4.6/5.0 <i class="bi bi-star-fill" style="color:yellow"></i> (3 Rating)</p> 
                        <p class="card-text">- 5.0 <i class="bi bi-star-fill" style="color:yellow"></i><i>11/11/2024 - Andreas</i> "Aplikasi yang sangat membantu dalam menulis dokumen. Sangat direkomendasikan!"</p>
                        <p class="card-text">- 4.6 <i class="bi bi-star-fill" style="color:yellow"></i><i>11/11/2024 - Andreas</i> "Fitur-fitur yang disediakan sangat lengkap. Sangat memudahkan dalam menulis dokumen."</p>
                        <p class="card-text">- 4.6 <i class="bi bi-star-fill" style="color:yellow"></i><i>11/11/2024 - Andreas</i> "Aplikasi yang sangat bagus. Sangat membantu dalam menulis dokumen."</p>
                    </div>
                </div>

            </div>
            <div class="col-1"></div>
            <div class="col-7">
                <div class="card bg-dark text-white d-flex h-100">
                    <div class="card-body">
                        <h5 class="card-title">Aplikasi Lainnya</h5>
                        <hr>
                        <?php $carouselId = 'appTerbaru'; ?>
                        <?php $appImg = 'assets/images/dummy3.png'; ?>
                        <?php $appName = 'Foto'; ?>
                        <?php $appRating = '5.0'; ?>
                        <?php require 'partials/apps-carousel.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="assets/js/download.js"></script>
</body>

</html>