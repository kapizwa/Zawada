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
        <?php include('../resources/css/team.css'); ?>
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

    <div class="container">
        <div class="row">
            <div class="col-6">
            <h1>Lista zawodników</h1>
            </div>
            <div class="col-6">
    <a href="{{ route('teams.create') }}">
        <button type="button" class="btn btn-primary add">Dodaj</button>
    </a>
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
    @foreach($teams as $team)
    <tr>
      <th scope="row">{{ $team->id }}</th>
      <td>{{ $team->name }}</td>
      <td>{{ $team->surname }}</td>
      <td>{{ $team->birth }}</td>
      <td>{{ $team->growth }}</td>
      <td>{{ $team->number }}</td>
      <td>{{ $team->position }}</td>
      <td>
        <button class="btn btn-danger btn-sm delete" data-id="{{ $team->id }}">Usuń</button>
        <a href="{{route('teams.edit', $team->id) }}">
            <button class="btn btn-success btn-sm">Edytuj</button>
        </a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

<div class="players">
    <div class="goalkeepers">
        <div class="goalkeepers-name">
            <h1>Bramkarze</h1>
        </div>
        <div class="goalkeepers-show">
            <div class="card">
                <div class="img dziubanowski"></div>
                <div class="text">
                    <h3>Daniel Dziubanowski</h3>
                    <p>Data urodzenia: 1991-03-05</p>
                    <p>Numer: 91</p>
                    <p>Wzrost: 180cm</p>
                </div>
            </div>

            <div class="card">
			<div class="img lesniakj"></div>
			<div class="text">
				<h3>Jarosław Leśniak</h3>
				    <p>Data urodzenia: 1998-04-10</p>
                    <p>Numer: 1</p>
                    <p>Wzrost: 175cm</p>
			</div>
		</div>

        <div class="card">
                <div class="img kowalik"></div>
                <div class="text">
                    <h3>Jakub Kowalik</h3>
                    <p>Data urodzenia: 2000-09-20</p>
                    <p>Numer: 39</p>
                    <p>Wzrost: 178cm</p>
                </div>
            </div>
        </div>
    </div>

    <div class="defenders">
        <div class="defenders-name">
            <h1>Obrońcy</h1>
        </div>
        <div class="defenders-show">
            <div class="card">
			    <div class="img jablonski"></div>
			    <div class="text">
				    <h3>Jarosław Jabłoński</h3>
				        <p>Data urodzenia: 1986-12-07</p>
                        <p>Numer: 86</p>
                        <p>Wzrost: 184cm</p>
			    </div>
		        </div>

                <div class="card">
			<div class="img smierciak"></div>
			<div class="text">
				<h3>Jacek Śmierciak</h3>
				    <p>Data urodzenia: 1987-01-23</p>
                    <p>Numer: 77</p>
                    <p>Wzrost: 187cm</p>
			</div>
		</div>

        <div class="card">
			<div class="img korzystka"></div>
			<div class="text text-five">
				<h3>Marcin Korzystka</h3>
				    <p>Data urodzenia: 1984-07-09</p>
                    <p>Numer: 84</p>
                    <p>Wzrost: 184cm</p>
			</div>
		</div>

        <div class="card">
			<div class="img pogwizd"></div>
			<div class="text">
				<h3>Jacek Śmierciak</h3>
				    <p>Data urodzenia: 1987-01-23</p>
                    <p>Numer: 77</p>
                    <p>Wzrost: 187cm</p>
			</div>
		</div>

        <div class="card">
			<div class="img lesniaks"></div>
			<div class="text">
				<h3>Sławomir Leśniak</h3>
				    <p>Data urodzenia: 2000-11-21</p>
                    <p>Numer: 3</p>
                    <p>Wzrost: 177cm</p>
			</div>
		</div>

        <div class="card">
			<div class="img gagor"></div>
			<div class="text">
				<h3>Jakub Gągor</h3>
				    <p>Data urodzenia: 2006-01-16</p>
                    <p>Numer: 20</p>
                    <p>Wzrost: 183cm</p>
			</div>
		</div>


        </div>
        </div>     
    </div>
    <div class="midfielders">
        <div class="midfielders-name">
            <h1>Pomocnicy</h1>
        </div>
        <div class="midfielders-show">
            <div class="page1">
        <div class="card">
			    <div class="img borkowski"></div>
			    <div class="text">
				    <h3>Rafał Borkowski</h3>
				        <p>Data urodzenia: 1996-06-11</p>
                        <p>Numer: 96</p>
                        <p>Wzrost: 181cm</p>
			    </div>
		        </div>

                <div class="card">
			    <div class="img widel"></div>
			    <div class="text">
				    <h3>Dawid Wideł</h3>
				        <p>Data urodzenia: 1999-06-01</p>
                        <p>Numer: 9</p>
                        <p>Wzrost: 182cm</p>
			    </div>
		        </div>

                <div class="card">
			    <div class="img ruchala"></div>
			    <div class="text">
				    <h3>Stanisław Ruchała</h3>
				        <p>Data urodzenia: 1963-01-13</p>
                        <p>Numer: 18</p>
                        <p>Wzrost: 176cm</p>
			    </div>
		        </div>

                <div class="card">
			    <div class="img kadamiec"></div>
			    <div class="text">
				    <h3>Kacper Adamiec</h3>
				        <p>Data urodzenia: 2005-08-30</p>
                        <p>Numer: 11</p>
                        <p>Wzrost: 179cm</p>
			    </div>
		        </div>

                <div class="card">
			    <div class="img gorka"></div>
			    <div class="text">
				    <h3>Kacper Górka</h3>
				        <p>Data urodzenia: 1999-07-11</p>
                        <p>Numer: 8</p>
                        <p>Wzrost: 182cm</p>
			    </div>
		        </div>

                <div class="card">
			    <div class="img ladamiec"></div>
			    <div class="text">
				    <h3>Łukasz Adamiec</h3>
				        <p>Data urodzenia:  2005-05-30</p>
                        <p>Numer: 52</p>
                        <p>Wzrost: 180cm</p>
			    </div>
		        </div>
</div>
<div class="page2">
                <div class="card">
			    <div class="img dutka"></div>
			    <div class="text">
				    <h3>Tomasz Dutka</h3>
				        <p>Data urodzenia: 1997-03-08</p>
                        <p>Numer: 27</p>
                        <p>Wzrost: 182cm</p>
			    </div>
		        </div>

                <div class="card">
			    <div class="img djablonski"></div>
			    <div class="text">
				    <h3>Dominik Jabłoński</h3>
				        <p>Data urodzenia: 2007-07-07</p>
                        <p>Numer: 15</p>
                        <p>Wzrost: 177cm</p>
			    </div>
		        </div>

                <div class="card">
			<div class="img lesniakjan"></div>
			<div class="text">
				<h3>Jan Leśniak</h3>
				    <p>Data urodzenia: 1999-09-03</p>
                    <p>Numer: 23</p>
                    <p>Wzrost: 185cm</p>
			</div>
		</div>

        <div class="card">
			<div class="img ogorek"></div>
			<div class="text">
				<h3>Oliwier Ogórek</h3>
				    <p>Data urodzenia: 2006-11-07</p>
                    <p>Numer: 15</p>
                    <p>Wzrost: 178cm</p>
			</div>
		</div>

        <div class="card">
			<div class="img oleksy"></div>
			<div class="text">
				<h3>Dominik Oleksy</h3>
				    <p>Data urodzenia: 1993-11-22</p>
                    <p>Numer: 79</p>
                    <p>Wzrost: 177cm</p>
			</div>
		</div>

        <div class="card">
			<div class="img waniolek"></div>
			<div class="text">
				<h3>Igor Waniołek</h3>
				    <p>Data urodzenia: 2005-10-28</p>
                    <p>Numer: 14</p>
                    <p>Wzrost: 177cm</p>
			</div>
		</div>
</div>
        </div>
        </div>     
        </div>
    </div>
    <div class="strikers">
        <div class="strikers-name">
            <h1>Napastnicy</h1>
        </div>
        <div class="strikers-show">
        <div class="card">
			    <div class="img aleksander"></div>
			    <div class="text">
				    <h3>Bartosz Aleksander</h3>
				        <p>Data urodzenia: 2002-12-05</p>
                        <p>Numer: 23</p>
                        <p>Wzrost: 177cm</p>
			    </div>
		        </div>

                <div class="card">
			    <div class="img baczynski"></div>
			    <div class="text">
				    <h3>Tomasz Baczyński</h3>
				        <p>Data urodzenia: 1988-11-18</p>
                        <p>Numer: 88</p>
                        <p>Wzrost: 181cm</p>
			    </div>
		        </div>

                <div class="card">
			<div class="img wojtowicz"></div>
			<div class="text">
				<h3>Kacper Wójtowicz</h3>
				    <p>Data urodzenia: 1997-01-25</p>
                    <p>Numer: 97</p>
                    <p>Wzrost: 179cm</p>
			</div>
		</div>

        <div class="card">
			<div class="img wielowski"></div>
			<div class="text">
				<h3>Łukasz Wielowski</h3>
				    <p>Data urodzenia: 1994-07-27</p>
                    <p>Numer: 73</p>
                    <p>Wzrost: 179cm</p>
			</div>
		</div>

        <div class="card">
			<div class="img sendecki"></div>
			<div class="text">
				<h3>Jakub Sendecki</h3>
				    <p>Data urodzenia: 2002-05-03</p>
                    <p>Numer: 7</p>
                    <p>Wzrost: 176cm</p>
			</div>
		</div>
        </div>
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

@section('javascript')
$(function() {
    $('.delete').click(function(){
        $.ajax({
            method: "DELETE",
            url: "http://127.0.0.1:8000/teams/" + $(this).data("id")
        })
        .done(function(response) {
            alert("SUCCESS");
        })
        .fail(function (response){
            alert("ERROR");
        });
    });
});


@endsection