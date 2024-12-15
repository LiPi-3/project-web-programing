<?php
$games = [
  ['PC', 'valorant card', 'Valorant', 'Riot Games', 'pesanan-valorant'],
  ['PC', 'PB', 'Point Blank', 'Zepetto', 'pesanan-point-blank'],
  ['PC', 'Arena', 'Arena Breakout: Infinite', 'TIMI Games', 'pesanan-ABI'],
  ['PC', 'fornite', 'Fortnite', 'Epic Games', 'pesanan-fortnite'],
  ['PC', 'LOL', 'League Of Legend', 'Riot Games', 'pesanan-lol'],
  ['Mobile', 'ML', 'Mobile Legends: Bang Bang', 'Moonton', 'pesanan-ML'],
  ['Mobile', 'pubg', 'PlayerUnknown\'s Battlegrounds', 'Tencent', 'pesanan-PUBG'],
  ['Mobile', 'HI', 'Honkai Impact 3rd', 'Hoyoverse', 'pesanan-HI'],
  ['Mobile', 'genshin', 'Genshin Impact', 'Hoyoverse', 'pesanan-GI'],
  ['Mobile', 'HSR', 'Honkai Star Rail', 'Hoyoverse', 'pesanan-HSR'],
]
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Lawak Store</title>
  <link rel="stylesheet" href="home.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
  <!-- Menu Navigasi -->
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
            <a class="nav-link active" aria-current="page" href="home.php">
              Beranda
            </a>
            <div class="Login-link">
              <a class="nav-link" href="registrasi.php">Daftar/Masuk</a>
            </div>
          </div>
        </div>
    </nav>

    <!-- filter menu-->
    <nav class="navbar navbar-dark">
      <div class="container-fluid justify-content-center" id="GameFilter">
        <button type="button" class="btn btn-outline-primary" id="All" onclick="filterGame(this)">All Games</button>
        <button type="button" class="btn btn-outline-primary" id="PC" onclick="filterGame(this)">PC Games</button>
        <button type="button" class="btn btn-outline-primary" id="Mobile" onclick="filterGame(this)">Mobile Games
        </button>
      </div>
    </nav>

  </header>

  <!-- product filter-->
  <main>
    <section class="product-section mt-2">
      <div class="container">
        <!-- isi Produk -->
        <div class="row row-cols-1 row-cols-md-5 g-4">

          <?php foreach ($games as $i) { ?>
            <a href="<?= $i[4] ?>.php" class="btn col filter-item <?= $i[0] ?>">
              <div class="card d-flex h-100 align-items-stretch">
                <img src="<?= $i[1] ?>.jpg" class="card-img-top" style="object-fit: cover; aspect-ratio: 9 / 16;" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><?= $i[2] ?></h5>
                  <p class="card-text"><?= $i[3] ?></p>
                </div>
              </div>
            </a>
          <?php } ?>

        </div>
      </div>
    </section>
  </main>

  <footer class="bg-primary text-center text-lg-start">
        <div class="text-center p-3 text-light">
        © 2024 Copyright Lawak Store
        </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <script>
    function filterGame(e) {
      console.log(e.id);
      $('.filter-item').removeClass('d-none')
      if (e.id != "All") $('a.filter-item:not(.' + e.id + ')').addClass('d-none');
      $('#GameFilter button').removeClass('active');
      e.classList.add('active')
    }
  </script>

</body>

</html>