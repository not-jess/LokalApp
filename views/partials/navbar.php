<nav class="py-3 navbar-expand-lg border-bottom">
    <div class="container text-center">
        <div class="row">
            <div class="col-6">
                <a href="/" class="btn <?=urlIs("/") ? "text-decoration-underline" : "" ?>">Beranda</a>
                <a href="/aplikasi" class="btn <?=urlIs("/aplikasi") ? "text-decoration-underline" : "" ?>">Aplikasi</a>
                <a href="/permainan" class="btn <?=urlIs("/permainan") ? "text-decoration-underline" : "" ?>">Permainan</a>
            </div>
            <div class="col-4">
                <form class="d-flex" role="search">
                    <input class="form-control" id="search" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-primary" id="searchBtn" type="submit">Search</button>
                </form>
            </div>
            <div class="col-2">
                <a href="/masuk" class="btn">Masuk</a>
            </div>
        </div>
    </div>
</nav>