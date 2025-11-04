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

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  require_once 'testdb.php';

  $postid = $_POST["postid"];
  $company = $_POST["company"];
  $content = $_POST["content"];

  // ✅ 實際更新資料
  $sql = "UPDATE job SET company=?, content=?, pdate=NOW() WHERE postid=?";
  $stmt = mysqli_stmt_init($conn);
  mysqli_stmt_prepare($stmt, $sql);
  mysqli_stmt_bind_param($stmt, "ssi", $company, $content, $postid);
  mysqli_stmt_execute($stmt);
  mysqli_close($conn);

  // ✅ 更新後導回列表
  header("Location: job.php");
  exit;
}

try {
  $postid = "";
  $company = "";
  $content = "";
  $pdate = "";
  if ($_GET) {
    require_once 'testdb.php';
    $action = $_GET["action"]??"";
    if ($action=="confirmed"){
      //delete data
      $postid = $_GET["postid"];
      $sql="delete from job where postid=?";
      $stmt = mysqli_stmt_init($conn);
      mysqli_stmt_prepare($stmt, $sql);
      mysqli_stmt_bind_param($stmt, "i", $postid);
      $result = mysqli_stmt_execute($stmt);
      mysqli_close($conn);
      header('location:job.php');
    }
    else{
      //show data
      $postid = $_GET["postid"];
      $sql="select postid, company, content, pdate from job where postid=?";    
      // $result = mysqli_query($conn, $sql);
      $stmt = mysqli_stmt_init($conn);
      mysqli_stmt_prepare($stmt, $sql);
      mysqli_stmt_bind_param($stmt, "i", $postid);
      $res = mysqli_stmt_execute($stmt);
      if ($res){
        mysqli_stmt_bind_result($stmt, $postid, $company, $content, $pdate);
        mysqli_stmt_fetch($stmt);
      }
    }//confirmed else
    mysqli_close($conn);
  }//$_GET
} catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}
?>
<div class="container">
  <form action="job_update.php" method="post">
    <input type="hidden" name="postid" value="<?=$postid?>">
  <div class="mb-3 row">
    <label for="_company" class="col-sm-2 col-form-label">求才廠商</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="company" id="_company" 
        placeholder="公司名稱" value="<?=$company?>" required>
    </div>
  </div>
  <div class="mb-3">
    <label for="_content" class="form-label">求才內容</label>
    <textarea class="form-control" id="_content" name="content" 
      rows="10" required><?=$content?></textarea>
  </div>
  <input class="btn btn-primary" type="submit" value="送出">
  </form>
</div>
<?php
require_once "footer.php";
?>