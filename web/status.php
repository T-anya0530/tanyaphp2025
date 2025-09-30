<?php include('headeer.php'); ?>
<div class="container my-5">
    <form method="post" action="status_process.php">
	<div class="row mb-4">
        <label for="name">姓名：</label>
        <input type="text" id="name" name="name" size="10" placeholder="請輸入姓名" 
        maxlength="10" required /><br/>
        <label class="form-label">身份:</label><br/>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="identity" id="faculty" value="teacher" checked />
        <label class="form-check-label" for="faculty">教職員</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="identity" id="student" value="student" />
        <label class="form-check-label" for="student">學生</label>
      </div>
    <div class="form-check form-check-inline"> 
      <input class="form-check-input" type="checkbox" name="dinner" id="dinner" value="dinner" />
        <label class="form-check-label" for="dinner">是否需要晚餐</label>
</div>
      <div align="center">
            <input type="submit" value="提交" />
      </div>
</form>
<?php include('footer.php'); ?>