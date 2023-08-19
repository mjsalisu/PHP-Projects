<!doctype html>
<html lang="en">
  <head>
    <?php 
    $title = "Login ";
    include "_layouts/_head.php" ?>
  </head>
  <body class="antialiased border-top-wide border-success d-flex flex-column">
    <div class="flex-fill d-flex flex-column justify-content-center">
      <div class="container-tight py-6">
        <div class="text-center mb-4">
          <img src="./static/nda-logo.png" height="36" alt="">
        </div>
        <form class="card card-md" method="post" action="control/loginValidation.php" id="login">
            <!-- Login Form -->
          <?php include "_layouts/_sign-in.php" ?>
        </form>
      </div>
    </div>
    <!-- Libs JS -->
    <script src="./dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Tabler Core -->
    <script src="./dist/js/tabler.min.js"></script>
    <script>
      document.body.style.display = "block"
    </script>
  </body>
</html>