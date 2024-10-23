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
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Lora:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- DataTables CSS untuk responsif -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.5.4/css/responsive.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="/assets/icomoon/icomoon.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/vendor.css">
</head>

<body data-bs-spy="scroll" data-bs-target="#header" tabindex="0">
    <h3 class="text-center">Halaman Buku</h3>
    <div id="header-wrap">
        <nav id="navbar">
            <div class="main-menu stellarnav mx-auto">

                <ul class="menu-list">
                    <li class="menu-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="menu-item active"><a href="{{ url('/barang') }}" class="nav-link">Buku</a></li>
                    <li class="menu-item"><a href="{{ url('/peminjaman') }}" class="nav-link">Peminjaman</a></li>
                    <li class="menu-item "><a href="{{ url('/team') }}" class="nav-link">Team</a></li>
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
                    Tambah Buku
                    <button type="button" class="btn btn-primary float-end buton" data-bs-toggle="modal"
                        data-bs-target="#tambahModal" data-bs-jenis="Tambah">
                        Tambah
                    </button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-sm table-bordered" id="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul Buku</th>
                                    <th>Penulis</th>
                                    <th>Tahun Terbit</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
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
                    <form id="dataForm">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="tambahModal">Tambah Data</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="judul_buku" class="form-label">Judul Buku</label>
                                <input type="text" class="form-control" id="judul_buku" name="judul_buku" required>
                            </div>
                            <div class="mb-3">
                                <label for="penulis_buku" class="form-label">Penulis Buku</label>
                                <input type="text" class="form-control" id="penulis_buku" name="penulis_buku" required>
                            </div>
                            <div class="mb-3">
                                <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                                <input type="number" class="form-control" id="tahun_terbit" name="tahun_terbit" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary buton" data-bs-dismiss="modal">Kembali</button>
                            <button type="submit" class="btn btn-primary buton">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <!-- jQuery dan Bootstrap JS -->
        <script src="http://192.168.206.222:8000/assets/js/jquery-1.11.0.min.js"></script>
        <script src="http://192.168.206.222:8000/dist/js/jquery-3.7.1.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- DataTables JS -->
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.5.4/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.5.4/js/responsive.bootstrap5.min.js"></script>
        <!-- SweetAlert2 -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.all.min.js"></script>
        <script src="http://192.168.206.222:8000/assets/js/plugins.js"></script>
        <script src="http://192.168.206.222:8000/assets/js/script.js"></script>

        <script>
            $(document).ready(function() {
                // Inisialisasi DataTable dengan pengambilan data via AJAX
                $('#table').DataTable({
                    ajax: {
                        url: 'http://192.168.206.219:8000/api/buku',
                        dataSrc: function(json) {

                            return json.databuku;
                        }
                    },
                    columns: [{
                            data: null,
                            render: function(data, type, row, index) {
                                return index.row + 1; // Nomor urut
                            }
                        },
                        {
                            data: "judul_buku"
                        },
                        {
                            data: "penulis_buku"
                        },
                        {
                            data: "tahun_terbit"
                        },
                        {
                            data: null,
                            render: function(data, type, row) {
                                return `
                            <div style="display: flex; justify-content: space-between; width: 100%;">
                                <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#formModal" data-bs-jenis="Ubah" data-bs-id="${row.id}" style="margin-right: 10px;">
                                    Edit
                                </button>
                                <button class="btn btn-danger btn-sm" onclick="hapusData(${row.id})" style="margin-left: auto;">
                                    Hapus
                                </button>
                            </div>`;
                            }
                        }
                    ]
                });
            });

            const targetmodal = document.getElementById('formModal');
            let setIdBuku = null;

            if (targetmodal) {
                targetmodal.addEventListener('show.bs.modal', event => {
                    const button = event.relatedTarget;
                    const jenisModal = button.getAttribute('data-bs-jenis');
                    const idBuku = button.getAttribute('data-bs-id');
                    setIdBuku = idBuku;

                    if (jenisModal === 'Ubah') {
                        $.ajax({
                            url: 'http://192.168.206.219:8000/api/buku/' + idBuku,
                            method: 'GET'
                        }).done(function(data) {
                            $('#judul_buku').val(data.judul_buku);
                            $('#penulis_buku').val(data.penulis_buku);
                            $('#tahun_terbit').val(data.tahun_terbit);
                        }).fail(function() {
                            Swal.fire('Gagal!', 'Gagal mengambil data buku.', 'error');
                        });
                    }

                    const modalTitle = formModal.querySelector('.modal-title');
                    modalTitle.textContent = ${jenisModal} Buku;
                });
            }

            $(document).ready(function() {
                $("#dataForm").submit(function(event) {
                    event.preventDefault();
                    const formData = $(this).serialize();
                    let url = 'http://192.168.206.219:8000/api/buku/';
                    let method = "POST";

                    if (setIdBuku) {
                        url += setIdBuku;
                        method = 'PUT';
                    }

                    $.ajax({
                        url: url,
                        method: method,
                        data: formData
                    }).done(function() {
                        Swal.fire({
                            title: "Berhasil!",
                            text: "Data berhasil disimpan!",
                            icon: "success",
                            timer: 2000,
                            timerProgressBar: true,
                            didClose: () => {
                                location.reload();
                            }
                        });
                    }).fail(function() {
                        Swal.fire('Gagal!', 'Gagal menyimpan data.', 'error');
                    });
                });
            });

            function hapusData(id) {
                Swal.fire({
                    title: 'Apakah Anda yakin ingin menghapus data ini?',
                    text: "Data ini tidak dapat dikembalikan!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#6c757d',
                    confirmButtonText: 'Ya, hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: 'http://192.168.206.219:8000/api/buku/' + id,
                            method: 'DELETE'
                        }).done(function() {
                            Swal.fire({
                                title: 'Dihapus!',
                                text: 'Data telah dihapus.',
                                icon: 'success',
                                timer: 2000,
                                timerProgressBar: true,
                                didClose: () => {
                                    location.reload();
                                }
                            });
                        }).fail(function() {
                            Swal.fire('Gagal!', 'Gagal menghapus data.', 'error');
                        });
                    }
                });
            }
        </script>
</body>

</html>
