<?php include('header.php'); ?>
<div class = "container">
    <div class = "row mb-4">
        <form action="conference1.php" method="POST">
            <label for="name">名字：</label>
              <input type="text" id="name" name="name" size="10" placeholder="請輸入姓名" /><br/>
              <label class="form-label">身份:</label><br/>
             <div class="form-check form-check-inline">
             <input class="form-check-input" type="radio" name="identity" id="faculty" value="teacher" checked />
             <label class="form-check-label" for="faculty">教職員</label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="identity" id="student" value="student" />
            <label class="form-check-label" for="student">學生</label><br/>
           </div>

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