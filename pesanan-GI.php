<?php
$produk = [
  ['22', '11.500', '60 Genesis Crystal | Rp11.500', 'genesis', 'GI'],
  ['23', '58.500', '300+30 Genesis Crystal | Rp58.500', 'genesis', 'GI'],
  ['24', '175.900', '980+110 Genesis Crystal | Rp175.900', 'genesis', 'GI'],
  ['25', '381.500', '1980+260 Genesis Crystal | Rp381.500', 'genesis', 'GI'],
  ['26', '587.000', '3280+600 Genesis Crystal | Rp587.000', 'genesis', 'GI'],
  ['27', '1.174.200', '6480+1600 Genesis Crystal | Rp1.174.200', 'genesis', 'GI'],
  ['28', '2.388.200', 'All Package Genesis Crystal | Rp2.388.200', 'genesis', 'GI'],
  ['29', '57.900', 'Blessing of the Welkin Moon | Rp57.900', 'welkin', 'GI'],
  ['30', '116.900', 'Blessing of the Welkin Moon x2 | Rp116.900', 'welkin', 'GI'],
  ['31', '175.400', 'Blessing of the Welkin Moon x3 | Rp175.400', 'welkin', 'GI'],
  ['32', '233.800', 'Blessing of the Welkin Moon x4| Rp233.800', 'welkin', 'GI'],
  ['33', '292.300', 'Blessing of the Welkin Moon x5 | Rp292.300', 'welkin', 'GI'],
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
    <section class="banner bg-dark text-white text-center p-4 rounded">
      <h1 class="mb-2">Genshin Impact</h1>
      <h6 class="sub-title">Hoyoverse</h6>
      <p>Customer Service 24/7</p>
      <img src="GI-header.jpg" class="img-fluid rounded" alt="GI">
    </section>
    <br>
    <section>
      <h2 class="h5">Pilih Nominal Top Up</h2>
      <div class="container-fluid justify-content-around" id="ItemFilter">
        <button type="button" class="btn btn-outline-primary" id="genesis" onclick="filterProduk(this)">Genesis Crystal</button>
        <button type="button" class="btn btn-outline-primary" id="welkin" onclick="filterProduk(this)">Blessing Welkin</button>
      </div>
    </section>
    <br>
    <!-- Pilih Nominal Top Up -->
    <form action="process.php" method="POST" class="row g-3">
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
      <input type="hidden" name="judul" value="Genshin Impact">
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