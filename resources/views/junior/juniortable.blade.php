@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Zawada Nowy Sącz</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;400;700&display=swap" rel="stylesheet" />
    <style>
        <?php include('../resources/css/junior/table.css'); ?>
    </style>
    <script src="https://kit.fontawesome.com/e8dac3ad42.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <div class="header-img">
            <div class="header-bg"></div>
        </div>
    </header>
    <nav class="nav">
        <ul>
			<li class="nav-item"><a href="{{ route('juniorhome') }}">home</a></li>
            <li class="nav-item"><a href="{{ route('juniorteam') }}">zespol</a></li>
            <li class="nav-item"><a href="{{ route('juniortable') }}">tabela</a></li>
			<li class="nav-item"><a href="{{ route('juniorschedule') }}">terminarz</a></li>
			<li class="nav-item"><a href="{{ route('juniorinfo') }}">info</a></li>
            <li class="nav-item"><a href="{{ route('home') }}">seniorzy</a></li>
        </ul>
    </nav>
    <main>

    <div class="page">
    <div class="container">
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Miejsce</th>
            <th scope="col">Nazwa</th>
            <th scope="col">Mecze</th>
            <th scope="col">Punkty</th>
            <th scope="col">Z</th>
            <th scope="col">R</th>
            <th scope="col">P</th>
            <th scope="col">Bramki</th>
            </tr>
        </thead>
        <tbody>

        <tr>
            <td><b>1</b></td>
            <td><p><img src="../img/logo/zyndram.png" alt="" width="20px"> Zyndram Łącko</p></td>
            <td>8</td>
            <td>20</td>
            <td>6</td>
            <td>2</td>
            <td>0</td>
            <td>21-8</td>
            </tr>

            <tr>
            <td><b>2</b></td>
            <td><p><img src="../img/logo/poprad.png" alt="" width="20px"> Poprad Muszyna</p></td>
            <td>8</td>
            <td>18</td>
            <td>6</td>
            <td>0</td>
            <td>2</td>
            <td>35-14</td>
            </tr>

            <tr>
            <td><b>3</b></td>
            <td><p><img src="../img/logo/tegoborze.webp" alt="" width="20px"> Hart Tęgoborze</p></td>
            <td>8</td>
            <td>16</td>
            <td>5</td>
            <td>1</td>
            <td>2</td>
            <td>16-12</td>
            </tr>

            <tr>
            <td><b>4</b></td>
            <td><p><img src="../img/logo/wojnarowa.jpg" alt="" width="20px"> Orzeł Wojnarowa</p></td>
            <td>8</td>
            <td>11</td>
            <td>3</td>
            <td>2</td>
            <td>3</td>
            <td>16-12</td>
            </tr>

            <tr>
            <td><b>5</b></td>
            <td><p><img src="../img/logo/ropa.png" alt="" width="25px"> Ropa</p></td>
            <td>8</td>
            <td>11</td>
            <td>3</td>
            <td>2</td>
            <td>3</td>
            <td>21-23</td>
            </tr>

            <tr>
            <td><b>6</b></td>
            <td><p><img src="../img/logo.png" alt="" width="30px"> <b>Zawada Nowy Sącz</b></p></td>
            <td>7</td>
            <td>10</td>
            <td>3</td>
            <td>1</td>
            <td>3</td>
            <td>12-14</td>
            </tr>

            <tr>
            <td><b>7</b></td>
            <td><p><img src="../img/logo/barciczanka-logo.png" alt="" width="25px"> Barciczanka Barcice</p></td>
            <td>7</td>
            <td>6</td>
            <td>2</td>
            <td>0</td>
            <td>5</td>
            <td>12-20</td>
            </tr>

            <tr>
            <td><b>8</b></td>
            <td><p><img src="../img/logo/lososina.png" alt="" width="25px"> Łosoś Łososina Dolna</p></td>
            <td>8</td>
            <td>6</td>
            <td>2</td>
            <td>0</td>
            <td>6</td>
            <td>18-31</td>
            </tr>

            <tr>
            <td><b>9</b></td>
            <td><p><img src="../img/logo/mszalnica.png" alt="" width="35px"> LKS Mszalnica</p></td>
            <td>8</td>
            <td>3</td>
            <td>1</td>
            <td>0</td>
            <td>7</td>
            <td>12-31</td>
            </tr>

            <tr>
            <td><b>10</b></td>
            <td><p><img src="../img/logo/przydonica.jpg" alt="" width="25px"> ULKS Przydonica</p></td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0-0</td>
            </tr>

            </tbody>
        </table>
        </div>
        </div>

		</main>
    <footer>
        <p>
            &copy; 2023 LKS Zawada Nowy Sącz
            <span class="icon-box">
                <a href="https://www.facebook.com/profile.php?id=100063552835307"><i class="fa-brands fa-square-facebook"></i></a>
                <a href="https://www.instagram.com/lks_zawada/"><i class="fa-brands fa-square-instagram"></i></a>
            </span>
        </p>
    </footer>
</body>
</html>
@endsection