<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng Tính phí lăn bánh xe</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/philanbanh.css">

</head>

<body>
    <!-- wrap -->

    <?php include('./particals/navbar.php') ?>
    </div>

    <div class="title">
        <h4>Tính phí lăn bánh</h4>
    </div>
    <div class="muaoto-wrap">
        <div class="content-left">
            <table>
                <tbody>
                    <tr>
                        <td>
                            Dòng xe:
                        </td>
                        <td>
                            <select name="nhomxe">
                                <option value="">Vui lòng chọn</option>
                                <option value="">C Class</option>
                                <option value="">CLA</option>
                                <option value="">E Class</option>
                                <option value="">GLA</option>
                                <option value="">GLC</option>
                                <option value="">MayBach</option>
                                <option value="">S Class</option>
                            </select>

                        </td>
                        <td>
                            <select name="name">
                                <option>Chọn xe</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Chọn nơi:
                        </td>
                        <td>
                            <select name="city">
                                <option value="">Biển HCM</option>
                                <option value="">Biển Tỉnh</option>
                                <option value="">Huyện và thị trấn thuộc tỉnh</option>
                            </select>
                        </td>
                    </tr>

                </tbody>
                <tfoot>
                    <td></td>
                    <td><button class="btn btn-secondary" type="button">Dự toán chi phí</button></td>
                </tfoot>
            </table>
        </div>
        <div class="right">
            <p>Vui lòng chọn dòng xe và nơi đăng ký để dự toán chi phí.</p>
        </div>
    </div>
    <?php include('./particals/footer.php') ?>
    </div>
    <!-- /wrap -->
</body>

</html>