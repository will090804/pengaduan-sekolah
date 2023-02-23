@extends('layouts.main-admin')
@section('container')
    <section id="" class="justify-content-center py-4" style="height: 100vh">
        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-body p-4 ">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active " aria-current="page" data-bs-toggle="tab"
                                    href="#aspirasi">Aspirasi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#history" data-bs-toggle="tab">History</a>
                            </li>

                        </ul>
                        <div class="row my-2 mt-4 justify-content-center">
                            <div class="col-8">
                                <div class="row justify-content-center">
                                    <div class="col-3">
                                        <div class="dropdown">
                                            <button class="btn btn-outline-secondary w-100 dropdown-toggle" type="button"
                                                id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                Kategori
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                @foreach ($kategori as $kat)
                                                    <li><a class="dropdown-item"
                                                            href="/admin?kategori={{ $kat->id_kategori }}">{{ $kat->ket_kategori }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="dropdown">
                                            <button class="btn btn-outline-secondary w-100 dropdown-toggle" type="button"
                                                id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                Status
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item" href="/admin?status=Menunggu">Menunggu</a></li>
                                                <li><a class="dropdown-item" href="/admin?status=Proses">Proses</a></li>
                                                <li><a class="dropdown-item" href="/admin?status=Selesai">Selesai</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <form action="/admin" method="get">
                                            <div class="input-group mb-3">

                                                <input type="date" required class="form-control"
                                                    value="{{ request('waktu') }}" name="waktu"
                                                    aria-label="Recipient's username" aria-describedby="button-addon2">
                                                <button class="btn btn-outline-secondary" type="submit"
                                                    id="button-addon2"><i class="bi bi-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <form action="/admin" method="get">
                                        <div class="input-group mb-3">
                                            <input type="text" required name="search" value="{{ request('search') }}"
                                                class="form-control" placeholder="Nomor aspirasi"
                                                aria-label="Recipient's username" aria-describedby="button-addon2">
                                            <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><i
                                                    class="bi bi-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content ">
                        <div role="tabpanel" id="aspirasi" class="tab-pane active">
                            <div class="row">

                                <div class="col-12 ">
                                    <table class="table border-top">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">NIS</th>
                                                <th scope="col">Kategori</th>
                                                <th scope="col">Lokasi</th>
                                                <th scope="col">Bukti</th>
                                                <th scope="col">Keterangan</th>
                                                <th scope="col">Waktu</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($aspirasi as $as)
                                                <tr>
                                                    <th scope="row">{{ $as->id }}</th>
                                                    <td>{{ $as->input_aspirasi->nis }}</td>
                                                    <td>{{ $as->kategori->ket_kategori }}</td>
                                                    <td>{{ $as->input_aspirasi->lokasi }}</td>
                                                    <td>
                                                        <img src="{{ asset('storage/' . $as->input_aspirasi->bukti) }}"
                                                            class="img-fluid" alt="" width="100px">
                                                    </td>
                                                    <td>{{ $as->input_aspirasi->ket }}</td>
                                                    <td>{{ $as->created_at }}</td>
                                                    <td>
                                                        {{-- <form action="/admin/delete" method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <input type="hidden" name="id_aspirasi"
                                                                value="{{ $as->id_aspirasi }}">
                                                            <button type="submit"
                                                                class="btn btn-danger btn-sm mb-3 w-100">Delete</button>
                                                        </form> --}}
                                                        @if ($as['status'] == 'Menunggu')
                                                            <form action="/admin/status" method="post">
                                                                @csrf
                                                                <input type="hidden" name="status" value="Proses">
                                                                <input type="hidden" name="id_aspirasi"
                                                                    value="{{ $as->id_aspirasi }}">
                                                                <button type="submit"
                                                                    class="btn btn-primary btn-sm mb-3 w-100">Proses</button>
                                                            </form>
                                                        @elseif($as['status'] == 'Proses')
                                                            <form action="/admin/status" method="post">
                                                                @csrf
                                                                <input type="hidden" name="status" value="Selesai">
                                                                <input type="hidden" name="id_aspirasi"
                                                                    value="{{ $as->id_aspirasi }}">
                                                                <button type="submit"
                                                                    class="btn btn-success btn-sm mb-3 w-100">Selesai</button>
                                                            </form>
                                                        @else
                                                            <button type="submit"
                                                                class="btn btn-secondary btn-sm mb-3 w-100"
                                                                disabled>Selesai</button>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>

                                    </table>
                                    @if ($aspirasi->count())
                                    @else
                                        <p class="text-center fs-4 mt-5">Tidak ada Aspirasi Masyarakat. </p>
                                    @endif
                                    <div class="d-flex justify-content-end">
                                        {{ $aspirasi->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" id="history" class="tab-pane ">
                            <div class="row ">
                                <div class="col-12 ">
                                    <table class="table border-top">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">NIS</th>
                                                <th scope="col">Kategori</th>
                                                <th scope="col">Lokasi</th>
                                                <th scope="col">Bukti</th>
                                                <th scope="col">Keterangan</th>
                                                <th scope="col">Waktu</th>
                                                <th scope="col">Ratting</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($selesai as $as)
                                                <tr>
                                                    <th scope="row">{{ $as->id }}</th>
                                                    <td>{{ $as->input_aspirasi->nis }}</td>
                                                    <td>{{ $as->kategori->ket_kategori }}</td>
                                                    <td>{{ $as->input_aspirasi->lokasi }}</td>
                                                    <td>
                                                        <img src="{{ asset('storage/' . $as->input_aspirasi->bukti) }}"
                                                            class="img-fluid" alt="" width="100px">
                                                    </td>
                                                    <td>{{ $as->input_aspirasi->ket }}</td>
                                                    <td>{{ $as->created_at }}</td>
                                                    <td>
                                                        <div class=" text-center fw-bold">
                                                            {{ $as->feedback }}
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>

                                    </table>
                                    @if ($selesai->count())
                                    @else
                                        <p class="text-center fs-4 mt-5">Tidak ada Aspirasi Masyarakat. </p>
                                    @endif
                                    <div class="d-flex justify-content-end">
                                        {{ $selesai->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
