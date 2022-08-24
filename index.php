<?php
session_start();

if (isset($_SESSION['name'])) {
    $name = $_SESSION['name'];
    $nis = $_SESSION['nis'];
    $rayon = $_SESSION['rayon'];
} else {
    $name = [];
    $nis = [];
    $rayon = [];
}


if (isset($_POST['name'])) {
    $name[] = $_POST["name"];
    $nis[] = $_POST["nis"];
    $rayon[] = $_POST['rayon'];
}


$_SESSION["name"] = $name;
$_SESSION["nis"] = $nis;
$_SESSION["rayon"] = $rayon;
?>

<form method="post" action="">
    Name : <input type="text" name="name"><br>
    Nis : <input type="text" name="nis"><br>
    Rayon : <input type="text" name="rayon"><br><br>
    <input type="submit" value="Submit">
    <br>

    <?php
    $num = 0;
    foreach ($name as $key => $value) {
        $num++;
        echo "<br>$num. <br> Nama: $name[$key]<br> Nis: $nis[$key]<br> Rayon : $rayon[$key]";
    }
    ?>
    <br>

    <button><a href="destroy.php">clear</a></button>

</form>