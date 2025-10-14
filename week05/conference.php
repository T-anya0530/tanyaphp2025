<?php include('headeer.php'); ?>
<form method="post" action="conference_process.php">
<div class="container my-5">
	<div class="row mb-4">
              
  <input type="hidden" name="name" value="<?= $_SESSION['name'] ?>">
  
  <input type="hidden" name="role" value="<?= $_SESSION['role'] ?>">

        <div class="form-check form-check-inline"> 
            <input class="form-check-input" type="checkbox" name="session[]" id="mo" value="morning" />
            <label class="form-check-label" for="mo">上午場(150)</label>
        </div>

        <div class="form-check form-check-inline"> 
            <input class="form-check-input" type="checkbox" name="session[]" id="af" value="afternoon" />
            <label class="form-check-label" for="af">下午場(100)</label>
        </div>

        <div class="form-check form-check-inline"> 
            <input class="form-check-input" type="checkbox" name="session[]" id="aff" value="lunch" />
            <label class="form-check-label" for="aff">午餐(60)</label>
        </div>
    </div>

    <div align="center">
        <input type="submit" value="提交" />
    </div>
</form>
<?php include('footer.php'); ?>