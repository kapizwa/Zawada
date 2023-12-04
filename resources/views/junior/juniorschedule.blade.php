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
        <?php include('../resources/css/junior/schedule.css'); ?>
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
            <li class="nav-item"><a href="{{ route('juniorstats') }}">statystyki</a></li>
            <li class="nav-item"><a href="{{ route('juniortable') }}">tabela</a></li>
			<li class="nav-item"><a href="{{ route('juniorschedule') }}">terminarz</a></li>
			<li class="nav-item"><a href="{{ route('juniorinfo') }}">info</a></li>
            <li class="nav-item"><a href="{{ route('home') }}">seniorzy</a></li>
        </ul>
    </nav>
    <main>

<div class="container">
    <h2>Kolejka 1</h2>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">Data</th>
            <th scope="col">Mecz</th>
            <th scope="col">Wynik</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>25 sierpnia, 17:30</td>
            <td>Ropa - <b>Łosoś Łososina Dolna</b> </td>
            <td>0:3</td>
            </tr>
            <tr>
            <td>25 sierpnia, 10:00</td>
            <td>Barciczanka Barcice - ULKS Przydonica </td>
            <td></td>
            </tr>
            <tr>
            <td>26 sierpnia, 10:00</td>
            <td>LKS Mszalnica - <b>Orzeł Wojnarowa</b> </td>
            <td>0:4</td>
            </tr>
            <tr>
            <td>27 sierpnia, 13:30</td>
            <td>Poprad Muszyna - <b>Zyndram Łącko</b></td>
            <td>1:3</td>
            </tr>
            <tr>
            <td>30 września, 11:00</td>
            <td class="td-color">Zawada Nowy Sącz - <b>Hart Tęgoborze</b> </td>
            <td>0:2</td>
            </tr>
        </tbody>
        </table>

        <h2>Kolejka 2</h2>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">Data</th>
            <th scope="col">Mecz</th>
            <th scope="col">Wynik</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>02 września, 17:30</td>
            <td>ULKS Przydonica - Poprad Muszyna</td>
            <td></td>
            </tr>
            <tr>
            <td>02 września, 09:00</td>
            <td>LKS Mszalnica - <b>Zyndram Łącko</b> </td>
            <td>1:2</td>
            </tr>
            <tr>
            <td>02 września, 10:00</td>
            <td><b>Hart Tęgoborze</b> - Orzeł Wojnarowa</td>
            <td>2:0</td>
            </tr>
            <tr>
            <td>02 września, 15:00</td>
            <td><b>Łosoś Łososina Dolna</b> - Barciczanka Barcice</td>
            <td>5:2</td>
            </tr>
            <tr>
            <td>02 września, 16:00</td>
            <td class="td-color"><b>Zawada Nowy Sącz</b> - Ropa </td>
            <td>2:1</td>
            </tr>
        </tbody>
        </table>

        <h2>Kolejka 3</h2>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">Data</th>
            <th scope="col">Mecz</th>
            <th scope="col">Wynik</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>19 sierpnia, 11:00</td>
            <td><b>Ropa</b> - Hart Tęgoborze</td>
            <td>3:0</td>
            </tr>
            <tr>
            <td>09 września</td>
            <td>LKS Mszalnica - ULKS Przydonica</td>
            <td></td>
            </tr>
            <tr>
            <td>09 września, 10:00</td>
            <td>Orzeł Wojnarowa - <b>Zyndram Łącko</b></td>
            <td>1:2</td>
            </tr>
            <tr>
            <td>04 października, 10:00</td>
            <td>Łosoś Łososina Dolna - <b>Poprad Muszyna</b></td>
            <td>2:9</td>
            </tr>
            <tr>
            <td>31 grudnia</td>
            <td class="td-color">Barciczanka Barcice - Zawada Nowy Sącz</td>
            <td></td>
            </tr>
        </tbody>
        </table>


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