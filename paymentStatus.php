<?php
    include('./homepageNavig.php');
?>
<div class="container-fluid bg-dark">
    <div class="row">
        <img src="./image/php.png" alt="courses" style="height:500px; width:100%; object-fit:cover; box-shadow:10px;" />
    </div>
</div>

<div class="container">
    <h2 class="text-center my-4">Payment Status</h2>
    <form method="post" action="" class="d-flex justify-content-center">
        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Order ID: </label>
            <div class="col-sm-6">
                <input type="text" class="form-control">
            </div>
            <div class="col-sm-3">
                <button type="submit" class="btn btn-primary">View</button>
            </div>
        </div>
    </form>
</div>
<br/>

<?php
    include('./contactUs.php');
?>
<br/>

<?php
    include('./homepageFooter.php');
?>