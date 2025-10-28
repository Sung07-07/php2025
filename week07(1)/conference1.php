<?php include("header.php"); ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sessions = $_POST["session"] ?? []; 
    $identity = $_POST["role"] ?? ""; 
    $name = $_POST["name"];
    $fee = 0;

   if ( $identity == "student"){
    foreach ($sessions as $s) {
        if ($s == "morning") {
            $fee += 150; 
        } elseif ($s == "afternoon") {
            $fee += 100; 
        } elseif ($s == "dinner") {
            $fee += 60; 
        }
        }
    }

    echo "<div class='alert alert-info mt-4'>";
    echo "姓名：" . htmlspecialchars($name). "<br>";
    echo "應繳費用：$fee 元";
    echo "</div>";
}
?>

<?php include("footer.php"); ?>
