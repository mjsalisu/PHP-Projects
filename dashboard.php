<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard - Handouts</title>
    <?php require '_layouts/head.html'; ?>
</head>

<body>
  <!-- Preloader -->
  <div class="preloader">
    <div class="cssload-speeding-wheel"></div>
  </div>

  <div id="wrapper">
    <?php require '_layouts/navigation.html'; ?>


    <!-- Page Content -->
    <div id="page-wrapper">
      <div class="container-fluid">
        <div class="row bg-title">
          <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Dashboard </h4>
          </div>
          <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
              <li><a href="#">Dashboard</a></li>
              <li class="active">Dashboard </li>
            </ol>
          </div>
          <!-- /.col-lg-12 -->
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <h3 class="box-title">Blank Dashboard</h3>
                </div>
            </div>
        </div>
        
      </div>
      <!-- /.container-fluid -->
      <?php require '_layouts/foot-note.html' ?>

    </div>
    <!-- /#page-wrapper -->
  </div>
  <!-- /#wrapper -->
    <?php require '_layouts/footer.html'; ?>
</body>

</html>