<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran Berhasil</title>
    <!-- Bootstrap CSS -->
    <link href="assets/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #4CAF50; /* Warna hijau latar belakang */
            color: white;
            font-family: Arial, sans-serif;
            text-align: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card-custom {
            background-color: #ffffff;
            color: #333333;
            border-radius: 20px;
            padding: 30px;
            width: 90%;
            max-width: 400px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .icon-success {
            font-size: 60px;
            color: #4CAF50;
        }

        .btn-feedback {
            margin-top: 20px;
        }

        .btn-feedback i {
            font-size: 24px;
        }

        .btn-like, .btn-dislike {
            color: #4CAF50;
            border: 2px solid #4CAF50;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            margin: 0 10px;
        }

        .btn-like:hover, .btn-dislike:hover {
            background-color: #4CAF50;
            color: #ffffff;
        }
    </style>
</head>
<body onload="setTimeout('delayedRedirect ()', 7000)">
    <div class="card-custom">
        <div class="icon-success mb-4">
            <i class="bi bi-check-circle-fill"></i> <!-- Bootstrap Icon -->
        </div>
        <h2 class="fw-bold">Pembayaran berhasil</h2>
        <p>Hore! Pembayaranmu sudah selesai.</p>
        <hr>
        <h1 class="fw-bold text-success">TERIMA KASIH</h1>
        <h5>TELAH BERBELANJA DI SINI!</h5>
        <div class="btn-feedback">
            <a href="#" class="btn-like"><i class="bi bi-hand-thumbs-up"></i></a>
            <a href="#" class="btn-dislike"><i class="bi bi-hand-thumbs-down"></i></a>
        </div>
    </div>

    <!-- Bootstrap JS and Icons -->
    <script src="assets/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script type="text/javascript">
        function delayedRedirect () {
            window.location = "home.php"
        }
    </script>
</body>
</html>
