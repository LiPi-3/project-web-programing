<?php
$produk = [
  ['1', '16.500', '65 Crystal | Rp16.500', 'crystal'],
  ['2', '80.700', '330 Crystal | Rp80.700', 'crystal'],
  ['3', '161.400', '710 Crystal | Rp161.400', 'crystal'],
  ['4', '333.700', '1430 Crystal | Rp333.700', 'crystal'],
  ['5', '811.800', '3860 Crystal | Rp811.800', 'crystal'],
  ['6', '16.500', '65 B-Chips | Rp16.500', 'chip'],
  ['7', '80.700', '330 B-Chips | Rp80.700', 'chip'],
  ['8', '254.000', '990 B-Chips | Rp254.000', 'chip'],
  ['9', '333.700', '1320 B-Chips | Rp333.700', 'chip'],
  ['10', '487.100', '1980 B-Chips | Rp487.100', 'chip'],
  ['11', '811.800', '3300 B-Chips | Rp811.800', 'chip'],
  ['12', '80.700', 'Monthly Card | Rp80.700', 'member'],
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
      <h1 class="mb-2">Honkai Impact 3rd</h1>
      <p>Customer Service 24/7</p>
      <img src="HI-header.jpg" class="img-fluid rounded" alt="HI3">
    </section>
    <br>
    <section>
      <h2 class="h5">Pilih Nominal Top Up</h2>
      <div class="container-fluid justify-content-around" id="ItemFilter">
        <button type="button" class="btn btn-outline-primary" id="crystal" onclick="filterProduk(this)">Crystal</button>
        <button type="button" class="btn btn-outline-primary" id="chip" onclick="filterProduk(this)">B Chips</button>
        <button type="button" class="btn btn-outline-primary" id="member" onclick="filterProduk(this)">Membership</button>
      </div>
    </section>
    <br>
    <!-- Pilih Nominal Top Up -->
    <form action="process.php" method="POST" class="row g-3">
      <section class="my-4">

        <div class="row g-3">
          <?php foreach ($produk as $i) { ?>
            <div class="col-md-3 filter-item <?= $i[3] ?>">
              <input type="radio" class="btn-check" name="options" id="option<?= $i[0] ?>" value="<?= $i[1] ?>" autocomplete="off">
              <label class="btn btn-outline-primary w-100 h-100" name="pilihan<?= $i[0] ?>" for="option<?= $i[0] ?>"><?= $i[2] ?></label>
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
          <select class="form-select" id="server" aria-label="Default select example">
          <option value="sea">SEA</option>
          <option value="global">GLOBAL</option>
          <option value="cn">CN</option>
          <option value="kr">KR</option>
          <option value="jp">JP</option>
          </select>
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