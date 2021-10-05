<?php

include("App\Config.php");
include("App\MainPDO.php");

$fail_check = false;
$pdo = new MainPDO($config);

?>

<link rel="stylesheet" href="style.css">
</head>

        <nav>
            <ul>
                <div class="disini current">
                <li><a href="backward.php" class='link'>Backward</a></li>
                </div>
                <div class="disini">
                <li><a href="index.php" class='link'>Forward</a></li>
                </div>
            </ul>
        </nav>
<header>
        <h2>SistemCovid</h2>

    </header>

<div class="container">
<div  class='jenis-prioritas'>
        <h1> PRIORITAS TINGGI</h1>
    </div>
<form action="rule.php" method="get">

<?php
$result = mysqli_query($mysqli, "SELECT DISTINCT pertanyaan,codename FROM covid WHERE nama_varian IN ('Varian Beta','Varian Delpha','Tipe parah tingkat dua','Tipe parah tingkat tiga') AND pertanyaan IS NOT NULL");
echo "<table border=1>";

echo "<tr id='atas'>";
echo "<td align= center>Nama Gejala</td>";
echo "<td align= center>Jawab</td>";

echo "</tr>";

while($varian = mysqli_fetch_array($result)) {         
    echo "<tr>";
    echo "<td >".$varian['pertanyaan']."</td>";

    echo "<td>";
    echo "<div class='radio'>";
    echo "<input type='radio' name='".$varian['codename']."' id='ya".$varian['codename']."' value='ya' class='pilihan' required>";
    echo " <label for='ya".$varian['codename']."'>Ya</label>";

    echo "<input type='radio' name='".$varian['codename']."' id='tidak".$varian['codename']."' value='tidak' class='pilihan' required>";
    echo " <label for='tidak".$varian['codename']."'>Tidak</label>";
   echo "</div>";
    echo "</td>";

    echo "</tr>";
}

echo "</table>";
?>
        <div class="tombol">
                        <button type="submit" id="data" name="data" class="btn-primary">Input</button>
        </div>
			</input><br><br>
		</form>