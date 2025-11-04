<?php
require_once "header.php";

//session_start();

// 檢查是否登入
if (!isset($_SESSION["role"])) {
  header("Location: login.php"); // 尚未登入時導向登入頁
  exit;
}

// 檢查是否為管理員
if ($_SESSION["role"] !== 'M') {
  echo "<div class='alert alert-danger text-center mt-4'>您沒有權限執行此操作。</div>";
  require_once "footer.php";
  exit;
}

//require_once "header.php";
try {
  require_once 'testdb.php';
  $msg="";
   if ($_POST) {
    // insert data
    $company = $_POST["company"];
    $content = $_POST["content"];
    $sql="insert into job (company, content, pdate) values (?, ?, now())";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $company, $content);
    $result = mysqli_stmt_execute($stmt);
    if ($result) {
      header('location:job.php');
    }
    else {
      $msg = "無法新增資料";
    }
  }
?>
<div class="container">
<form action="job_insert.php" method="post">
  <div class="mb-3 row">
    <label for="_company" class="col-sm-2 col-form-label">求才廠商</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="company" id="_company" placeholder="公司名稱" required>
    </div>
  </div>
  <div class="mb-3">
    <label for="_content" class="form-label">求才內容</label>
    <textarea class="form-control" name="content" id="_content" rows="10" required></textarea>
  </div>
  <input class="btn btn-primary" type="submit" value="送出">
  <?=$msg?>
</form>
</div>
<?php
  mysqli_close($conn);
}
//catch exception
catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}
require_once "footer.php";
?>


