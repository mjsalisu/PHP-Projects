<!DOCTYPE html>
<html lang="en">
<head>
    <title>Upload Material - Handouts</title>
    <?php require '_layouts/head.html'; ?>
    <link rel="stylesheet" href="plugins/bower_components/dropify/dist/css/dropify.min.css">
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
          <?php require '_layouts/material-upload.html' ?>
      </div>
      <!-- /.container-fluid -->
      <?php require '_layouts/foot-note.html' ?>
    </div>

    <!-- /#page-wrapper -->
  </div>
  <!-- /#wrapper -->

    <?php require '_layouts/footer.html'; ?>
    <script src="plugins/bower_components/dropify/dist/js/dropify.min.js"></script>
    <script>
        $(document).ready(function () {
            // Basic
            $('.dropify').dropify();

            // Translated
            $('.dropify-fr').dropify({
                messages: {
                    default: 'Glissez-déposez un fichier ici ou cliquez',
                    replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                    remove: 'Supprimer',
                    error: 'Désolé, le fichier trop volumineux'
                }
            });

            // Used events
            var drEvent = $('#input-file-events').dropify();

            drEvent.on('dropify.beforeClear', function (event, element) {
                return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
            });

            drEvent.on('dropify.afterClear', function (event, element) {
                alert('File deleted');
            });

            drEvent.on('dropify.errors', function (event, element) {
                console.log('Has Errors');
            });

            var drDestroy = $('#input-file-to-destroy').dropify();
            drDestroy = drDestroy.data('dropify')
            $('#toggleDropify').on('click', function (e) {
                e.preventDefault();
                if (drDestroy.isDropified()) {
                    drDestroy.destroy();
                } else {
                    drDestroy.init();
                }
            })
        });
    </script>

    <!-- tongle on click -->
    <script>
        $(document).ready(function () {
          $("#DivCost").hide(); //hide material cost input by default

          $(document).on('change', '#category', function () {
                var category = $(this).val();
                if (category == 'Lecture Note' || category == 'Past Question') {
                    $("#DivFacultyAndDepartment").show();
                    $("#DivLevel").show();
                    document.getElementById("MaterialTitle").innerHTML = "Course Title";
                     $("#MaterialCode").show();
                }
                if (category == 'GSP') {
                    $("#DivFacultyAndDepartment").hide();
                     $("#DivLevel").show();
                     document.getElementById("MaterialTitle").innerHTML = "Course Title";
                     $("#MaterialCode").show();
                }
                if (category == 'Post UTME') {
                    $("#DivFacultyAndDepartment").hide();
                    $("#DivLevel").hide();
                    document.getElementById("MaterialTitle").innerHTML = "Subject Title";
                    $("#MaterialCode").hide();  
                }
          })//end of Material Selection change


          $(document).on('change', '#versionType', function () {
                var versionType = $(this).val();
                if (versionType == 'Paid') {
                  $("#DivCost").show();
                }
                else {
                    $("#DivCost").hide();
                }
          })//end of Material Selection change
        })
    </script>
</body>

</html>