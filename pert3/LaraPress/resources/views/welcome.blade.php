<!DOCTYPE html>
<html>
<head>
    <title>Selamat Datang di LaraPress</title>
    <style>
        /* Reset dasar */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #74b9ff, #a29bfe);
            color: #fff;
            height: 100vh;
            display: flex;
            align-items: center;   /* vertikal center */
            justify-content: center; /* horizontal center */
            text-align: center;
        }

        /* Kontainer utama */
        .container {
            max-width: 800px;
            padding: 20px;
            background: rgba(0, 0, 0, 0.4); /* transparansi */
            border-radius: 15px;
            box-shadow: 0px 5px 15px rgba(0,0,0,0.2);
        }

        /* Header */
        h1 {
            margin: 20px 0;
            color: #fff;
        }

        /* Paragraf */
        p {
            font-size: 18px;
            margin-bottom: 30px;
        }

        /* Link navigasi */
        a {
            display: inline-block;
            text-decoration: none;
            color: #fff;
            background: #0984e3;
            padding: 10px 20px;
            margin: 5px;
            border-radius: 5px;
            transition: background 0.3s ease;
        }

        a:hover {
            background: #0652dd;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Selamat Datang di Blog LaraPress</h1>
        <p>Ini adalah halaman utama dari aplikasi blog kita.</p>

        <a href="/tentang-kami">Tentang Kami</a>
        <a href="/kontak">Kontak Kami</a>
    </div>
</body>
</html>
