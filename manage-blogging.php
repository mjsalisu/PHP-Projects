<!DOCTYPE html>
<html lang="en">
<head>
    <title>Manage Blogging - Handouts</title>
    <?php require '_layouts/head.html'; ?>
     <!-- summernotes CSS -->
    <link href="plugins/bower_components/summernote/dist/summernote.css" rel="stylesheet" />
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
          <?php require '_layouts/manage-blogging.html' ?>
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