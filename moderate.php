<!DOCTYPE html>
<html lang="en">
<head>
    <title>Manage Uploaded Content - Handouts</title>
    <?php require '_layouts/head.html'; ?>
    <link href="plugins/bower_components/bootstrap-switch/bootstrap-switch.min.css" rel="stylesheet">
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
          <?php require '_layouts/manage-uploaded-file.html' ?>
      </div>
      <!-- /.container-fluid -->
      <?php require '_layouts/foot-note.html' ?>
    </div>

    <!-- /#page-wrapper -->
  </div>
  <!-- /#wrapper -->

    <?php require '_layouts/footer.html'; ?>
    <!-- bt-switch -->
    <script src="plugins/bower_components/bootstrap-switch/bootstrap-switch.min.js"></script>
    <script type="text/javascript">
        $(".bt-switch input[type='checkbox'], .bt-switch input[type='radio']").bootstrapSwitch();
        var radioswitch = function () {
            var bt = function () {
                $(".radio-switch").on("switch-change", function () {
                    $(".radio-switch").bootstrapSwitch("toggleRadioState")
                }),
                    $(".radio-switch").on("switch-change", function () {
                        $(".radio-switch").bootstrapSwitch("toggleRadioStateAllowUncheck")
                    }),
                    $(".radio-switch").on("switch-change", function () {
                        $(".radio-switch").bootstrapSwitch("toggleRadioStateAllowUncheck", !1)
                    })
            };
            return {
                init: function () {
                    bt()
                }
            }
        }();
        $(document).ready(function () {
            radioswitch.init()
        });
    </script>
</body>
</html>