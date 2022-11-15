<?php
if (isset($_GET["action"]) && isset($_GET["id"])) {
    $idAdmin = $_GET["id"];
    $sql = "SELECT * FROM admin where id=$idAdmin";
    $res = mysqli_query($conn, $sql) or  die(mysqli_error($mysqli_query($conn, $sql)));

    if ($res) {
        $count = mysqli_num_rows($res);
        while ($row = mysqli_fetch_assoc($res)) {
?>
            <div class="d-flex justify-content-between align-items-center mt-3">
                <h2>Update Admin <?php echo $row["full_name"] ?></h2>
                <a href="index.php?page_layout=admin">
                    <button type="button" class="btn btn-primary">Back</button>
                </a>
            </div>
            <form action="<?php echo SITEURL . "admin/index.php?page_layout=admin&action=update&id=" . $idAdmin ?>" method="post" style="width: 80%;">
                <div class="mb-3 row">
                    <label for="fullName" class="col-sm-2 col-form-label">Full Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="fullName" name="fullName" placeholder="full name" value="<?php echo $row["full_name"] ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="userName" class="col-sm-2 col-form-label">User Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="userName" name="userName" placeholder="user name" value="<?php echo $row["user_name"] ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="password" name="password" value="<?php echo $row["password"] ?>">
                    </div>
                </div>

                <button type="submit" name="updateAdmin" class="btn btn-primary">Update Admin</button>
            </form>
<?php
        }
    }
}

?>