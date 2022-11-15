<?php
if (isset($_GET["action"]) && isset($_GET["id"])) {
    $idUser = $_GET["id"];
    $sql = "SELECT * FROM user where id_user=$idUser";
    $res = mysqli_query($conn, $sql) or  die(mysqli_error($mysqli_query($conn, $sql)));

    if ($res) {
        $count = mysqli_num_rows($res);
        while ($row = mysqli_fetch_assoc($res)) {
?>
            <div class="d-flex justify-content-between align-items-center mt-3">
                <h2>Update User <?php echo $row["user_name"] ?></h2>
                <a href="index.php?page_layout=user">
                    <button type="button" class="btn btn-primary">Back</button>
                </a>
            </div>
            <form action="<?php echo SITEURL . "admin/index.php?page_layout=user&action=update&id=" . $idUser ?>" method="post" style="width: 80%;">
                <div class="mb-3 row">
                    <label for="userName" class="col-sm-2 col-form-label">User Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="userName" name="userName" placeholder="user name" value="<?php echo $row["user_name"] ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="phone" value="<?php echo $row["phone"] ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="address" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="address" name="address" placeholder="address" value="<?php echo $row["address"] ?>">
                    </div>
                </div>



                <button type="submit" name="updateUser" class="btn btn-primary">Update User</button>
            </form>
<?php
        }
    }
}

?>