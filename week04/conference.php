<?php include('header.php'); ?>
<div class = "container">
    <div class = "row mb-4">
        <form action="conference1.php" method="POST">
            <input type="hidden" name="name" value="<?=$_SESSION['name']?>">
            <input type="hidden" name="role" value="<?=$_SESSION['role']?>">

           <div class="form-check form-check-inline">
             <input class="form-check-input" type="checkbox" name="session[]" value="morning" id="morning" />
             <label class="form-check-label" for="morning">上午場(150)</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" name="session[]" value="afternoon" id="afternoon" />
             <label class="form-check-label" for="afternoon">下午場(100)</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" name="session[]" value="dinner" id="dinner" />
             <label class="form-check-label" for="dinner">晚餐(60)</label>
            </div>

        <div align="center">
           <input type="submit" value="提交" />
        </form>
        </div>
      <?php include('footer.php'); ?>