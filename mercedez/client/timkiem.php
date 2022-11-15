
<?php
    if(isset($_GET['search'])){
        $key = $_GET['search'];
        $sql = "SELECT * FROM product WHERE name_product like '%$key%' OR price like '%$key%' ";
    }
    $result = mysqli_query($conn, $sql);
?>
<form action="" method="get">
    <input type="text" name = "search" placeholder="Nhập xe cần tìm" value ="<?php if(isset($_GET['search'])){echo $_GET['search'];}?>">
    <input type="submit" value="tìm">
</form>