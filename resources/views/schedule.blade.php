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
        <?php include('../resources/css/schedule.css'); ?>
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
            <li class="nav-item"><a href="{{ route('table') }}">tabela</a></li>
			<li class="nav-item"><a href="{{ route('schedule') }}">terminarz</a></li>
			<li class="nav-item"><a href="{{ route('info') }}">info</a></li>
        </ul>
    </nav>
    <main>
        <div class="container">

        <h2>Kolejka 1</h2>
        <h3>Pauza: Olimpik Powroźnik</h3>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">Data</th>
            <th scope="col">Mecz</th>
            <th scope="col">Wynik</th>
            <th scope="col">Akcje</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>13 sierpnia, 17:30</td>
            <td><b>Nawoj Nawojowa</b> - Victoria Witowice Dolne</td>
            <td>2:0</td>
            <td></td>
            </tr>
            <tr>
            <td>12 sierpnia, 18:00</td>
            <td><b>Budowlani Jazowsko</b> - LKS Świniarsko </td>
            <td>2:1</td>
            <td></td>
            </tr>
            <tr>
            <td>13 sierpnia, 18:00</td>
            <td>Dąbrovia Wielogłowy - Zamczysko Marcinkowice </td>
            <td>2:2</td>
            <td></td>
            </tr>
            <tr>
            <td>12 sierpnia, 18:00</td>
            <td>Barciczanka II Barcice - <b>Grybovia Grybów</b> </td>
            <td>2:3</td>
            <td></td>
            </tr>
            <tr>
            <td>13 sierpnia, 11:00</td>
            <td>LKS Mszalnica - <b>Orzeł Wojnarowa</b> </td>
            <td>0:3</td>
            <td></td>
            </tr>
            <tr>
            <td>12 sierpnia, 17:30</td>
            <td><b>Helena Nowy Sącz</b> - ULKS Przydonica</td>
            <td>2:1</td>
            <td></td>
            </tr>
            <tr>
            <td>13 sierpnia, 11:00</td>
            <td class="td-color">Zawada Nowy Sącz - Orzeł Ptaszkowa </td>
            <td>2:2</td>
            <td></td>
            </tr>
        </tbody>
        </table>

        <h2>Kolejka 2</h2>
        <h3>Pauza: </h3><h3 class="h3-color">Zawada Nowy Sącz</h3>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">Data</th>
            <th scope="col">Mecz</th>
            <th scope="col">Wynik</th>
            <th scope="col">Akcje</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>15 sierpnia, 17:30</td>
            <td><b>Victoria Witowice Dolne</b> - Orzeł Ptaszkowa </td>
            <td>4:1</td>
            <td></td>
            </tr>
            <tr>
            <td>15 sierpnia, 17:30</td>
            <td>ULKS Przydonica - Olimpik Powroźnik  </td>
            <td>2:2</td>
            <td></td>
            </tr>
            <tr>
            <td>15 sierpnia, 17:30</td>
            <td><b>Orzeł Wojnarowa</b> - Helena Nowy Sącz  </td>
            <td>2:0</td>
            <td></td>
            </tr>
            <tr>
            <td>15 sierpnia, 11:00</td>
            <td><b>Grybovia Grybów</b> - LKS Mszalnica  </td>
            <td>5:2</td>
            <td></td>
            </tr>
            <tr>
            <td>15 sierpnia, 11:00</td>
            <td>Zamczysko Marcinkowice - <b>Barciczanka II Barcice</b>  </td>
            <td>1:5</td>
            <td></td>
            </tr>
            <tr>
            <td>15 sierpnia, 17:00</td>
            <td>LKS Świniarsko - <b>Dąbrovia Wielogłowy</b> </td>
            <td>1:2</td>
            <td></td>
            </tr>
            <tr>
            <td>15 sierpnia, 17:30</td>
            <td><b>Nawoj Nawojowa</b> - Budowlani Jazowsko </td>
            <td>1:0</td>
            <td></td>
            </tr>
        </tbody>
        </table>

        <h2>Kolejka 3</h2>
        <h3>Pauza: Orzeł Ptaszkowa</h3>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">Data</th>
            <th scope="col">Mecz</th>
            <th scope="col">Wynik</th>
            <th scope="col">Akcje</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>19 sierpnia, 16:00</td>
            <td>Budowlani Jazowsko - Victoria Witowice Dolne</td>
            <td>1:1</td>
            <td></td>
            </tr>
            <tr>
            <td>20 sierpnia, 17:30</td>
            <td><b>Dąbrovia Wielogłowy</b> - Nawoj Nawojowa </td>
            <td>4:1</td>
            <td></td>
            </tr>
            <tr>
            <td>20 sierpnia, 17:00</td>
            <td><b>Barciczanka II Barcice</b> - LKS Świniarsko  </td>
            <td>3:2</td>
            <td></td>
            </tr>
            <tr>
            <td>20 sierpnia, 17:30</td>
            <td>LKS Mszalnica - <b>Zamczysko Marcinkowice</b> </td>
            <td>0:1</td>
            <td></td>
            </tr>
            <tr>
            <td>19 sierpnia, 17:00</td>
            <td>Helena Nowy Sącz - Grybovia Grybów</td>
            <td>3:0 (WO)</td>
            <td></td>
            </tr>
            <tr>
            <td>20 sierpnia, 17:30</td>
            <td><b>Olimpik Powroźnik</b> - Orzeł Wojnarowa </td>
            <td>5:1</td>
            <td></td>
            </tr>
            <tr>
            <td>20 sierpnia, 11:00</td>
            <td class="td-color">Zawada Nowy Sącz - <b>ULKS Przydonica</b>  </td>
            <td>1:4</td>
            <td></td>
            </tr>
        </tbody>
        </table>

        <h2>Kolejka 4</h2>
        <h3>Pauza: Victoria Witowice Dolne</h3>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">Data</th>
            <th scope="col">Mecz</th>
            <th scope="col">Wynik</th>
            <th scope="col">Akcje</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>27 sierpnia, 17:00</td>
            <td>ULKS Przydonica - <b>Orzeł Ptaszkowa</b> </td>
            <td>2:3</td>
            <td></td>
            </tr>
            <tr>
            <td>26 sierpnia, 17:00</td>
            <td class="td-color"><b>Orzeł Wojnarowa</b> - Zawada Nowy Sącz  </td>
            <td>4:1</td>
            <td></td>
            </tr>
            <tr>
            <td>27 sierpnia, 17:00</td>
            <td><b>Grybovia Grybów</b> - Olimpik Powroźnik  </td>
            <td>4:1</td>
            <td></td>
            </tr>
            <tr>
            <td>27 sierpnia, 17:00</td>
            <td>Zamczysko Marcinkowice - <b>Helena Nowy Sącz</b>  </td>
            <td>1:6</td>
            <td></td>
            </tr>
            <tr>
            <td>27 sierpnia, 17:30</td>
            <td>LKS Świniarsko - LKS Mszalnica  </td>
            <td>3:3</td>
            <td></td>
            </tr>
            <tr>
            <td>26 sierpnia, 17:00</td>
            <td><b>Nawoj Nawojowa</b> - Barciczanka II Barcice</td>
            <td>2:1</td>
            <td></td>
            </tr>
            <tr>
            <td>26 sierpnia, 17:30</td>
            <td> Budowlani Jazowsko - <b>Dąbrovia Wielogłowy</b>  </td>
            <td>0:4</td>
            <td></td>
            </tr>
        </tbody>
        </table>

        <h2>Kolejka 5</h2>
        <h3>Pauza: ULKS Przydonica</h3>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">Data</th>
            <th scope="col">Mecz</th>
            <th scope="col">Wynik</th>
            <th scope="col">Akcje</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>3 września, 17:00</td>
            <td><b>Dąbrovia Wielogłowy</b> - Victoria Witowice Dolne </td>
            <td>6:0</td>
            <td></td>
            </tr>
            <tr>
            <td>3 września, 16:00</td>
            <td><b>Barciczanka II Barcice</b> - Budowlani Jazowsko  </td>
            <td>4:0</td>
            <td></td>
            </tr>
            <tr>
            <td>3 września, 11:00</td>
            <td>LKS Mszalnica - <b>Nawoj Nawojowa</b>  </td>
            <td>0:1</td>
            <td></td>
            </tr>
            <tr>
            <td>2 września, 17:00</td>
            <td><b>Helena Nowy Sącz</b> - LKS Świniarsko </td>
            <td>6:3</td>
            <td></td>
            </tr>
            <tr>
            <td>3 września, 17:00</td>
            <td><b>Olimpik Powroźnik</b> - Zamczysko Marcinkowice </td>
            <td>2:1</td>
            <td></td>
            </tr>
            <tr>
            <td>3 września, 11:00</td>
            <td class="td-color"><b>Zawada Nowy Sącz</b> - Grybovia Grybów </td>
            <td>3:1</td>
            <td></td>
            </tr>
            <tr>
            <td>3 września, 11:00</td>
            <td> Orzeł Ptaszkowa - <b>Orzeł Wojnarowa</b>  </td>
            <td>0:3</td>
            <td></td>
            </tr>
        </tbody>
        </table>

        <h2>Kolejka 6</h2>
        <h3>Pauza: Orzeł Wojnarowa</h3>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">Data</th>
            <th scope="col">Mecz</th>
            <th scope="col">Wynik</th>
            <th scope="col">Akcje</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>10 września, 16:00</td>
            <td>Victoria Witowice Dolne - <b>ULKS Przydonica</b> </td>
            <td>0:2</td>
            <td></td>
            </tr>
            <tr>
            <td>10 września, 11:00</td>
            <td>Grybovia Grybów - <b>Orzeł Ptaszkowa</b>  </td>
            <td>2:3</td>
            <td></td>
            </tr>
            <tr>
            <td>10 września, 16:30</td>
            <td class="td-color">Zamczysko Marcinkowice - <b>Zawada Nowy Sącz</b>  </td>
            <td>1:2</td>
            <td></td>
            </tr>
            <tr>
            <td>10 września, 11:00</td>
            <td><b>LKS Świniarsko</b> - Olimpik Powroźnik  </td>
            <td>1:0</td>
            <td></td>
            </tr>
            <tr>
            <td>10 września, 16:00</td>
            <td><b>Nawoj Nawojowa</b> - Helena Nowy Sącz </td>
            <td>1:0</td>
            <td></td>
            </tr>
            <tr>
            <td>9 września, 17:00</td>
            <td><b>Budowlani Jazowsko</b> - LKS Mszalnica </td>
            <td>4:2</td>
            <td></td>
            </tr>
            <tr>
            <td>9 września, 17:00</td>
            <td>Dąbrovia Wielogłowy - Barciczanka II Barcice  </td>
            <td>1:1</td>
            <td></td>
            </tr>
        </tbody>
        </table>

        <h2>Kolejka 7</h2>
        <h3>Pauza: Grybovia Grybów</h3>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">Data</th>
            <th scope="col">Mecz</th>
            <th scope="col">Wynik</th>
            <th scope="col">Akcje</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>17 września, 16:00</td>
            <td><b>Barciczanka II Barcice</b> - Victoria Witowice Dolne </td>
            <td>4:1</td>
            <td></td>
            </tr>
            <tr>
            <td>17 września, 11:00</td>
            <td>LKS Mszalnica - <b>Dąbrovia Wielogłowy</b>  </td>
            <td>1:2</td>
            <td></td>
            </tr>
            <tr>
            <td>16 września, 16:30</td>
            <td>Helena Nowy Sącz - Budowlani Jazowsko </td>
            <td>5:2</td>
            <td></td>
            </tr>
            <tr>
            <td>17 września, 16:30</td>
            <td><b>Olimpik Powroźnik</b> - Nawoj Nawojowa  </td>
            <td>1:0</td>
            <td></td>
            </tr>
            <tr>
            <td>17 września, 11:00</td>
            <td class="td-color">Zawada Nowy Sącz - <b>LKS Świniarsko</b> </td>
            <td>2:8</td>
            <td></td>
            </tr>
            <tr>
            <td>17 września, 11:00</td>
            <td><b>Orzeł Ptaszkowa</b> - Zamczysko Marcinkowice  </td>
            <td>2:1</td>
            <td></td>
            </tr>
            <tr>
            <td>17 września, 16:30</td>
            <td>ULKS Przydonica - <b>Orzeł Wojnarowa</b>   </td>
            <td>3:4</td>
            <td></td>
            </tr>
        </tbody>
        </table>

        <h2>Kolejka 8</h2>
        <h3>Pauza: Zamczysko Marcinkowice</h3>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">Data</th>
            <th scope="col">Mecz</th>
            <th scope="col">Wynik</th>
            <th scope="col">Akcje</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>24 września, 11:00</td>
            <td>Victoria Witowice Dolne - <b>Orzeł Wojnarowa</b> </td>
            <td>1:4</td>
            <td></td>
            </tr>
            <tr>
            <td>24 września, 16:00</td>
            <td><b>Grybovia Grybów</b> - ULKS Przydonica  </td>
            <td>8:2</td>
            <td></td>
            </tr>
            <tr>
            <td>24 września, 12:00</td>
            <td><b>LKS Świniarsko</b> - Orzeł Ptaszkowa </td>
            <td>1:0</td>
            <td></td>
            </tr>
            <tr>
            <td>24 września, 16:00</td>
            <td class="td-color"><b>Nawoj Nawojowa</b> - Zawada Nowy Sącz  </td>
            <td>2:0</td>
            <td></td>
            </tr>
            <tr>
            <td>23 września, 17:00</td>
            <td>Budowlani Jazowsko - Olimpik Powroźnik </td>
            <td>2:2</td>
            <td></td>
            </tr>
            <tr>
            <td>24 września, 16:00</td>
            <td>Dąbrovia Wielogłowy -<b>Helena Nowy Sącz</b>  </td>
            <td>1:4</td>
            <td></td>
            </tr>
            <tr>
            <td>17 listopada, 18:00</td>
            <td><b>Barciczanka II Barcice</b> - LKS Mszalnica   </td>
            <td>4:0</td>
            <td></td>
            </tr>
        </tbody>
        </table>

        <h2>Kolejka 9</h2>
        <h3>Pauza: Zamczysko Marcinkowice</h3>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">Data</th>
            <th scope="col">Mecz</th>
            <th class="score" scope="col">Wynik</th>
            <th scope="col">Akcje</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>1 października, 16:00</td>
            <td>LKS Mszalnica - <b>Victoria Witowice Dolne</b> </td>
            <td>0:1</td>
            <td></td>
            </tr>
            <tr>
            <td>30 września, 16:00</td>
            <td>Helena Nowy Sącz - Barciczanka II Barcice  </td>
            <td>3:0 (WO)</td>
            <td></td>
            </tr>
            <tr>
            <td>1 października, 16:00</td>
            <td><b>Olimpik Powroźnik</b> - Dąbrovia Wielogłowy</td>
            <td>3:1</td>
            <td></td>
            </tr>
            <tr>
            <td>1 października, 11:00</td>
            <td class="td-color">Zawada Nowy Sącz - <b>Budowlani Jazowsko</b>  </td>
            <td>0:4</td>
            <td></td>
            </tr>
            <tr>
            <td>1 października, 11:00</td>
            <td>Orzeł Ptaszkowa - Nawoj Nawojowa  </td>
            <td>1:1</td>
            <td></td>
            </tr>
            <tr>
            <td>1 października, 16:00</td>
            <td>ULKS Przydonica - <b>Zamczysko Marcinkowice</b> </td>
            <td>2:5</td>
            <td></td>
            </tr>
            <tr>
            <td>30 września, 16:00</td>
            <td>Orzeł Wojnarowa - <b>Grybovia Grybów</b>  </td>
            <td>1:2</td>
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