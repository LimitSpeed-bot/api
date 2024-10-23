<!doctype html>
<html lang="en">
  <head>
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
  <body>

    <nav id="navbar">
        <div class="main-menu stellarnav mx-auto">

            <ul class="menu-list">
                <li class="menu-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="menu-item"><a href="{{ url('/barang') }}" class="nav-link">Buku</a></li>
                <li class="menu-item"><a href="{{ url('/peminjaman') }}" class="nav-link">Peminjaman</a></li>
                <li class="menu-item active"><a href="{{ url('/team') }}" class="nav-link">Team</a></li>
            </ul>

            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>

        </div>
    </nav>

    <section id="team" class="py-5">
      <div class="container">
        <div class="row text-center mb-5">
          <div class="col">
            <h2 class="display-4">Meet Our Team</h2>
            <p class="lead">Bersama kami membangun masa depan dengan inovasi dan kolaborasi!</p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-3">
            <div class="card team-member">
              <img src="https://via.placeholder.com/300" class="card-img-top" alt="Tegar Benaya C.S">
              <div class="card-body text-center">
                <h5 class="card-title">Tegar Benaya C.S</h5>
                <p class="card-text">Leader & Back End</p>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card team-member">
              <img src="https://via.placeholder.com/300" class="card-img-top" alt="Fergi Dion">
              <div class="card-body text-center">
                <h5 class="card-title">Fergi Dion</h5>
                <p class="card-text">Documenter</p>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card team-member">
              <img src="https://via.placeholder.com/300" class="card-img-top" alt="Iffan Elyasa">
              <div class="card-body text-center">
                <h5 class="card-title">Iffan Elyasa</h5>
                <p class="card-text">Front End</p>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card team-member">
              <img src="https://via.placeholder.com/300" class="card-img-top" alt="Bryan Isa">
              <div class="card-body text-center">
                <h5 class="card-title">Bryan Isa</h5>
                <p class="card-text">Postman</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
