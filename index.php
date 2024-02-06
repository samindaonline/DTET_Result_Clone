<!DOCTYPE html>
<html lang="en" style="height: auto;">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"><meta name="csrf-token" content="797KywAUSpzHgaFAVeDn297MN9ZTYN6sayzrcB5I">
    
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DTET - Department of Technical Education &amp; Training</title>
        <!-- style -->
        <!-- Fav ICon -->
<link rel="icon" type="image/ico" href="http://222.165.180.84/dtetexam/public/assets/img/dtet-logo.ico">
<link href="other/css.css" rel="stylesheet">
<link rel="stylesheet" href="other/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="other/ionicons.min.css">
<!-- Bbootstrap 4 -->
<link rel="stylesheet" href="other/bootstrap.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="other/OverlayScrollbars.min.css">
<!-- Daterange picker -->
<link rel="stylesheet" href="other/daterangepicker.css">
<!-- Select2 -->
<link rel="stylesheet" href="other/select2.css">
<!-- Sweetalert -->
<link rel="stylesheet" href="other/sweetalert2.css">
<!-- Data table -->
<link rel="stylesheet" href="other/dataTables.bootstrap4.css">
<!-- summernote -->
<link rel="stylesheet" href="other/summernote-bs4.css">
<!-- Theme style -->
<link rel="stylesheet" href="other/adminlte.css">
<!--Style.css-->
<link href="other/style.css" rel="stylesheet">
 
        <!-- Styles -->
        <!-- jQuery -->
<script src="other/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="other/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="other/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="other/Chart.min.js"></script>
<!-- Sparkline -->
<script src="other/sparkline.js"></script>
<!-- jQuery Knob Chart -->
<script src="other/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="other/moment.min.js"></script>
<script src="other/daterangepicker.js"></script>
<!-- Bootstrap 4 -->
<script src="other/bootstrap.min.js"></script>
<!-- Summernote -->
<script src="other/summernote-bs4.min.js"></script>
<!-- Select2 -->
<script src="other/select2.js"></script>
<!-- Sweetalert -->
<script src="other/sweetalert2.js"></script>
<!-- DataTables -->
<script src="other/jquery.dataTables.js"></script>
<script src="other/dataTables.bootstrap4.js"></script>
<!-- overlayScrollbars -->
<script src="other/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="other/adminlte.js"></script>
 
</head>
<body style="height: auto;">
    <div class="text-center result-header">
        <h3>CHECK YOUR EXAM RESULTS</h3>
    </div>
    <div class="container">
        <div class="jumbotron result-main-box">
            <form id="viewresult_form" action="" method="POST">
                <input type="hidden" name="_token" value="797KywAUSpzHgaFAVeDn297MN9ZTYN6sayzrcB5I">
                <div class="row justify-content-center">
                    <div class="col-md-2 form-group">
                    </div>
                    <div class="col-md-4 form-group">
                        <input type="text" class="form-control" id="nic" name="nic" placeholder="Your NIC">
                        <p class="text-danger nic erorr_msg" id="errormsg">
                                                                                        </p>

                    </div>
                    <div class="col-md-4 form-group">
                        <button type="submit" id="search_result" class="btn btn-primary">Search</button>
                        <button type="reset" class="btn btn-info">Clear</button>     
                    </div>
                
            </div></form>
            <?php

            ?>
        </div>
        <script type="text/javascript">
        $(document).ready(function() {
            $('#course').select2();

            /**Form Validation**/
            $(document).on('click', "#search_result", function (e) {
                e.preventDefault();

                $(".error_msg").html('');
                var nicValue = $('input[name="nic"]').val();
                
                // Make AJAX request to check the database
                $.ajax({
                    url: 'result/check_database.php',
                    type: 'POST',
                    data: { nic: nicValue },
                    success: function(response) {
                        if (response === 'available') {
                            // If NIC is available, submit the form to go to the next page
                                $.ajax({
                                url: 'result/set_session.php',
                                type: 'POST',
                                data: { nic: nicValue },
                                success: function(sessionResponse) {
                                    if (sessionResponse === 'success') {
                                        // If session variable is set successfully, redirect to 'result.php'
                                        window.location.href = 'result/result.php';
                                    } else {
                                        // If setting session variable fails, display error message
                                        console.error('Failed to set session variable');
                                    }
                                },
                                error: function(xhr, status, error) {
                                    // Handle AJAX error
                                    console.error(xhr.responseText);
                                }
                            });
                        } else {
                            // If NIC is not available, display error message
                            document.getElementById("errormsg").innerHTML = '<b><i class="icon-info"></i>NIC not found</b>';
                        }
                    },
                    error: function(xhr, status, error) {
                        // Handle AJAX error
                        console.error(xhr.responseText);
                    }
                });
            });
        });
    </script>
</div>
</body>
</html>
</html>