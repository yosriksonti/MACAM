<?php
if(!isset($_GET['ID']))
  header('Location: index.php');

include_once "Core/SalonC.php";
include_once "Core/OeuvreC.php";
include_once "Core/ArtistC.php";
$ID=$_GET['ID'];
$Salon=new SalonC();
$Art=new ArtistC();
$Ouv=new OeuvreC();
$data1=$Ouv->GetOuv($ID);

?>
<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.1.15
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>CoreUI Free Bootstrap Admin Template</title>
    <!-- Icons-->
    <link href="node_modules/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="node_modules/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="node_modules/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="css/style.css" rel="stylesheet">
    <link href="vendors/pace-progress/css/pace.min.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>
  </head>
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <? include_once "header.php"; ?>
    <div class="app-body">
      <?php include_once "sidebar.php"; ?>
      <main class="main">
        <!-- Breadcrumb-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Home</li>
          <li class="breadcrumb-item">
            <a href="Ouevres.php">Ouevres</a>
          </li>
          <!-- Breadcrumb Menu-->
          
        </ol>
        <div class="container-fluid">
          <div class="animated fadeIn">
            
            <!-- /.row-->
            
            <!-- /.card-->
            
            <!-- /.row-->
            <?php
            foreach($data1 as $row)
            {
              echo'
            <div class="card">
                  <div class="card-header">
                    <div class="card-header-actions">
                      <a class="card-header-action" href="http://coreui.io/docs/components/bootstrap-carousel/" target="_blank">
                      </a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="carousel slide" id="carouselExampleSlidesOnly" data-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="d-block w-100" data-src="holder.js/800x400?auto=yes&amp;bg=777&amp;fg=555&amp;text=First slide" alt="First slide [800x400]" src="'.$row['Image'].'"
                            data-holder-rendered="true">
                        </div>
                        
                      </div>
                    </div>
                  </div>

                  </br>

                  <div class="jumbotron">
                      <h1 class="display-3">'.$row['Nom'].'</h1>
                      <p class="lead">'.$row['Des'].'</p>
                      <hr class="my-4">';
                      $data2=$Art->GetArtist($row['ID_Art']);
                      foreach($data2 as $rw)
                      echo'<p>Artist: <a href="Artist.php?ID='.$rw['ID'].'">'.$rw['Nom'].'</a></br>';
                      $data3=$Salon->GetSalon($row['ID_Salon']);
                      foreach($data3 as $r)
                        echo'
                      Salon: <a href="Salon.php?ID='.$r['ID'].'">'.$r['Nom'].'</a></p>';
                      echo'
                      
                      
                      
                  </div>

                     <form action="DELOuv.php" method="POST">
                      <input type="hidden" name="ID" value="'.$row['ID'].'">
                      <button type="submit" class="btn btn-block btn-danger">Delete</button>
                     </form>
                </div>';}
                ?>
 
            <!-- /.row-->
          </div>
        </div>
      </main>

    </div>
<?php include_once "footer.php"; ?>
    <!-- CoreUI and necessary plugins-->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/pace-progress/pace.min.js"></script>
    <script src="node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
    <script src="node_modules/@coreui/coreui/dist/js/coreui.min.js"></script>
  </body>
</html>
