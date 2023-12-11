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
        <?php include('../resources/css/junior/team.css'); ?>
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

    <div class="container">
        <div class="row">
            <div class="col-6">
            <h1>Lista zawodników</h1>
            </div>

</div>
<table class="table">
  <thead>
    <tr>
    <th scope="col">#</th>
      <th scope="col">Imie</th>
      <th scope="col">Nazwisko</th>
      <th scope="col">Data urodzenia</th>
      <th scope="col">Wzrost</th>
      <th scope="col">Numer</th>
      <th scope="col">Pozycja</th>
      <th scope="col">Akcje</th>
    </tr>
  </thead>
  <tbody>
    @foreach($juniorteams as $juniorteam)
    <tr>
      <th scope="row">{{ $juniorteam->id }}</th>
      <td>{{ $juniorteam->name }}</td>
      <td>{{ $juniorteam->surname }}</td>
      <td>{{ $juniorteam->birth }}</td>
      <td>{{ $juniorteam->growth }}</td>
      <td>{{ $juniorteam->number }}</td>
      <td>{{ $juniorteam->position }}</td>
      <td>
        <button class="btn btn-danger btn-sm delete">Usuń</button>
            <button class="btn btn-success btn-sm">Edytuj</button>
        </a>
      </td>
    </tr>
    @endforeach
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