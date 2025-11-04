
<?php
require_once "header.php";
try {
  require_once 'testdb.php';
  $sql="select * from job order by pdate desc";
  $result = mysqli_query($conn, $sql);
?>
<div class="container position-relative">
<a href="job_insert.php" class="btn btn-primary position-absolute" style="top: 1rem; right: 1rem;">+</a>
<div class="container mt-4">
<table class="table table-bordered table-striped">
 <tr>
  <td>編號</td>
  <td>求才廠商</td>
  <td>求才內容</td>
  <td>刊登日期</td>
  <td></td>
 </tr>
 <?php
 while($row = mysqli_fetch_assoc($result)) {?>
 <tr>
  <td><?=$row["postid"]?></td>
  <td><?=$row["company"]?></td>
  <td><?=$row["content"]?></td>
  <td><?=$row["pdate"]?></td>
  <td>
    <a href="job_update.php?postid=<?=$row["postid"]?>" class="btn btn-primary">修改</a>
    <a href="job_delete.php?postid=<?=$row["postid"]?>" class="btn btn-danger">刪除</a>
  </td>
 </tr>
 <?php
  }
 ?>
</table>
</div>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  
    <!-- https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/js/bootstrap.bundle.min.js -->
    <script src= "https://cdn.datatables.net/2.3.0/js/dataTables.js"></script>
    <script src= "https://cdn.datatables.net/2.3.0/js/dataTables.bootstrap5.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <script>
      $(document).ready( function () {
        $('#product_table').DataTable(); 
      } );
    </script>

<?php
  mysqli_close($conn);
}
//catch exception
catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}
require_once "footer.php";
?>
