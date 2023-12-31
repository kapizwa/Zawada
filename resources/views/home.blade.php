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
        <?php include('../resources/css/home.css'); ?>
    </style>
    <script src="https://kit.fontawesome.com/e8dac3ad42.js" crossorigin="anonymous"></script>
	<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


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

			<div class="source">
				<div class="left"></div>
				<div class="blog">
					<div class="name">
						<h2>Aktualności</h2>
					</div>
					<div class="contents">

				<a href="{{ route('match') }}" class="about-us-box sixth">
					<div class="zawada"></div>
					<div class="helena"></div>
					<div class="about-us-bg"></div>
					<div class="about-us-text">
						<h3>Wygrana z Heleną</h3>
						<p>
							Zespół Zawady zwyciężył przed własną publicznością 2:1 z Heleną Nowy Sącz.
						</p>
					</div>
</a>

				<div class="about-us-box fifth">
				<div class="zawada"></div>
					<div class="helena"></div>
					<div class="about-us-bg"></div>
					<div class="about-us-text">
						<h3>Spotkanie z Heleną</h3>
						<p>
							W dniu 29.10 o godzinie 11:00 odbędzie się mecz z Heleną Nowy Sącz.
						</p>
					</div>
				</div>

				<div class="about-us-box fourth">
				<div class="zawada"></div>
					<div class="mszalnica"></div>
					<div class="about-us-bg"></div>
					<div class="about-us-text">
						<h3>Spotkanie z Mszalnicą</h3>
						<p>
							W dniu 22.10 o godzinie 11:00 odbędzie się mecz z LKS Mszalnica.
						</p>
					</div>
				</div>

				<div class="about-us-box third">
				<div class="zawada"></div>
					<div class="barciczanka"></div>
					<div class="about-us-bg"></div>
					<div class="about-us-text">
						<h3>Remis z Barciczanką</h3>
						<p>
							Zespół Zawady zremisował w niedzielę bezbramkowo spotkanie z drużyną Bariczanka II Barcice.
						</p>
					</div>
				</div>

				<div class="about-us-box second">
				<div class="zawada"></div>
					<div class="barciczanka"></div>
					<div class="about-us-bg"></div>
					<div class="about-us-text">
						<h3>Spotkanie z Barciczanką</h3>
						<p>
							W dniu 14.10 o godzinie 16:00 odbędzie się mecz z Barciczanką II Barcice.
						</p>
					</div>
				</div>

				<div class="about-us-box first">
				<div class="zawada"></div>
					<div class="dabrovia"></div>
					<div class="about-us-bg"></div>
					<div class="about-us-text">
						<h3>Porażka z Dąbrovią</h3>
						<p>
							Zespół Zawady przegrał na wyjeździe z drużyną Dąbrovii Wielogłowy 2:3.
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="sponsor">
		<div class="name">
						<h2>Sponsorzy</h2>
					</div>
		<div class="swiper">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <div class="swiper-slide"><img src="../img/sponsor/topcar.png" alt=""></div>
    <div class="swiper-slide"><img src="../img/sponsor/noel.png" alt=""></div>
    <div class="swiper-slide"><img src="../img/sponsor/maximus.png" alt=""></div>
	<div class="swiper-slide"><img src="../img/sponsor/cieslak.png" alt=""></div>
    <div class="swiper-slide"><img src="../img/sponsor/drewbud.png" alt=""></div>
    <div class="swiper-slide"><img src="../img/sponsor/filipowicz.png" alt=""></div>
	<div class="swiper-slide"><img src="../img/sponsor/5w.png" alt=""></div>
    <div class="swiper-slide"><img src="../img/sponsor/pj.jpg" alt=""></div>
    <div class="swiper-slide"><img src="../img/sponsor/miasto.png" alt=""></div>
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
	
	<script>
    
	const swiper = new Swiper('.swiper', {
  direction: 'vertical',
  loop: true,
  autoplay: {
                delay: 2000,
            },
	slidesPerView:8,
});

</script>

</body>
</html>

@endsection