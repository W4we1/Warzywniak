<html>
<head>
    <html lang="pl"></html>
    <meta charset="utf-8">
    <title>Warzywniak</title>
    <link rel="stylesheet" type="text/css" href="styl2.css">
    </head>
    <body>
    <div class="left-banner">
        <h1>Internetowy sklep z eko-warzywami</h1>
        </div>
        <div class="right-banner">
        <ol>
            <li>warzywa</li>
            <li>owoce</li>
            <li><a href="https://terapiasokami.pl/" target="_blank">soki</a></li>
            </ol>
        </div>
        <div class="main">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "dane2";
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            $sql = "SELECT nazwa, ilosc, opis, cena, zdjecie FROM produkty WHERE Rodzaje_id IN (1, 2);";
            $result = mysqli_query($conn, $sql);
            while ($row=mysqli_fetch_assoc($result)) {
                echo "<div>";
                echo "<img src='" . $row['zdjecie'] . "' alt=warzywniak'>";
                echo "<h5>" . $row['nazwa'] . "h/5>";
                echo "<p>opis: " . $row['opis'] . "</p>";
                echo "<p>na stanie: " . $row['ilosc'] . "</p>";
                echo "<h2>" . $row['cena'] . " zł</h2>";
                echo "</div>";
            }
            mysqli_close($conn);
            ?>
        </div>
        <div class="footer">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <label for="nazwa">Nazwa:</label>
            <input type="text" id="nazwa" name="nazwa">
            <label for="cena">Cena:</label>
            <input type="text" id="cena" name="cena">
            <input type="submit" value="Dodaj produkt">
            </form>
            <p>Stronę wykonał: 000000000Z</p>
        </div>
    </body>
</html>