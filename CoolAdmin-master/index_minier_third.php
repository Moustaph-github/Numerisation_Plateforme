<?php
    include("../Model/db.php");
    session_start();

    $req = $bdd->prepare('SELECT * FROM minier_third');
    $req->execute();
    $enregminier = $req->fetchAll(PDO::FETCH_OBJ);

    if(isset($_POST["exporter"]))
    {
        
        if($enregminier > 0)
        {
            $excel = "";
            $excel .= "Id\teau_contaminee\tobservations_eau_contaminee\tviolation_protection_forets\tobservations_violation_protection_forets\tproblemes_erosion\tobservations_problemes_erosion\tdestructions_environnementales\ttravaux_historiques_mines\tcommunautes_locales\tinterventions_eie\tobservations_interventions_eie\texpert_environnement\tobservations_expert_environnement\tpepiniere_disponible\tobservations_pepiniere_disponible\tdigue_steriles\tobservations_digue_steriles\tbassin_decantation\tobservations_bassin_decantation\tmesures_protection\tobservations_mesures_protection\tdechets_miniers\tobservations_dechets_miniers\trestauration_excavations\tobservations_restauration_excavations\tsol_empile\tobservations_sol_empile\treforestation\tobservations_reforestation\tnon_conformite_critique\tobservations_non_conformite_critique\tnon_conformite_serieuse\tobservations_non_conformite_serieuse\tetude_base\tobservations_etude_base\tqualite_eau\tobservations_qualite_eau\tvibrations\tobservations_vibrations\tsurveillance_poussiere\tobservations_surveillance_poussiere\tproduits_chimiques\tobservations_produits_chimiques\tsurveillance_chimiques\tobservations_surveillance_chimiques\tetude_eie\tobservations_etude_eie\tplan_gestion_environnementale\tobservations_plan_gestion_environnementale\texecution_eie\tobservations_execution_eie\tgestion_dechets_miniers\tobservations_gestion_dechets_miniers\tsubstances_dangereuses\tobservations_substances_dangereuses\tsurveillance_environnement\tobservations_surveillance_environnement\tfermeture_mine\tobservations_fermeture_mine\tprovisions\tobservations_provisions\tplan_urgence\tobservations_plan_urgence\tplan_site\tobservations_plan_site\tresponsables\tobservations_responsables\tsecours\tobservations_secours\tequipements_secours\tobservations_equipements_secours\templacement_equipement\tobservations_emplacement_equipement\taccidents_travail\tobservations_accidents_travail\tconsignes_securite\tobservations_consignes_securite\tevaluation_risque\tobservations_evaluation_risque\tpreuve_formation\tobservations_preuve_formation\tprocedures_operationnelles\tobservations_procedures_operationnelles\tagent_sante\tobservations_agent_sante\tconsignes_orpailleurs\tobservations_consignes_orpailleurs\trapport_mensuel_accidents\tobservations_rapport_mensuel_accidents\trapport_annuel_accidents\tobservations_rapport_annuel_accidents\tdocumentation_blessures\tobservations_documentation_blessures\tdocumentation_incidents\tobservations_documentation_incidents\ttoilettes_hygieniques\tobservations_toilettes_hygieniques\tdouches_hygieniques\tobservations_douches_hygieniques\ttoilettes_vestiaires\tobservations_toilettes_vestiaires\teau_potable\tobservations_eau_potable\tbrochures_infos\tobservations_brochures_infos\tprogram_sensibilisation\tobservations_program_sensibilisation\n";
            
            
            foreach($enregminier as $enregminier){
                $excel .= "$enregminier->id\t$enregminier->eau_contaminee\t$enregminier->observations_eau_contaminee\t$enregminier->violation_protection_forets\t$enregminier->observations_violation_protection_forets\t$enregminier->problemes_erosion\t$enregminier->observations_problemes_erosion\t$enregminier->destructions_environnementales\t$enregminier->travaux_historiques_mines\t$enregminier->communautes_locales\t$enregminier->interventions_eie\t$enregminier->observations_interventions_eie\t$enregminier->expert_environnement\t$enregminier->observations_expert_environnement\t$enregminier->pepiniere_disponible\t$enregminier->observations_pepiniere_disponible\t$enregminier->digue_steriles\t$enregminier->observations_digue_steriles\t$enregminier->bassin_decantation\t$enregminier->observations_bassin_decantation\t$enregminier->mesures_protection\t$enregminier->observations_mesures_protection\t$enregminier->dechets_miniers\t$enregminier->observations_dechets_miniers\t$enregminier->restauration_excavations\t$enregminier->observations_restauration_excavations\t$enregminier->sol_empile\t$enregminier->observations_sol_empile\t$enregminier->reforestation\t$enregminier->observations_reforestation\t$enregminier->non_conformite_critique\t$enregminier->observations_non_conformite_critique\t$enregminier->non_conformite_serieuse\t$enregminier->observations_non_conformite_serieuse\t$enregminier->etude_base\t$enregminier->observations_etude_base\t$enregminier->qualite_eau\t$enregminier->observations_qualite_eau\t$enregminier->vibrations\t$enregminier->observations_vibrations\t$enregminier->surveillance_poussiere\t$enregminier->observations_surveillance_poussiere\t$enregminier->produits_chimiques\t$enregminier->observations_produits_chimiques\t$enregminier->surveillance_chimiques\t$enregminier->observations_surveillance_chimiques\t$enregminier->etude_eie\t$enregminier->observations_etude_eie\t$enregminier->plan_gestion_environnementale\t$enregminier->observations_plan_gestion_environnementale\t$enregminier->execution_eie\t$enregminier->observations_execution_eie\t$enregminier->gestion_dechets_miniers\t$enregminier->observations_gestion_dechets_miniers\t$enregminier->substances_dangereuses\t$enregminier->observations_substances_dangereuses\t$enregminier->surveillance_environnement\t$enregminier->observations_surveillance_environnement\t$enregminier->fermeture_mine\t$enregminier->observations_fermeture_mine\t$enregminier->provisions\t$enregminier->observations_provisions\t$enregminier->plan_urgence\t$enregminier->observations_plan_urgence\t$enregminier->plan_site\t$enregminier->observations_plan_site\t$enregminier->responsables\t$enregminier->observations_responsables\t$enregminier->secours\t$enregminier->observations_secours\t$enregminier->equipements_secours\t$enregminier->observations_equipements_secours\t$enregminier->emplacement_equipement\t$enregminier->observations_emplacement_equipement\t$enregminier->accidents_travail\t$enregminier->observations_accidents_travail\t$enregminier->consignes_securite\t$enregminier->observations_consignes_securite\t$enregminier->evaluation_risque\t$enregminier->observations_evaluation_risque\t$enregminier->preuve_formation\t$enregminier->observations_preuve_formation\t$enregminier->procedures_operationnelles\t$enregminier->observations_procedures_operationnelles\t$enregminier->agent_sante\t$enregminier->observations_agent_sante\t$enregminier->consignes_orpailleurs\t$enregminier->observations_consignes_orpailleurs\t$enregminier->rapport_mensuel_accidents\t$enregminier->observations_rapport_mensuel_accidents\t$enregminier->rapport_annuel_accidents\t$enregminier->observations_rapport_annuel_accidents\t$enregminier->documentation_blessures\t$enregminier->observations_documentation_blessures\t$enregminier->documentation_incidents\t$enregminier->observations_documentation_incidents\t$enregminier->toilettes_hygieniques\t$enregminier->observations_toilettes_hygieniques\t$enregminier->douches_hygieniques\t$enregminier->observations_douches_hygieniques\t$enregminier->toilettes_vestiaires\t$enregminier->observations_toilettes_vestiaires\t$enregminier->eau_potable\t$enregminier->observations_eau_potable\t$enregminier->brochures_infos\t$enregminier->observations_brochures_infos\t$enregminier->program_sensibilisation\t$enregminier->observations_program_sensibilisation\n";
            }
            header('Content-type: application/vnd.ms-excel');
            header('Content-disposition: attachment; filename=minier-third.xls');

            print $excel;
            exit;
        }
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <!--<img src="images/icon/logo.png" alt="CoolAdmin" />-->
                            <h1>AUDIT MINIER</h1>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.php">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.php">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.php">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.php">Dashboard 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="chart.php">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.php">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.php">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="calendar.php">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.php">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.php">Login</a>
                                </li>
                                <li>
                                    <a href="register.php">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.php">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="button.php">Button</a>
                                </li>
                                <li>
                                    <a href="badge.php">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.php">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.php">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.php">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.php">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.php">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.php">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.php">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.php">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.php">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <!-- <img src="images/icon/logo.png" alt="Cool Admin" />-->
                    <img src="../assets/img/Senegal Flag.png" style="padding:auto; margin:auto;" width="25%" height="10%" alt="">
                    <img src="images/icon/Marex.jpeg" style="padding:auto; margin:auto;" width="25%" height="10%" alt="">
                    <br>
                    <h6>
                    MMG/DCSOM/Guide d'inspection des mines et carrières
                    </h6>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="index.php">Etape 1</a>
                                </li>
                                <li>
                                    <a href="index_minier_second.php">Etape 2</a>
                                </li>
                                <li>
                                    <a href="index_minier_third.php">Etape 3</a>
                                </li>
                                <li>
                                    <a href="index_minier_fourth.php">Etape 4</a>
                                </li>
                                <li>
                                    <a href="index_minier_five.php">Etape 5</a>
                                </li>
                                <li>
                                    <a href="index_minier_six.php">Etape 6</a>
                                </li>
                                <li>
                                    <a href="index_minier_seven.php">Etape 7</a>
                                </li>
                            </ul>
                        </li>
                        <!--<li>
                            <a href="chart.php">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>-->
                        <!--<li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>-->
                        <!--<li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>-->
                        <!--<li>
                            <a href="calendar.html">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>-->
                        <!--<li>
                            <a href="map.php">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>-->
                        <!--<li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>-->
                        <!--<li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>-->
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                
                            </form>
                            <div class="header-button">
                                
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/Marex.jpeg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php $_SESSION['username'] ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/Marex.jpeg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php $_SESSION['username'] ?></a>
                                                    </h5>
                                                    <span class="email">Admin</span>
                                                </div>
                                            </div>
                                            
                                            <div class="account-dropdown__footer">
                                                <a href="disconnect.php">
                                                    <i class="zmdi zmdi-power"></i>deconnexion</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <!--<div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">overview</h2>
                                    <button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>add item</button>
                                </div>
                            </div>
                        </div>-->
                        <!--<div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2>10368</h2>
                                                <span>members online</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                            <div class="text">
                                                <h2>388,688</h2>
                                                <span>items solid</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                                <h2>1,086</h2>
                                                <span>this week</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-money"></i>
                                            </div>
                                            <div class="text">
                                                <h2>$1,060,386</h2>
                                                <span>total earnings</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                        <!--<div class="row">
                            <div class="col-lg-6">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <h3 class="title-2">recent reports</h3>
                                        <div class="chart-info">
                                            <div class="chart-info__left">
                                                <div class="chart-note">
                                                    <span class="dot dot--blue"></span>
                                                    <span>products</span>
                                                </div>
                                                <div class="chart-note mr-0">
                                                    <span class="dot dot--green"></span>
                                                    <span>services</span>
                                                </div>
                                            </div>
                                            <div class="chart-info__right">
                                                <div class="chart-statis">
                                                    <span class="index incre">
                                                        <i class="zmdi zmdi-long-arrow-up"></i>25%</span>
                                                    <span class="label">products</span>
                                                </div>
                                                <div class="chart-statis mr-0">
                                                    <span class="index decre">
                                                        <i class="zmdi zmdi-long-arrow-down"></i>10%</span>
                                                    <span class="label">services</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="recent-report__chart">
                                            <canvas id="recent-rep-chart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="au-card chart-percent-card">
                                    <div class="au-card-inner">
                                        <h3 class="title-2 tm-b-5">char by %</h3>
                                        <div class="row no-gutters">
                                            <div class="col-xl-6">
                                                <div class="chart-note-wrap">
                                                    <div class="chart-note mr-0 d-block">
                                                        <span class="dot dot--blue"></span>
                                                        <span>products</span>
                                                    </div>
                                                    <div class="chart-note mr-0 d-block">
                                                        <span class="dot dot--red"></span>
                                                        <span>services</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="percent-chart">
                                                    <canvas id="percent-chart"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Enregistrement des Sites Miniers</h2>
                                <form action="index_minier_third.php" method="post">
                                    <button name="exporter" type="submit" class="btn btn-lg btn-info btn-block">
                                        <i class="fa fa-step fa-lg"></i>&nbsp;
                                        <span id="payment-button-amount">Téléchargement document</span>
                                    </button>
                                </form>
                                <br>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Eau Contaminee</th>
                                                <th>Observations Eau Contaminee</th>
                                                <th>Violation Protection Forets</th>
                                                <th class="text-right">Observations Violation Protection Forets</th>
                                                <th class="text-right">Problemes erosion</th>
                                                <th class="text-right">Observations Problemes erosion</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php if($enregminier):
                                                foreach($enregminier as $enregminier): ?>
                                                <tr>
                                                    <td><?=$enregminier->eau_contaminee;?></td>
                                                    <td><?=$enregminier->observations_eau_contaminee;?></td>
                                                    <td><?=$enregminier->violation_protection_forets;?></td>
                                                    <td><?=$enregminier->observations_violation_protection_forets;?></td>
                                                    <td><?=$enregminier->problemes_erosion;?></td>
                                                    <td><?=$enregminier->observations_problemes_erosion;?></td>
                                                </tr>

                                            <?php endforeach; endif; ?>
                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2023 Inspection Minière. Tous droits réservés. République du Sénégal <a href="index.php">Marex</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
