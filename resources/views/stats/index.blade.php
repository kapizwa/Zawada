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
        <?php include('../resources/css/stats.css'); ?>
    </style>
    <script src="https://kit.fontawesome.com/e8dac3ad42.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

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

    <div class="container">
    <div class="row">
            <div class="col-6">
            <h1>Statystyki</h1>
            </div>  
    </div>
    <table class="table">
  <thead>
    <tr>
    <th scope="col">#</th>
      <th scope="col">Imię</th>
      <th scope="col">Nazwisko</th>
      <th data-orderable="true" scope="col"><i class="fa-solid fa-hourglass-half" style="color: #000000;"></i> Minuty</th>
      <th scope="col"><i class="fa-solid fa-futbol" style="color: #000000;"></i> Bramki</th>
      <th scope="col"><i class="fa-solid fa-share" style="color: #000000;"></i> Asysty</th>
      <th scope="col"><i class="fa-brands fa-canadian-maple-leaf" style="color: #000000;"></i> Kanadyjska</th>
      <th scope="col"><i class="fa-solid fa-mobile" style="color: #ffff00;"></i> Żółte kartki</th>
      <th scope="col"><i class="fa-solid fa-mobile" style="color: #ff0000;"></i> Czerwone kartki</th>
      <th scope="col">Akcje</th>
    </tr>
  </thead>
  <tbody>
    @foreach($stats as $stat)
    <tr>
      <th scope="row">{{ $stat->user_id }}</th>
      <td>{{ $stat->name }}</td>
      <td>{{ $stat->surname }}</td>
      <td>{{ $stat->minutes }}</td>
      <td>{{ $stat->goals }}</td>
      <td>{{ $stat->assists }}</td>
      <td>{{ $stat->canadian }}</td>
      <td>{{ $stat->yellows }}</td>
      <td>{{ $stat->reds }}</td>
      <td>
      <button class="btn btn-danger btn-sm delete"">Usuń</button>
            <button class="btn btn-success btn-sm">Edytuj</button>
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

    <script>
$(document).ready(function () {
  $('.table').DataTable({
    "pageLength": 30, // Ustaw ilość pozycji na stronie
    "lengthChange": false, // Ukryj opcję zmiany liczby pozycji na stronie
    "language": {
      "search": "Szukaj:", // Ustaw niestandardowy tekst dla pola wyszukiwania
      // Pozostałe niestandardowe tłumaczenia, jeśli są potrzebne
    }
  });
});
</script>


</body>
</html>
@endsection