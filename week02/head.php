<?php $current = basename($_SERVER['PHP_SELF']);
function nav_active($file) {
    global $current;
    return $current === $file ? ' active' : '';
}?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   </head>
   <body class="body">
     <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container-fluid"><!--填滿整行-->
        <a class="navbar-brand" href="#" style="font-size: 28px;">遊憩運動</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav nav-underline me-auto">
            <li class="nav-item">
                <!--首頁-->
              <a class="nav-link<?=nav_active('pe首頁.php')?>" href="pe首頁.php"  aria-current="page" style="font-size: 20px;">首頁</a>
            </li>
            
            <li class="nav-item">
                <!--體育宋怡瑩-->
              <a class="nav-link<?=nav_active('PhysicalEducation.php')?>" href="PhysicalEducation.php" style="font-size: 20px;">體育</a>
            </li>
            
            </li>
            <li class="nav-item">
                <!--運動管理黃亭恩-->
              <a class="nav-link<?=nav_active('manage.php')?>" href="manage.php" style="font-size: 20px;">運動管理</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <body>