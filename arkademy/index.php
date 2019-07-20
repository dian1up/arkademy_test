<!doctype html>
<html class="no-js" lang="">
<?php
  require_once('database/koneksi.php');
  $query=mysqli_query($koneksi,"SELECT name.id AS id,name.name AS name,work.name AS work,category.salary AS salary FROM name,work,category WHERE name.id_work=work.id_salary AND name.id_salary=category.id");
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Normal Table | Notika - Notika Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- font awesome CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
	<!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="css/wave/waves.min.css">
    <link rel="stylesheet" href="css/wave/button.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/notika-custom-icon.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a href="#"><img src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top Area -->
    <!-- Mobile Menu start -->

    <!-- Mobile Menu end -->
    <!-- Main Menu area start-->
    <!-- Main Menu area End-->
	<!-- Breadcomb area Start-->
	<!-- Breadcomb area End-->
    <!-- Normal Table area Start-->
    <div class="normal-table-area">
        <div class="container">

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="normal-table-list">
                      <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                        <div class="form-example-int mg-t-15" align="right">
                              <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">ADD DATA</button>
                        </div>
        							</div>
                        <div class="bsc-tbl">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Work</th>
                                        <th>Salary</th>
                                        <center><th>Action</th></center>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                    $no = 0;
                                    while($q=mysqli_fetch_array($query)){
                                      $no++;
                                      ?>
                                    <tr>
                                      <td width="20%"><?php echo $q['name']?></td>
                                      <td width="20%"><?php echo $q['work']?></td>
                                      <td width="20%"><?php echo $q['salary']?></td>
                                      <td width="20%"> <a href="edit.php?id=<?php echo $q['id']?>&name=<?php echo $q['name']?>"> <button  type="button" class="bbtn btn-success notika-btn-success" >EDIT DATA</button></a>
                                                       <a href="delete.php?id=<?php echo $q['id']?> "> <button  type="button" class="bbtn btn-success notika-btn-success" >DELETE DATA</button></a></td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">ADD DATA</h4>
        </div>
        <form action="simpan.php" method="POST">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-element-list mg-t-30">
              <div class="nk-int-st">
                  <input type="text" class="form-control" data-mask="999-99-999-9999-9" placeholder="Full Name" name="nama">
              </div></div>
                <div class="form-element-list mg-t-30">

                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="nk-int-mk sl-dp-mn">
                                <h2>WORK</h2>
                            </div>
                            <div class="bootstrap-select fm-cmp-mg">
                                <select class="selectpicker" name="work" >
                                  <option>WORK</option>
                                  <option>Frontend Dev</option>
                                  <option>Backend Dev</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="nk-int-mk sl-dp-mn">
                                <h2>Salary</h2>
                            </div>
                            <div class="bootstrap-select fm-cmp-mg">
                                <select class="selectpicker" name="gaji">
                                  <option>Salary</option>
                                  <option>10.000.000</option>
                                  <option>12.000.000</option>
                                </select>
                            </div>
                        </div>
        <div class="modal-footer">
          <input type="submit" value="Submit">
          </form>
        </div>
      </div>


    </div>
  </div>
  </div>
        </div>
    </div>
    </div>
    <!-- Normal Table area End-->
    <!-- Start Footer area-->
    <div class="modal fade" id="edit" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">ADD DATA</h4>
          </div>
          <form action="simpan.php" method="POST">
          <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="form-element-list mg-t-30">
                <div class="nk-int-st">
                    <input type="text" class="form-control" data-mask="999-99-999-9999-9" placeholder="Full Name" name="nama">
                </div></div>
                  <div class="form-element-list mg-t-30">
                    <?php
                    $id=$_GET['id'];
                    echo $id;
                    ?>
                      <div class="row">
                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                              <div class="nk-int-mk sl-dp-mn">
                                  <h2>WORK</h2>
                              </div>
                              <div class="bootstrap-select fm-cmp-mg">
                                  <select class="selectpicker" name="work">
                                    <option>WORK</option>
                                    <option>Frontend Dev</option>
                                    <option>Backend Dev</option>
                                  </select>
                              </div>
                          </div>
                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                              <div class="nk-int-mk sl-dp-mn">
                                  <h2>Salary</h2>
                              </div>
                              <div class="bootstrap-select fm-cmp-mg">
                                  <select class="selectpicker" name="gaji">
                                    <option>Salary</option>
                                    <option>10.000.000</option>
                                    <option>12.000.000</option>
                                  </select>
                              </div>
                          </div>
          <div class="modal-footer">
            <input type="submit" value="Submit">
            </form>
          </div>
        </div>


      </div>
    </div>
    </div>
          </div>
      </div>
      </div>
    <!-- End Footer area-->
    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
		============================================ -->
    <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.resize.js"></script>
    <script src="js/flot/flot-active.js"></script>
    <!-- knob JS
		============================================ -->
    <script src="js/knob/jquery.knob.js"></script>
    <script src="js/knob/jquery.appear.js"></script>
    <script src="js/knob/knob-active.js"></script>
    <!--  Chat JS
		============================================ -->
    <script src="js/chat/jquery.chat.js"></script>
    <!--  todo JS
		============================================ -->
    <script src="js/todo/jquery.todo.js"></script>
	<!--  wave JS
		============================================ -->
    <script src="js/wave/waves.min.js"></script>
    <script src="js/wave/wave-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
	<!-- tawk chat JS
		============================================ -->
    <script src="js/tawk-chat.js"></script>
</body>

</html>
