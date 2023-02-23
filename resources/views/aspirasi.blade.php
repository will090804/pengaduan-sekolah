@extends('layouts.main')
@section('container')
    <section id="" style="background-color: #DC3545;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img src="{{ asset('img/bakgroundone.png') }}" alt="" class="img-fluid" srcset="">
                </div>
            </div>
        </div>

    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#DC3545" fill-opacity="1"
            d="M0,32L60,74.7C120,117,240,203,360,202.7C480,203,600,117,720,106.7C840,96,960,160,1080,176C1200,192,1320,160,1380,144L1440,128L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z">
        </path>
    </svg>
    <section id="about" style="height: 60vh;">
        <div class="container text-center">
            <div class="row">
                <div class="col-12">
                    <article>
                        <h1 class="mt-5">PROFIL SMK TELKOM JAKARTA</h1>
                        <p class=" mt-3">SMK Telkom Jakarta yang sebelumnya bernama SMK Telkom Sandhy Putra Jakarta sejak
                            Maret 2014 berubah menjadi SMK Telkom Jakarta dengan dicanangkannya Telkom Schools oleh Telkom
                            Foundation.
                            Yayasan Sandhykara Putra Telkom (YSPT) pada awalnya didirikan oleh persatuan istri karyawan
                            PERUMTEL (sekarang PT. Telekomunikasi Indonesia) pada tanggal 17 Januari 1980 dengan Akta
                            Notaris Masri Husen, S.H. Anggaran Dasar YSPT yang merupakan landasan operasional yayasan
                            senantiasa mengadakan penyesuaian dengan situasi dan kondisi yang ada, sehingga telah mengalami
                            beberapa kali perubahan dan terakhir dengan Akta Notaris Erny Kencanawati, S.H., M.H. Nomor 15
                            tanggal 16 Juni 2006 telah tercatat dalam daftar Yayasan berdasarkan surat DIRJEN Administrasi
                            Hukum Umum Departemen Hukum dan Hak Asasi Manusia No : C-HT.01.09-34 tanggal 29 Januari 2007.
                        </p>
                        <p class="mt-2">Undang-undang No.16 tahun 2001 tentang yayasan dan perubahannya dalam
                            undang-undang No.28 tahun 2004 tentang perubahan atas undang-undang No.16 tahun 2001 tentang
                            yayasan mengharuskan setiap yayasan untuk menyesuaikan Anggaran Dasar dengan undang-undang
                            tersebut. Pada saat ini YSPT telah menyesuaikan Anggaran Dasar yang baru yang mengacu pada
                            Undang Undang RI Nomor.16 tahun 2001 tentang Yayasan jo UU RI Nomor. 28 tahun 2004 tentang
                            perubahaan atas UU Nomor.16 tahun 2001 tentang Yayasan.</p>
                        <p class="mt-2">Maksud dan tujuan didirikannya Yayasan ini adalah untuk ikut berperan serta dalam
                            meningkatkan kesejahteraan keluarga besar Perusahaan Perseroan (Persero) PT. Telekomunikasi
                            Indonesia, Tbk khususnya dan menunjang pembangunan masyarakat Indonesia pada umumnya melalui
                            bidang Pendidikan dan Sosial.</p>
                        <p class="mt-2">Telkom Schools merupakan perubahan dari Sekolah Telkom Sandhyputra yang dikelola
                            oleh Yayasan Sandhykara Putra Telkom (YSPT). Peluncuran Telkom Schools dilaksanakan di SMK
                            Telkom Jakarta pada tanggal 23 Januari 2014 oleh Dirjen Pendidikan Menengah Kemendikbud RI Prof.
                            Dr. Ir. Achmad Jazidie beserta Dewan Pengurus dan Pembina Yayasan Sandhykara Putra Telkom.</p>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#DC3545" fill-opacity="1"
            d="M0,32L60,74.7C120,117,240,203,360,202.7C480,203,600,117,720,106.7C840,96,960,160,1080,176C1200,192,1320,160,1380,144L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
        </path>
    </svg>
    <section id="form-pengaduan" style="background-color: #DC3545;">
        <div class="row d-flex  justify-content-center">
            <h1 class="text-light text-center fw-bold mt-5">PENGADUAN SISWA</h1>
            <div class="col-sm-12 col-md-8 col-lg-6 mt-5">
                @if (request('id') != null)
                    <div class="alert mt-3 alert-warning alert-dismissible fade show" role="alert">
                        <strong>Terimakasih Telah Melakukan Pengaduan <br>
                            Nomor Pengaduan : {{ request('id') }}</strong><br>
                        <small class="">Silahkan Di Ingat Nomor pengaduannya!!</small>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if (request('nis') != null)
                    <div class="alert mt-3 alert-danger alert-dismissible fade show" role="alert">
                        <strong> NIS Anda Belum Terdaftar!! </strong><br>
                        <small>Silahkan Isi Datanya Kembali Dengan Benar</small>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="card">
                    <div class="card-body p-5">
                        <form action="/aspirasi/store" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label fw-bold">ID Pelapor</label>
                                <input type="text" name="id_pelaporan" class="form-control bg-primary text-light fw-bold"
                                    readonly value="{{ $no }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Nomor Induk Siswa</label>
                                <input type="number" name="nis" value="{{ old('nis') }}"
                                    class="form-control @error('nis') is-invalid @enderror">
                                @error('nis')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Kategori</label>
                                <div class=" container row d-flex justify-content-center">
                                    <div class="col-12">
                                        <div class="row ">

                                            {{-- <div class="col-sm-12 col-lg-4 col-md-12 ">
                                                    <input class="form-check-input" value="{{ $kat->id_kategori }}"
                                                        type="radio" name="id_kategori" id="id_kategori1">
                                                    <label class="form-check-label" for="id_kategori1">
                                                        {{ $kat->ket_kategori }}
                                                    </label>
                                                </div> --}}
                                            <select class="form-select" aria-label="Default select example"
                                                name="id_kategori">

                                                <option selected>Pilih Kategori</option>
                                                @foreach ($kategori as $kat)
                                                    <option value="{{ $kat->id_kategori }}">
                                                        {{ $kat->ket_kategori }}
                                                    </option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Lokasi</label>
                                <input type="text" name="lokasi" value="{{ old('lokasi') }}"
                                    class="form-control text-uppercase  @error('lokasi') is-invalid @enderror">
                                @error('lokasi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="bukti" class="form-label fw-bold">Bukti Pengaduan</label>
                                <input class="form-control @error('bukti') is-invalid @enderror" type="file"
                                    id="bukti" name="bukti">
                                @error('bukti')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Keterangan</label>
                                <textarea name="ket" id="" value="{{ old('ket') }}"
                                    class="form-control @error('ket') is-invalid @enderror" rows="2"></textarea>
                                @error('ket')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Submit</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#DC3545" fill-opacity="1"
            d="M0,160L60,176C120,192,240,224,360,202.7C480,181,600,107,720,112C840,117,960,203,1080,208C1200,213,1320,139,1380,101.3L1440,64L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z">
        </path>
    </svg>
    <section id="pencarian" class=" py-4 justify-content-center" style="height: 100vh;">
        <div class="row justify-content-center">
            <div class="col-12 mb-3">
                <h1 class="text-center text-danger fw-bold mt-5">PENCARIAN ASPIRASI SISWA</h1>
            </div>
            <div class="col-lg-6 col-sm-12 col-md-8 mt-4">
                <div class="card shadow">
                    <div class="card-body" style="background-color: #DC3545;">
                        <div class="row">
                            <div class="col-12 pb-3 border-bottom">
                                <form action="/" class="" method="get">
                                    <div class="input-group">
                                        <input type="text" required name="search" value="{{ request('search') }}"
                                            class="form-control" placeholder="Masukkan Nomor Pengaduan"
                                            aria-label="Recipient's username" aria-describedby="button-addon2">
                                        <button class="btn btn-primary" type="submit" id="button-addon2"><i
                                                class="bi bi-search"></i></button>
                                    </div>
                                </form>
                            </div>
                            @if (request('search') != null)
                                @foreach ($aspirasi as $as)
                                    <div class="col-12 px-4 text-light py-3 text-uppercase">
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="row">
                                                    <img src="{{ asset('storage/' . $as->input_aspirasi->bukti) }}"
                                                        width="200px" height="300px" class="img-fluid rounded-start"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="row fw-bold mt-3">
                                                    <div class="d-flex">
                                                        <p class="fw-bold p-0 m-0 me-2">Nomor Pengaduan : </p>
                                                        <p class="p-0 m-0">{{ $as->id }}</p>
                                                    </div>
                                                    <div class="d-flex">
                                                        <p class="fw-bold p-0 m-0 me-2">Status : </p>
                                                        <p class="p-0 m-0">{{ $as->status }}</p>
                                                    </div>
                                                    <div class="d-flex">
                                                        <p class="fw-bold p-0 m-0 me-2">Kategori : </p>
                                                        <p class="p-0 m-0">{{ $as->kategori->ket_kategori }}</p>
                                                    </div>
                                                    <div class="d-flex">
                                                        <p class="fw-bold p-0 m-0 me-2">Alamat : </p>
                                                        <p class="p-0 m-0">{{ $as->input_aspirasi->lokasi }}</p>
                                                    </div>
                                                    <div class="d-block">
                                                        <p class="fw-bold p-0 m-0 me-2">Keterangan : </p>
                                                        <p class="p-0 m-0">{{ $as->input_aspirasi->ket }}</p>
                                                    </div>
                                                </div>
                                                @if ($as['status'] == 'Selesai' and $as['feedback'] == null)
                                                    <form action="/aspirasi/feedback" method="POST"
                                                        class=" p-2  rounded-2 text-center">
                                                        @csrf
                                                        <div class="btn btn-warning">
                                                            <input type="hidden" name="id_aspirasi"
                                                                value="{{ $as->id }}">
                                                            <input type="radio" class="" required name="feedback"
                                                                value="1" id="">
                                                            <label class="form-check-label">
                                                                1
                                                            </label>
                                                        </div>
                                                        <div class="btn-warning btn">
                                                            <input type="radio" name="feedback" required value="2"
                                                                id="">
                                                            <label class="form-check-label">
                                                                2
                                                            </label>
                                                        </div>
                                                        <div class="btn btn-warning">
                                                            <input type="radio" name="feedback" required value="3"
                                                                id="">
                                                            <label class="form-check-label">
                                                                3
                                                            </label>
                                                        </div>
                                                        <div class="btn btn-warning">
                                                            <input type="radio" name="feedback" required value="4"
                                                                id="">
                                                            <label class="form-check-label">
                                                                4
                                                            </label>
                                                        </div>
                                                        <div class="btn btn-warning"> <input type="radio" required
                                                                name="feedback" value="5" id="">
                                                            <label class="form-check-label">
                                                                5
                                                            </label>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary text-light"><i
                                                                class="bi bi-send-fill"></i> </button>
                                                    </form>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#DC3545" fill-opacity="1"
            d="M0,160L60,176C120,192,240,224,360,202.7C480,181,600,107,720,112C840,117,960,203,1080,208C1200,213,1320,139,1380,101.3L1440,64L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
        </path>
    </svg>
@endsection









































{{-- <section id="input" style="height: 100vh;">
        <div class="row d-flex  justify-content-center">
            <div class="col-sm-12 col-md-8 col-lg-6">
                @if (request('id') != null)
                    <div class="alert mt-3 alert-warning alert-dismissible fade show" role="alert">
                        <strong>Terimakasih Telah Melakukan Pengaduan <br>
                            Nomor Pengaduan : {{ request('id') }}</strong><br>
                        <small class="">Silahkan Di Ingat Nomor pengaduannya!!</small>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if (request('nik') != null)
                    <div class="alert mt-3 alert-danger alert-dismissible fade show" role="alert">
                        <strong> NIK Anda Belum Terdaftar!! </strong><br>
                        <small>Silahkan Isi Datanya Kembali Dengan Benar</small>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="card">
                    <div class="card-body p-5">
                        <form action="/aspirasi/store" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label fw-bold">ID Pelapor</label>
                                <input type="text" name="id_pelaporan" class="form-control bg-primary text-light fw-bold"
                                    readonly value="{{ $no }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Nomor Induk Siswa</label>
                                <input type="number" name="nis" value="{{ old('nis') }}"
                                    class="form-control @error('nis') is-invalid @enderror">
                                @error('nis')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Kategori</label>
                                <div class=" container row d-flex justify-content-center">
                                    <div class="col-12 bg-warning rounded-4 bg-gradient p-3">
                                        <div class="row ">
                                            @foreach ($kategori as $kat)
                                                <div class="col-sm-12 col-lg-4 col-md-12 ">
                                                    <input class="form-check-input" value="{{ $kat->id_kategori }}"
                                                        type="radio" name="id_kategori" id="id_kategori1">
                                                    <label class="form-check-label" for="id_kategori1">
                                                        {{ $kat->ket_kategori }}
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Lokasi</label>
                                <input type="text" name="lokasi" value="{{ old('lokasi') }}"
                                    class="form-control  @error('lokasi') is-invalid @enderror">
                                @error('lokasi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="bukti" class="form-label fw-bold">Bukti Pengaduan</label>
                                <input class="form-control @error('bukti') is-invalid @enderror" type="file"
                                    id="bukti" name="bukti">
                                @error('bukti')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Keterangan</label>
                                <textarea name="ket" id="" value="{{ old('ket') }}"
                                    class="form-control @error('ket') is-invalid @enderror" rows="2"></textarea>
                                @error('ket')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="aspirasi" class=" py-4 justify-content-center" style="height: 100vh;">
        <div class="row justify-content-center">
            <div class="col-12 mb-3">
                <nav class="navbar navbar-expand-lg bg-light shadow border-bottom rounded-4 p-lg-3 p-sm-0 p-md-3">
                    <div class="container">
                        <a class="navbar-brand fw-bold text-primary fs-3" href="/aspirasi">Lihat Pengaduan</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">

                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-lg-6 col-sm-12 col-md-8 mt-4">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 pb-3 border-bottom">
                                <form action="/" class="" method="get">
                                    <label class="form-label fw-bold">Nomor Pengaduan</label>
                                    <div class="input-group">
                                        <input type="text" required name="search" value="{{ request('search') }}"
                                            class="form-control" placeholder="Masukkan Nomor Pengaduan"
                                            aria-label="Recipient's username" aria-describedby="button-addon2">
                                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><i
                                                class="bi bi-search"></i></button>
                                    </div>
                                </form>
                            </div>
                            @if (request('search') != null)
                                <div class="col-12 px-4  py-3">
                                    @foreach ($aspirasi as $as)
                                        <div class="d-flex">
                                            <p class="fw-bold p-0 m-0 me-2">Nomor Pengaduan : </p>
                                            <p class="p-0 m-0">{{ $as->id }}</p>
                                        </div>
                                        <div class="d-flex">
                                            <p class="fw-bold p-0 m-0 me-2">Status : </p>
                                            <p class="p-0 m-0">{{ $as->status }}</p>
                                        </div>
                                        <div class="d-flex">
                                            <p class="fw-bold p-0 m-0 me-2">Kategori : </p>
                                            <p class="p-0 m-0">{{ $as->kategori->ket_kategori }}</p>
                                        </div>
                                        <div class="d-flex">
                                            <p class="fw-bold p-0 m-0 me-2">Alamat : </p>
                                            <p class="p-0 m-0">{{ $as->input_aspirasi->lokasi }}</p>
                                        </div>
                                        <div class="d-block">
                                            <p class="fw-bold p-0 m-0 me-2">Keterangan : </p>
                                            <p class="p-0 m-0">{{ $as->input_aspirasi->ket }}</p>
                                        </div>

                                        @if ($as['status'] == 'Selesai' and $as['feedback'] == null)
                                            <form action="/aspirasi/feedback" method="POST"
                                                class=" p-2  rounded-2 text-center">
                                                @csrf
                                                <div class="btn btn-dark">
                                                    <input type="hidden" name="id_aspirasi"
                                                        value="{{ $as->id }}">
                                                    <input type="radio" class="" required name="feedback"
                                                        value="1" id="">
                                                    <label class="form-check-label">
                                                        1
                                                    </label>
                                                </div>
                                                <div class="btn-danger btn">
                                                    <input type="radio" name="feedback" required value="2"
                                                        id="">
                                                    <label class="form-check-label">
                                                        2
                                                    </label>
                                                </div>
                                                <div class="btn btn-warning">
                                                    <input type="radio" name="feedback" required value="3"
                                                        id="">
                                                    <label class="form-check-label">
                                                        3
                                                    </label>
                                                </div>
                                                <div class="btn btn-success">
                                                    <input type="radio" name="feedback" required value="4"
                                                        id="">
                                                    <label class="form-check-label">
                                                        4
                                                    </label>
                                                </div>
                                                <div class="btn btn-primary"> <input type="radio" required
                                                        name="feedback" value="5" id="">
                                                    <label class="form-check-label">
                                                        5
                                                    </label>
                                                </div>
                                                <button type="submit" class="btn btn-secondary text-light"><i
                                                        class="bi bi-send-fill"></i> </button>
                                            </form>
                                        @endif

                                </div>
                            @endforeach
                        @else
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section> --}}
