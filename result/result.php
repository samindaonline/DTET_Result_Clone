<!DOCTYPE html>
<html lang="en" style="height: auto;"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"><meta name="csrf-token" content="797KywAUSpzHgaFAVeDn297MN9ZTYN6sayzrcB5I">
    
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>DTET - Department of Technical Education &amp; Training</title>
      <!-- style -->
      <!-- Fav ICon -->
<link rel="icon" type="image/ico" href="http://222.165.180.84/dtetexam/public/assets/img/dtet-logo.ico">
<link href="../other2/css.css" rel="stylesheet">
<link rel="stylesheet" href="../other2/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="../other2/ionicons.min.css">
<!-- Bbootstrap 4 -->
<link rel="stylesheet" href="../other2/bootstrap.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="../other2/OverlayScrollbars.min.css">
<!-- Daterange picker -->
<link rel="stylesheet" href="../other2/daterangepicker.css">
<!-- Select2 -->
<link rel="stylesheet" href="../other2/select2.css">
<!-- Sweetalert -->
<link rel="stylesheet" href="../other2/sweetalert2.css">
<!-- Data table -->
<link rel="stylesheet" href="../other2/dataTables.bootstrap4.css">
<!-- summernote -->
<link rel="stylesheet" href="../other2/summernote-bs4.css">
<!-- Theme style -->
<link rel="stylesheet" href="../other2/adminlte.css">
<!--Style.css-->
<link href="../other2/style.css" rel="stylesheet">
 
      <!-- Styles -->
      <!-- jQuery -->
<script src="../other2/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../other2/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../other2/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../other2/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../other2/sparkline.js"></script>
<!-- jQuery Knob Chart -->
<script src="../other2/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../other2/moment.min.js"></script>
<script src="../other2/daterangepicker.js"></script>
<!-- Bootstrap 4 -->
<script src="../other2/bootstrap.min.js"></script>
<!-- Summernote -->
<script src="../other2/summernote-bs4.min.js"></script>
<!-- Select2 -->
<script src="../other2/select2.js"></script>
<!-- Sweetalert -->
<script src="../other2/sweetalert2.js"></script>
<!-- DataTables -->
<script src="../other2/jquery.dataTables.js"></script>
<script src="../other2/dataTables.bootstrap4.js"></script>
<!-- overlayScrollbars -->
<script src="../other2/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../other2/adminlte.js"></script>
 

    </head>
    <body style="height: auto;">
      <div class="container">
              <div class="row">
        <div class="col-md-12">
          <div class="alert alert-secondary alert-secondary-custom mt-4 text-center" role="alert">
            <h5> EXAM RESULTS</h5>
            <a href="../index.php" class="btn btn-success">Exit </a>
          </div>
        </div>
      </div>

      <div class="row">
        <!-- data -->
        <div class="col-sm-12">
          <!-- header -->
                    <div class="header jumbotron  view-result-main-box">
            <!-- items-header -->
            <div class="items-header">
              <div class="row">
                <div class="col-md-12 print-title font-weight-bold text-center">
                  Diploma in Information And Communication Technology  
(NVQ Written Examination - Level 5 - Semester_01 - 2022 - December) 
                </div>
              </div>
              <!-- begin -->
              <?php 
              session_start();

                $stunic=$_SESSION['nic'];
                $conn = new mysqli("localhost","library_user","123","result");
                $sql = "SELECT * FROM examresult Where nic='$stunic'";
                $result = $conn->query($sql);
                if($row=$result->fetch_assoc()){
                  /* if($row["grade"]="NQ"){ */
                  if(in_array("NQ", $row)){
                    $stylegrade="badge-warning";}
                  else{
                    $stylegrade="badge-success";}
              

              echo '
              <div class="row mt-3">
                <div class="col-md-1 col-sm-1 from">
                  <img src="../other2/dtet-logo.png" class="w-100 h-95" alt="User Image">
                </div>
                <div class="col-md-6 col-sm-11 from">
                  <table>
                   <tbody><tr>
                    <td class="align-top"><b>Name</b> </td>
                    <td class="align-top">:</td>
                    <td class="align-top">'.$row["name"].'</td>
                  </tr>
                  <tr>
                    <td class="align-top"><b>NIC</b> </td>
                    <td class="align-top">:</td>
                    <td class="align-top">'.$row["nic"].'</td>
                  </tr>
                  <tr>
                    <td class="align-top"><b>Course</b> </td>
                    <td class="align-top">:</td>
                    <td class="align-top">Diploma in Information And Communication Technology </td>
                  </tr>
                  <tr>
                    <td class="align-top"><b>College</b> </td>
                    <td class="align-top">:</td>
                    <td class="align-top">College of Technology - Ratnapura</td>
                  </tr>
                </tbody></table>
              </div>
              <div class="col-md-5 col-sm-12 from">
                <table>
                 <tbody><tr>
                  <td class="align-top"><b>Index  &nbsp;</b> </td>
                  <td class="align-top">:</td>
                  <td class="align-top">'.$row["nic"].'</td>
                </tr>
                <tr>
                 <td class="align-top"><b>Exam</b> </td>
                 <td class="align-top">:</td>
                 <td class="align-top"><span class="badge badge-info">Semester 01 Exam </span></td>
               </tr>
               <tr>
                <td class="align-top"><b>Grade</b></td>
                <td class="align-top">:</td>
                <td class="align-top">
                <span class="badge  '.$stylegrade.' "> 
                '.$row["grade"].' 
                </span>
                 
              </td>
            </tr>
          </tbody></table>;
        </div>
      </div>
      <div class="row mt-3 items-header font-weight-bold">
        <div class="line"></div>
      </div>

    </div><br>
    <!-- end items-header -->
    <div class="table-responsive-md">
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th scope="col" width="20%">Module Code</th>
            <th scope="col">Module</th>
            <th scope="col">Grade</th>
            <th scope="col">Year</th>
          </tr>
        </thead>
        <tbody>
                              <tr>
            <td>5S1NVQ 001</td>
            <td>
              <span class=""> Database System I
              </span>
            </td>
            <td>'.$row["5S1NVQ001"].'</td>
            <td>2022</td>
          </tr>
                                        <tr>
            <td>5S1NVQ 002</td>
            <td>
              <span class=""> Graphic Design (Theory)
              </span>
            </td>
            <td>'.$row["5S1NVQ002"].'</td>
            <td>2022</td>
          </tr>
                                        <tr>
            <td>5S1NVQ 003</td>
            <td>
              <span class=""> Graphic Design (Practical)
              </span>
            </td>
            <td>'.$row["5S1NVQ003"].'</td>
            <td>2022</td>
          </tr>
                                        <tr>
            <td>5S1NVQ 004</td>
            <td>
              <span class=""> Software Programming (Theory)
              </span>
            </td>
            <td>'.$row["5S1NVQ004"].'</td>
            <td>2022</td>
          </tr>
                                        <tr>
            <td>5S1NVQ 005</td>
            <td>
              <span class=""> Software Programming (Practical)
              </span>
            </td>
            <td>'.$row["5S1NVQ005"].'</td>
            <td>2022</td>
          </tr>
                                        <tr>
            <td>5S1NVQ 006</td>
            <td>
              <span class=""> System Analysis &amp; Design
              </span>
            </td>
            <td>'.$row["5S1NVQ006"].'</td>
            <td>2022</td>
          </tr>
                                        <tr>
            <td>5S1NVQ 500</td>
            <td>
              <span class=""> Workplace Information &amp; Communication
              </span>
            </td>
            <td>'.$row["5S1NVQ500"].'</td>
            <td>2022</td>
          </tr>
                                                </tbody>
        </table>';}?>
    </div>
    <!-- end content -->
  </div>
  </div>
</div>
<div class="row mt-0">
  <div class="col-md-12">
    <div class="table-responsive-md">
      <table class="table table-bordered  print-sub-title font-weight-bold">
        <tbody>
          <tr>
            <td colspan="8" class="text-center">GRADING SCHEMA</td>
          </tr>
          <tr>
            <td>Grade</td>
            <td>D</td>
            <td>M</td>
            <td>C</td>
            <td>S</td>
            <td>F</td>
          </tr>
          <tr>
            <td>Grade Description</td>
            <td>DISTINCTION</td>
            <td>MERIT</td>
            <td>CREDIT</td>
            <td>ORDINARY PASS</td>
            <td>FAIL</td>
          </tr>
          <tr>
            <td>Scale</td>
            <td>80 - 100</td>
            <td>65 - 79</td>
            <td>55 - 64</td>
            <td>40 - 54 </td>
            <td>0 - 39</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
<script type="text/javascript">

 $(function () {
  $('#result-table').DataTable({
    "paging": false,
    "lengthChange": false,
    "searching": false,
    "ordering": true,
    "info": false,
    "autoWidth": false,
    "aaSorting": []
  });
});
</script>















</body></html>