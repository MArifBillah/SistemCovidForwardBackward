<?php

include("App\Config.php");
include("App\MainPDO.php");

$fail_check = false;
$pdo = new MainPDO($config);
?>
<head>


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

<?php
$result = mysqli_query($mysqli, "SELECT * FROM tindakan WHERE kode_tindakan<4");
echo "<table border=1>";

echo "<tr id='atas'>";
echo "<td align= center>Prioritas perawatan</td>";
echo "</tr>";
while($varian = mysqli_fetch_array($result)) {         

    echo "<tr class='no-border'>";

    echo "<td class='no-border'>";
    echo "<a href='".$varian['prioritas'].".php'>";
    echo "<div class='priority'>";
    echo $varian['prioritas'];
    echo "</div>";
    echo "</a>";
    echo "</td>";
    
    echo "</tr>";

}

echo "</table>";
?>