<?php
$produk = [
  ['1', '9.450', '1', '1', '1200 PB CASH | Rp9.450'],
  ['2', '18.900', '2', '2', '2400 PB CASH | Rp18.900'],
  ['3', '47.250', '3', '3', '6000 PB CASH | Rp47.250'],
  ['4', '94.500', '4', '4', '12000 PB CASH | Rp94.500'],
  ['5', '189.000', '5', '5', '24000 PB CASH | Rp189.000'],
  ['6', '283.500', '6', '6', '36000 PB CASH | Rp283.500'],
  ['7', '472.500', '7', '7', '60000 PB CASH | Rp472.500'],

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
            aria-label="Toggle navigation"
          >
            <!--toogle icon-->
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="home.php"
                >Beranda</a>
              <a
                class="nav-link disabled"
                href="#"
                tabindex="-1"
                aria-disabled="true"
              ></a>
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
      <h1 class="mb-2">Point Blank</h1>
      <p>Customer Service 24/7</p>
      <img src="PB-header.jpg" class="img-fluid rounded" alt="Point Blank">
    </section>

    <!-- Pilih Nominal Top Up -->
    <form action="process.php" method="POST" class="row g-3">
    <section class="my-4">
      <h2 class="h5">Pilih Nominal Top Up</h2>

      <div class="row g-3">
      <?php foreach ($produk as $i) { ?>
        <div class="col-md-3">
        <input type="radio" class="btn-check" name="options" id="option<?= $i[0] ?>" value="<?= $i[1] ?>" autocomplete="off">
        <label class="btn btn-outline-primary w-100 h-100" name="pilihan<?= $i[2] ?>" for="option<?= $i[3] ?>"><?= $i[4] ?></label>
        </div>
      <?php } ?>
        <!-- Tambahkan item sesuai kebutuhan -->
      </div>
    </section>

    <!-- Form User ID -->
    <section class="my-4">
    <div class="row g-3">
      <h2 class="h5">Masukkan Player ID</h2>
        <div class="col-md-6">
          <label for="user_id" class="form-label">Masukkan User ID / ID Login</label>
          <input type="text" id="user_id" name="user_id" class="form-control" required>
        </div>

        <div class="col-md-6">
          <label for="whatsapp" class="form-label">Nomer Whatsapp</label>
          <input type="text" onkeypress="return restrictAlphabets(event)" id="whatsapp" name="whatsapp" class="form-control" required>
        </div>

    </section>

    <!-- Metode Pembayaran -->
    <section class="my-4">
      <h2 class="h5">Pilih Metode Pembayaran</h2>
      <div class="row g-3">
      <div class="col-md-4">
          <select class="form-select" id="server" aria-label="Default select example">
          <option value="bank">Silakan Pilih</option>
          <option value="bca">Bank Transfer | BCA</option>
          <option value="bri">Bank Transfer | BRI</option>
          <option value="bni">Bank Transfer | BNI</option>
          <option value="dana">Digital Wallet | DANA</option>
          <option value="gopay">Digital Wallet | GoPay</option>
          <option value="qris">QRIS</option>
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
    </form>
  </main>

  <footer class="bg-primary text-center text-lg-start">
        <div class="text-center p-3 text-light">
        © 2024 Copyright Lawak Store
        </div>
  </footer>

  <script type="text/javascript">
    function restrictAlphabets(e){
      var x = e.which || e.keycode;
      if((x >= 48 && x <= 57))
        return true;
      else
        return false;
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
