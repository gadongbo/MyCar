<?php include('../config/constants.php') ?>
<?php include('./manage-admin/Controllers/index.php') ?>
<?php include('./manage-user/Controllers/index.php') ?>
<?php include('./manage-product/Controllers/index.php') ?>
<?php include('../config/tool.php') ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.84.0">
  <title>Dashboard Template · Bootstrap v5.0</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

  <!-- Bootstrap core CSS -->
  <!-- <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet"> -->

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
    .image{
      max-height: 100px;
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="../css/dashboard.css" rel="stylesheet">
</head>

<body>

  <!-- <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Company name</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <a class="nav-link px-3" href="#">Sign out</a>
      </div>
    </div>
  </header> -->

  <div class="container-fluid">
    <div class="row">
      <?php include('./particals/SideBar.php') ?>
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <!-- <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Dashboard</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
              <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
              <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
              <span data-feather="calendar"></span>
              This week
            </button>
          </div>
        </div> -->

        <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->

        <?php
        $pageLayout = $_GET['page_layout'];
        switch ($pageLayout) {
          case 'admin': {
              include('./manage-admin/index.php');
              break;
            }
          case 'user': {
              include('./manage-user/index.php');
              break;
            }
            case 'product': {
              include('./manage-product/index.php');
              break;
            }
          // default: {
          //     include('./manage-admin/index.php');
          //     break;
          //   }
        }
        ?>
      </main>
    </div>
  </div>


  <!-- <script src="../assets/dist/js/bootstrap.bundle.min.js"></script> -->

  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script> -->
  <script src="../js/dashboard.js"></script>
  <script src="../js/SideBar.js"></script>
  <script>
    const toast = document.getElementById('toast');
    if (toast) {
      setTimeout(() => {
        toast.classList.remove('show');
      }, 3000)
    }
  </script>
</body>

</html>