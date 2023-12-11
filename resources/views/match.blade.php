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
        <?php include('../resources/css/match.css'); ?>
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
			<li class="nav-item"><a href="{{ route('home') }}">home</a></li>
            <li class="nav-item"><a href="{{ route('team') }}">zespol</a></li>
            <li class="nav-item"><a href="{{ route('stats') }}">statystyki</a></li>
            <li class="nav-item"><a href="{{ route('table') }}">tabela</a></li>
			<li class="nav-item"><a href="{{ route('schedule') }}">terminarz</a></li>
			<li class="nav-item"><a href="{{ route('info') }}">info</a></li>
            <li class="nav-item"><a href="{{ route('juniorhome') }}">juniorzy</a></li>
        </ul>
    </nav>
    <main>

    <div class="page">
        <div class="container">
            <h2>Wygrywamy z liderem!</h2>
        <p><h3><b>Skład:</b></h3></p>
        <div class="composition">
            <p>Daniel Dziubanowski  -  Sławomir Leśniak, Jacek Śmierciak (Jakub Gągor), Jarosław Jabłoński, Mateusz Pogwizd (Łukasz Adamiec)  -  Jarosław Leśniak, Rafał Borkowski (Dominik Jabłoński), Stanisław Ruchała, Łukasz Wielowski, Kacper Adamiec  -  Tomasz Baczyński (Tomasz Dutka)</p>
        </div>
        <div class="second">
        <div class="news">
            <p >W niedzielne przedpołudnie zmierzyliśmy się z liderem sądeckiej A-klasy - Heleną Nowy Sącz. Goście od samego początku próbowali narzucić wysokie tempo gry i stworzyć groźne sytuacje podbramkowe. Nasz blok defensywny skutecznie przerywał jednak zapędy przeciwnika. W pierwszej połowie wyprowadziliśmy dwie groźne kontry, po których udało nam się zdobyć bramki. Po zmianie stron goście wciąż atakowali i kreowali sytuacje. W 70 minucie przy zamieszaniu w polu karnym zdobyli bramkę kontaktową. Pod koniec meczu Helena miała rzut karny. To Daniel Dziubanowski był jednak górą i obronił strzał z jedenastki. Do końca meczu wynik już nie uległ zmianie.<br><br>
            Za tydzień rozegramy przedostatnie ligowe spotkanie w tej rundzie. Udamy do się do odległego Powroźnika, gdzie zmierzymy się z miejscowym Olimpikiem.<br><br>
            <b>Zawada Nowy Sącz 2:1 Helena Nowy Sącz</b><br>
            Kacper Adamiec<br>
            Tomasz Baczyński<br><br>
            #AveZawada
        </p>

        <div class="news-img"><img src="../img/wygrana-z-helena.jpg" width="700px" alt=""></div>
        </div>
        </div>
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