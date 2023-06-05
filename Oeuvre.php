<!DOCTYPE html>
<html class="ltr" dir="ltr" lang="fr-FR">

<head>
    <title>Musée National d’Art moderne et contemporain - MACAM</title>
    <meta content="initial-scale=1.0, width=device-width" name="viewport" />
    <meta content="text/html; charset=utf-8" http-equiv="content-type" />
    <link href="css/mentions.css" rel="stylesheet" type="text/css" />
    <link href="css/main.css" rel="stylesheet" type="text/css" />
    <link class="lfr-css-file" data-senna-track="temporary" href="css/aui-browserId=other&themeId=museumtheme_WAR_museumtheme&languageId=fr_FR&b=7006&t=1572273473205.css" id="liferayAUICSS" rel="stylesheet" type="text/css" />
    <link data-senna-track="temporary" href="css/main-browserId=other&themeId=museumtheme_WAR_museumtheme&languageId=fr_FR&b=7006&t=1572258122000.css" id="58c3ca50" rel="stylesheet" type="text/css" />
    <script src="js/barebone-browserId=other&themeId=museumtheme_WAR_museumtheme&colorSchemeId=07&minifierType=js&minifierBundleId=javascript.barebone.files&languageId=fr_FR&b=7006&t=1572261613368.jsp.html" type="text/javascript"></script>
    <link class="lfr-css-file" data-senna-track="temporary" href="css/main-browserId=other&themeId=museumtheme_WAR_museumtheme&languageId=fr_FR&b=7006&t=1572273473205.css" id="liferayThemeCSS" rel="stylesheet" type="text/css" />
    <style data-senna-track="temporary" type="text/css">
    #p_p_id_com_liferay_asset_publisher_web_portlet_AssetPublisherPortlet_INSTANCE_1yaD8rlH9wpN_ .portlet-content {
        border-width: ;
        border-style:
    }
    
    #p_p_id_com_liferay_asset_publisher_web_portlet_AssetPublisherPortlet_INSTANCE_NsYBhT0CvWpI_ .portlet-content {
        border-width: ;
        border-style:
    }
    
    #p_p_id_com_liferay_asset_publisher_web_portlet_AssetPublisherPortlet_INSTANCE_hDaAJbw058do_ .portlet-content {
        border-width: ;
        border-style:
    }
    
    #p_p_id_com_liferay_asset_publisher_web_portlet_AssetPublisherPortlet_INSTANCE_hMEIlbPArDeE_ .portlet-content {
        border-width: ;
        border-style:
    }
    
    #p_p_id_com_liferay_asset_publisher_web_portlet_AssetPublisherPortlet_INSTANCE_T4UqDwQ8NRvT_ .portlet-content {
        border-width: ;
        border-style:
    }
    </style>
</head>

<body class=" controls-visible cs-mamc yui3-skin-sam signed-out public-page site">
    <?php 
    include_once "Header.php";
    ?>
        <div id="page-content">
        </div>
        <div class="container" id="wrapper">
            <?php
                if(!isset($_GET['ID']) || empty($_GET['ID']))
                    header('Location: index.php');
                include_once "Core/ExpoC.php";
                include_once "Core/SalonC.php";
                include_once "Core/OeuvreC.php";
                include_once "Core/ArtistC.php";

                $Exp=new OeuvreC();
                $data= $Exp->GetOuv($_GET['ID']);
                foreach($data as $row)
                {
                    $Art=new ArtistC();
                    $Data=$Art->GetArtist($row['ID_Art']);
                    foreach($Data as $rw)
                    {
                        $Salon=new SalonC();
                        $Data2=$Salon->GetSalon($row['ID_Salon']);
                        foreach($Data2 as $rw2)
                        {
                            $Expo=new ExpoC();
                            $Data3=$Expo->GetExpo($rw2['ID_Expo']);
                            foreach($Data3 as $rw3)
                    echo'
            <section id="content">

                <h1 class="hide-accessible">'.$row['Nom'].'</h1>
                <div class="columns-1-2" id="main-content" role="main">
                    <div class="portlet-layout row">
                        <div class="col-md-12 portlet-column portlet-column-only" id="column-1">
                            <div class="portlet-dropzone portlet-column-content portlet-column-content-only" id="layout-column_column-1">
                                <div class="portlet-boundary portlet-boundary_eu_strasbourg_portlet_page_header_PageHeaderPortlet_  portlet-static portlet-static-end portlet-barebone page-header-portlet " id="p_p_id_eu_strasbourg_portlet_page_header_PageHeaderPortlet_INSTANCE_q0PtwB8xoRok_">
                                    <span id="p_eu_strasbourg_portlet_page_header_PageHeaderPortlet_INSTANCE_q0PtwB8xoRok"></span>
                                    <section class="portlet" id="portlet_eu_strasbourg_portlet_page_header_PageHeaderPortlet_INSTANCE_q0PtwB8xoRok">
                                        <div class="portlet-content">
                                            <h2 class="portlet-title-text">Entête de page</h2>
                                            <div class=" portlet-content-container">
                                                <div class="portlet-body">
                                                    <div class="page-header ">
                                                        <!-- Entête de page - 75% -->
                                                        <div class="page-header with-image alt-theme">
                                                            <div class="page-header-image">
                                                                <img src="Admin/'.$row['Image'].'" /> </div>
                                                            <div class="page-header-info">
                                                                <div class="page-header-title-and-share">
                                                                    <div class="page-header-title">
                                                                        <h1>'.$row['Nom'].'</h1> </div>
                                                                    
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="portlet-layout row">
                        <div class="col-md-8 portlet-column portlet-column-first" id="column-2">
                            <div class="portlet-dropzone portlet-column-content portlet-column-content-first" id="layout-column_column-2">
                                <div class="portlet-boundary portlet-boundary_com_liferay_journal_content_web_portlet_JournalContentPortlet_ portlet-static portlet-static-end portlet-barebone portlet-journal-content " id="p_p_id_com_liferay_journal_content_web_portlet_JournalContentPortlet_INSTANCE_gZECn7liOiUL_"> <span id="p_com_liferay_journal_content_web_portlet_JournalContentPortlet_INSTANCE_gZECn7liOiUL"></span>
                                    <section class="portlet" id="portlet_com_liferay_journal_content_web_portlet_JournalContentPortlet_INSTANCE_gZECn7liOiUL">
                                        <div class="portlet-content">
                                            <h2 class="portlet-title-text">'.$row['Nom'].'</h2>
                                            <div class=" portlet-content-container">
                                                <div class="portlet-body">
                                                    <div class="text-right user-tool-asset-addon-entries"> </div>
                                                    <div class="pull-right visible-interaction"> </div>
                                                    <div class="journal-content-article">
                                                        <div class="web-content">
                                                            <div class="web-content-text">
                                                                <h2>Comment s’informer&nbsp;?</h2>
                                                                <p>'.$row['Des'].'</p>
                                                                </br>
                                                               <div class="rubric-page-name"> <strong>Par: </strong> <a href="Artiste.php?ID='.$rw['ID'].'"> '.$rw['Nom'].' </a> </div>  
                                                               
                                                               <div class="rubric-page-name"> <strong>Dans: </strong> <a href="Exposition.php?ID='.$rw3['ID'].'"> '.$rw3['Nom'].' </a>/<a href="Salon.php?ID='.$rw2['ID'].'"> '.$rw2['Nom'].' </a></div>
                                                               
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <form action="#" id="hrefFm" method="post" name="hrefFm"><span></span></form>
            </section>';}}}
            ?>
        </div>
        <footer id="footer" role="contentinfo">
            <div class="portlet-boundary portlet-boundary_com_liferay_journal_content_web_portlet_JournalContentPortlet_ portlet-static portlet-static-end portlet-barebone portlet-journal-content " id="p_p_id_com_liferay_journal_content_web_portlet_JournalContentPortlet_"> <span id="p_com_liferay_journal_content_web_portlet_JournalContentPortlet"></span>
                <section class="portlet" id="portlet_com_liferay_journal_content_web_portlet_JournalContentPortlet">
                    <div class="portlet-content">
                        <h2 class="portlet-title-text">Footer</h2>
                        <div class=" portlet-content-container">
                            <div class="portlet-body">
                                <div class="text-right user-tool-asset-addon-entries"> </div>
                                <div class="pull-right visible-interaction"> </div>
                                <div class="journal-content-article">
                                    <div class="footer-content">
                                        <div class="footer-left">
                                            <div class="footer-left-bottom">
                                                <div class="footer-contact">
                                                    <!--<img src="../o/museum-theme/images/logos/logo-musee-strasbourg.png" />-->
                                                    <div class="footer-address">
                                                        <p><strong>Cité de la culture</strong>
                                                            <br />Med V, Tunis, Tunisie</p>
                                                        <p><strong>tél. :</strong> +216 58 000 000
                                                            <br /> <strong>fax. :</strong> +216 58 000 000</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="footer-copyright">Musee National D'art Moderne Et Contemporain © 2019</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </footer>
        <nav class="header-top">
            <div class="header-top-inner">
                <!--
                <div class="strasbourg-eu-logo">
                    <a href="https://www.culture.gov.tn/" class="strasbourg-eu-link" target="_blank">
                        <img src="logo-minitere.png" alt="">
                    </a>
                </div>
              -->
                <div class="portlet-boundary portlet-boundary_com_liferay_journal_content_web_portlet_JournalContentPortlet_  portlet-static portlet-static-end portlet-barebone portlet-journal-content " id="p_p_id_com_liferay_journal_content_web_portlet_JournalContentPortlet_INSTANCE_langue_">
                    <span id="p_com_liferay_journal_content_web_portlet_JournalContentPortlet_INSTANCE_langue"></span>
                    <section class="portlet" id="portlet_com_liferay_journal_content_web_portlet_JournalContentPortlet_INSTANCE_langue">
                        <div class="portlet-content">
                            <h2 class="portlet-title-text">contact / langues</h2>
                            <div class=" portlet-content-container">
                                <div class="portlet-body">
                                    <div class="text-right user-tool-asset-addon-entries">
                                    </div>
                                    <div class="pull-right visible-interaction">
                                    </div>
                                    <div class="journal-content-article">
                                        <ul class="accessibility-menu" role="nav">
                                            <li class="access-item language">
                                                <div class="language-menu"><a class="active-language" href="#dropdown">FR</a>
                                                    <ul role="nav">
                                                        <li class="fr_FR"><a href=".index.html">FR</a></li>
                                                        <li class="en_US"><a href="https://int.musees.strasbourg.eu/zh">En</a></li>
                                                        <li class="ar_AR"><a href="https://de.musees.strasbourg.eu">Ar</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                        <script>
                                        var currentLanguageId = Liferay.ThemeDisplay.getLanguageId();
                                        $('.' + currentLanguageId).addClass('active');
                                        </script>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </nav>
    </div>
    <!-- <header id="banner" role="banner"> <div id="heading"> <h1 class="site-title"> <a class="logo custom-logo" href="https://www.musees.strasbourg.eu" title="Aller à Musées de Strasbourg"> <img alt="" height="84" src="/image/layout_set_logo?img_id=4461743&amp;t=1572264708970" width="144" /> </a> <span class="site-name" title="Aller à Musées de Strasbourg"> Musées de Strasbourg </span> </h1> </div> --></header>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.dotdotdot.min.js"></script>
    <script src="js/main.js?browserId=other&minifierType=js&languageId=fr_FR&b=7006&t=1572273473205" type="text/javascript"></script>
    <!-- inject:js -->
    <!-- endinject -->
    <!-- Main Menu Ouss -->
    <script>
    $(document).ready(function() {
        $('.dropdown-submenu a.test').on("click", function(e) {
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
        });
        if ($(window).width() < 919) {
            $(".header-right").hide();
        } else {
            $(".header-right").show();
        }
        $(window).on('resize', function() {
            if ($(window).width() < 919) {
                $(".header-right").hide();
            } else {
                $(".header-right").show();
            }

        });
    });
    </script>
    <!-- Main Menu Ouss -->
</body>
</html>
       
