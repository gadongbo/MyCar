<div class="d-flex justify-content-between align-items-center mt-3">
    <h2>Manage Products</h2>
    <a href="index.php?page_layout=product&action=add">
        <button type="button" class="btn btn-primary">Add Product</button>
    </a>
</div>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Color</th>
                <th scope="col">Image</th>
                <th scope="col" style="text-align: end;">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM product";
            $res =  mysqli_query($conn, $sql) or die(mysqli_error($mysqli_query($conn, $sql)));
            if ($res) {
                $count = mysqli_num_rows($res);
                while ($row = mysqli_fetch_assoc($res)) {
                    $id = $row['id_product'];
                    $nameProduct = $row['name_product'];
                    $price = $row['price'];
                    $color = $row['color'];
                    $image = $row['image'];
            ?>
                    <tr>
                        <td style="line-height: 38px;">
                            <?php echo $id ?>
                        </td>
                        <td style="line-height: 38px;"><?php echo $nameProduct ?></td>
                        <td style="line-height: 38px;"><?php echo $price ?></td>
                        <td style="line-height: 38px;"><?php echo $color ?></td>
                        <td style="line-height: 38px;">
                            <img src="../image/product/<?php echo $image ?>" alt="<?php echo $nameProduct ?>" width="150px" class="image">
                        </td>
                        <td style="text-align: end;">
                            <a href="index.php?page_layout=product&action=details&id=<?php echo $id ?>">
                                <button type="button" class="btn btn-secondary" style="font-size: 13px;">Detail</button>
                            </a>
                            <a href="index.php?page_layout=product&action=update&id=<?php echo $id ?>">
                                <button type="button" class="btn btn-success" style="font-size: 13px;">Update</button>
                            </a>
                            <a href="index.php?page_layout=product&action=delete&id=<?php echo $id ?>" >
                                <button type="button" class="btn btn-danger" style="font-size: 13px;">Delete</button>
                            </a>
                            <!-- <a href="index.php?page_layout=admin&action=delete&id=<?php echo $id ?>">
                                <button type="button" class="btn btn-danger">Delete</button>
                            </a> -->
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