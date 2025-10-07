<?php include('header.php'); ?>
<?php
// 初始化總價


// 檢查表單資料是否已提交
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $identity = $_POST["role"];
    $dinner = $_POST["dinner"]??null;

    $totalPrice = 0;

if  ( $identity == "student") { 
    if($dinner ==="dinner")
        $totalPrice += 60;
    } 
    
    echo "<div class='alert alert-info mt-4'>";
    echo "姓名：" . htmlspecialchars($name). "<br>";
    echo "應繳費用：$totalPrice 元";
    echo "</div>";

}
?>
<?php include("footer.php"); ?>