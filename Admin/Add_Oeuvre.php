<?php
include_once "Core/ArtistC.php";
$Art=new ArtistC();
$date=$Art->GetList();
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
            <a href="#">Exposition</a>
          </li>
          <li class="breadcrumb-item active">Ouevre</li>
          <!-- Breadcrumb Menu-->
          
        </ol>

                      <div class="container-fluid">
                      <div class="animated fadeIn">
                      <div class="row">
                      
                      <!-- /.col-->
                      <div class="col-sm-6">
                      <div class="card">
                      <div class="card-header">
                      <strong>Oeuvre</strong>
                      <small>Form</small>
                      </div>
                      <div class="card-body">
                      <form action="ADDOeuvre.php" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                      <label for="company">Name</label>
                      <input class="form-control" name="Name" type="text" placeholder="Enter the Name">
                      <input name="ID_Salon" type="hidden" value="<?php echo $_POST['ID']; ?>">
                      </div>
                      <div class="form-group">
                      <label for="company">Artist</label>
                      <select class="form-control" name="ID_Art" placeholder="Artist...">
                        <?php
                        foreach($date as $row)
                          echo'
                        <option value="'.$row['ID'].'" >'.$row['Nom'].'</option>';
                        ?>
                      </select>
                      </div>

                      <div class="form-group">
                      <label for="company">Description</label>
                      <textarea class="form-control" name="Des" placeholder="description..."></textarea> 
                      </div>

                      <div class="form-group">
                      <label for="company">Image</label>
                      <input class="form-control" name="image" type="file">
                      </div>

                      
                      <button type="submit" style="float: right" class="btn btn-block btn-success">Submit</button>
                      </form>
                      </div>
                      </div>
                      </div>
                      <!-- /.col-->
                      </div>
                    
                    <!-- /.row-->
                    <br>
                    
                  </div>
                </div>
              </div>
              <!-- /.col-->
            </div>
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
