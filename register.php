<!DOCTYPE html>
<html lang="en">
<head>
    <title>Join Handouts - Handouts</title>
    <?php require '_layouts/head.html'; ?>
    <!-- Wizard CSS -->
    <link href="plugins/bower_components/jquery-wizard-master/css/wizard.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <!-- Preloader -->
  <div class="preloader">
    <div class="cssload-speeding-wheel"></div>
  </div>

  <!-- /#wrapper -->
  <div id="wrapper">
      <!-- Page Content -->
      <?php require '_layouts/user-register.html' ?>
</div>
  <!-- /#wrapper -->

<!-- jQuery -->
<script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
<script src="js/jasny-bootstrap.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="bootstrap/dist/js/tether.min.js"></script>
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<script src="plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
<!--slimscroll JavaScript -->
<script src="js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="js/waves.js"></script>
<!-- Form Wizard JavaScript -->
<script src="plugins/bower_components/jquery-wizard-master/dist/jquery-wizard.min.js"></script>
<!-- FormValidation -->
<link rel="stylesheet" href="plugins/bower_components/jquery-wizard-master/libs/formvalidation/formValidation.min.css">
<!-- FormValidation plugin and the class supports validating Bootstrap form -->
<script src="plugins/bower_components/jquery-wizard-master/libs/formvalidation/formValidation.min.js"></script>
<script src="plugins/bower_components/jquery-wizard-master/libs/formvalidation/bootstrap.min.js"></script>
<!-- Custom Theme JavaScript -->
<script src="js/custom.min.js"></script>
<script type="text/javascript">
    (function () {
        $('#createAccount').wizard({
            onInit: function () {
                $('#validation').formValidation({
                    framework: 'bootstrap',
                    fields: {
                        username: {
                            validators: {
                                notEmpty: { message: 'The username is required' },
                                stringLength: {
                                    min: 4, max: 30,
                                    message: 'The username must be between 3-30 characters long'
                                },
                                regexp: {
                                    regexp: /^[a-zA-Z0-9]+$/,
                                    message: 'The username can only consist of alphabetical and number'
                                }
                            }
                        },
                        password: {
                            validators: {
                                notEmpty: { message: 'The password is required' },
                                stringLength: {
                                    min: 6, max: 20,
                                    message: 'The password must be between 6-20 characters long'
                                },
                                different: {
                                    field: 'username',
                                    message: 'The password cannot be the same as your username'
                                },
                            }
                        }
                    }
                });
            },
            validator: function () {
                var fv = $('#validation').data('formValidation');
                var $this = $(this);
                // Validate the container
                fv.validateContainer($this);

                var isValidStep = fv.isValidContainer($this);
                if (isValidStep === false || isValidStep === null) {
                    return false;
                }
                return true;
            },
            onFinish: function () {
                $('#validation').submit();
                alert('Account will be created shortly...');
            }
        });
    })();
</script>
<!-- tongle on click -->
<script>
    $(document).ready(function () {
        $("#DivSelectLevel").hide();
        $("#DivLecturerEmail").hide();

        $(document).on('change', '#designation', function () {
            var category = $(this).val();
            if (category == 'Student') {
                $("#DivLecturerEmail").hide();
                $("#DivSelectLevel").show();
            }
            if (category == 'Lecturer') {
                $("#DivSelectLevel").hide();
                $("#DivLecturerEmail").show();
            }
        })//end of change
    })
</script>
</body>
</html>