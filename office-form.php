<!doctype html>
<html lang="en">
  <head>
    <?php 
    $title = "Offices dashboard ";
    include "_layouts/_head.php" ?>
  </head>
  <body class="antialiased border-top-wide border-success">
    <div class="page">
      <header class="navbar navbar-expand-md navbar-light">
       <?php include "_layouts/_navbar.php" ?>
      </header>
      <!-- Content Start -->
      <div class="content">
        <div class="container-xl">
             <!-- Page title -->
          <div class="page-header">
            <div class="row align-items-center">
              <div class="">
                <h2 class="page-title text-center">
                <small>Visiting Request for: </small>Registrars Department
                </h2>
              </div>
              <!-- Page title actions -->
              <div class="col-auto ml-auto d-print-none">
              </div>
            </div>
          </div>

         
        <div class="row">
            <?php include "_layouts/_visitRequest.php" ?>
        </div>

        </div>
        </div>
      </div>

        <footer class="footer">
           <?php include "_layouts/_foot.php" ?>
        </footer>

      </div>
      <!-- Content End -->

    </div>
    <!-- Libs JS -->
    <script src="./dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./dist/libs/jquery/dist/jquery.slim.min.js"></script>
    <script src="./dist/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="./dist/libs/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="./dist/libs/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="./dist/libs/peity/jquery.peity.min.js"></script>
    <!-- Tabler Core -->
    <script src="./dist/js/tabler.min.js"></script>
    <script>
      document.body.style.display = "block"
    </script>
  </body>
</html>