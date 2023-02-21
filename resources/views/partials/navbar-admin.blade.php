{{-- <nav class="navbar navbar-expand-lg navbar-light bg-light shadow border-bottom rounded-4 p-lg-3 p-sm-0 p-md-0">
    <div class="container">
        <a class="navbar-brand fw-bold text-primary fs-3" href="/admin">Aspirasi Masyarakat</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <form action="/logout" method="post">
                @csrf
                <button type="submit" class="btn btn-sm btn-danger">Log Out</button>
            </form>
        </div>
    </div>
</nav> --}}


<nav class="navbar navbar-expand-lg navbar-dark bg-danger py-3">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/admin"><i class="bi bi-megaphone"></i> Aspirasi Siswa</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="btn btn-sm btn-danger"><i class="bi bi-box-arrow-left"></i></button>
                </form>
            </div>
        </div>
    </div>
</nav>
