<?php include('header.php'); ?>
<div class = "container">
    <form action="status1.php" method="POST">
    <div class = "row mb-4">
            <input type="hidden" name="name" value="<?=$_SESSION['name']?>">
            <input type="hidden" name="role" value="<?=$_SESSION['role']?>">
           <div class="form-check form-check-inline">
             <div class="form-check">
             <div class="form-check">
            <input class="form-check-input" type="radio" name="dinner" value="dinner" id="dinner_yes">
            <label class="form-check-label" for="dinner_yes">要晚餐</label>
           </div>

          <div class="form-check">
            <input class="form-check-input" type="radio" name="dinner" value="no" id="dinner_no">
            <label class="form-check-label" for="dinner_no">不要晚餐</label>
           </div>
            </div>

           <div align="center">
           <input type="submit" value="提交" />
           </div>
    </form>
</div>
      <?php include('footer.php'); ?>