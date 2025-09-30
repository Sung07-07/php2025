<?php include('header.php'); ?>
<?php
// 初始化總價
$totalPrice = 0;
$dinner = "";

// 檢查表單資料是否已提交
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
if (isset($_POST["dinner"]) && $_POST["dinner"]=="dinner") {
    $totalPrice += 60;
    } 

}
?>
<?=$name?><?=$name?>
<?=$dinner?><?=$totalPrice?>
<?php include("footer.php"); ?>