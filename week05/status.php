<?php include('headeer.php'); ?>

<div class="container my-5">
    <form method="post" action="status_process.php">
        <div class="row mb-4">
            <input type="hidden" name="name" value="<?= $_SESSION['name'] ?>">
            <input type="hidden" name="role" value="<?= $_SESSION['role'] ?>">

          
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="dinner" id="dinner_yes" value="dinner" />
                <label class="form-check-label" for="dinner_yes">需要晚餐</label>
            </div>

         
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="dinner" id="dinner_no" value="no_dinner" />
                <label class="form-check-label" for="dinner_no">不需要晚餐</label>
            </div>
        </div>

       
        <div align="center">
            <input type="submit" value="提交" class="btn btn-primary" />
        </div>
    </form>
</div>

<?php include('footer.php'); ?>