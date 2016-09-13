
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mailbox</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?php echo asset('bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo asset('plugins/datatables/dataTables.bootstrap.css'); ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo asset('dist/css/AdminPlantesia.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo asset('dist/css/skins/_all-skins.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo asset('plugins/iCheck/flat/blue.css'); ?>">
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">     
      <header class="main-header">
        <a href="<?= url('admin') ?>" class="logo">
          <span class="logo-mini"><button href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"><span class="sr-only">Toggle navigation</span></button></span>
          <span class="logo-lg">Navigation <button href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button" style="margin-right:-15px"><span class="sr-only">Toggle navigation</span></button></span>
        </a>
        <nav class="navbar navbar-static-top" role="navigation">
			<div class="navbar-custom-menu" style="float:left;margin-left:5px;">
            <p style="margin-top: 0px;margin-left: 35px;"><img width="20" src="../img/assets/icon/daun.png"></p>
			<p style="margin-top: -14px;">P L A N T E S I A</p>
          </div>
		  
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="" class="user-image" alt="User Image">
                  <span class="hidden-xs">Leonardo K. Japri</span>
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
	  
	  <aside class="main-sidebar">
        <section class="sidebar">
          <ul class="sidebar-menu">
            <li>
              <a href="<?= url('admin') ?>">
                <i class="fa fa-files-o"></i>
                <span>Thread</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?= url('admin') ?>">All Thread</a></li>
                <li><a href="<?= url('compose') ?>">New Thread</a></li>
              </ul>
            </li>
            <li class="active treeview">
              <a href="<?= url('mailbox') ?>">
                <i class="fa fa-envelope"></i> <span>Mail</span>
                <!--<small class="label pull-right bg-yellow">5</small>-->
              </a>
            </li>
          </ul>
        </section>
      </aside>

      <div class="content-wrapper">
        <section class="content-header">
          <h1>
            Messages
          </h1>
        </section>
		<section class="content">
          <div class="row">
            <div class="col-md-12">

				<div class="box-body no-padding mailbox-messages">
                  <table id="example2" class="table table-hover table-striped">
                    <thead>
                      <tr>
                        <th style="visibility: hidden;"></th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Message</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        /*$sql = "SELECT * FROM pesan";
                        $result = $conn->query($sql);
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            $id = $row["id_user"];
                            $sql1 = "SELECT * FROM user where id = '$id'";
                            $result1 = $conn->query($sql1);
                            
                            echo("<tr>
                                  <td><input type='checkbox'></td>");
                            while($row1 = $result1->fetch_assoc()) {
                                echo("<td>". $row1["nama"] ."</td>
                                  <td>". $row1["email"] ."</td>");
                            }
                            echo("<td>". $row["isi"] ."</td>
                                </tr>");
                        }
                        $conn->close();*/
                      ?>
                     
                    </tbody>
                  </table>
                </div>
            </div>
          </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          Version 1.0
        </div>
        <strong>Copyright &copy; 2016 Plantesia</strong> All rights reserved.
      </footer>    
      <div class="control-sidebar-bg"></div>
    </div>
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <script src="dist/js/app.min.js"></script>
    <script src="plugins/iCheck/icheck.min.js"></script>
    <script>
      $(function () {
        $('.mailbox-messages input[type="checkbox"]').iCheck({
          checkboxClass: 'icheckbox_flat-blue',
          radioClass: 'iradio_flat-blue'
        });

        $(".checkbox-toggle").click(function () {
          var clicks = $(this).data('clicks');
          if (clicks) {
            $(".mailbox-messages input[type='checkbox']").iCheck("uncheck");
            $(".fa", this).removeClass("fa-check-square-o").addClass('fa-square-o');
          } else {
            $(".mailbox-messages input[type='checkbox']").iCheck("check");
            $(".fa", this).removeClass("fa-square-o").addClass('fa-check-square-o');
          }
          $(this).data("clicks", !clicks);
        });

        $(".mailbox-star").click(function (e) {
          e.preventDefault();
          var $this = $(this).find("a > i");
          var glyph = $this.hasClass("glyphicon");
          var fa = $this.hasClass("fa");

          if (glyph) {
            $this.toggleClass("glyphicon-star");
            $this.toggleClass("glyphicon-star-empty");
          }

          if (fa) {
            $this.toggleClass("fa-star");
            $this.toggleClass("fa-star-o");
          }
        });
      });

    </script>
    <script src="dist/js/demo.js"></script>
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script>
      $(function () {
        $("#example1").DataTable();
        $("#example2").DataTable();
      });
    </script>
  </body>
</html>
