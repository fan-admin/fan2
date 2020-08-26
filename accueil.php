
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <title>
    fan-milk
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0' name='viewport' />

  <!--     Fonts and icons     -->
  <link href="./assets/css/fonts.css" rel="stylesheet" />
  <link href="./assets/css/font-awesome.min.css" rel="stylesheet">
 
  <!-- CSS Files -->
  <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="./assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <!-- <link href="./assets/demo/demo.css" rel="stylesheet" /> -->

</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
        <?php include 'side-bar.php' ?>
    </div>
    <div class="main-panel" style="height: 100vh;">
      <!-- Navbar -->
      <?php include 'navbar.php'; ?>

      <!-- End Navbar -->
      <div class="content" >
       <?php include 'contenu.php'; ?>
      </div>

     

      <footer class="footer" style="position: absolute; bottom: 0; width: -webkit-fill-available;">
        <div class="container-fluid">
         <!--  <div class="row">
            <nav class="footer-nav">
              <ul>
                <li><a href="https://www.creative-tim.com" target="_blank"> Mobile Dev </a></li>
                <li><a href="https://www.creative-tim.com/blog" target="_blank">Blog</a></li>
                <li><a href="https://www.creative-tim.com/license" target="_blank">Licenses</a></li>
              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                © 2020, made with <i class="nc-icon nc-favourite-28"></i> by Mc.Abalo KT
              </span>
            </div>
          </div> -->
        </div>
      </footer>
    </div>
  </div>
  
 



  <!--   Core JS Files   -->

   <script src="./assets/js/fonts6.js"></script>
  <script src="./assets/js/core/jquery.min.js"></script>
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <!-- <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script> -->
  <!--  Google Maps Plugin    -->
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->
  <!-- Chart JS -->
  <!-- <script src="./assets/js/plugins/chartjs.min.js"></script> -->
  <!--  Notifications Plugin    -->
  <!-- <script src="./assets/js/plugins/bootstrap-notify.js"></script> -->
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <!-- <script src="./assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script> -->

   <script type="text/javascript">
     
     $().ready(function(){
            
            

            $('.bienvenue').show();
            $('.compte-client').hide();

            $(".enregitrer-un-client").click(function(){
               $('.compte-client').show();
               $('.bienvenue').hide();
            });

            return false;
      });


   </script>
  
</body>

</html>