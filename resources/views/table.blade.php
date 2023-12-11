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
        <?php include('../resources/css/table.css'); ?>
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
    <div class="sections">
            <div class="all"><b>Razem</b></div>
            <div class="home"><b>Dom</b></div>
            <div class="away"><b>Wyjazd</b></div>
    </div>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Miejsce</th>
            <th scope="col">Nazwa</th>
            <th scope="col">Mecze</th>
            <th scope="col">Punkty</th>
            <th scope="col">Z</th>
            <th scope="col">R</th>
            <th scope="col">P</th>
            <th scope="col">Bramki</th>
            <th scope="col">Z</th>
            <th scope="col">R</th>
            <th scope="col">P</th>
            <th scope="col">Bramki</th>
            <th scope="col">Z</th>
            <th scope="col">R</th>
            <th scope="col">P</th>
            <th scope="col">Bramki</th>
            </tr>
        </thead>
        <tbody>

        <tr>
            <td><b>1</b></td>
            <td><p><img src="../img/logo/grybovia.png" alt="" width="20px"> Grybovia Grybów</p></td>
            <td>14</td>
            <td>33</td>
            <td>11</td>
            <td>0</td>
            <td>3</td>
            <td>51-32</td>
            <td>6</td>
            <td>0</td>
            <td>1</td>
            <td>32-14</td>
            <td>5</td>
            <td>0</td>
            <td>2</td>
            <td>19-18</td>
            </tr>

            <tr>
            <td><b>2</b></td>
            <td><p><img src="../img/logo/helena.png" alt="" width="20px"> Helena Nowy Sącz</p></td>
            <td>14</td>
            <td>31</td>
            <td>10</td>
            <td>1</td>
            <td>3</td>
            <td>45-16</td>
            <td>7</td>
            <td>1</td>
            <td>0</td>
            <td>28-9</td>
            <td>3</td>
            <td>0</td>
            <td>3</td>
            <td>17-7</td>
            </tr>

            <tr>
            <td><b>3</b></td>
            <td><p><img src="../img/logo/nawoj.jpg" alt="" width="25px"> Nawoj Nawojowa</p></td>
            <td>14</td>
            <td>29</td>
            <td>9</td>
            <td>2</td>
            <td>3</td>
            <td>27-12</td>
            <td>7</td>
            <td>0</td>
            <td>0</td>
            <td>15-1</td>
            <td>2</td>
            <td>2</td>
            <td>3</td>
            <td>12-11</td>
            </tr>

            <tr>
            <td><b>4</b></td>
            <td><p><img src="../img/logo/barciczanka-logo.png" alt="" width="25px"> Barciczanka II Barcice</p></td>
            <td>14</td>
            <td>29</td>
            <td>9</td>
            <td>2</td>
            <td>3</td>
            <td>40-17</td>
            <td>7</td>
            <td>0</td>
            <td>1</td>
            <td>29-7</td>
            <td>2</td>
            <td>2</td>
            <td>2</td>
            <td>11-10</td>
            </tr>

            <tr>
            <td><b>5</b></td>
            <td><p><img src="../img/logo/dabrovia.jpg" alt="" width="25px"> Dąbrovia Wielogłowy</p></td>
            <td>14</td>
            <td>26</td>
            <td>8</td>
            <td>2</td>
            <td>4</td>
            <td>31-25</td>
            <td>3</td>
            <td>2</td>
            <td>2</td>
            <td>18-13</td>
            <td>5</td>
            <td>0</td>
            <td>2</td>
            <td>13-12</td>
            </tr>

            <tr>
            <td><b>6</b></td>
            <td><p><img src="../img/logo/wojnarowa.jpg" alt="" width="20px"> Orzeł Wojnarowa</p></td>
            <td>14</td>
            <td>24</td>
            <td>8</td>
            <td>0</td>
            <td>6</td>
            <td>32-26</td>
            <td>2</td>
            <td>0</td>
            <td>4</td>
            <td>11-11</td>
            <td>6</td>
            <td>0</td>
            <td>2</td>
            <td>21-15</td>
            </tr>

            <tr>
            <td><b>7</b></td>
            <td><p><img src="../img/logo/powroznik.png" alt="" width="25px"> Olimpik Powroźnik</p></td>
            <td>13</td>
            <td>23</td>
            <td>7</td>
            <td>2</td>
            <td>4</td>
            <td>30-23</td>
            <td>6</td>
            <td>0</td>
            <td>0</td>
            <td>20-7</td>
            <td>1</td>
            <td>2</td>
            <td>4</td>
            <td>10-16</td>
            </tr>

            <tr>
            <td><b>8</b></td>
            <td><p><img src="../img/logo/jazowsko.jpg" alt="" width="25px"> Budowlani Jazowsko</p></td>
            <td>14</td>
            <td>21</td>
            <td>6</td>
            <td>3</td>
            <td>5</td>
            <td>29-26</td>
            <td>4</td>
            <td>2</td>
            <td>2</td>
            <td>19-13</td>
            <td>2</td>
            <td>1</td>
            <td>3</td>
            <td>10-13</td>
            </tr>

            <tr>
            <td><b>9</b></td>
            <td><p><img src="../img/logo/swiniarsko.png" alt="" width="25px"> LKS Świniarsko</p></td>
            <td>14</td>
            <td>20</td>
            <td>6</td>
            <td>2</td>
            <td>6</td>
            <td>35-28</td>
            <td>3</td>
            <td>2</td>
            <td>2</td>
            <td>14-11</td>
            <td>3</td>
            <td>0</td>
            <td>4</td>
            <td>21-17</td>
            </tr>

            <tr>
            <td><b>10</b></td>
            <td><p><img src="../img/logo/ptaszkowa.png" alt="" width="20px"> Orzeł Ptaszkowa</p></td>
            <td>14</td>
            <td>15</td>
            <td>4</td>
            <td>3</td>
            <td>7</td>
            <td>15-27</td>
            <td>2</td>
            <td>1</td>
            <td>3</td>
            <td>5-9</td>
            <td>2</td>
            <td>2</td>
            <td>4</td>
            <td>10-18</td>
            </tr>

            <tr>
            <td><b>11</b></td>
            <td><p><img src="../img/logo.png" alt="" width="30px"> <b>Zawada Nowy Sącz</b></p></td>
            <td>14</td>
            <td>14</td>
            <td>4</td>
            <td>2</td>
            <td>8</td>
            <td>18-39</td>
            <td>3</td>
            <td>2</td>
            <td>3</td>
            <td>12-20</td>
            <td>1</td>
            <td>0</td>
            <td>5</td>
            <td>6-19</td>
            </tr>

            <tr>
            <td><b>12</b></td>
            <td><p><img src="../img/logo/victoria.jpg" alt="" width="25px"> Victoria Witowice Dolne</p></td>
            <td>14</td>
            <td>13</td>
            <td>4</td>
            <td>1</td>
            <td>9</td>
            <td>18-37</td>
            <td>3</td>
            <td>0</td>
            <td>3</td>
            <td>11-13</td>
            <td>1</td>
            <td>1</td>
            <td>6</td>
            <td>7-24</td>
            </tr>

            <tr>
            <td><b>13</b></td>
            <td><p><img src="../img/logo/przydonica.jpg" alt="" width="25px"> ULKS Przydonica</p></td>
            <td>14</td>
            <td>10</td>
            <td>3</td>
            <td>1</td>
            <td>10</td>
            <td>29-51</td>
            <td>1</td>
            <td>1</td>
            <td>5</td>
            <td>19-25</td>
            <td>2</td>
            <td>0</td>
            <td>5</td>
            <td>10-26</td>
            </tr>

            <tr>
            <td><b>14</b></td>
            <td><p><img src="../img/logo/zamczysko.png" alt="" width="20px"> Zamczysko Marcinkowice</p></td>
            <td>14</td>
            <td>8</td>
            <td>2</td>
            <td>2</td>
            <td>10</td>
            <td>23-40</td>
            <td>0</td>
            <td>1</td>
            <td>5</td>
            <td>10-23</td>
            <td>2</td>
            <td>1</td>
            <td>5</td>
            <td>13-17</td>
            </tr>

            <tr>
            <td><b>15</b></td>
            <td><p><img src="../img/logo/mszalnica.png" alt="" width="35px">LKS Mszalnica</p></td>
            <td>13</td>
            <td>4</td>
            <td>1</td>
            <td>1</td>
            <td>11</td>
            <td>15-39</td>
            <td>1</td>
            <td>0</td>
            <td>6</td>
            <td>5-14</td>
            <td>0</td>
            <td>1</td>
            <td>5</td>
            <td>10-25</td>
            </tr>

        </tbody>
        </table>
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