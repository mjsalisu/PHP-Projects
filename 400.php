<!doctype html>
<html lang="en">
  <head>
    <?php 
    $title = "Page 400 ";
    include "_layouts/_head.php" ?>
  </head>
  <body class="antialiased border-top-wide border-success d-flex flex-column">
    <div class="flex-fill d-flex align-items-center justify-content-center">
      <div class="container-tight py-6">
      <div class="empty">
          <div class="empty-icon">
            <div class="display-4">400</div>
          </div>
          <p class="empty-title h3">Oops… You just found an error page</p>
          <p class="empty-subtitle text-muted">
            We are sorry but your request contains bad syntax and cannot be fulfilled
          </p>
          <div class="empty-action">
            <a href="./." class="btn btn-success">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><line x1="5" y1="12" x2="19" y2="12" /><line x1="5" y1="12" x2="11" y2="18" /><line x1="5" y1="12" x2="11" y2="6" /></svg>
              Take me home
            </a>
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