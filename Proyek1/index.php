<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Form Pasien BMI</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">SAS-STTNF</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                        <div class="sb-sidenav-menu-heading">Project</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="far fa-hand-point-right"></i></div>
                                Project 1
                            </a>
                        <div class="sb-sidenav-menu-heading">Praktikum</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Daftar Praktikum
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="Array_Siswa.php">Praktikum 1</a>
                                    <a class="nav-link" href="form_belanja.php">Praktikum 2</a>
                                    <a class="nav-link" href="main.php">Praktikum 3</a>
                                    <a class="nav-link" href="class_persegipanjang.php">Praktikum 4</a>
                                    <a class="nav-link" href="dispenser.php">Praktikum 5</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Yoga Bagas Budhiman
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
            <div class="col-md-5 mx-auto mt-5">
  <header class="text-center mb-3"><h2>Form Isian Indeks Masa Tubuh (BMI)</h2></header>
  <form action="result.php" method="POST">
  <table class="w-100">
    <tr>
      <td>
        <h5>Nama</h5>
      </td>
      <td>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="far fa-fw fa-address-book"></i></div>
          </div>
          <input type="text" required class="form-control" name="nama">
        </div>
      </td>
    </tr>
    <tr>
      <td>
        <h5>Berat Badan</h5>
      </td>
      <td>
        <div class="input-group">
          <input type="text" required class="form-control" name="berat">
          <div class="input-group-append">
            <span class="input-group-text">Kg</span>
          </div>
        </div>
      </td>
    </tr>
    <tr>
      <td>
        <h5>Tinggi Badan</h5>
      </td>
      <td>
        <div class="input-group">
          <input type="text" required class="form-control" name="tinggi">
          <div class="input-group-append">
            <span class="input-group-text">cm</span>
          </div>
        </div>
      </td>
    </tr>
    <tr>
      <td>
        <h5>Umur</h5>
      </td>
      <td>
        <div class="input-group">
          <input type="text" required class="form-control" name="umur">
          <div class="input-group-append">
            <span class="input-group-text">Thn</span>
          </div>
        </div>
      </td>
    </tr>
    <tr>
      <td>
        <h5>Jenis Kelamin</h5>
      </td>
      <td>
        <div class="input-group">
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="cowok" name="gender" class="custom-control-input" value="Laki-laki">
            <label class="custom-control-label" for="cowok">Laki-laki</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="cewek" name="gender" class="custom-control-input" value="Perempuan">
            <label class="custom-control-label" for="cewek">Perempuan</label>
          </div>
        </div>
      </td>
    </tr>
  </table>
  <div class="text-center mt-3">
    <button type="submit" class="btn btn-primary" name="send">Kirim</button>
  </div>
  </form>
  <div class="text-center mt-3">
    <a href="databmi.php">Lihat Data BMI</a>
  </div>
</div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>

