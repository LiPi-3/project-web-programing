<?php
$produk = [
  ['89', '54.600', '475 Points | Rp54.600', '#', 'VAL'],
  ['90', '109.200', '1000 Points | Rp109.200', '#', 'VAL'],
  ['91', '163.800', '1475 Points | Rp163.800', '#', 'VAL'],
  ['92', '218.300', '2050 Points | Rp218.300', '#', 'VAL'],
  ['93', '272.900', '2525 Points | Rp272.900', '#', 'VAL'],
  ['94', '327.500', '3050 Points | Rp327.500', '#', 'VAL'],
  ['95', '379.100', '3650 Points | Rp379.100', '#', 'VAL'],
  ['96', '433.700', '4125 Points | Rp433.700', '#', 'VAL'],
  ['97', '488.300', '4650 Points | Rp488.300', '#', 'VAL'],
  ['98', '544.800', '5350 Points | Rp544.800', '#', 'VAL'],
  ['99', '597.400', '5700 Points | Rp597.400', '#', 'VAL'],
  ['100', '599.400', '5825 Points | Rp599.400', '#', 'VAL'],
  ['101', '653.900', '6350 Points | Rp653.900', '#', 'VAL'],
  ['102', '758.200', '7300 Points | Rp758.200', '#', 'VAL'],
  ['103', '763.100', '7400 Points | Rp763.100', '#', 'VAL'],
  ['104', '923.900', '9000 Points | Rp923.900', '#', 'VAL'],
  ['105', '1.071.000', '11000 Points | Rp1.071.000', '#', 'VAL'],
  ['106', '1.125.600', '11475 Points | Rp1.125.600', '#', 'VAL'],
  ['107', '1.180.100', '12000 Points | Rp1.180.100', '#', 'VAL'],
  ['108', '1.289.300', '13050 Points | Rp1.289.300', '#', 'VAL'],
  ['109', '1.450.100', '14650 Points | Rp1.450.100', '#', 'VAL'],
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
      <h1 class="mb-2">Valorant</h1>
      <h6 class="sub-title">Riot Games</h6>
      <p>Customer Service 24/7</p>
      <img src="valorant-header.jpg" class="img-fluid rounded" alt="Valorant">
    </section>

    <!-- Pilih Nominal Top Up -->
    <form action="process.php" method="POST" class="row g-3">
    <section class="my-4">
      <h2 class="h5">Pilih Nominal Top Up</h2>

      <div class="row g-3">
      <?php foreach ($produk as $i) { ?>
        <div class="col-md-3">
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
      <h2 class="h5">Masukkan Riot ID</h2>
        <div class="col-md-6">
          <label for="user_id" class="form-label">Riot ID</label>
          <input type="text" id="user_id" name="user_id" class="form-control" required>
        </div>

        <div class="col-md-6">
          <label for="whatsapp" class="form-label">Nomer Whatsapp</label>
          <input type="text" onkeypress="return restrictAlphabets(event)" id="whatsapp" name="whatsapp" class="form-control" required>
        </div>
        <!--
        <div class="col-md-4">
          <label for="server" class="form-label">Silakan Pilih Server</label>
          <select class="form-select" id="server" aria-label="Default select example">
          <option value="sea">SEA</option>
          <option value="global">GLOBAL</option>
          <option value="cn">CN</option>
          </select>
        </div>
        -->
    </section>

    <!-- Metode Pembayaran -->
    <section class="my-4">
      <h2 class="h5">Pilih Metode Pembayaran</h2>
      <div class="row g-3">
      <div class="col-md-4">
          <select class="form-select" name="payment"  id="server" aria-label="Default select example">
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
    <input type="hidden" name="judul" value="Valorant">
    <input type="hidden" name="sub-judul" value="Riot Games">
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
