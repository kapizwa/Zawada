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
        <?php include('../resources/css/junior/info.css'); ?>
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
                        <p><b>Trener</b>: Piotr Pietruch</p>
                </div>

             </div>
          </div>
        </div>
	</main>
    
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