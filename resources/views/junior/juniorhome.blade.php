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
        <?php include('../resources/css/junior/home.css'); ?>
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
			<h2>Aktualności</h2>

			<div class="about-us-box sixth">
				<div class="zawada"></div>
				<div class="helena"></div>
				<div class="about-us-bg"></div>
				<div class="about-us-text">
					<h3>Wygrana z Heleną</h3>
					<p>
						Zespół Zawady zwyciężył przed własną publicznością 4:1 z Heleną Nowy Sącz.
					</p>
				</div>
			</div>

			<div class="about-us-box fifth">
			<div class="zawada"></div>
				<div class="helena"></div>
				<div class="about-us-bg"></div>
				<div class="about-us-text">
					<h3>Spotkanie z Heleną</h3>
					<p>
						W dniu 11.11 o godzinie 09:00 odbędzie się mecz z Heleną Nowy Sącz.
					</p>
				</div>
			</div>

			<div class="about-us-box fourth">
			<div class="zawada"></div>
				<div class="lososina"></div>
				<div class="about-us-bg"></div>
				<div class="about-us-text">
					<h3>Wygrana z Łososiem</h3>
					<p>
						W dniu 21.10 Juniorzy Starsi pokonali na wyjeździe Łososia 3:6.
					</p>
				</div>
			</div>

			<div class="about-us-box third">
			<div class="zawada"></div>
				<div class="roznow"></div>
				<div class="about-us-bg"></div>
				<div class="about-us-text">
					<h3>Wygrana z Zawiszą</h3>
					<p>
						Juniorzy Młodsi pokonali na wyjeździe zespół Zawiszy Rożnów 2:3.
					</p>
				</div>
			</div>

			<div class="about-us-box second">
			<div class="zawada"></div>
				<div class="roznow"></div>
				<div class="about-us-bg"></div>
				<div class="about-us-text">
					<h3>Spotkanie z Rożnowem</h3>
					<p>
						W dniu 21.10 o godzinie 16:00 odbędzie się mecz Juniorów Młodszych z Zawiszą Rożnów.
					</p>
				</div>
			</div>

			<div class="about-us-box first">
			<div class="zawada"></div>
				<div class="lososina"></div>
				<div class="about-us-bg"></div>
				<div class="about-us-text">
					<h3>Spotkanie z Łososiem</h3>
					<p>
					W dniu 21.10 o godzinie 14:00 odbędzie się mecz Juniorów Starszych z Łososiem Łososina Dolna.
					</p>
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