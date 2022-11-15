<?php
    function change_profile_image($row, $file_temp, $file_extn) {
        $file_path = 'C:\Users\ADMIN\OneDrive\Máy tính\PHP\Project\mercedez\image' . substr(md5(time()), 0, 10) . '.' . $file_extn;
        move_uploaded_file($file_temp, $file_path);
        }
        change_profile_image($row, $file_temp, $file_extn);
?>
<div class="d-flex justify-content-between align-items-center mt-3">
    <h2>Add Product</h2>
    <a href="index.php?page_layout=product">
        <button type="button" class="btn btn-primary">Back</button>
    </a>
</div>
<form action="<?php echo SITEURL . "admin/index.php?page_layout=product&action=add" ?>" method="post" style="width: 80%;" enctype="multipart/form-data">
    <div class="mb-3 row">
        <label for="nameProduct" class="col-sm-2 col-form-label">Name Product *</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nameProduct" name="nameProduct" placeholder="name product">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="price" class="col-sm-2 col-form-label">Price *</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="price" name="price" placeholder="price">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="color" class="col-sm-2 col-form-label">Color *</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="color" name="color">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="image" class="col-sm-2 col-form-label">Image *</label>
        <div class="col-sm-10">
            <input type="file" class="form-control" id="image" name="image">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="long_product" class="col-sm-2 col-form-label">Long product</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="long_product" name="long_product">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="width_product" class="col-sm-2 col-form-label">Width product</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="width_product" name="width_product">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="height" class="col-sm-2 col-form-label">height product</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="height" name="height">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="weight" class="col-sm-2 col-form-label">weight product</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="weight" name="weight">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="engine" class="col-sm-2 col-form-label">engine</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="engine" name="engine">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="cubic" class="col-sm-2 col-form-label">cubic</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="cubic" name="cubic">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="max_power" class="col-sm-2 col-form-label">Max power</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="max_power" name="max_power">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="max_torque" class="col-sm-2 col-form-label">Max torque</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="max_torque" name="max_torque">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="gear" class="col-sm-2 col-form-label">Gear</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="gear" name="gear">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="wheel_drive" class="col-sm-2 col-form-label">Wheel drive</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="wheel_drive" name="wheel_drive">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="speed_up" class="col-sm-2 col-form-label">Speed up</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="speed_up" name="speed_up">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="max_speed" class="col-sm-2 col-form-label">Max speed</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="max_speed" name="max_speed">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="fuel_type" class="col-sm-2 col-form-label">Fuel type</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="fuel_type" name="fuel_type">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="fuel_consum_normal" class="col-sm-2 col-form-label">Fuel consum normal</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="fuel_consum_normal" name="fuel_consum_normal">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="fuel_consum_city" class="col-sm-2 col-form-label">Fuel consum city</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="fuel_consum_city" name="fuel_consum_city">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="fuel_consum_country_side" class="col-sm-2 col-form-label">Fuel consum country side</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="fuel_consum_country_side" name="fuel_consum_country_side">
        </div>
    </div>
    <button type="submit" name="addProduct" class="btn btn-primary">Submit Product</button>
</form>
<?php
if (isset($_SESSION["actionAlert"]) && isset($_SESSION["actionType"])) {
    echo alertAction($_SESSION["actionAlert"], $_SESSION["actionType"]);
    unset($_SESSION["actionAlert"]);
    unset($_SESSION["actionType"]);
}
?>