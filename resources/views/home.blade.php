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
</head>

<body>
    <header>
        <div class="header-img">
            <div class="header-bg"></div>
        </div>
    </header>
    <nav class="nav">
        <ul>
            <li class="nav-item"><a href="home.html">home</a></li>
            <li class="nav-item"><a href="zespol.html">zespół</a></li>
            <li class="nav-item"><a href="tabela.html">tabela</a></li>
			<li class="nav-item"><a href="terminarz.html">terminarz</a></li>
			<li class="nav-item"><a href="informacje.html">info</a></li>
        </ul>
    </nav>
    <main>
			<h2>Aktualności</h2>

			<div class="about-us-box top">
				<div class="about-us-bg"></div>
				<div class="about-us-text">
					<h3>POST</h3>
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero,
						veniam qui. In quis, ratione sint laboriosam quaerat minus quidem
						doloremque!
					</p>
				</div>
			</div>

			<div class="about-us-box middle">
				<div class="about-us-bg"></div>
				<div class="about-us-text">
					<h3>POST</h3>
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero,
						veniam qui. In quis, ratione sint laboriosam quaerat minus quidem
						doloremque!
					</p>
				</div>
			</div>

			<div class="about-us-box bottom">
				<div class="about-us-bg"></div>
				<div class="about-us-text">
					<h3>POST</h3>
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero,
						veniam qui. In quis, ratione sint laboriosam quaerat minus quidem
						doloremque!
					</p>
				</div>
			</div>
		</main>
    <footer>
        <p>
            &copy; 2023 LKS Zawada Nowy Sącz
            <span class="icon-box">
                <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-square-instagram"></i></a>
            </span>
        </p>
    </footer>
</body>
</html>
@endsection