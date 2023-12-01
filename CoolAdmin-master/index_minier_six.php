<?php
    include("../Model/db.php");
    session_start();

    $req = $bdd->prepare('SELECT * FROM minier_six');
    $req->execute();
    $enregminier = $req->fetchAll(PDO::FETCH_OBJ);

    if(isset($_POST["exporter"]))
    {
        
        if($enregminier > 0)
        {
            $excel = "";
            $excel .= "Id\tforum_discussion\tobservations_forum_discussion\tdepuis_quand\trencontres_regulieres\tobservations_rencontres_regulieres\tgroupes\tobservations_groupes\tentreprises_locales\tobservations_entreprises_locales\tdeveloppement_local\tobservations_developpement_local\tgarantie_moyens\tobservations_garantie_moyens\tinfrastructure_locale\tobservations_infrastructure_locale\teducation_formation\tobservations_education_formation\trenforcement_capacites\tobservations_renforcement_capacites\taspects_genre\tobservations_aspects_genre\telements_ad_hoc\tobservations_elements_ad_hoc\tautorites_locales\tobservations_autorites_locales\tacquisition_terrain\tobservations_acquisition_terrain\tusage_eaux\tobservations_usage_eaux\tusage_forets\tobservations_usage_forets\timpacts_miniers\tobservations_impacts_miniers\tautre_impact_minier\tplaintes\tobservations_plaintes\tnon_conformite_critique\tobservations_non_conformite_critique\tnon_conformite_serieuse\tobservations_non_conformite_serieuse\tcommentaire_un\tcommentaire_deux\tcommentaire_trois\trepresentant_principal\ttitre_fonction\tsignature_numerique\tgestionnaire_responsable\tcommentaire_gestionnaire\tproduction_miniere\tresultats_inspection\tchangements_procedures\tproduction_site_minier\trisque_fraude_minerale\tgroupes_armes\timpot_illegal\textorque_mineraux\toperations_legales\tmineurs\ttravail_sans_recommandation\tpaiements_organisations_illegales\tpaiements_organisations_politiques\tenvois_minerais\tminerais_designes\tetat_non_conformite\tetat_critique_non_conformite\tetat_grave_non_conformite\tsocietes_affiliees\tminerais_points_acces\tactions_mineraux_proprietaires\tperformance_environnement\tagents_gouvernement\tproprietaire_site_minier\tacteurs_site_minier\tempreinte_analytique_afp\trelations_communautaires\n";
            
            
            foreach($enregminier as $enregminier){
                $excel .= "$enregminier->id\t$enregminier->forum_discussion\t$enregminier->observations_forum_discussion\t$enregminier->depuis_quand\t$enregminier->rencontres_regulieres\t$enregminier->observations_rencontres_regulieres\t$enregminier->groupes\t$enregminier->observations_groupes\t$enregminier->entreprises_locales\t$enregminier->observations_entreprises_locales\t$enregminier->developpement_local\t$enregminier->observations_developpement_local\t$enregminier->garantie_moyens\t$enregminier->observations_garantie_moyens\t$enregminier->infrastructure_locale\t$enregminier->observations_infrastructure_locale\t$enregminier->education_formation\t$enregminier->observations_education_formation\t$enregminier->renforcement_capacites\t$enregminier->observations_renforcement_capacites\t$enregminier->aspects_genre\t$enregminier->observations_aspects_genre\t$enregminier->elements_ad_hoc\t$enregminier->observations_elements_ad_hoc\t$enregminier->autorites_locales\t$enregminier->observations_autorites_locales\t$enregminier->acquisition_terrain\t$enregminier->observations_acquisition_terrain\t$enregminier->usage_eaux\t$enregminier->observations_usage_eaux\t$enregminier->usage_forets\t$enregminier->observations_usage_forets\t$enregminier->impacts_miniers\t$enregminier->observations_impacts_miniers\t$enregminier->autre_impact_minier\t$enregminier->plaintes\t$enregminier->observations_plaintes\t$enregminier->non_conformite_critique\t$enregminier->observations_non_conformite_critique\t$enregminier->non_conformite_serieuse\t$enregminier->observations_non_conformite_serieuse\t$enregminier->commentaire_un\t$enregminier->commentaire_deux\t$enregminier->commentaire_trois\t$enregminier->representant_principal\t$enregminier->titre_fonction\t$enregminier->signature_numerique\t$enregminier->gestionnaire_responsable\t$enregminier->commentaire_gestionnaire\t$enregminier->production_miniere\t$enregminier->resultats_inspection\t$enregminier->changements_procedures\t$enregminier->production_site_minier\t$enregminier->risque_fraude_minerale\t$enregminier->groupes_armes\t$enregminier->impot_illegal\t$enregminier->extorque_mineraux\t$enregminier->operations_legales\t$enregminier->mineurs\t$enregminier->travail_sans_recommandation\t$enregminier->paiements_organisations_illegales\t$enregminier->paiements_organisations_politiques\t$enregminier->envois_minerais\t$enregminier->minerais_designes\t$enregminier->etat_non_conformite\t$enregminier->etat_critique_non_conformite\t$enregminier->etat_grave_non_conformite\t$enregminier->societes_affiliees\t$enregminier->minerais_points_acces\t$enregminier->actions_mineraux_proprietaires\t$enregminier->performance_environnement\t$enregminier->agents_gouvernement\t$enregminier->proprietaire_site_minier\t$enregminier->acteurs_site_minier\t$enregminier->empreinte_analytique_afp\t$enregminier->relations_communautaires\n";
            }
            header('Content-type: application/vnd.ms-excel');
            header('Content-disposition: attachment; filename=minier-six.xls');

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
                                <form action="index_minier_six.php" method="post">
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
                                                <th>Forum de discussion</th>
                                                <th>Observations Forum de discussion</th>
                                                <th>Depuis quand</th>
                                                <th class="text-right">Rencontres regulieres</th>
                                                <th class="text-right">Observations Rencontres regulieres</th>
                                                <th class="text-right">Groupes</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php if($enregminier):
                                                foreach($enregminier as $enregminier): ?>
                                                <tr>
                                                    <td><?=$enregminier->forum_discussion;?></td>
                                                    <td><?=$enregminier->observations_forum_discussion;?></td>
                                                    <td><?=$enregminier->depuis_quand;?></td>
                                                    <td><?=$enregminier->rencontres_regulieres;?></td>
                                                    <td><?=$enregminier->observations_rencontres_regulieres;?></td>
                                                    <td><?=$enregminier->groupes;?></td>
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
