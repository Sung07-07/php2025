<?php
include("header.php");
require_once 'testdb.php'; // 連接資料庫
?>

<div class="container my-5 position-relative">
  
  <a href="activity_insert.php" 
     class="btn btn-primary position-absolute rounded-circle shadow" 
     style="top: -1rem; right: 1rem; width: 3rem; height: 3rem; font-size: 1.5rem; display: flex; align-items: center; justify-content: center; z-index: 1050;">
     +
  </a>


    <div class="row mb-4">
        
        <?php
        // 從 event 表抓資料
        $sql = "SELECT * FROM event";
        $result = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_assoc($result)) { ?>
            <div class="col-md-6 mb-4">
                <div class="card h-100 bg-white text-dark">
                    <div class="card-body d-flex flex-column">
                        <h3 class="card-title"><?= ($row['name']) ?></h3>
                        <p class="card-text"><?= (($row['id'])) ?></p>
                        <p class="card-text"><?= (($row['description'])) ?></p>
                        <a href="activity_delete.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm mt-3">刪除</a>
                        <a href="activity_update.php?id=<?=$row["id"]?>" class="btn btn-primary">修改</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?php
mysqli_close($conn); // 關閉資料庫
include("footer.php");
?>