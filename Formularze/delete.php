<!DOCTYPE html>
<html>
    <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width">
            <title>Usuwanie pracownika</title>
            <link rel="stylesheet" href="style.css">
    </head>
<body class="body_del">
    <div class="nav">
            <a class="link a" href="index.php">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/Utilities/Ikony/nav_icon.png"/>
                    Główny index
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/Utilities/Ikony/nav_icon.png"/>
            </a>
            <a class="link b" href="$_SERVER['DOCUMENT_ROOT'] . '/Organizacja%20i%20pracownicy/Organizacja_i_pracownicy.php'">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/Utilities/Ikony/nav_icon.png"/>  
                    Organizacja i pracownicy
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/Utilities/Ikony/nav_icon.png"/>
            </a>
            <a class="link c" href="$_SERVER['DOCUMENT_ROOT'] . '/Organizacja%20i%20pracownicy/Sortowanie.php'">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/Utilities/Ikony/nav_icon.png">
                    Sortowanie
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/Utilities/Ikony/nav_icon.png">
            </a>
            <a class="link d" href="$_SERVER['DOCUMENT_ROOT'] . '/Organizacja%20i%20pracownicy/Limit.php'">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/Utilities/Ikony/nav_icon.png">
                    Limit
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/Utilities/Ikony/nav_icon.png">
            </a>
            <a class="link e" href="$_SERVER['DOCUMENT_ROOT'] . '/Organizacja%20i%20pracownicy/Funkcje_agregujace.php'">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/Utilities/Ikony/nav_icon.png">
                    Funkcje agregujące
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/Utilities/Ikony/nav_icon.png">
            </a>
            <a class="link f" href="$_SERVER['DOCUMENT_ROOT'] . '/Data%20i%20czas/Data_i_czas.php'">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/Utilities/Ikony/nav_icon.png">
                    Data i czas
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/Utilities/Ikony/nav_icon.png">
            </a>
            <a class="link g" href="$_SERVER['DOCUMENT_ROOT'] . '/Data%20i%20czas/Formatowanie_dat.php'">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/Utilities/Ikony/nav_icon.png">
                    Formatowanie dat
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/Utilities/Ikony/nav_icon.png">
            </a>
            <a class="link h" href="$_SERVER['DOCUMENT_ROOT'] . '/Formularze/formularz.html'">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/Utilities/Ikony/nav_icon.png">
                    Formularz - Strona.php
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/Utilities/Ikony/nav_icon.png">
            </a>
            <a class="link j" href="$_SERVER['DOCUMENT_ROOT'] . '/Formularze/daneDoBazy.php'">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/Utilities/Ikony/nav_icon.png">
                    Formularz - daneDoBazy.php
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/Utilities/Ikony/nav_icon.png">
            </a>
            <a class="link k" href="$_SERVER['DOCUMENT_ROOT'] . '/Biblioteka/Biblioteka.php'">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/Utilities/Ikony/nav_icon.png">
                    Książki
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/Utilities/Ikony/nav_icon.png">
            </a>
            <a class="link l" href="https://projekt-testowy-mavethee.herokuapp.com/">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/Utilities/Ikony/nav_icon.png">
                    Testowanko
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/Utilities/Ikony/nav_icon.png">
            </a>
            <a class="link m" href="https://github.com/SK-2019/php-sql-wprowadzenie-Mitura-Marcin">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/Utilities/Ikony/nav_icon.png">
                    GitHub - PHP
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/Utilities/Ikony/nav_icon.png">
            </a>
            <a class="link n" href="https://github.com/mavethee/projekt_testowy">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/Utilities/Ikony/nav_icon.png">
                    GitHub - Testowanko
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/Utilities/Ikony/nav_icon.png">
            </a>
    </div>

                    <!--Skrypt pod autoplay muzyki w tle-->
                    <script>
                        window.onload = function() 
                        {
                        var context = new AudioContext();
                        }
                    </script>

            <!--Muzyka w tle, zapętlona-->
            <audio controls autoplay loop>
                <source src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/Utilities/Muzyka/Kara_OST.mp3" type="audio/mpeg">
            </audio>
        <?php

            //Informacja o stronie:
            echo("<h4><br>Jesteś w delete.php</h1></br>");

            //Wyświetlenie wysłanych danych przez użytkownika:           
            echo("<h1 class=SQL_excercise> ID: ".$_POST["id_employee"]."</h1>");

            //Logowanie do serwera mySQL:
            require_once($_SERVER['DOCUMENT_ROOT'] . '/connect.php');

            //Zapytanie DELETE w $SQL z próbą uzyskania danych od użytkownika:
            $sql = ("DELETE FROM pracownicy where id_pracownicy='".$_POST['id_employee']."'");
            
            //Wyświetlenie tabeli:
            echo "<h1 class=SQL_excercise>". $sql;

            //Informacja o sukcesie:
            if ($conn->query($sql) === TRUE)
            {
                echo "<br>Record deleted successfully<br>";
            }
                        
            //Informacja o ewentualnych błędach:
            else 
            {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            //Wyświetlenie tabelki jako podgląd przy usuwaniu pracowników:
            $sql=("SELECT * FROM pracownicy");
            echo("<h1 class=SQL_excercise>Wyświetlenie tabelki jako podgląd przy usuwaniu pracowników:</h1>");
            echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h4>");
            $result=$conn->query("$sql");
            echo("<table border=1>");
            echo("<th>id_pracownicy</th>");
            echo("<th>imie</th>");
            echo("<th>data_urodzenia</th>");
            echo("<th>dzial</th>");
            echo("<th>zarobki</th>");
            while($row=$result->fetch_assoc())
            {
                echo("<tr>");
                echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>");
                echo("</tr>");
            }
            echo("</table>");

            $conn->close();
        ?>
</body>
</html>
