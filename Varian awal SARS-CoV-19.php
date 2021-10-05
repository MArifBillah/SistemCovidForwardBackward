<?php

include("App\Config.php");
include("App\MainPDO.php");

$fail_check = false;
$pdo = new MainPDO($config);

?>


<form action="rule.php" method="get">

<?php
$result = mysqli_query($mysqli, "SELECT * FROM covid WHERE nama_varian='Varian awal SARS-CoV-19' AND pertanyaan IS NOT NULL");
echo "<table border=1>";

echo "<tr>";
echo "<td align= center>Nama Gejala</td>";
echo "<td align= center>Jawab</td>";

echo "</tr>";

while($varian = mysqli_fetch_array($result)) {         

    echo "<tr>";
    echo "<td >".$varian['pertanyaan']."</td>";

    echo "<td>";
    echo "<input type='radio' name='".$varian['codename']."' value='ya'> Ya</input>";
    echo "<input type='radio' name='".$varian['codename']."' value='tidak'> Tidak</input>";
    echo "</td>";

    echo "</tr>";
    
}

echo "</table>";
?>

            <button type="submit" id="data" name="data" class="btn-primary">Masuk</button>

			</input><br><br>
		</form>