<?php
$servername = "localhost";
$username = "root";
$password = "ewelinailukas";
$dbname = "ewelina_09";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<a class="nav_link" href="index.php"> Strona głowna</a><br />
<a class="nav_link" href="pracownicy.php"> Pracownicy </a><br />
<a class="nav_link" href="pracownicyiorganizacja.php"> Pracownicy i organizacja </a><br />
<a class="nav_link" href="funkcjeAgregujace.php"> Funkcje agregujące </a><br />
<a class="nav_link" href="dataiczas.php"> Data i czas</a><br />
</div>
   
<h2>Ewelina Augustynowicz<br>klasa 2Ti grupa 2<br>numer 1</h2>
    <h1><b>Pracownicy i organizacja</b></h1>

</html>


<?php
$sql = 'SELECT * FROM pracownicy, organizacja WHERE dzial = nazwa_dzial';
echo ("<h2><p>zadanie 1 - Pracownicy z nazwą działów </p></h2>");
echo ("<p>select * from pracownicy, organizacja where dzial= nazwa_dzial");
$result = $conn->query('SELECT * FROM `pracownicy`, `organizacja` WHERE dzial = id_org');
echo("<table>");
echo("<th>ID</th>"); 
echo("<th>Imie</th>");
echo("<th>Dział</th>");
echo("<th>Zarobki</th>");
echo("<th>Data_Urodzenia</th>");
echo("<th>Nazwa_Działu</th>");
while($row=$result->fetch_assoc()){ 
echo("<tr>");
echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
echo("</tr>");
}
echo("</table>");
?>

<?php
$sql = 'SELECT  * FROM pracownicy,organizacja WHERE dzial = nazwa_dzial and dzial=1 and dzial=4';
echo ("<h2><p>zadanie 2 -  Pracownicy tylko z działu 1 i 4 </p></h2>");
echo ("<p>select * from pracownicy, organizacja where dzial= nazwa_dzial and dzial=1 and dzial=4");
$result = $conn->query('SELECT * FROM `pracownicy`, `organizacja` WHERE dzial = id_org and (dzial=1 or dzial=4)');
echo("<table>");
echo("<th>ID</th>"); 
echo("<th>Imie</th>");
echo("<th>Dział</th>");
echo("<th>Zarobki</th>");
echo("<th>Data_Urodzenia</th>");
echo("<th>Nazwa_Działu</th>");
while($row=$result->fetch_assoc()){ 
echo("<tr>");
echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
echo("</tr>");
}
echo("</table>");
?>

<?php
$sql = 'SELECT  * FROM pracownicy,organizacja WHERE dzial = nazwa_dzial and imie like "%a"';
echo ("<h2><p>zadanie 3 - Lista kobiet z nazwami działów</p></h2>");
echo ("<p>select * from pracownicy, organizacja where dzial= nazwa_dzial and imie like '%a' ");
$result = $conn->query('SELECT * FROM `pracownicy`, `organizacja` WHERE dzial = id_org and imie like "%a"');
echo("<table>");
echo("<th>ID</th>"); 
echo("<th>Imie</th>");
echo("<th>Dział</th>");
echo("<th>Zarobki</th>");
echo("<th>Data_Urodzenia</th>");
echo("<th>Nazwa_Działu</th>");
while($row=$result->fetch_assoc()){ 
echo("<tr>");
echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
echo("</tr>");
}
echo("</table>");
?>

<?php
$sql = 'SELECT * FROM pracownicy, organizacja WHERE dzial = nazwa_dzial';
echo ("<h2><p>zadanie 4 - Lista mężczyzn z nazwami działów </p></h2>");
echo ("<p>select * from pracownicy, organizacja where dzial= nazwa_dzial and imie NOT LIKE '%a'");
$result = $conn->query('SELECT * FROM `pracownicy`, `organizacja` WHERE dzial = id_org and imie NOT LIKE "%a"');
echo("<table>");
echo("<th>ID</th>"); 
echo("<th>Imie</th>");
echo("<th>Dział</th>");
echo("<th>Zarobki</th>");
echo("<th>Data_Urodzenia</th>");
echo("<th>Nazwa_Działu</th>");
while($row=$result->fetch_assoc()){ 
echo("<tr>");
echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
echo("</tr>");
}
echo("</table>");
?>

<h1>Sortowanie</h1>

<?php
$sql = 'SELECT  * FROM pracownicy,organizacja WHERE id_org order by imie desc';
echo ("<h2><p>zadanie 1 - Pracownicy posortowani malejąco wg imienia (przypomnienie: z nazwami działów) </p></h2>");
echo ("<p>select * from pracownicy, organizacja where id_org order by imie desc");
$result = $conn->query('SELECT  * FROM pracownicy,organizacja WHERE id_org order by imie desc');
echo("<table>");
echo("<th>ID</th>"); 
echo("<th>Imie</th>");
echo("<th>Dział</th>");
echo("<th>Zarobki</th>");
echo("<th>Data_Urodzenia</th>");
echo("<th>Nazwa_Działu</th>");
while($row=$result->fetch_assoc()){ 
echo("<tr>");
echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
echo("</tr>");
}
echo("</table>");
?>

<?php
$sql = 'SELECT  * FROM pracownicy,organizacja WHERE dzial=id_org and  order by imie desc';
echo ("<h2><p>zadanie 2 - Pracownicy z działu 3 posortowani rosnąco po imieniu </p></h2>");
echo ("<p>select * from pracownicy, organizacja where id_org and dzial=3 order by imie desc");
$result = $conn->query('SELECT  * FROM pracownicy,organizacja WHERE id_org and dzial=3 order by imie desc');
echo("<table>");
echo("<th>ID</th>"); 
echo("<th>Imie</th>");
echo("<th>Dział</th>");
echo("<th>Zarobki</th>");
echo("<th>Data_Urodzenia</th>");
echo("<th>Nazwa_Działu</th>");
while($row=$result->fetch_assoc()){ 
echo("<tr>");
echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
echo("</tr>");
}
echo("</table>");
?>

<?php
$sql = 'SELECT  * FROM pracownicy,organizacja WHERE dzial=id_org and imie like "%a" order by imie asc';
echo ("<h2><p>zadanie 3 - Kobiety posortowane rosnąco po imieniu </p></h2>");
echo ("<p>select * from pracownicy,organizacja WHERE dzial=id_org and imie like '%a' order by imie asc");
$result = $conn->query('SELECT  * FROM pracownicy,organizacja WHERE dzial=id_org and imie like "%a" order by imie asc');
echo("<table>");
echo("<th>ID</th>");
echo("<th>Imie</th>");
echo("<th>Dział</th>");
echo("<th>Zarobki</th>");
echo("<th>Data_Urodzenia</th>");
echo("<th>Nazwa_Działu</th>");
while($row=$result->fetch_assoc()){ 
echo("<tr>");
echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
echo("</tr>");
}
echo("</table>");
?>

<?php
$sql = 'SELECT  * FROM pracownicy,organizacja WHERE dzial=id_org and (dzial=1 or dzial=3) and imie like "%a" order by imie asc';
echo ("<h2><p>zadanie 4 - Kobiety z działu 1 i 3 posortowane rosnąco po zarobkach </p></h2>");
echo ("<p>select * from pracownicy, organizacja where dzial=id_org and (dzial=1 or dzial=3) and imie like '%a' order by imie asc");
$result = $conn->query('SELECT  * FROM pracownicy,organizacja WHERE dzial=id_org and (dzial=1 or dzial=3) and imie like "%a" order by imie asc');
echo("<table>");
echo("<th>ID</th>");
echo("<th>Imie</th>");
echo("<th>Dział</th>");
echo("<th>Zarobki</th>");
echo("<th>Data_Urodzenia</th>");
echo("<th>Nazwa_Działu</th>");
while($row=$result->fetch_assoc()){ 
echo("<tr>");
echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
echo("</tr>");
}
echo("</table>");
?>

<?php
$sql = 'SELECT * FROM pracownicy,organizacja WHERE id_org=dzial and imie NOT LIKE "%a" order by  nazwa_dzial asc, zarobki asc';
echo ("<h2><p>zadanie 5 - Mężczyźni posortowani rosnąco: po nazwie działu a następnie po wysokości zarobków </p></h2>");
echo ("<p>select * from pracownicy,organizacja where id_org=dzial and imie not like '%a' order by  nazwa_dzial asc, zarobki asc");
$result = $conn->query('SELECT * FROM pracownicy,organizacja WHERE id_org=dzial and imie NOT LIKE "%a" order by  nazwa_dzial asc, zarobki asc');
echo("<table>");
echo("<th>ID</th>");
echo("<th>Imie</th>");
echo("<th>Dział</th>");
echo("<th>Zarobki</th>");
echo("<th>Data_Urodzenia</th>");
echo("<th>Nazwa_Działu</th>");
while($row=$result->fetch_assoc()){ 
echo("<tr>");
echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
echo("</tr>");
}
echo("</table>");
?>

<h1>Limit</h1>

<?php
$sql = 'SELECT * FROM pracownicy, organizacja WHERE dzial = id_org and dzial=4 order by zarobki desc limit 2';
echo ("<h2><p>zadanie 1 - Dwóch najlepiej zarabiających pracowników z działu 4 </p></h2>");
echo ("<p>select * from pracownicy, organizacja where dzial= id_org and dzial=4 order by zarobki desc limit 2");
$result = $conn->query('SELECT * FROM `pracownicy`, `organizacja` WHERE dzial = id_org and dzial=4 order by zarobki desc limit 2');
echo("<table>");
echo("<th>ID</th>"); 
echo("<th>Imie</th>");
echo("<th>Dział</th>");
echo("<th>Zarobki</th>");
echo("<th>Data_Urodzenia</th>");
echo("<th>Nazwa_Działu</th>");
while($row=$result->fetch_assoc()){ 
echo("<tr>");
echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
echo("</tr>");
}
echo("</table>");
?>


<?php
$sql = 'SELECT * FROM pracownicy, organizacja WHERE dzial = id_org and imie like "%a" and (dzial=4 or dzial=2) order by zarobki desc limit 3';
echo ("<h2><p>zadanie 2 - Trzy najlepiej zarabiające kobiety z działu 4 i 2 </p></h2>");
echo ("<p>select * from pracownicy, organizacja where dzial= id_org and imie like '%a' and (dzial=4 or dzial=2) order by zarobki desc limit 3");
$result = $conn->query('SELECT * FROM `pracownicy`, `organizacja` WHERE dzial = id_org and imie like "%a" and (dzial=4 or dzial=2) order by zarobki desc limit 3');
echo("<table>");
echo("<th>ID</th>"); 
echo("<th>Imie</th>");
echo("<th>Dział</th>");
echo("<th>Zarobki</th>");
echo("<th>Data_Urodzenia</th>");
echo("<th>Nazwa_Działu</th>");
while($row=$result->fetch_assoc()){ 
echo("<tr>");
echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
echo("</tr>");
}
echo("</table>");
?>


<?php
$sql = 'SELECT * FROM pracownicy, organizacja WHERE dzial = nazwa_dzial order by data_urodzenia asc limit 1';
echo ("<h2><p>zadanie 3 - Najstarszy pracownik </p></h2>");
echo ("<p>select * from pracownicy, organizacja where dzial= nazwa_dzial order by data_urodzenia asc limit 1");
$result = $conn->query('SELECT * FROM `pracownicy`, `organizacja` WHERE dzial = id_org order by data_urodzenia asc limit 1');
echo("<table>");
echo("<th>ID</th>"); 
echo("<th>Imie</th>");
echo("<th>Dział</th>");
echo("<th>Zarobki</th>");
echo("<th>Data_Urodzenia</th>");
echo("<th>Nazwa_Działu</th>");
while($row=$result->fetch_assoc()){ 
echo("<tr>");
echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
echo("</tr>");
}
echo("</table>");
?>