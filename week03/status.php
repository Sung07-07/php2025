<?php include('header.php'); ?>
<div class = "container">
    <form action="status1.php" method="POST">
    <div class = "row mb-4">
            <label for="name">名字：</label>
              <input type="text" id="name" name="name" size="10" placeholder="請輸入姓名" /><br/>
              <label class="form-label">身份:</label><br/>
             <div class="form-check form-check-inline">
             <input class="form-check-input" type="radio" name="status" id="faculty" value="faculty" checked />
             <label class="form-check-label" for="faculty">教職員</label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="status" id="student" value="student" />
            <label class="form-check-label" for="student">學生</label><br/>
           </div>

           <div class="form-check form-check-inline">
             <input class="form-check-input" type="checkbox" name="dinner" value="dinner" id="dinner" />
             <label class="form-check-label" for="dinner">需要訂晚餐嗎</label>
            </div>

           <div align="center">
           <input type="submit" value="提交" />
           </div>
    </form>
</div>
