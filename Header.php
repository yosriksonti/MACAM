<?php
include_once "Core/ExpoC.php";
$Exp=new ExpoC();
$data=$Exp->GetList();
$Data=$Exp->GetList();
?>

<nav class="quick-access-nav" id="nvpw_quickAccessNav">
        <h1 class="hide-accessible">Navigation</h1>
        <ul>
            <li><a href="#main-content">Saut au contenu</a></li>
        </ul>
    </nav>
    <div id="mobile-menu">
        <!--
        <form method="get" id="mobile-search-form" action="#">
            <input type="search" placeholder="Rechercher" value="" name="s" id="s">
            <input class="search" type="submit" id="search" value="GO">
        </form>
      -->
        <div class="mobile-main-menu-nav">
            <span class="to-start"></span>
            <span class="previous">Retour</span>
        </div>
        <nav class="mobile-main-menu">
            <ul class="main-menu open" role="nav">
                <!-- 2 12-->
                <li class="menu-item  has-submenu ">
                    <a class="menu-item-name">
            À propos du musée
          </a>
                    <a href="#" class="submenu-toggle"></a>
                    <ul class="submenu" role="nav">
                        <!-- 7 12-->
                        <li class="menu-item submenu-item ">
                            <a href="#" class="menu-item-name">
            Présentation
          </a>
                        </li>
                        <!-- 8 12-->
                        <li class="menu-item submenu-item has-submenu ">
                            <a href="#" class="menu-item-name">
            Histoire
          </a>
                        </li>
                        <li class="menu-item submenu-item has-submenu ">
                            <a href="Artistes.php" class="menu-item-name">
            Artistes
          </a>
                        </li>
                        <!-- 9 12-->
                        <li class="menu-item submenu-item has-submenu ">
                            <a href="Salons.php" class="menu-item-name">
            Salons
          </a>
                        </li>
                        <li class="menu-item submenu-item has-submenu ">
                            <a href="Oeuvres" class="menu-item-name">
            Oeuvres
          </a>
                        </li>
                        
                    </ul>
                </li>
                <!-- 3 12-->
                <li class="menu-item  has-submenu ">
                    <a class="menu-item-name">
            Agenda &amp; Expositions
          </a>
         
                    <a href="#" class="submenu-toggle"></a>

                    <ul class="submenu" role="nav">
                        <li class="menu-item submenu-item ">
                                    <a href="Expositions.php" class="menu-item-name">
            Toutes les Expositions
          </a>
                                </li>
                        <!-- 3256 12-->
                         <?php
          foreach($data as $row)
          
            echo'
                        <li class="menu-item submenu-item has-submenu ">
                            <a class="menu-item-name">
            '.$row['Nom'].'
          </a>
                            <a href="#" class="submenu-toggle"></a>
                            <ul class="submenu" role="nav">
                                <!-- 3766 12-->
                                <li class="menu-item submenu-item ">
                                    <a href="#" class="menu-item-name">
            Salons
          </a>
                                </li>
                                <!-- 3797 12-->
                                <li class="menu-item submenu-item ">
                                    <a href="#" class="menu-item-name">
            Oeuvres
          </a>
                                </li>
                                <!-- 3821 12-->
                                <li class="menu-item submenu-item ">
                                    <a href="#" class="menu-item-name">
            Artistes
          </a>
                                </li>
                            </ul>
                        </li>';
                        ?>
                    </ul>
                </li>
            </ul>
    </div>
    </div>
    <div id="page">
        
        <style>

                                        .lsf.active .lsf-blanc {
                                            display: block;
                                        }
                                        
                                        .lsf.active .lsf-gris {
                                            display: none;
                                        }
                                        
                                        .lsf:hover .lsf-blanc,
                                        .lsf:active .lsf-blanc {
                                            display: block;
                                        }.portlet-journal-content .journal-content-article .lsf img {
                                            max-width: 1.5em;
                                        }
                                        
                                        .lsf-blanc {
                                            display: none;
                                        }
                                        
                                        
                                        .lsf:hover .lsf-gris,
                                        .lsf:active .lsf-gris {
                                            display: none;
                                        }
        * {
            box-sizing: border-box;
        }
        
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }
        
        .header {
            overflow: hidden;
            background-color: #fff;
            padding: 20px 10px;
            height: 120px;
        }
        
        .header a {
            float: left;
            color: black;
            text-align: center;
            text-decoration: none;
            font-size: 18px;
            line-height: 25px;
            border-radius: 4px;
        }
        
        .header a.logo {
            font-size: 5px;
            font-weight: bold;
        }
        
        .header a:hover {
            background-color: #ddd;
            color: black;
        }
        
        .header a.active {
            background-color: dodgerblue;
            color: white;
        }
        
        .header-right {
            float: right;
            margin-right: 100px;
        }
        
        .header2 {
            overflow: hidden;
            background-color: #f1f1f1;
            padding: 20px 10px;
        }
        
        .header2 a {
            float: left;
            color: black;
            text-align: center;
            padding: 12px;
            text-decoration: none;
            font-size: 13px;
            line-height: 25px;
            border-radius: 4px;
        }
        
        .header2 a.logo {
            font-size: 25px;
            font-weight: bold;
        }
        
        .header2 a:hover {
            background-color: #ddd;
            color: black;
        }
        
        .header2 a.active {
            background-color: #000;
            color: white;
        }
        
        @media screen and (max-width: 500px) {
            .header a {
                float: none;
                display: block;
                text-align: left;
            }
            .header2 a {
                float: none;
                display: block;
                text-align: left;
            }
            .header-right {
                float: none;
            }
        }
        
        figcaption {
            background: rgba(0, 0, 0, 0.7);
            position: absolute;
            color: #fff;
            bottom: 0;
            padding: 20px;
            font-size: 16px;
            min-width: 100%;
            text-align: center;
            display: table;
        }
        
        .pp_expand {
            display: none;
        }
        
        html,
        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }
        
        #footer {
            background-color: black;
        }
        </style>
        <div class="title-header">
            <div style="padding:0px 0px 0px 0px; background: url(fond.jpg)  no-repeat;background-size: cover;">
                <!-- BANNER START -->
                <div class="header">
                    <a href="index.php" class="logo"><img src="./logo.png" style="width:242px; height:96px;margin-top:-20px"></a>
                    <div class="header-right" height="300px">
                        <a href="#" style="display : block; width:100px;height:110px; position:relative;z-index:999;text-decoration: none; margin-right:-15px;">
                            <div style="width:90px;height:30px;margin-top:-20px; margin-right:-5px">
                                <svg style="width:300" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 195.32299">
                                    <title>MACAM</title>
                                    <rect x="2.82102" y="143.34596" width="131.49714" height="47.67979" style="fill:none;stroke:#231f20;stroke-miterlimit:10;stroke-width:4px" />
                                    <line x1="134.31816" y1="-2.01148" x2="43.94408" y2="143.34596" style="fill:none;stroke:#231f20;stroke-miterlimit:10;stroke-width:4px" />
                                    <text text-anchor="middle" transform="translate(68 173.36152)" style="font-size:22.625242233276367px;fill:#231f20;font-family:MyriadPro-Regular, Myriad Pro">MACAM</text>
                                </svg>
                            </div>
                        </a>
                        <a href="#" style="display : block; width:100px;height:110px; position:relative;z-index:999;text-decoration: none; margin-right:-15px;">
                            <div style="width:90px;height:30px;margin-top:-20px; margin-right:-5px">
                                <svg style="width:300" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 195.32299">
                                    <title>Catalogues</title>
                                    <rect x="2.82102" y="143.34596" width="131.49714" height="47.67979" style="fill:none;stroke:#231f20;stroke-miterlimit:10;stroke-width:4px" />
                                    <line x1="134.31816" y1="-2.01148" x2="43.94408" y2="143.34596" style="fill:none;stroke:#231f20;stroke-miterlimit:10;stroke-width:4px" />
                                    <text text-anchor="middle" transform="translate(68 173.36152)" style="font-size:22.625242233276367px;fill:#231f20;font-family:MyriadPro-Regular, Myriad Pro">Catalogues</text>
                                </svg>
                            </div>
                        </a>
                        <a href="#" style="display : block; width:100px;height:110px; position:relative;z-index:999;text-decoration: none; margin-right:-5px;">
                            <div style="width:90px;height:30px;margin-top:-20px; margin-right:-5px">
                                <svg style="width:300" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 195.32299">
                                    <title>Documentation</title>
                                    <rect x="2.82102" y="143.34596" width="171.49714" height="47.67979" style="fill:none;stroke:#231f20;stroke-miterlimit:10;stroke-width:4px" />
                                    <line x1="134.31816" y1="-2.01148" x2="43.94408" y2="143.34596" style="fill:none;stroke:#231f20;stroke-miterlimit:10;stroke-width:4px" />
                                    <text text-anchor="middle" transform="translate(88 173.36152)" style="font-size:22.625242233276367px;fill:#231f20;font-family:MyriadPro-Regular, Myriad Pro">Documentation</text>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="mobile-menu-toggle"> <span></span> </div>
            <!--
            <ul class="secondary-menu" role="nav">
                <li class="main-search">
                    <form method="get" id="main-search-form" action="#">
                        <input type="search" placeholder="Rechercher" value="" name="s" id="s">
                        <input class="search" type="submit" id="search" value="GO">
                    </form>
                </li>
            </ul>
          -->
        </div>
        <style>
        .dropdown-submenu {
            position: relative;
        }
        
        .dropdown-submenu .dropdown-menu {
            top: 0;
            left: 100%;
        }
        </style>
        <nav class="menu-header">
            <ul class="main-menu" role="nav">
                <!-- 2 12-->
                <li class="menu-item  has-submenu ">
                    <a href="javascript:void(0)" class="menu-item-name">
            À propos du musée
          </a>
                    <a href="#" class="submenu-toggle"></a>
                    <ul class="submenu" role="nav">
                        <!-- 7 12-->
                        <li class="menu-item submenu-item ">
                            <a href="../histoire-reseau-exceptionnel/index.html" class="menu-item-name">
            Présentation
          </a>
                        </li>
                        <!-- 8 12-->
                        <li class="menu-item submenu-item has-submenu ">
                            <a href="../cabinet-des-estampes-et-des-dessins/index.html" class="menu-item-name">
            Histoire
          </a>
                        </li>
                        <!-- 9 12-->
                        <li class="menu-item submenu-item has-submenu ">
                            <a href="../musee-alsacien/index.html" class="menu-item-name">
            Objectifs du musée
          </a>
                        </li>
                        <li class="menu-item submenu-item has-submenu ">
                            <a href="Artistes.php" class="menu-item-name">
            Artistes
          </a>
                        </li>
                        <li class="menu-item submenu-item has-submenu ">
                            <a href="Oeuvres.php" class="menu-item-name">
            Oeuvres
          </a>
                        </li>
                    </ul>
                </li>
                <!-- 3 12-->
                <li class="menu-item  has-submenu ">
                    <a href="javascript:void(0)" class="menu-item-name">
            Agenda &amp; Expositions
          </a>  
            <a href="#" class="submenu"></a>
                    <ul class="submenu " role="nav">
                        <li class="menu-item submenu-item">
                            <a class="test menu-item-name" tabindex="-1" href="Expositions.php" style="font-size: 12.5px;">Toutes les Expositions<span class="caret"></span></a>
                        </li>

                    
                    <?php
                    foreach($Data as $rw)

                        echo'

                        <!-- 1458 12-->
                        
                        <li class="dropdown-submenu menu-item submenu-item">
                            <a class="test menu-item-name" tabindex="-1" href="#">'.$rw['Nom'].'<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a tabindex="-1" href="Exposition.php?ID='.$rw['ID'].'">Exposition</a></li>
                                <li><a tabindex="-1" href="Salons.php?ID='.$rw['ID'].'">Salons</a></li>
                                <li><a tabindex="-1" href="Oeuvres.php?ID='.$rw['ID'].'">Oeuvres</a></li>
                                <li><a tabindex="-1" href="Artistes.php?ID='.$rw['ID'].'">Artistes</a></li>
                            </ul>
                        </li>
                    ';
                        ?>
                        </ul>
                </li>
            </ul>
        </nav>
