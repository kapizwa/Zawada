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
        <?php include('../resources/css/info.css'); ?>
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
        <div class="main-container">
            <div class="main-box">
             <div class="main-first">

                <div class="main-logo">
                    <div class="main-img"></div>
                 </div>

                <div class="main-info">
                        <p><b>Rok założenia</b>: 1946</p>
                        <p><b>Barwy</b>: biało-zielone</p>
                        <p><b>Adres</b>: Sportowa 12, 33-300 Nowy Sącz</p>
                        <p><b>E-mail</b>: zawadanowysacz@gmail.com</p>
                        <p><b>Stadion</b>: pojemność - 1 000 miejsc / oświetlenie - tak / boisko - 110 m x 74 m</p>
                        <p><b>Prezes</b>: Kamil Wójs</p>
                        <p><b>Trener</b>: Artur Aleksander</p>
                </div>

             </div>
          </div>
          <div class="second">
            <div class="maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d1186.305164523957!2d20.73964030019643!3d49.572287209330355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDnCsDM0JzIxLjMiTiAyMMKwNDQnMjYuMyJF!5e0!3m2!1spl!2spl!4v1701987717110!5m2!1spl!2spl" width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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