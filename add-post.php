<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add New Post - Handouts</title>
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
          <?php require '_layouts/add-new-post.html' ?>
      </div>
      <!-- /.container-fluid -->
      <?php require '_layouts/foot-note.html' ?>
    </div>

    <!-- /#page-wrapper -->
  </div>
  <!-- /#wrapper -->

    <?php require '_layouts/footer.html'; ?>

     <script src="plugins/bower_components/summernote/dist/summernote.min.js"></script>
    <script>
        jQuery(document).ready(function () {
          $('.summernote').summernote({
              height: 350, // set editor height
              minHeight: null, // set minimum height of editor
              maxHeight: null, // set maximum height of editor
              focus: false // set focus to editable area after initializing summernote
          });

            $('.inline-editor').summernote({
                airMode: true
            });
        });

        window.edit = function () {
          $(".click2edit").summernote()
        },
        window.save = function () {
            $(".click2edit").summernote('destroy');
        }
    </script>
</body>

</html>