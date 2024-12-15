<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pembayaran</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .timer-box {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 10px;
        background-color: #ffffff;
        padding: 1em 2em;
        border-radius: 1em;
      }

      .timer-number {
        font-size: 3em;
        font-weight: bold;
        color: #0d6efd;
        background-color: #e7f1ff;
        border-radius: 8px;
        padding: 10px 20px;
        min-width: 80px;
        text-align: center;
      }

      .timer-label {
        font-size: 1rem;
        color: #6c757d;
      }
    </style>
</head>
<body>
<header>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.php">Lawak Store</a>
    </div>
</nav>
</header>
    <div class="container my-5">
        <div class="row">
            <!-- Countdown Timer Section -->
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold mb-4">Menunggu Pembayaran</h5>
                        <p class="mt-3 small text-muted">Selesaikan pembayaran sebelum waktu habis</p>

                            <div class="timer-box">
                                <div>
                                  <div id="hours" class="timer-number">01</div>
                                  <div class="timer-label text-center">Jam</div>
                                </div>
                                <span>:</span>
                                <div>
                                  <div id="minutes" class="timer-number">00</div>
                                  <div class="timer-label text-center">Menit</div>
                                </div>
                                <span>:</span>
                                <div>
                                  <div id="seconds" class="timer-number">00</div>
                                  <div class="timer-label text-center">Detik</div>
                                </div>
                            </div>

                        <p class="mt-3 small text-muted">Agar Pesanan Kamu Tidak Expired</p>
                        <button class="btn btn-primary w-100 mt-4">Lanjutkan Pembayaran</button>
                    </div>
                </div>
            </div>

            <!-- Detail Pesanan Section -->
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div>
                                <h5 class="card-title">Honkai: Star Rail</h5>
                                <p class="small text-muted">HoYoverse</p>
                            </div>
                            <div>
                                <span class="badge bg-success">Metode Pembayaran: DANA</span>
                            </div>
                        </div>
                        <table class="table table-borderless">
                            <tr>
                                <th>Tanggal Pembelian</th>
                                <td>15/12/2024, 20:38:00</td>
                            </tr>
                            <tr>
                                <th>Nomor Pesanan</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Item</th>
                                <td>60 Oneiric Shard</td>
                            </tr>
                            <tr>
                                <th>Username</th>
                                <td>801911242</td>
                            </tr>
                            <tr>
                                <th>User Id</th>
                                <td>801911242</td>
                            </tr>
                            <tr>
                                <th>Zone Id</th>
                                <td>Asia</td>
                            </tr>
                        </table>
                        <div class="important-note text-center my-3">
                            Total Pembayaran: <strong>Rp 14.688,-</strong>
                            <p class="small mt-2">PENTING! Pastikan nominal transfer <u>TEPAT BERJUMLAH ANGKA DI ATAS</u> (hingga 3 angka terakhir).</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Panduan Pembayaran -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="accordion" id="paymentGuide">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Panduan Cara Pembayaran DANA
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#paymentGuide">
                            <div class="accordion-body">
                                <ol>
                                    <li>Buka aplikasi DANA di ponsel kamu.</li>
                                    <li>Pilih menu <strong>Transfer</strong>.</li>
                                    <li>Masukkan nominal <u>tepat sesuai jumlah</u> di atas.</li>
                                    <li>Konfirmasi pembayaran dan simpan bukti transfer.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        let countdownTime = 60 * 60;
        let timerInterval;

        function startTimer() {
            timerInterval
        }
    </script>
</body>
</html>
