<div class="d-flex justify-content-between align-items-center mt-3">
    <h2>Manage User</h2>
    <a href="index.php?page_layout=user&action=add">
        <button type="button" class="btn btn-primary">Add User</button>
    </a>
</div>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">User Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
                <!-- <th scope="col">Address</th> -->
                <th scope="col" style="text-align: end;">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM user";
            $res =  mysqli_query($conn, $sql) or die(mysqli_error($mysqli_query($conn, $sql)));
            if ($res) {
                $count = mysqli_num_rows($res);
                while ($row = mysqli_fetch_assoc($res)) {
                    $id = $row['id_user'];
                    $userName = $row['user_name'];
                    $phone = $row['phone'];
                    $address = $row['address'];
            ?>
                    <tr>
                        <td style="line-height: 38px;"><?php echo $id ?></td>
                        <td style="line-height: 38px;"><?php echo $userName ?></td>
                        <td style="line-height: 38px;"><?php echo $phone ?></td>
                        <td style="line-height: 38px;"><?php echo $address ?></td>
                        <td style="text-align: end;">                           
                            <a href="index.php?page_layout=user&action=update&id=<?php echo $id ?>">
                            <button type="button" class="btn btn-secondary">Update</button>
                            </a>
                            <a href="index.php?page_layout=user&action=delete&id=<?php echo $id ?>">
                                <button type="button" class="btn btn-danger">Delete</button>
                            </a>
                        </td>
                    </tr>
            <?php
                }
            } else {
                echo "not have data";
            }
            ?>
        </tbody>
    </table>
</div>

<?php
if (isset($_SESSION["actionAlert"]) && isset($_SESSION["actionType"])) {
    echo alertAction($_SESSION["actionAlert"], $_SESSION["actionType"]);
    unset($_SESSION["actionAlert"]);    
    unset($_SESSION["actionType"]);
}
?>