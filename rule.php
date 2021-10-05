<?php

include("App\Config.php");
include("App\MainPDO.php");

$fail_check = false;
$pdo = new MainPDO($config);

/**$result = mysqli_query($mysqli, "SELECT * FROM gejala");
echo "<table border=1>";

echo "<tr>";
echo "<td align= center>Nama Gejala</td>";
echo "</tr>";
while($gejala = mysqli_fetch_array($result)) {         

    echo "<tr>";
    echo "<td >".$gejala['nama_gejala']."</td>";
    echo "</tr>";

}

echo "</table>";**/
?>
<link rel="stylesheet" href="style.css">
</head>

        <nav>
            <ul>
                <div class="disini">
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
echo "<div class='hasil'>";

if(isset($_GET["data"])){
    $result = mysqli_query($mysqli, "SELECT * FROM gejala WHERE pertanyaan IS NOT NULL");

    echo "<table border=1>";
    
    echo "<tr>";
    echo "<td align= center>Nama Gejala</td>";
    
    echo "</tr>";
    
    while($hasil = mysqli_fetch_array($result)) {         
        echo "<tr>";
        if(isset($_GET["$hasil[codename]"])){
       $temp = $_GET["$hasil[codename]"];
            if($temp=="ya"){
                echo "<td >".$hasil['nama_gejala']."</td>";
            }
       }
         
        echo "</tr>";
        
    }
    echo "</table>";
    echo "<div class='kemungkinan'>";
$mual_mual=false;
$batuk_hidung_lendir=false;
$flu_parah=false;
$malaise=false;
$brain_fog=false;
$saturasi_oksigen=false;

$varian_1=false;
$varian_2=false;
$varian_3=false;
$varian_4=false;

$tipe_1=false;
$tipe_2=false;
$tipe_3=false;
$tipe_4=false;
$tipe_5=false;
$tipe_6=false;

$priority_1=false;
$priority_2=false;
$priority_3=false;
echo "<h1>Anda kemungkinan juga menderita:</h1>";
//rule 1
    if(isset($_GET['muntah'],$_GET['pusing'])){
        $mual1=$_GET['muntah'];
        $mual2=$_GET['pusing'];
        if($mual1=="ya"&&$mual2=="ya"){
            $mual = mysqli_query($mysqli, "SELECT nama_gejala FROM gejala WHERE codename='mual'");
            $dizzy =mysqli_fetch_array($mual);
            $tempoo =$dizzy['nama_gejala'];
            echo "<br>";
            echo $tempoo;
            $mual_mual=true;
            echo "<br>";
        }
    }

    
    //rule 2
    
    if(isset($_GET['napas'],$_GET['biru'])){
        $kondisi1=$_GET['napas'];
        $kondisi2=$_GET['biru'];

        if($kondisi1=="ya"&&$kondisi2=="ya"){
            $oxy = mysqli_query($mysqli, "SELECT nama_gejala FROM gejala WHERE codename='oksigen'");
            $temp =mysqli_fetch_array($oxy);
            $oxygen =$temp['nama_gejala'];
            echo "<br>";
            echo $oxygen;
            $saturasi_oksigen=true;
            echo "<br>";
        }
    }

    //rule 3
    if(isset($_GET['jernih'],$_GET['ingatan'])){
        $kondisi1=$_GET['jernih'];
        $kondisi2=$_GET['ingatan'];

        if($kondisi1=="ya"||$kondisi2=="ya"){
            $brain = mysqli_query($mysqli, "SELECT nama_gejala FROM gejala WHERE codename='brain'");
            $temp =mysqli_fetch_array($brain);
            $fog =$temp['nama_gejala'];
            echo "<br>";
            echo $fog;
            $brain_fog=true;
            echo "<br>";
        }
    }
    //rule 4 major change here
    $kondisi3='tidak';
    if(isset($_GET['lelah'])){
        $kondisi1=$_GET['lelah'];
        if(isset($_GET['otot'])){
            $kondisi2=$_GET['otot'];
        
        }
        if(isset($_GET['sendi'])){
            $kondisi3=$_GET['sendi'];
        }
        
        if($kondisi1=="ya"&&($kondisi2=="ya"||$kondisi3="ya")){
            $kondisi = mysqli_query($mysqli, "SELECT nama_gejala FROM gejala WHERE codename='malaise'");
            $mal =mysqli_fetch_array($kondisi);
            $malaise0 =$mal['nama_gejala'];
            echo "<br>";
            echo $malaise0;
            $malaise=true;
            echo "<br>";
        }
    }
    //rule 5
    if(isset($_GET['demam'],$_GET['otot'],$_GET['batuk'],$_GET['kepala'],$_GET['lelah'])){
        $kondisi1=$_GET['demam'];
        $kondisi2=$_GET['otot'];
        $kondisi3=$_GET['batuk'];
        $kondisi4=$_GET['kepala'];
        $kondisi5=$_GET['lelah'];

        if($kondisi1 =="ya" && $kondisi2 =="ya"&&$kondisi3 =="ya"&&$kondisi4 =="ya"&&$kondisi5 =="ya"){
            $flu = mysqli_query($mysqli, "SELECT nama_gejala FROM gejala WHERE codename='flu'");
            $flu2 =mysqli_fetch_array($flu);
            $temp = $flu2['nama_gejala'];
            echo "<br>";
            echo $temp;
            $flu_parah=true;
            echo "<br>";
        }
    }
    //rule 6
    if(isset($_GET['batuk_lendir'],$_GET['hidung_lendir'])){
        $kondisi1=$_GET['batuk_lendir'];
        $kondisi2=$_GET['hidung_lendir'];

        if($kondisi1 =="ya" && $kondisi2 =="ya"){
            $lendir = mysqli_query($mysqli, "SELECT nama_gejala FROM gejala WHERE codename='lendir'");
            $temp0 =mysqli_fetch_array($lendir);
            $temp = $temp0['nama_gejala'];
            echo "<br>";
            echo $temp;
            $batuk_hidung_lendir=true;
            echo "<br>";
        }
    }
    echo "</div>";
    echo "<div class='varian'>";
    echo "<h1>KEMUNGKINAN VARIAN:</h1>";

    //rule 7
    if(isset($_GET['tenggorokan'],$_GET['demam'],$_GET['batuk'],$_GET['rasa'],$_GET['otot'],$_GET['diare'])){
        $kondisi1=$_GET['tenggorokan'];
        $kondisi2=$_GET['demam'];
        $kondisi3=$_GET['batuk'];
        $kondisi4=$_GET['rasa'];
        $kondisi5=$_GET['otot'];
        $kondisi6=$_GET['diare'];
 
        if($kondisi1 =="ya" && $kondisi2 =="ya"&&$kondisi3 =="ya"&&$kondisi4 =="ya"&&$kondisi5 =="ya"&&$kondisi6 =="ya"&&$mual_mual){
            $varian = mysqli_query($mysqli, "SELECT nama_varian FROM varian WHERE kode_varian=1");
            $varian1 =mysqli_fetch_array($varian);
            $covid =$varian1['nama_varian'];
            $varian_1=true;
            echo "<br>";
            echo $covid;
            echo "<br>";
        }
    }

    //rule 8
    if(isset($_GET['rasa'],$_GET['cium'])){
        $kondisi1=$_GET['rasa'];
        $kondisi2=$_GET['cium'];
        if($kondisi1=="ya"||$kondisi2=="ya"){
            $anosmia=true;
        }
    }
    //rule 9
    if(isset($_GET['tenggorokan'],$_GET['batuk_lendir'],$_GET['batuk'],$_GET['rasa'],$_GET['cium'],$_GET['otot'],$_GET['napas'],$_GET['pusing'],$_GET['lelah'])){
        $kondisi1=$_GET['tenggorokan'];
        $kondisi2=$_GET['batuk_lendir'];
        $kondisi3=$_GET['batuk'];
        $kondisi4=$_GET['otot'];
        $kondisi5=$_GET['napas'];
        $kondisi7=$_GET['pusing'];
        if($kondisi1 =="ya" &&$kondisi2 =="ya" && $kondisi3 =="ya"&&$kondisi4 =="ya"&&$kondisi5 =="ya"&&$brain_fog&&$kondisi7 =="ya"&&$malaise&&$mual_mual&&$batuk_hidung_lendir&&$anosmia){
            $varian = mysqli_query($mysqli, "SELECT nama_varian FROM varian WHERE kode_varian=2");
            $varian1 =mysqli_fetch_array($varian);
            $covid =$varian1['nama_varian'];
            echo "<br>";
            echo $covid;
            echo "<br>";
            $varian_2=true;
        }
    }

    //rule 10
    if(isset($_GET['tenggorokan'],$_GET['demam'],$_GET['kepala'],$_GET['cium'],$_GET['perut'],$_GET['diare'])){
        $kondisi1=$_GET['tenggorokan'];
        $kondisi2=$_GET['demam'];
        $kondisi3=$_GET['kepala'];
        $kondisi4=$_GET['cium'];
        $kondisi5=$_GET['perut'];
        $kondisi6=$_GET['diare'];
        if($kondisi1 =="ya" && $kondisi2 =="ya"&&$kondisi3 =="ya"&&$kondisi4 =="ya"&&$kondisi5 =="ya"&&$kondisi6 =="ya"){
            $varian = mysqli_query($mysqli, "SELECT nama_varian FROM varian WHERE kode_varian=3");
            $varian1 =mysqli_fetch_array($varian);
            $covid =$varian1['nama_varian'];
            echo "<br>";
            echo $covid;
            echo "<br>";
            $varian_3=true;
        }
    }

    //rule 11
    if(isset($_GET['tenggorokan'],$_GET['demam'],$_GET['batuk'],$_GET['kepala'],$_GET['pendengaran'],$_GET['perut'],$_GET['sendi'],$_GET['makan'])){
        $kondisi1=$_GET['tenggorokan'];
        $kondisi2=$_GET['demam'];
        $kondisi3=$_GET['kepala'];
        $kondisi4=$_GET['pendengaran'];
        $kondisi5=$_GET['perut'];
        $kondisi6=$_GET['sendi'];
        $kondisi7=$_GET['batuk'];
        $kondisi8=$_GET['makan'];
        if($kondisi1 =="ya" && $kondisi2 =="ya"&&$kondisi3 =="ya"&&$kondisi4 =="ya"&&$kondisi5 =="ya"&&$kondisi6 =="ya"&&$kondisi7 =="ya"&&$kondisi8 =="ya"&&$mual_mual&&$flu_parah){
            $varian = mysqli_query($mysqli, "SELECT nama_varian FROM varian WHERE kode_varian=4");
            $varian1 =mysqli_fetch_array($varian);
            $covid =$varian1['nama_varian'];
            echo "<br>";
            echo $covid;
            echo "<br>";
            $varian_4=true;
        }
    }
echo "</div>";
echo "<div class='tipe'>";
echo "<h1>KEMUNGKINAN TIPE:</h1>";
    //rule 12
    if(isset($_GET['tenggorokan'],$_GET['demam'],$_GET['kepala'],$_GET['cium'],$_GET['otot'],$_GET['batuk'])){
        $kondisi1=$_GET['tenggorokan'];
        $kondisi2=$_GET['demam'];
        $kondisi3=$_GET['kepala'];
        $kondisi4=$_GET['cium'];
        $kondisi5=$_GET['otot'];
        $kondisi6=$_GET['batuk'];
        if($kondisi1 =="ya" && $kondisi2 =="tidak"&&$kondisi3 =="ya"&&$kondisi4 =="ya"&&$kondisi5 =="ya"&&$kondisi6 =="ya"){
            $tipe = mysqli_query($mysqli, "SELECT nama_tipe FROM tipe WHERE kode_tipe=1");
            $tipe1 =mysqli_fetch_array($tipe);
            $tipecovid =$tipe1['nama_tipe'];
            echo "<br>";
            echo $tipecovid;
            echo "<br>";
            $tipe_1=true;
        }
    }

        //rule 13
        if(isset($_GET['tenggorokan'],$_GET['demam'],$_GET['kepala'],$_GET['cium'],$_GET['makan'],$_GET['batuk'])){
            $kondisi1=$_GET['tenggorokan'];
            $kondisi2=$_GET['demam'];
            $kondisi3=$_GET['kepala'];
            $kondisi4=$_GET['cium'];
            $kondisi5=$_GET['makan'];
            $kondisi6=$_GET['batuk'];
            if($kondisi1 =="ya" && $kondisi2 =="ya"&&$kondisi3 =="ya"&&$kondisi4 =="ya"&&$kondisi5 =="ya"&&$kondisi6 =="ya"){
                $tipe = mysqli_query($mysqli, "SELECT nama_tipe FROM tipe WHERE kode_tipe=2");
                $tipe1 =mysqli_fetch_array($tipe);
                $tipecovid =$tipe1['nama_tipe'];
                echo "<br>";
                echo $tipecovid;
                echo "<br>";
                $tipe_2=true;
            }
        }
    //rule 14
    if(isset($_GET['tenggorokan'],$_GET['demam'],$_GET['kepala'],$_GET['cium'],$_GET['makan'],$_GET['diare'],$_GET['batuk'])){
        $kondisi1=$_GET['tenggorokan'];
        $kondisi2=$_GET['demam'];
        $kondisi3=$_GET['kepala'];
        $kondisi4=$_GET['cium'];
        $kondisi5=$_GET['makan'];
        $kondisi6=$_GET['diare'];
        $kondisi7=$_GET['batuk'];
        if($kondisi1 =="ya" && $kondisi2 =="ya"&&$kondisi3 =="ya"&&$kondisi4 =="ya"&&$kondisi5 =="ya"&&$kondisi6 =="ya"&&$kondisi7 =="tidak"){
            $tipe = mysqli_query($mysqli, "SELECT nama_tipe FROM tipe WHERE kode_tipe=3");
            $tipe1 =mysqli_fetch_array($tipe);
            $tipecovid =$tipe1['nama_tipe'];
            echo "<br>";
            echo $tipecovid;
            echo "<br>";
            $tipe_3=true;
        }
    }
//rule 15

if(isset($_GET['lelah'],$_GET['demam'],$_GET['kepala'],$_GET['cium'],$_GET['batuk'])){
    $kondisi1=$_GET['lelah'];
    $kondisi2=$_GET['demam'];
    $kondisi3=$_GET['kepala'];
    $kondisi4=$_GET['cium'];
    $kondisi5=$_GET['batuk'];
    if($kondisi1 =="ya" && $kondisi2 =="ya"&&$kondisi3 =="ya"&&$kondisi4 =="ya"&&$kondisi5 =="ya"){
        $tipe = mysqli_query($mysqli, "SELECT nama_tipe FROM tipe WHERE kode_tipe=4");
        $tipe1 =mysqli_fetch_array($tipe);
        $tipecovid =$tipe1['nama_tipe'];
        echo "<br>";
        echo $tipecovid;
        echo "<br>";
        $tipe_4=true;
    }
}

//rule 16

if(isset($_GET['kepala'],$_GET['cium'],$_GET['makan'],$_GET['batuk'],$_GET['demam'],$_GET['tenggorokan'],$_GET['lelah'],$_GET['otot'])){
    $kondisi1=$_GET['kepala'];
    $kondisi2=$_GET['cium'];
    $kondisi3=$_GET['makan'];
    $kondisi4=$_GET['batuk'];
    $kondisi5=$_GET['demam'];
    $kondisi6=$_GET['tenggorokan'];
    $kondisi7=$_GET['lelah'];
    $kondisi9=$_GET['otot'];
    if($kondisi1 =="ya" && $kondisi2 =="ya"&&$kondisi3 =="ya"&&$kondisi4 =="ya"&&$kondisi5 =="ya"&&$kondisi6 =="ya"&&$kondisi7 =="ya"&&$brain_fog&&$kondisi9 =="ya"){
        $tipe = mysqli_query($mysqli, "SELECT nama_tipe FROM tipe WHERE kode_tipe=5");
        $tipe1 =mysqli_fetch_array($tipe);
        $tipecovid =$tipe1['nama_tipe'];
        echo "<br>";
        echo $tipecovid;
        echo "<br>";
        $tipe_5=true;
    }
}

//rule 17

        if(isset($_GET['kepala'],$_GET['cium'],$_GET['makan'],$_GET['batuk'],$_GET['demam'],$_GET['tenggorokan'],$_GET['lelah'],$_GET['otot'],$_GET['diare'])){
            $kondisi1=$_GET['kepala'];
            $kondisi2=$_GET['cium'];
            $kondisi3=$_GET['makan'];
            $kondisi4=$_GET['batuk'];
            $kondisi5=$_GET['demam'];
            $kondisi6=$_GET['tenggorokan'];
            $kondisi7=$_GET['lelah'];
            $kondisi9=$_GET['otot'];
            $kondisi11=$_GET['diare'];
            if($kondisi1 =="ya" && $kondisi2 =="ya"&&$kondisi3 =="ya"&&$kondisi4 =="ya"&&$kondisi5 =="ya"&&$kondisi6 =="ya"&&$kondisi7 =="ya"&&$brain_fog&&$kondisi9 =="ya"&&$saturasi_oksigen&&$kondisi11 =="ya"){
                $tipe = mysqli_query($mysqli, "SELECT nama_tipe FROM tipe WHERE kode_tipe=6");
                $tipe1 =mysqli_fetch_array($tipe);
                $tipecovid =$tipe1['nama_tipe'];
                echo "<br>";
                echo $tipecovid;
                echo "<br>";
                $tipe_6=true;
            }
        }

//rule 18
echo "</div>";
echo "<div class='tindakan'>";
echo "<h1> Saran Tindakan </h1>";

if(($varian_3||$varian_4) &&($tipe_5||$tipe_6)){
    $tindakan = mysqli_query($mysqli, "SELECT * FROM tindakan WHERE kode_tindakan=3");
                $temp =mysqli_fetch_array($tindakan);
                $act =$temp['prioritas'];
                $act2 =$temp['tindakan'];
                
echo "<table border=1>";
    echo "<tr>";
    echo "<td>Prioritas</td>";
    echo "<td>Tindakan</td>";
    echo "</tr>";

    echo "<tr>";
        echo "<td>";
        echo $act;
        echo "</td>";
        echo "<td>";
        echo $act2;
        echo "</td>";
    echo "</tr>";
echo "</table>";
$priority_3=true;
}

//rule 19
if(($varian_3||$varian_4) &&($tipe_3||$tipe_4)&&$priority_3==false){
    $tindakan = mysqli_query($mysqli, "SELECT * FROM tindakan WHERE kode_tindakan=3");
                $temp =mysqli_fetch_array($tindakan);
                $act =$temp['prioritas'];
                $act2 =$temp['tindakan'];
                
echo "<table border=1>";
    echo "<tr>";
    echo "<td>Prioritas</td>";
    echo "<td>Tindakan</td>";
    echo "</tr>";

    echo "<tr>";
        echo "<td>";
        echo $act;
        echo "</td>";
        echo "<td>";
        echo $act2;
        echo "</td>";
    echo "</tr>";
echo "</table>";
$priority_3=true;
}



//rule 20
if(($varian_1||$varian_2)&&($tipe_4||$tipe_5||$tipe_6) && $priority_3==false){
    $tindakan = mysqli_query($mysqli, "SELECT * FROM tindakan WHERE kode_tindakan=2");
                $temp =mysqli_fetch_array($tindakan);
                $act =$temp['prioritas'];
                $act2 =$temp['tindakan'];
                
echo "<table border=1>";
    echo "<tr>";
    echo "<td>Prioritas</td>";
    echo "<td>Tindakan</td>";
    echo "</tr>";

    echo "<tr>";
        echo "<td>";
        echo $act;
        echo "</td>";
        echo "<td>";
        echo $act2;
        echo "</td>";
    echo "</tr>";
echo "</table>";
$priority_2=true;
}

//rule 21
if(($varian_1||$varian_2) &&($tipe_3||$tipe_1||$tipe_2)&&$priority_3=false&&$priority_2==false){
    $tindakan = mysqli_query($mysqli, "SELECT * FROM tindakan WHERE kode_tindakan=1");
                $temp =mysqli_fetch_array($tindakan);
                $act =$temp['prioritas'];
                $act2 =$temp['tindakan'];
                
echo "<table border=1>";
    echo "<tr>";
    echo "<td>Prioritas</td>";
    echo "<td>Tindakan</td>";
    echo "</tr>";

    echo "<tr>";
        echo "<td>";
        echo $act;
        echo "</td>";
        echo "<td>";
        echo $act2;
        echo "</td>";
    echo "</tr>";
echo "</table>";

}

//rule 22
$unknown=$tipe_1+$tipe_2+$tipe_3+$tipe_4+$tipe_5+$tipe_6+$varian_1+$varian_2+$varian_3+$varian_4;
$unknown2=$varian_1+$varian_2+$varian_3+$varian_4;
if($unknown==0||$unknown2==0){
    $tindakan = mysqli_query($mysqli, "SELECT * FROM tindakan WHERE kode_tindakan=4");
                $temp =mysqli_fetch_array($tindakan);
                $act =$temp['prioritas'];
                $act2 =$temp['tindakan'];
                
echo "<table border=1>";
    echo "<tr>";
    echo "<td>Prioritas</td>";
    echo "<td>Tindakan</td>";
    echo "</tr>";

    echo "<tr>";
        echo "<td>";
        echo $act;
        echo "</td>";
        echo "<td>";
        echo $act2;
        echo "</td>";
    echo "</tr>";
echo "</table>";

}

//rule23
$positif2=$varian_3+$varian_4;
$positif=$varian_1+$varian_2;
$tinggi=false;
$prioritas=$priority_3+$priority_2+$priority_1;
if($positif2>0&&$prioritas==0){
    $tindakan = mysqli_query($mysqli, "SELECT * FROM tindakan WHERE kode_tindakan=3");
                $temp =mysqli_fetch_array($tindakan);
                $act =$temp['prioritas'];
                $act2 =$temp['tindakan'];
                
echo "<table border=1>";
    echo "<tr>";
    echo "<td>Prioritas</td>";
    echo "<td>Tindakan</td>";
    echo "</tr>";

    echo "<tr>";
        echo "<td>";
        echo $act;
        echo "</td>";
        echo "<td>";
        echo $act2;
        echo "</td>";
    echo "</tr>";
echo "</table>";
$tinggi=true;
}


//rule 24

if($positif>0 && $tinggi==false&&$prioritas==0){
    $tindakan = mysqli_query($mysqli, "SELECT * FROM tindakan WHERE kode_tindakan=1");
                $temp =mysqli_fetch_array($tindakan);
                $act =$temp['prioritas'];
                $act2 =$temp['tindakan'];
                
echo "<table border=1>";
    echo "<tr>";
    echo "<td>Prioritas</td>";
    echo "<td>Tindakan</td>";
    echo "</tr>";

    echo "<tr>";
        echo "<td>";
        echo $act;
        echo "</td>";
        echo "<td>";
        echo $act2;
        echo "</td>";
    echo "</tr>";
echo "</table>";

}

echo "</div>";
}
echo "</div>";
?>
