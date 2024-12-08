<?php
$games = [
  ['PC', 'valorant card', 'Valorant', 'Riot Games'],
  ['PC', 'PB', 'Point Blank', 'Zepetto'],
  ['PC', 'Arena', 'Arena Breakout: Infinite', 'TIMI Games'],
  ['PC', 'fornite', 'Fortnite', 'Epic Games'],
  ['PC', 'LOL', 'League Of Legend', 'Riot Games'],
  ['Mobile', 'ML', 'Mobile Legends: Bang Bang', 'Moonton'],
  ['Mobile', 'pubg', 'PlayerUnknown\'s Battlegrounds', 'Tencent'],
  ['Mobile', 'HI', 'Honkai Impact 3rd', 'Hoyoverse'],
  ['Mobile', 'genshin', 'Genshin Impact', 'Hoyoverse'],
  ['Mobile', 'HSR', 'Honkai Star Rail', 'Hoyoverse'],
]
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Lawak Store</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="home.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
  <!-- Menu Navigasi -->
  <header>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand" href="home.html">Lawak Store</a>
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
            <a class="nav-link active" aria-current="page" href="home.html">
              Beranda
            </a>
            <a class="nav-link" href="pricelist.html">Pricelist</a>
            <a
              class="nav-link disabled"
              href="#"
              tabindex="-1"
              aria-disabled="true"></a>
            <div class="Login-link">
              <a class="nav-link" href="#">Daftar/Masuk</a>
            </div>
          </div>
        </div>
    </nav>

    <!-- filter menu-->
    <nav class="navbar navbar-dark">
      <div class="container-fluid justify-content-center" id="GameFilter">
        <button class="btn active" id="All" onclick="filterGame(this)">
          All Games
        </button>
        <button class="btn" id="PC" onclick="filterGame(this)">PC Games</button>
        <button class="btn" id="Mobile" onclick="filterGame(this)">
          Mobile Games
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
            <a href="#" class="btn col filter-item <?= $i[0] ?>">
              <div class="card d-flex">
                <img src="<?= $i[1] ?>.jpg" class="card-img-top" style="object-fit: cover; aspect-ratio: 9 / 16;" alt="...">
                <div class="card-body align-items-stretch">
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

  <footer>allo</footer>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

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