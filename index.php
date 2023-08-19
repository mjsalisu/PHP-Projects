<!doctype html>
<html lang="en">
  <head>
    <?php 
    $title = "Home ";
    include "_layouts/_head.php"; ?>
  </head>
  <body class="antialiased border-top-wide border-success">
    <div class="page">

      <div class="content">
        <div class="container-xl">
          <!-- Page title -->
          
          <div class="row row justify-content-center mt-3 mt-lg-5">
            <div class="col-lg-6 col-xl-5">
              <div class="card">
                <div class="card-header">
                  <h2 class="card-title text-center">
                    Index
                  </h2>
                </div>
                <div class="card-body">
                  <ul>
                    <li>
                      <a href="./login.php">Login Page</a>
                    </li>
                    <li>
                      <a href="./visitors-form.php">Visitors Page</a>
                    </li>
                    <li>
                      <a href="./office-form.php">Office Page</a>
                    </li>
                    <li>
                      <a href="./#">Request Status Page</a>
                    </li>
                    <li>
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon text-success" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><path d="M5 12l5 5l10 -10" /></svg>
                      <a href="./maintenance.php">Maintenance</a>
                    </li>
                    <li>
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon text-success" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><path d="M5 12l5 5l10 -10" /></svg>
                      <a href="./400.php">Page 400</a>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-success" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><path d="M5 12l5 5l10 -10" /></svg>
                        <a href="./401.php">Page 401</a>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-success" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><path d="M5 12l5 5l10 -10" /></svg>
                        <a href="./403.php">Page 403</a>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-success" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><path d="M5 12l5 5l10 -10" /></svg>
                        <a href="./404.php">Page 404</a>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-success" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><path d="M5 12l5 5l10 -10" /></svg>
                        <a href="./500.php">Page 500</a>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-success" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><path d="M5 12l5 5l10 -10" /></svg>
                        <a href="./503.php">Page 503</a>
                    </li>
                    <li>
                      <a href="./sitemap.xml">Sitemap Page</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <footer class="footer">
           <?php include "_layouts/_foot.php" ?>
        </footer>
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