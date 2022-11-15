<div class="d-flex justify-content-between align-items-center mt-3">
    <h2>Add Admin</h2>
    <a href="index.php?page_layout=admin">
        <button type="button" class="btn btn-primary">Back</button>
    </a>
</div>
<form action="<?php echo SITEURL . "admin/index.php?page_layout=admin&action=add" ?>" method="post" style="width: 80%;">
    <div class="mb-3 row">
        <label for="fullName" class="col-sm-2 col-form-label">Full Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="fullName" name="fullName" placeholder="full name">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="userName" class="col-sm-2 col-form-label">User Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="userName" name="userName" placeholder="user name">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="password" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="password" name="password">
        </div>
    </div>

    <button type="submit" name="addAdmin" class="btn btn-primary">Submit Admin</button>
</form>
