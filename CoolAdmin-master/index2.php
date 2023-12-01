<?php
    include("../Model/db.php");
    session_start();

    $req = $bdd->prepare('SELECT * FROM minier_first');
    $req->execute();
    $enregminier = $req->fetchAll(PDO::FETCH_OBJ);

    if(isset($_POST["exporter"]))
    {
        
        if($enregminier > 0)
        {
            $excel = "";
            $excel .= "Id\tbd_sondages_miniers\tmesures_controle_verification\tpersonne_qualifiee\tnature_limitations_eventuelles\tchecking_datas\testimation_reserves\tplan_exploitation\tmethodes_echantillonnage\tdescription_methodologie\tdescription_sondage_echantillonnage_recuperation\tdiscussion_echantillon\tdescription_types_roches\tstatistique_echantillon\tsuivi_evaluation_echantillon\tprotocole_cq_aq\tproprete\tsecurite\tinventaire_plateau\tcontrole_inventaire\tnoyau\tproprete_laboratoire\tprotocole_etalonnage_labo\tdiscussion_protocole_cq\tpreparation_echantillon\tanalyse_echantillon\tnature_etendue_mesure\tadequation_procedures\tdonnees_vers_bd\tminerais_exploites\tobservations_produit_secondaire\tgrandes_mines_ciel_ouvert\tpetites_mines_ciel_ouvert\tmines_souterraines\tautres_mines\ttraitement_interne_residus\tobservations_traitement_interne_residus\tachat_residus\tobservations_achat_residus\tvente_residus_traitement\tobservations_vente_residus_traitement\tproportion_vente\tterrils_residus\tobservations_terrils_residus\tnombre_dimensions\tchecking_infos\tautres_infos\tmethodes_exploitation\tautres_methodes_exploitation\tcompresseurs\tequipements_lourds\tmarteau_piqueur\tpompes_eau\tequipement_bonne_condition\tequipement_en_panne\tplan_formation_operateurs\tautres_equipements\torpaillage\tconcasseur_broyeur\tjigs\ttable_secousses\tlixiviation\tamalgamation\tautres_methodes_exploitations\tperte_minerais_fins\tproduits_economiques\tpre_concentre\tconcentre\tresidu_traitement\tautre_produit_economique\tdebut_activites_minieres\tduree_activites_minieres\thauteurs_fronts_puits\tgranulometrie\tminerais_produits_secondaires\tcapacite_machines_extraction\tcapacite_machines_traitement\tmodalite_transport_minerai\tmodalite_transport_concentre\tquantites_globales_mines\tteneur_moyenne_alimentation\tteneur_moyenne_concentre\ttaux_recuperation_moyen\tquantites_produites_type\tquantites_vendues_mines\tstocks_ouverture_produits\tstocks_fermeture_produits\tacheteurs\tproduits_vendus\tprix_ventes_produit\trecettes_produits_vendus\ttonnage_produit\ttonnage_vendu\tstocks_terril\tmodalite_controle\tautres_modalites_controle\tnum_identification_fiscale\tformes_paiement\tinstitutions_paiement\tmontants_payes_institution\tfrequence_paiement\tnature_paiement\tpaiements_impot\tindications_paiement\tpaiements_gouvernement\tprecision_paiement\tredevances_concentre_principal\tredevances_residus_valorises\n";
            
            
            foreach($enregminier as $enregminier){
                $excel .= "$enregminier->id\t$enregminier->bd_sondages_miniers\t$enregminier->mesures_controle_verification\t$enregminier->personne_qualifiee\t$enregminier->nature_limitations_eventuelles\t$enregminier->checking_datas\t$enregminier->estimation_reserves\t$enregminier->plan_exploitation\t$enregminier->methodes_echantillonnage\t$enregminier->description_methodologie\t$enregminier->description_sondage_echantillonnage_recuperation\t$enregminier->discussion_echantillon\t$enregminier->description_types_roches\t$enregminier->statistique_echantillon\t$enregminier->suivi_evaluation_echantillon\t$enregminier->protocole_cq_aq\t$enregminier->proprete\t$enregminier->securite\t$enregminier->inventaire_plateau\t$enregminier->controle_inventaire\t$enregminier->noyau\t$enregminier->proprete_laboratoire\t$enregminier->protocole_etalonnage_labo\t$enregminier->discussion_protocole_cq\t$enregminier->preparation_echantillon\t$enregminier->analyse_echantillon\t$enregminier->nature_etendue_mesure\t$enregminier->adequation_procedures\t$enregminier->donnees_vers_bd\t$enregminier->minerais_exploites\t$enregminier->observations_produit_secondaire\t$enregminier->grandes_mines_ciel_ouvert\t$enregminier->petites_mines_ciel_ouvert\t$enregminier->mines_souterraines\t$enregminier->autres_mines\t$enregminier->traitement_interne_residus\t$enregminier->observations_traitement_interne_residus\t$enregminier->achat_residus\t$enregminier->observations_achat_residus\t$enregminier->vente_residus_traitement\t$enregminier->observations_vente_residus_traitement\t$enregminier->proportion_vente\t$enregminier->terrils_residus\t$enregminier->observations_terrils_residus\t$enregminier->nombre_dimensions\t$enregminier->checking_infos\t$enregminier->autres_infos\t$enregminier->methodes_exploitation\t$enregminier->autres_methodes_exploitation\t$enregminier->compresseurs\t$enregminier->equipements_lourds\t$enregminier->marteau_piqueur\t$enregminier->pompes_eau\t$enregminier->equipement_bonne_condition\t$enregminier->equipement_en_panne\t$enregminier->plan_formation_operateurs\t$enregminier->autres_equipements\t$enregminier->orpaillage\t$enregminier->concasseur_broyeur\t$enregminier->jigs\t$enregminier->table_secousses\t$enregminier->lixiviation\t$enregminier->amalgamation\t$enregminier->autres_methodes_exploitations\t$enregminier->perte_minerais_fins\t$enregminier->produits_economiques\t$enregminier->pre_concentre\t$enregminier->concentre\t$enregminier->residu_traitement\t$enregminier->autre_produit_economique\t$enregminier->debut_activites_minieres\t$enregminier->duree_activites_minieres\t$enregminier->hauteurs_fronts_puits\t$enregminier->granulometrie\t$enregminier->minerais_produits_secondaires\t$enregminier->capacite_machines_extraction\t$enregminier->capacite_machines_traitement\t$enregminier->modalite_transport_minerai\t$enregminier->modalite_transport_concentre\t$enregminier->quantites_globales_mines\t$enregminier->teneur_moyenne_alimentation\t$enregminier->teneur_moyenne_concentre\t$enregminier->taux_recuperation_moyen\t$enregminier->quantites_produites_type\t$enregminier->quantites_vendues_mines\t$enregminier->stocks_ouverture_produits\t$enregminier->stocks_fermeture_produits\t$enregminier->acheteurs\t$enregminier->produits_vendus\t$enregminier->prix_ventes_produit\t$enregminier->recettes_produits_vendus\t$enregminier->tonnage_produit\t$enregminier->tonnage_vendu\t$enregminier->stocks_terril\t$enregminier->modalite_controle\t$enregminier->autres_modalites_controle\t$enregminier->num_identification_fiscale\t$enregminier->formes_paiement\t$enregminier->institutions_paiement\t$enregminier->montants_payes_institution\t$enregminier->frequence_paiement\t$enregminier->nature_paiement\t$enregminier->paiements_impot\t$enregminier->indications_paiement\t$enregminier->paiements_gouvernement\t$enregminier->precision_paiement\t$enregminier->redevances_concentre_principal\t$enregminier->redevances_residus_valorises\n";
            }
            header('Content-type: application/vnd.ms-excel');
            header('Content-disposition: attachment; filename=minier-first.xls');

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
                                    <a href="index.php">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index.php">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index.php">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.php">Dashboard 4</a>
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
                        <li>
                            <a href="map.php">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
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
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                <form action="index2.php" method="post">
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
                                                <th>Sondage Minier</th>
                                                <th>Mesures Controle verification</th>
                                                <th>Personne qualifiee</th>
                                                <th class="text-right">Nature limitations eventuelles</th>
                                                <th class="text-right">Verification donnees</th>
                                                <th class="text-right">Plan exploitation</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php if($enregminier):
                                                foreach($enregminier as $enregminier): ?>
                                                <tr>
                                                    <td><?=$enregminier->bd_sondages_miniers;?></td>
                                                    <td><?=$enregminier->mesures_controle_verification;?></td>
                                                    <td><?=$enregminier->personne_qualifiee;?></td>
                                                    <td><?=$enregminier->nature_limitations_eventuelles;?></td>
                                                    <td><?=$enregminier->checking_datas;?></td>
                                                    <td><?=$enregminier->estimation_reserves;?></td>
                                                </tr>

                                            <?php endforeach; endif; ?>
                                            
                                            <tr>
                                                <td>2018-09-29 05:57</td>
                                                <td>100398</td>
                                                <td>iPhone X 64Gb Grey</td>
                                                <td class="text-right">$999.00</td>
                                                <td class="text-right">1</td>
                                                <td class="text-right">$999.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-28 01:22</td>
                                                <td>100397</td>
                                                <td>Samsung S8 Black</td>
                                                <td class="text-right">$756.00</td>
                                                <td class="text-right">1</td>
                                                <td class="text-right">$756.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-27 02:12</td>
                                                <td>100396</td>
                                                <td>Game Console Controller</td>
                                                <td class="text-right">$22.00</td>
                                                <td class="text-right">2</td>
                                                <td class="text-right">$44.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-26 23:06</td>
                                                <td>100395</td>
                                                <td>iPhone X 256Gb Black</td>
                                                <td class="text-right">$1199.00</td>
                                                <td class="text-right">1</td>
                                                <td class="text-right">$1199.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-25 19:03</td>
                                                <td>100393</td>
                                                <td>USB 3.0 Cable</td>
                                                <td class="text-right">$10.00</td>
                                                <td class="text-right">3</td>
                                                <td class="text-right">$30.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-29 05:57</td>
                                                <td>100392</td>
                                                <td>Smartwatch 4.0 LTE Wifi</td>
                                                <td class="text-right">$199.00</td>
                                                <td class="text-right">6</td>
                                                <td class="text-right">$1494.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-24 19:10</td>
                                                <td>100391</td>
                                                <td>Camera C430W 4k</td>
                                                <td class="text-right">$699.00</td>
                                                <td class="text-right">1</td>
                                                <td class="text-right">$699.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-22 00:43</td>
                                                <td>100393</td>
                                                <td>USB 3.0 Cable</td>
                                                <td class="text-right">$10.00</td>
                                                <td class="text-right">3</td>
                                                <td class="text-right">$30.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2023 Inspection Minière. Tous droits réservés. République du Sénégal <a href="index.php">Colorlib</a>.</p>
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
