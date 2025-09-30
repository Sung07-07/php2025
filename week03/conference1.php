<?php include("header.php"); ?>

<h2>報名結果</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $identity = $_POST["identity"];
    $sessions = $_POST["session"] ?? []; 

    $fee = 0;
 if ($identity == "teacher" || $identity == "student") {
        foreach ($sessions as $s) {
            if ($s == "morning") {
                $fee += 150; 
            } elseif ($s == "afternoon") {
                $fee += 100; 
            } elseif ($s == "dinner") {
                $fee += 50; 
            }
        }
    }

    echo "<div class='alert alert-info mt-4'>";
    echo "姓名：$name<br>";
    echo "身份：" . ($identity == "teacher" ? "老師" : "學生") . "<br>";
    echo "應繳費用：$fee 元";
    echo "</div>";
}
?>

<?php include("footer.php"); ?>
