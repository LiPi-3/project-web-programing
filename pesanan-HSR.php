<?php
$produk = [
  ['1', '14.400', '60 Oneiric Shard | Rp14.400', 'oneiric', 'HSR'],
  ['2', '58.300', '300+30 Oneiric Shard | Rp58.300', 'oneiric', 'HSR'],
  ['3', '175.500', '980+110 Oneiric Shard | Rp175.500', 'oneiric', 'HSR'],
  ['4', '380.100', '1980+260 Oneiric Shard | Rp380.100', 'oneiric', 'HSR'],
  ['5', '585.600', '3280+600 Oneiric Shard | Rp585.600', 'oneiric', 'HSR'],
  ['6', '1.171.400', '6480+1600 Oneiric Shard | Rp1.171.400', 'oneiric', 'HSR'],
  ['7', '2.385.500', 'All Package Oneiric Shard | Rp2.385.500', 'oneiric', 'HSR'],
  ['8', '58.300', 'Express Supply Pass | Rp58.300', 'supply', 'HSR'],
  ['9', '116.600', 'Express Supply Pass x2 | Rp116.600', 'supply', 'HSR'],
  ['10', '174.900', 'Express Supply Pass x3 | Rp174.900', 'supply', 'HSR'],
  ['11', '233.200', 'Express Supply Pass x4| Rp233.200', 'supply', 'HSR'],
  ['12', '291.500', 'Express Supply Pass x5 | Rp291.500', 'supply', 'HSR'],
]
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lawak Store</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand" href="home.php">Lawak Store</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation">
          <!--toogle icon-->
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="home.php">Beranda</a>
            <a
              class="nav-link disabled"
              href="#"
              tabindex="-1"
              aria-disabled="true"></a>
            <div class="Login-link">
              <a class="nav-link" href="registrasi.php">Daftar/Masuk</a>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <main class="container my-4">
    <!-- Banner -->
    <form action="process.php" method="POST" class="row g-3">
    <section class="banner bg-dark text-white text-center p-4 rounded">
      <h1 class="mb-2" name="judul">Honkai Star Rail</h1>
      <h6 class="sub-title" name="sub-judul">Hoyoverse</h6>
      <p>Customer Service 24/7</p>
      <img src="HSR-header1.jpg" class="img-fluid rounded" alt="HSR">
    </section>
    <br>
    <section>
      <h2 class="h5">Pilih Nominal Top Up</h2>
      <div class="container-fluid justify-content-around" id="ItemFilter">
        <button type="button" class="btn btn-outline-primary" id="oneiric" onclick="filterProduk(this)">Oneiric Shard</button>
        <button type="button" class="btn btn-outline-primary" id="supply" onclick="filterProduk(this)">Express Supply Pass</button>
      </div>
    </section>
    <br>
    <!-- Pilih Nominal Top Up -->

      <section class="my-4">
        <div class="row g-3">
          <?php foreach ($produk as $i) { ?>
            <div class="col-md-3 filter-item <?= $i[3] ?>">
              <input type="radio" class="btn-check" name="options" id="option<?= $i[0] ?>" value="<?= $i[0] ?>" autocomplete="off">
              <label class="btn btn-outline-primary w-100 h-100" for="option<?= $i[0] ?>"><?= $i[2] ?></label>
            </div>
          <?php } ?>
          <!-- Tambahkan item sesuai kebutuhan -->
        </div>
      </section>

      <!-- Form User ID -->
      <section class="my-4">
    <div class="row g-3">
      <h2 class="h5">Masukkan Player ID</h2>
        <div class="col-md-4">
          <label for="user_id" class="form-label">User ID</label>
          <input type="text" id="user_id" name="user_id" class="form-control" required>
        </div>

        <div class="col-md-4">
          <label for="whatsapp" class="form-label">Nomer Whatsapp</label>
          <input type="text" onkeypress="return restrictAlphabets(event)" id="whatsapp" name="whatsapp" class="form-control" required>
        </div>
        <div class="col-md-4">
          <label for="server" class="form-label">Silakan Pilih Server</label>
          <select class="form-control" name="server" id="server" aria-label="Default select example">
          <option value="pilih-server">Silakan Pilih</option>
          <option value="SEA">SEA</option>
          <option value="GLOBAL">GLOBAL</option>
          <option value="CN">CN</option>
          <option value="KR">KR</option>
          <option value="JP">JP</option>
          </select>
        </div>
    </section>

      <!-- Metode Pembayaran -->
      <section class="my-4">
        <h2 class="h5">Pilih Metode Pembayaran</h2>
        <div class="row g-3">
          <div class="col-md-4">
            <select class="form-control" name="payment" id="payment" aria-label="Default select example">
              <option value="bank">Silakan Pilih</option>
              <option value="BCA">Bank Transfer | BCA</option>
              <option value="BRI">Bank Transfer | BRI</option>
              <option value="BNI">Bank Transfer | BNI</option>
              <option value="DANA">Digital Wallet | DANA</option>
              <option value="GoPay">Digital Wallet | GoPay</option>
            </select>
          </div>
        </div>
      </section>
      <section class="my-4">
        <h2 class="h5"></h2>
        <div class="row g-3">
          <div class="col-md-4">
            <button type="submit" class="btn btn-success">Konfirmasi Pesanan</button>
          </div>
        </div>
      </section>
      <input type="hidden" name="judul" value="Honkai: Star Rail">
      <input type="hidden" name="sub-judul" value="Hoyoverse">
    </form>
  </main>

  <footer class="bg-primary text-center text-lg-start">
    <div class="text-center p-3 text-light">
      © 2024 Copyright Lawak Store
    </div>
  </footer>
  <script>
    function filterProduk(e) {
      console.log(e.id);
      $('.filter-item').removeClass('d-none')
      if (e.id != "All") $('.filter-item:not(.' + e.id + ')').addClass('d-none');
      $('#ItemFilter button').removeClass('active');
      e.classList.add('active')
    }
  </script>

  <script type="text/javascript">
    function restrictAlphabets(e) {
      var x = e.which || e.keycode;
      if ((x >= 48 && x <= 57))
        return true;
      else
        return false;
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>