<?php
include('header.php');
require_once 'testdb.php';

if ($_SERVER["REQUEST_METHOD"]=="POST") {
  $account = $_POST["account"] ?? "";
  $password = $_POST["password"] ?? "";

  $account = mysqli_real_escape_string($conn, $account);
  $password = mysqli_real_escape_string($conn, $password);

  $sql = "SELECT * FROM user WHERE account = '$account' AND password = '$password'";
  $result = mysqli_query($conn, $sql);

  if($result && mysqli_num_rows($result)==1){
    $user = mysqli_fetch_assoc($result);
    $_SESSION["account"] = $user['account'];
    $_SESSION["name"] = $user["name"];
    $_SESSION["role"] = $user["role"];
    $_SESSION["loggedin"] =true;

  $redirect_url = $_SESSION["redirect_url"]??"index.php";
  unset ($_SESSION["redirect_url"]);
  header ("Location:$redirect_url"); 
  exit;
  }else {
  $error ="帳號或密碼錯誤";
  }
}
?>


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>登入</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-4">
      <div class="card shadow">
        <div class="card-body">
          <h4 class="card-title mb-4">登入</h4>
          <?php if (isset($error)):?>
            <div class="alert alert-danger text-center"><?=$error?></div>
          <?php endif?>
          <form method="post" action="login.php">
            <div class="mb-3">
              <label for="account" class="form-label">帳號</label>
              <input type="text" class="form-control" id="account" name="account" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">密碼</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">登入</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>