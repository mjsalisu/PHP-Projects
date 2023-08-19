<!doctype html>
<html lang="en">
  <head>
	<?php 
	$title = "Visitor dashboard ";
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
          <?php //include "_layouts/_stats.php" ?>

			<!--Visitors Card Start -->
			<div class="">
				<div class="mx-auto col-md-8">
				  <div class="card">
					<div class="card-header">
					  <h3 class="card-title">Visitors Infomation</h3>
					</div>
					<div class="card-body">
					
					<!--<div class="steps">
						<a href="#" class="step-item" data-toggle="tooltip" title="Visitors Information">
						Visitors Details
						</a>
						<a href="#" class="step-item active" data-toggle="tooltip" title="Whom to see...">
						Visiting Details
						</a>
						<span href="#" class="step-item" data-toggle="tooltip" title="Visitors snapshot">
						Visitors Capture
						</span>
					</div> -->

					<form action="." method="post">
						<div class="card-body">
						  <div class="row">
    						 	<div class="hr-text text-green">personal details</div>
    							<?php include "_layouts/_personalDetails.php" ?>
                  
                  <div class="hr-text text-green">visiting information</div>
                  <?php include "_layouts/_visitingDetails.php" ?>
                  
                  <div class="hr-text text-green">visitors snapshot</div>
                  <?php include "_layouts/_cameraModal.php" ?>
             </div>

						<div class="form-footer">
              <div class="d-flex">
                <input type="reset" name="clear" class="btn btn-danger" value="Reset"/>

                <input type="submit" name="save" class="btn btn-success ml-auto" value="Submit"/>
              </div>
            </div>

						
					</form>
					</div>
				  </div>
				</div>
			</div>
            <!--Visitors Card End -->
            
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