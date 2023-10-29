<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/navbar.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BEM Universitas Airlangga</title>
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <!-- Bootstrap CSS -->
    <script src="https://kit.fontawesome.com/ffebcdddeb.js" crossorigin="anonymous"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: 0;
            font-family: 'Poppins', cursive;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-image: linear-gradient();
            overflow-x: hidden;
        }

        header {
            position: fixed;
            top: 0;
            width: 100%;
            height: 90px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        header img {
            margin: 0 145px;
        }

        header ul {
            margin: 0 145px;
        }

        .menu ul li {
            color: #ffffff;
            list-style: none;
            float: right;
            transition: all .3s ease-in-out;
            cursor: pointer;
            text-decoration: none;
            font-size: 20px;
            display: flex;
            margin: 0 20px;
        }

        .menu ul li:hover {
            color: #FEB30A;
        }

        #arrow-icon {
            color: #fff;
            transition: all .3s ease-in-out;
            font-size: 20px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        #arrow-icon:hover {
            color: #FEB30A;
        }
    </style>
</head>

<body>
    <img src="img/background.png">
    <header>
        <div class="container">
            <img src="img/logo-nama.png">
        </div>
        <div class="menu">
            <ul>
                <li id="arrow-icon">Fitur<i class="fa-solid fa-angle-up fa-rotate-180"></i></li>
                <li>Artikel</li>
                <li>Pengurus</li>
                <li>Beranda</li>
            </ul>
        </div>
    </header>
</body>

</html>
