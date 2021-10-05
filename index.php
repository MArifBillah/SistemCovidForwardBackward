<?php

include("App\Config.php");
include("App\MainPDO.php");

$fail_check = false;
$pdo = new MainPDO($config);
?>
<html>
<head>


<link rel="stylesheet" href="style.css">
</head>

<body>
        <nav>
            <ul>
            <div class="disini">
                <li><a href="backward.php" class='link'>Backward</a></li>
                </div>
                <div class="disini current">
                <li><a href="index.php" class='link'>Forward</a></li>
                </div>       
                </ul>
        </nav>
<header>
        <h2>SistemCovid</h2>

    </header>

<div class="container">
    <form action="rule.php" method="get">
            <?php
            $result = mysqli_query($mysqli, "SELECT * FROM gejala WHERE pertanyaan IS NOT NULL");
            echo "<table class='tabe'>";

            echo "<tr id='atas'>";
            echo "<td align= center>Nama Gejala</td>";
            echo "<td align= center>Jawab</td>";

            echo "</tr>";

            while($gejala = mysqli_fetch_array($result)) {         

                echo "<tr>";
                echo "<td >".$gejala['pertanyaan']."</td>";

                echo "<td>";
                echo "<div class='radio'>";
                echo "<input type='radio' name='".$gejala['codename']."' id='ya".$gejala['codename']."' value='ya' class='pilihan' required>";
                echo " <label for='ya".$gejala['codename']."'>Ya</label>";

                echo "<input type='radio' name='".$gejala['codename']."' id='tidak".$gejala['codename']."' value='tidak' class='pilihan' required>";
                echo " <label for='tidak".$gejala['codename']."'>Tidak</label>";
               echo "</div>";
                echo "</td>";

                echo "</tr>";
                
            }

            echo "</table>";
            ?>

            <br><br>
            <div class="tombol">
                        <button type="submit" id="data" name="data" class="btn-primary">Input</button>
        </div>
                    
        </form>
        </div>
<body>
    </html>