<!doctype html>
<html lang="en">
  <head>
    <?php 
    $title = "Maintenance mode ";
    include "_layouts/_head.php" ?>
  </head>
  <body class="antialiased border-top-wide border-success d-flex flex-column">
    <div class="flex-fill d-flex align-items-center justify-content-center">
      <div class="container-tight py-6">
        <div class="empty">
          <div class="empty-icon">
            <img src="./static/illustrations/undraw_quitting_time_dm8t.svg" height="128" class="mb-4"  alt="">
          </div>
          <p class="empty-title h3">Temporarily down for maintenance</p>
          <p class="empty-subtitle text-muted">
            Sorry for the inconvenience but we’re performing some maintenance at the moment. We’ll be back online shortly!
          </p>
        </div>
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