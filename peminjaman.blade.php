<!DOCTYPE html>
<html lang="en">

<head>
    <title>BookSaw - Free Book Store HTML CSS Template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Lora:wght@400;700&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- DataTables CSS untuk responsif -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/responsive/2.5.4/css/responsive.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/normalize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icomoon/icomoon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendor.css') }}">
</head>

<body data-bs-spy="scroll" data-bs-target="#header" tabindex="0">
    <h3 class="text-center">Halaman Peminjaman</h3>
    <div id="header-wrap">
        <nav id="navbar">
            <div class="main-menu stellarnav mx-auto">

                <ul class="menu-list">
                    <li class="menu-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="menu-item"><a href="{{ url('/barang') }}" class="nav-link">Buku</a></li>
                    <li class="menu-item active"><a href="{{ url('/peminjaman') }}" class="nav-link">Peminjaman</a></li>
                    <li class="menu-item"><a href="{{ url('/team') }}" class="nav-link">Team</a></li>
                </ul>

                <div class="hamburger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>

            </div>
        </nav>

        <div class="container-fluid">
            <div class="card mt-3">
                <div class="card-header">
                    Peminjaman Buku
                    <button type="button" class="btn btn-primary float-end buton" data-bs-toggle="modal"
                        data-bs-target="#tambahModal" data-bs-jenis="Tambah">
                        Tambah
                    </button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-sm table-bordered" id="example">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul Buku</th>
                                    <th>Nama Peminjam</th>
                                    <th>No HP</th>
                                    <th>Tanggal Pinjam</th>
                                    <th>Tanggal Kembali</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td>Contoh Buku</td>
                                    <td>Kings</td>
                                    <td>00099988877</td>
                                    <td>2024-05-21</td>
                                    <td>2024-06-05</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                            <button type="button" class="btn btn-warning buton">Edit</button>
                                            <button type="button" class="btn btn-danger buton">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Tambah -->
        <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="tambahModal">Tambah Data</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="judul_buku" class="form-label">Judul Buku</label>
                            <input type="text" class="form-control" id="judul_buku" name="judul_buku">
                        </div>
                        <div class="mb-3">
                            <label for="penulis_buku" class="form-label">Nama Peminjam</label>
                            <input type="text" class="form-control" id="nama_peminjam" name="nama_peminjam">
                        </div>
                        <div class="mb-3">
                            <label for="tahun_terbit" class="form-label">No HP</label>
                            <input type="number" class="form-control" id="no_hp" name="no_hp" min="0">
                        </div>
                        <div class="mb-3">
                            <label for="tahun_terbit" class="form-label">Tanggal Pinjam</label>
                            <input type="date" class="form-control" id="tanggal_pinjam" name="tanggal_pinjam">
                        </div>
                        <div class="mb-3">
                            <label for="tahun_terbit" class="form-label">Tanggal Kembali</label>
                            <input type="date" class="form-control" id="tanggal_kembali" name="tanggal_kembali">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary buton"
                            data-bs-dismiss="modal">Kembali</button>
                        <button type="submit" class="btn btn-primary buton">Simpan</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery dan Bootstrap JS -->
        <script src="{{ url('assets/js/jquery-1.11.0.min.js') }}"></script>
        <script src="{{ url('dist/js/jquery-3.7.1.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- DataTables JS -->
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.5.4/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.5.4/js/responsive.bootstrap5.min.js"></script>
        <!-- SweetAlert2 -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.all.min.js"></script>
        <script src="{{ url('assets/js/plugins.js') }}"></script>
        <script src="{{ url('assets/js/script.js') }}"></script>

</body>
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            responsive: true
        });
    });
</script>

</html>
