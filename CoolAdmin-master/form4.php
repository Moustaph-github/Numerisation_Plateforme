<?php
    include("../Model/db.php");
    session_start();

    if(isset($_POST['gouvernance_conformite_lois'])) {


        $_SESSION['arrete_attribution_titre'] = $_POST['arrete_attribution_titre'];
        $_SESSION['observations_arrete_attr_titre'] = $_POST['observations_arrete_attr_titre'];
        $_SESSION['convention_miniere'] = $_POST['convention_miniere'];
        $_SESSION['observations_convention_miniere'] = $_POST['observations_convention_miniere'];
        $_SESSION['certificat_conformite_inspection'] = $_POST['certificat_conformite_inspection'];
        $_SESSION['observations_certificat_conformite'] = $_POST['observations_certificat_conformite'];
        $_SESSION['quitus_fiscal'] = $_POST['quitus_fiscal'];
        $_SESSION['observations_quitus_fiscal'] = $_POST['observations_quitus_fiscal'];
        $_SESSION['etude_faisabilite'] = $_POST['etude_faisabilite'];
        $_SESSION['observations_etude_faisabilite'] = $_POST['observations_etude_faisabilite'];
        $_SESSION['eies'] = $_POST['eies'];
        $_SESSION['observations_eies'] = $_POST['observations_eies'];
        $_SESSION['rapport_activites_trimestriels'] = $_POST['rapport_activites_trimestriels'];
        $_SESSION['observations_rapport_activites_trimestriels'] = $_POST['observations_rapport_activites_trimestriels'];
        $_SESSION['rapport_activites_annuel'] = $_POST['rapport_activites_annuel'];
        $_SESSION['observations_rapport_activites_annuel'] = $_POST['observations_rapport_activites_annuel'];
        $_SESSION['manuel_procedure'] = $_POST['manuel_procedure'];
        $_SESSION['observations_manuel_procedure'] = $_POST['observations_manuel_procedure'];
        $_SESSION['bilan_comptable_annuel'] = $_POST['bilan_comptable_annuel'];
        $_SESSION['observations_bilan_comptable_annuel'] = $_POST['observations_bilan_comptable_annuel'];

        $_SESSION['compte_resultat'] = $_POST['compte_resultat'];
        $_SESSION['observations_compte_resultat'] = $_POST['observations_compte_resultat'];
        $_SESSION['versement_redevance'] = $_POST['versement_redevance'];
        $_SESSION['observations_versement_redevance'] = $_POST['observations_versement_redevance'];
        $_SESSION['versement_taxe_superficiaire'] = $_POST['versement_taxe_superficiaire'];
        $_SESSION['observations_versement_taxe_superficiaire'] = $_POST['observations_versement_taxe_superficiaire'];
        $_SESSION['lois_reglements'] = $_POST['lois_reglements'];
        $_SESSION['observations_lois_reglements'] = $_POST['observations_lois_reglements'];
        $_SESSION['exploitation_permis'] = $_POST['exploitation_permis'];
        $_SESSION['observations_exploitation_permis'] = $_POST['observations_exploitation_permis'];
        $_SESSION['horaire_travail'] = $_POST['horaire_travail'];
        $_SESSION['observations_horaire_travail'] = $_POST['observations_horaire_travail'];
        $_SESSION['systeme_assurance'] = $_POST['systeme_assurance'];
        $_SESSION['observations_systeme_assurance'] = $_POST['observations_systeme_assurance'];
        $_SESSION['travailleurs'] = $_POST['travailleurs'];
        $_SESSION['observations_travailleurs'] = $_POST['observations_travailleurs'];
        $_SESSION['enfants_exploitation'] = $_POST['enfants_exploitation'];
        $_SESSION['observations_enfants_exploitation'] = $_POST['observations_enfants_exploitation'];
        $_SESSION['services_supplementaires'] = $_POST['services_supplementaires'];
        $_SESSION['observations_services_supplementaires'] = $_POST['observations_services_supplementaires'];
        $_SESSION['enfants_site_sans_travail'] = $_POST['enfants_site_sans_travail'];
        $_SESSION['observations_enfants_site_sans_travail'] = $_POST['observations_enfants_site_sans_travail'];
        $_SESSION['exploitation_travail_force'] = $_POST['exploitation_travail_force'];
        $_SESSION['observations_exploitation_travail_force'] = $_POST['observations_exploitation_travail_force'];
        $_SESSION['minerais_argent'] = $_POST['minerais_argent'];
        $_SESSION['observations_minerais_argent'] = $_POST['observations_minerais_argent'];

        header("Location:form5.php");

        /*$req = $bdd->prepare('INSERT INTO minier(site_minier, date_inspection, inspecteur, num_inspecteur, sous_site_inspecte, 
        num_enreg_national, nom_exploitant, phone_exploitant, email_exploitant, siege_code_enreg, adresse_siege, type_societe, 
        nom_represen_legal, phone_representant, email_representant, responsable_site, phone_resp_site, email_resp_site, total_actionnaires,
        actionnaires, region_siege, departement_siege, commune_siege, village, utm_gps, x_gps, y_gps, surface, activites_minieres, 
        type_permis, num_degre_agrement, date_delivrance, date_expiration, type_exploitation, assurance_sociale,
        arrete_attribution_titre, observations_arrete_attr_titre, convention_miniere, observations_convention_miniere, 
        certificat_conformite_inspection, observations_certificat_conformite, quitus_fiscal, observations_quitus_fiscal,
        etude_faisabilite, observations_etude_faisabilite, eies, observations_eies, rapport_activites_trimestriels, 
        observations_rapport_activites_trimestriels, rapport_activites_annuel, observations_rapport_activites_annuel,
        manuel_procedure, observations_manuel_procedure, bilan_comptable_annuel, observations_bilan_comptable_annuel,
        compte_resultat, observations_compte_resultat, versement_redevance, observations_versement_redevance,
        versement_taxe_superficiaire, observations_versement_taxe_superficiaire, lois_reglements, observations_lois_reglements,
        exploitation_permis, observations_exploitation_permis, horaire_travail, observations_horaire_travail,
        systeme_assurance, observations_systeme_assurance, travailleurs, observations_travailleurs, 
        enfants_exploitation, observations_enfants_exploitation, services_supplementaires, observations_services_supplementaires,
        enfants_site_sans_travail, observations_enfants_site_sans_travail, exploitation_travail_force,
        observations_exploitation_travail_force, minerais_argent, observations_minerais_argent)
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,
                ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,
                ?,?,?,?,?,?,?,?,?,?,?)');*/

        /*$req->execute(array($_SESSION['site_minier'], $_SESSION['date_inspection'], $_SESSION['inspecteur'], $_SESSION['num_inspecteur'], $_SESSION['sous_site_inspecte'],
        $_SESSION['num_enreg_national'], $_SESSION['nom_exploitant'], $_SESSION['phone_exploitant'], $_SESSION['email_exploitant'], $_SESSION['siege_code_enreg'], $_SESSION['adresse_siege'],
        $_SESSION['type_societe'], $_SESSION['nom_represen_legal'], $_SESSION['phone_representant'], $_SESSION['email_representant'], $_SESSION['responsable_site'], $_SESSION['phone_resp_site'], 
        $_SESSION['email_resp_site'], $_SESSION['total_actionnaires'], $_SESSION['actionnaires'], $_SESSION['region_siege'], $_SESSION['departement_siege'], 
        $_SESSION['commune_siege'], $_SESSION['village'], $_SESSION['utm_gps'], $_SESSION['x_gps'], $_SESSION['y_gps'], $_SESSION['surface'], $_SESSION['activites_minieres'], 
        $_SESSION['type_permis'], $_SESSION['num_degre_agrement'], $_SESSION['date_delivrance'], $_SESSION['date_expiration'], 
        $_SESSION['type_exploitation'], $_SESSION['assurance_sociale'],

        $_SESSION['arrete_attribution_titre'], $_SESSION['observations_arrete_attr_titre'], $_SESSION['convention_miniere'], $_SESSION['observations_convention_miniere'], $_SESSION['certificat_conformite_inspection'],
        $_SESSION['observations_certificat_conformite'], $_SESSION['quitus_fiscal'], $_SESSION['observations_quitus_fiscal'], $_SESSION['etude_faisabilite'], $_SESSION['observations_etude_faisabilite'], $_SESSION['eies'],
        $_SESSION['observations_eies'], $_SESSION['rapport_activites_trimestriels'], $_SESSION['observations_rapport_activites_trimestriels'], $_SESSION['rapport_activites_annuel'], $_SESSION['observations_rapport_activites_annuel'], $_SESSION['manuel_procedure'], 
        $_SESSION['observations_manuel_procedure'], $_SESSION['bilan_comptable_annuel'], $_SESSION['observations_bilan_comptable_annuel'], $_SESSION['compte_resultat'], $_SESSION['observations_compte_resultat'], 
        $_SESSION['versement_redevance'], $_SESSION['observations_versement_redevance'], $_SESSION['versement_taxe_superficiaire'], $_SESSION['observations_versement_taxe_superficiaire'], $_SESSION['lois_reglements'], $_SESSION['observations_lois_reglements'], $_SESSION['exploitation_permis'], 
        $_SESSION['observations_exploitation_permis'], $_SESSION['horaire_travail'], $_SESSION['observations_horaire_travail'], $_SESSION['systeme_assurance'], 
        $_SESSION['observations_systeme_assurance'], $_SESSION['travailleurs'],
    
        $_SESSION['observations_travailleurs'], $_SESSION['enfants_exploitation'], $_SESSION['observations_enfants_exploitation'], $_SESSION['services_supplementaires'], $_SESSION['observations_services_supplementaires'],
        $_SESSION['enfants_site_sans_travail'], $_SESSION['observations_enfants_site_sans_travail'], $_SESSION['exploitation_travail_force'], $_SESSION['observations_exploitation_travail_force'], $_SESSION['minerais_argent'], $_SESSION['observations_minerais_argent']
        ));*/
        

        /*$req->closeCursor();*/

        /*var_dump($req);*/

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
    <title>Forms</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
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
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
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
                                    <a href="form4.php">Dashboard 1</a>
                                </li>
                                <!--<li>
                                    <a href="index2.html">Dashboard 2</a>
                                </li>-->
                                <!--<li>
                                    <a href="index3.html">Dashboard 3</a>
                                </li>-->
                                <!--<li>
                                    <a href="index4.html">Dashboard 4</a>
                                </li>-->
                            </ul>
                        </li>
                        <!--<li>
                            <a href="chart.html">
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
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>-->
                        <!--<li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
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
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
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
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="form.php">REFERENCE DE LA MISSION</a>
                                </li>
                                <li>
                                    <a href="form1.php">IDENTIFICATION DE L’ENTREPRISE</a>
                                </li>
                                <li>
                                    <a href="form2.php">IDENTIFICATION DU LIEU DU SITE MINIER</a>
                                </li>
                                <li>
                                    <a href="form3.php">ETAT ADMINISTRATIF DU TITRE</a>
                                </li>
                                <li>
                                    <a href="form4.php">GOUVERNANCE ET CONFORMITE AUX LOIS</a>
                                </li>
                                <li>
                                    <a href="form5.php">INVESTIGATIONS GEOLOGIQUES</a>
                                </li>
                                <li>
                                    <a href="form6.php">EXPLORATION : ACCES ET ETAT DES SITES DE SONDAGE</a>
                                </li>
                                <li>
                                    <a href="form7.php">DONNEES GEOLOGIQUES</a>
                                </li>
                                <li>
                                    <a href="form8.php">SONDAGES ET MATÉRIELS ECHANTILLONNAGE</a>
                                </li>
                                <li>
                                    <a href="form9.php">VÉRIFICATION DES DONNÉES ; QA/QC</a>
                                </li>
                                <li>
                                    <a href="form10.php">DETAILS DE LA PRODUCTION MINIERE</a>
                                </li>
                                <li>
                                    <a href="form11.php">METHODES D’EXPLOITATION MINIERE ET DE TRAITEMENT DES MINERAIS</a>
                                </li>
                                <li>
                                    <a href="form12.php">CONTRÔLE DE LA PRODUCTION</a>
                                </li>
                                <li>
                                    <a href="form13.php">PAIEMENT DES IMPOTS, TAXES ET REDEVANCES</a>
                                </li>
                                <li>
                                    <a href="form14.php">RISQUES MINIERS</a>
                                </li>
                                <li>
                                    <a href="form15.php">POLITIQUE DE L'EXPLOITANT</a>
                                </li>
                                <li>
                                    <a href="form16.php">SECURITE DU SITE</a>
                                </li>
                                <li>
                                    <a href="form17.php">SITUATION ENVIRONNEMENTALE</a>
                                </li>
                                <li>
                                    <a href="form18.php">GESTION DE L'ENVIRONNEMENT</a>
                                </li>
                                <li>
                                    <a href="form19.php">GESTION DE LA SANTE ET DE LA SECURITE AU TRAVAIL</a>
                                </li>
                                <li>
                                    <a href="form20.php">TRAVAILLEURS MINIERS</a>
                                </li>
                                <li>
                                    <a href="form21.php">SALAIRES / PAIEMENTS</a>
                                </li>
                                <li>
                                    <a href="form22.php">EQUIPEMENT DE PROTECTION INDIVIDUELLE (EPI)</a>
                                </li>
                                <li>
                                    <a href="form23.php">DEVOIR DE DILIGENCE ET TRACABILITE DES MINERAIS</a>
                                </li>
                                <li>
                                    <a href="form24.php">LA COMMUNAUTE LOCALE</a>
                                </li>
                                <li>
                                    <a href="form25.php">AUTRES COMMENTAIRES</a>
                                </li>
                                <li>
                                    <a href="form26.php">
                                    INFORMATION DE L'OPERATEUR DU SITE MINIER SUR LES CONCLUSIONS PRELIMINAIRES DE L’INSPECTION
                                    </a>
                                </li>
                                <li>
                                    <a href="form27.php">
                                    EVALUATION DE LA PLAUSIBILITE DE PRODUCTION MINIERE ET DES RISQUES
                                    </a>
                                </li>
                                <li>
                                    <a href="form28.php">EXIGENCES DE COTATION </a>
                                </li>
                                <li>
                                    <a href="form29.php">CRITERES DE PROGRES DE LA CERTIFICATON</a>
                                </li>
                                <li>
                                    <a href="form30.php">RESUME DES CONCLUSIONS ET DES RECOMMANDATIONS D’INSPECTION</a>
                                </li>
                                <li>
                                    <a href="form31.php">DECLARATION D’INSPECTEUR MINIER</a>
                                </li>
                                <li>
                                    <a href="form32.php">DECLARATION DU DIRECTEUR DE LA DCSOM</a>
                                </li>
                            </ul>
                        </li>
                        <!--<li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>-->
                        <!--<li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>-->
                        <!--<li class="active">
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>-->
                        <!--<li>
                            <a href="calendar.html">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>-->
                        <!--<li>
                            <a href="map.html">
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
                            <a href="form3.php" class="btn btn-primary"> >>> Revenir étape précédente</a>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        
                                        
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        
                                        
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        
                                        
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <!--<img src="images/icon/avatar-01.jpg" alt="John Doe" />-->
                                            <img src="images/icon/Marex.jpeg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $_SESSION['username']?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <!--<img src="images/icon/avatar-01.jpg" alt="John Doe" />-->
                                                        <img src="images/icon/Marex.jpeg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php echo $_SESSION['username']?></a>
                                                    </h5>
                                                    <span class="email">Auditeur</span>
                                                </div>
                                            </div>
                                            
                                            <div class="account-dropdown__footer">
                                                <a href="../html/logout.php">
                                                    <i class="zmdi zmdi-power"></i>déconnexion</a>
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
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Gouvernance et conformite aux lois</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">5 - Gouvernance et conformite aux lois</h3>
                                        </div>
                                        <hr>
                                        <form action="form4.php" method="post" novalidate="novalidate">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Vérification sur le site (interview auprès des mineurs), bureau de l’exploitant minier, autorités nationales, autorités locales, police, société civile (y compris la communauté locale).</label>
                                                    
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                            <strong>Disponibilité des documents administratifs</strong>
                                                        </label>
                                                    
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Arrêté d’attribution du titre</label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="arrete_attribution_titre" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="arrete_attribution_titre" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_arrete_attr_titre" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_arrete_attr_titre']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Convention minière</label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="convention_miniere" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="convention_miniere" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_convention_miniere" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_convention_miniere']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Certificat de conformité de la dernière inspection</label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="certificat_conformite_inspection" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="certificat_conformite_inspection" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_certificat_conformite" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_certificat_conformite']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Quitus Fiscal</label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="quitus_fiscal" type="checkbox" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="quitus_fiscal" type="checkbox" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_quitus_fiscal" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_quitus_fiscal']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Etude de faisabilité</label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="etude_faisabilite" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="etude_faisabilite" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_etude_faisabilite" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_etude_faisabilite']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">EIES</label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="eies" type="checkbox" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="eies" type="checkbox" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_eies" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_eies']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Rapports d’activités trimestriels déposés au ministère</label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="rapport_activites_trimestriels" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="rapport_activites_trimestriels" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_rapport_activites_trimestriels" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_rapport_activites_trimestriels']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Rapport d’activités annuel déposés au ministère</label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="rapport_activites_annuel" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="rapport_activites_annuel" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_rapport_activites_annuel" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_rapport_activites_annuel']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Manuel de procédure</label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="manuel_procedure" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="manuel_procedure" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_manuel_procedure" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_manuel_procedure']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Bilan comptable annuel certifié (contrôle des dépenses : d’exploration si PR, d’exploitation si PE et carrières)</label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="bilan_comptable_annuel" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="bilan_comptable_annuel" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_bilan_comptable_annuel" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_bilan_comptable_annuel']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Compte de résultat certifié (contrôle des dépenses)</label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="compte_resultat" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="compte_resultat" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_compte_resultat" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_compte_resultat']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Versement de redevance</label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="versement_redevance" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="versement_redevance" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_versement_redevance" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_versement_redevance']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Versement de la taxe superficiaire</label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="versement_taxe_superficiaire" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="versement_taxe_superficiaire" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_versement_taxe_superficiaire" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_versement_taxe_superficiaire']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                            <strong>Code minier / Règlement </strong>
                                                        </label>
                                                    
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Reconnaissance des Lois, réglements, et politiques nationales</label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="lois_reglements" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="lois_reglements" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_lois_reglements" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_lois_reglements']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">L’exploitation se fait en accord avec les obligations du permis</label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="exploitation_permis" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="exploitation_permis" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_exploitation_permis" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_exploitation_permis']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                            <strong>Code du travail</strong>
                                                        </label>
                                                    
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Horaire de travail disponible</label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="horaire_travail" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="horaire_travail" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_horaire_travail" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_horaire_travail']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Système d’assurance pour tous les travailleurs</label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="systeme_assurance" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="systeme_assurance" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_systeme_assurance" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_systeme_assurance']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Tous les travailleurs sont enregistrés</label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="travailleurs" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="travailleurs" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_travailleurs" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_travailleurs']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                            <strong>INDICATIONS (p. ex, soci. Civile) POUR LE TRAVAIL DES ENFANTS</strong>
                                                        </label>
                                                    
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Des enfants participent dans l’exploitation</label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="enfants_exploitation" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="enfants_exploitation" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_enfants_exploitation" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_enfants_exploitation']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Des enfants font des services supplémentaires</label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="services_supplementaires" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="services_supplementaires" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_services_supplementaires" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_services_supplementaires']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Des enfants sont présents sur le site sans y travailler</label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="enfants_site_sans_travail" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="enfants_site_sans_travail" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_enfants_site_sans_travail" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_enfants_site_sans_travail']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                            <strong>Indications sur le travail forcé</strong>
                                                        </label>
                                                    
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">L’exploitation se fait par recours au travail forcé</label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="exploitation_travail_force" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="exploitation_travail_force" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_exploitation_travail_force" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_exploitation_travail_force']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Des minerais ou de l’argent sont extorqués aux travailleurs dans le site</label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="minerais_argent" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="minerais_argent" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_minerais_argent" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_minerais_argent']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <br>
                                            
                                            <div>
                                                <button name="gouvernance_conformite_lois" id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <i class="fa fa-step fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Suivant</span>
                                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--<div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Company</strong>
                                        <small> Form</small>
                                    </div>
                                    <div class="card-body card-block">
                                        <div class="form-group">
                                            <label for="company" class=" form-control-label">Company</label>
                                            <input type="text" id="company" placeholder="Enter your company name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="vat" class=" form-control-label">VAT</label>
                                            <input type="text" id="vat" placeholder="DE1234567890" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="street" class=" form-control-label">Street</label>
                                            <input type="text" id="street" placeholder="Enter street name" class="form-control">
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-8">
                                                <div class="form-group">
                                                    <label for="city" class=" form-control-label">City</label>
                                                    <input type="text" id="city" placeholder="Enter your city" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="form-group">
                                                    <label for="postal-code" class=" form-control-label">Postal Code</label>
                                                    <input type="text" id="postal-code" placeholder="Postal Code" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="country" class=" form-control-label">Country</label>
                                            <input type="text" id="country" placeholder="Country name" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>-->
                            <!--<div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Basic Form</strong> Elements
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Static</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <p class="form-control-static">Username</p>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Text Input</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="text-input" placeholder="Text" class="form-control">
                                                    <small class="form-text text-muted">This is a help text</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Email Input</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="email" id="email-input" name="email-input" placeholder="Enter Email" class="form-control">
                                                    <small class="help-block form-text">Please enter your email</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Password</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="password" id="password-input" name="password-input" placeholder="Password" class="form-control">
                                                    <small class="help-block form-text">Please enter a complex password</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="disabled-input" class=" form-control-label">Disabled Input</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="disabled-input" name="disabled-input" placeholder="Disabled" disabled="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Textarea</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="textarea-input" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Select</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="select" id="select" class="form-control">
                                                        <option value="0">Please select</option>
                                                        <option value="1">Option #1</option>
                                                        <option value="2">Option #2</option>
                                                        <option value="3">Option #3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="selectLg" class=" form-control-label">Select Large</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="selectLg" id="selectLg" class="form-control-lg form-control">
                                                        <option value="0">Please select</option>
                                                        <option value="1">Option #1</option>
                                                        <option value="2">Option #2</option>
                                                        <option value="3">Option #3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="selectSm" class=" form-control-label">Select Small</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="selectSm" id="SelectLm" class="form-control-sm form-control">
                                                        <option value="0">Please select</option>
                                                        <option value="1">Option #1</option>
                                                        <option value="2">Option #2</option>
                                                        <option value="3">Option #3</option>
                                                        <option value="4">Option #4</option>
                                                        <option value="5">Option #5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="disabledSelect" class=" form-control-label">Disabled Select</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="disabledSelect" id="disabledSelect" disabled="" class="form-control">
                                                        <option value="0">Please select</option>
                                                        <option value="1">Option #1</option>
                                                        <option value="2">Option #2</option>
                                                        <option value="3">Option #3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="multiple-select" class=" form-control-label">Multiple select</label>
                                                </div>
                                                <div class="col col-md-9">
                                                    <select name="multiple-select" id="multiple-select" multiple="" class="form-control">
                                                        <option value="1">Option #1</option>
                                                        <option value="2">Option #2</option>
                                                        <option value="3">Option #3</option>
                                                        <option value="4">Option #4</option>
                                                        <option value="5">Option #5</option>
                                                        <option value="6">Option #6</option>
                                                        <option value="7">Option #7</option>
                                                        <option value="8">Option #8</option>
                                                        <option value="9">Option #9</option>
                                                        <option value="10">Option #10</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Radios</label>
                                                </div>
                                                <div class="col col-md-9">
                                                    <div class="form-check">
                                                        <div class="radio">
                                                            <label for="radio1" class="form-check-label ">
                                                                <input type="radio" id="radio1" name="radios" value="option1" class="form-check-input">Option 1
                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label for="radio2" class="form-check-label ">
                                                                <input type="radio" id="radio2" name="radios" value="option2" class="form-check-input">Option 2
                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label for="radio3" class="form-check-label ">
                                                                <input type="radio" id="radio3" name="radios" value="option3" class="form-check-input">Option 3
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Inline Radios</label>
                                                </div>
                                                <div class="col col-md-9">
                                                    <div class="form-check-inline form-check">
                                                        <label for="inline-radio1" class="form-check-label ">
                                                            <input type="radio" id="inline-radio1" name="inline-radios" value="option1" class="form-check-input">One
                                                        </label>
                                                        <label for="inline-radio2" class="form-check-label ">
                                                            <input type="radio" id="inline-radio2" name="inline-radios" value="option2" class="form-check-input">Two
                                                        </label>
                                                        <label for="inline-radio3" class="form-check-label ">
                                                            <input type="radio" id="inline-radio3" name="inline-radios" value="option3" class="form-check-input">Three
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Checkboxes</label>
                                                </div>
                                                <div class="col col-md-9">
                                                    <div class="form-check">
                                                        <div class="checkbox">
                                                            <label for="checkbox1" class="form-check-label ">
                                                                <input type="checkbox" id="checkbox1" name="checkbox1" value="option1" class="form-check-input">Option 1
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label for="checkbox2" class="form-check-label ">
                                                                <input type="checkbox" id="checkbox2" name="checkbox2" value="option2" class="form-check-input"> Option 2
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label for="checkbox3" class="form-check-label ">
                                                                <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input"> Option 3
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Inline Checkboxes</label>
                                                </div>
                                                <div class="col col-md-9">
                                                    <div class="form-check-inline form-check">
                                                        <label for="inline-checkbox1" class="form-check-label ">
                                                            <input type="checkbox" id="inline-checkbox1" name="inline-checkbox1" value="option1" class="form-check-input">One
                                                        </label>
                                                        <label for="inline-checkbox2" class="form-check-label ">
                                                            <input type="checkbox" id="inline-checkbox2" name="inline-checkbox2" value="option2" class="form-check-input">Two
                                                        </label>
                                                        <label for="inline-checkbox3" class="form-check-label ">
                                                            <input type="checkbox" id="inline-checkbox3" name="inline-checkbox3" value="option3" class="form-check-input">Three
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">File input</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="file-input" name="file-input" class="form-control-file">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-multiple-input" class=" form-control-label">Multiple File input</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="file-multiple-input" name="file-multiple-input" multiple="" class="form-control-file">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Inline</strong> Form
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="form-inline">
                                            <div class="form-group">
                                                <label for="exampleInputName2" class="pr-1  form-control-label">Name</label>
                                                <input type="text" id="exampleInputName2" placeholder="Jane Doe" required="" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail2" class="px-1  form-control-label">Email</label>
                                                <input type="email" id="exampleInputEmail2" placeholder="jane.doe@example.com" required="" class="form-control">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                    </div>
                                </div>
                            </div>-->
                            <!--<div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Horizontal</strong> Form
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-email" class=" form-control-label">Email</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="email" id="hf-email" name="hf-email" placeholder="Enter Email..." class="form-control">
                                                    <span class="help-block">Please enter your email</span>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-password" class=" form-control-label">Password</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="password" id="hf-password" name="hf-password" placeholder="Enter Password..." class="form-control">
                                                    <span class="help-block">Please enter your password</span>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Normal</strong> Form
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="">
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Email</label>
                                                <input type="email" id="nf-email" name="nf-email" placeholder="Enter Email.." class="form-control">
                                                <span class="help-block">Please enter your email</span>
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-password" class=" form-control-label">Password</label>
                                                <input type="password" id="nf-password" name="nf-password" placeholder="Enter Password.." class="form-control">
                                                <span class="help-block">Please enter your password</span>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        Input
                                        <strong>Grid</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-sm-3">
                                                    <input type="text" placeholder=".col-sm-3" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-sm-4">
                                                    <input type="text" placeholder=".col-sm-4" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-sm-5">
                                                    <input type="text" placeholder=".col-sm-5" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-sm-6">
                                                    <input type="text" placeholder=".col-sm-6" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-sm-7">
                                                    <input type="text" placeholder=".col-sm-7" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-sm-8">
                                                    <input type="text" placeholder=".col-sm-8" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-sm-9">
                                                    <input type="text" placeholder=".col-sm-9" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-sm-10">
                                                    <input type="text" placeholder=".col-sm-10" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-sm-11">
                                                    <input type="text" placeholder=".col-sm-11" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-sm-12">
                                                    <input type="text" placeholder=".col-sm-12" class="form-control">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-user"></i> Login
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        Input
                                        <strong>Sizes</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-sm-5">
                                                    <label for="input-small" class=" form-control-label">Small Input</label>
                                                </div>
                                                <div class="col col-sm-6">
                                                    <input type="text" id="input-small" name="input-small" placeholder=".form-control-sm" class="input-sm form-control-sm form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-sm-5">
                                                    <label for="input-normal" class=" form-control-label">Normal Input</label>
                                                </div>
                                                <div class="col col-sm-6">
                                                    <input type="text" id="input-normal" name="input-normal" placeholder="Normal" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-sm-5">
                                                    <label for="input-large" class=" form-control-label">Large Input</label>
                                                </div>
                                                <div class="col col-sm-6">
                                                    <input type="text" id="input-large" name="input-large" placeholder=".form-control-lg" class="input-lg form-control-lg form-control">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                    </div>
                                </div>
                            </div>-->
                            <!--<div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Validation states</strong> Form
                                    </div>
                                    <div class="card-body card-block">
                                        <div class="has-success form-group">
                                            <label for="inputIsValid" class=" form-control-label">Input is valid</label>
                                            <input type="text" id="inputIsValid" class="is-valid form-control-success form-control">
                                        </div>
                                        <div class="has-warning form-group">
                                            <label for="inputIsInvalid" class=" form-control-label">Input is invalid</label>
                                            <input type="text" id="inputIsInvalid" class="is-invalid form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>-->
                            <!--<div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Validation states</strong> with optional icons
                                        <em>(deprecated)</em>
                                    </div>
                                    <div class="card-body card-block">
                                        <div class="has-success form-group">
                                            <label for="inputSuccess2i" class=" form-control-label">Input with success</label>
                                            <input type="text" id="inputSuccess2i" class="form-control-success form-control">
                                        </div>
                                        <div class="has-warning form-group">
                                            <label for="inputWarning2i" class=" form-control-label">Input with warning</label>
                                            <input type="text" id="inputWarning2i" class="form-control-warning form-control">
                                        </div>
                                        <div class="has-danger has-feedback form-group">
                                            <label for="inputError2i" class=" form-control-label">Input with error</label>
                                            <input type="text" id="inputError2i" class="form-control-danger form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>-->
                            <!--<div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Icon/Text</strong> Groups
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-12">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-user"></i>
                                                        </div>
                                                        <input type="text" id="input1-group1" name="input1-group1" placeholder="Username" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-12">
                                                    <div class="input-group">
                                                        <input type="email" id="input2-group1" name="input2-group1" placeholder="Email" class="form-control">
                                                        <div class="input-group-addon">
                                                            <i class="far fa-envelope"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-12">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-euro"></i>
                                                        </div>
                                                        <input type="text" id="input3-group1" name="input3-group1" placeholder=".." class="form-control">
                                                        <div class="input-group-addon">.00</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-success btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                    </div>
                                </div>
                            </div>-->
                            <!--<div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Buttons</strong> Groups
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-12">
                                                    <div class="input-group">
                                                        <div class="input-group-btn">
                                                            <button class="btn btn-primary">
                                                                <i class="fa fa-search"></i> Search
                                                            </button>
                                                        </div>
                                                        <input type="text" id="input1-group2" name="input1-group2" placeholder="Username" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-12">
                                                    <div class="input-group">
                                                        <input type="email" id="input2-group2" name="input2-group2" placeholder="Email" class="form-control">
                                                        <div class="input-group-btn">
                                                            <button class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-12">
                                                    <div class="input-group">
                                                        <div class="input-group-btn">
                                                            <button class="btn btn-primary">
                                                                <i class="fa fa-facebook"></i>
                                                            </button>
                                                        </div>
                                                        <input type="text" id="input3-group2" name="input3-group2" placeholder="Search" class="form-control">
                                                        <div class="input-group-btn">
                                                            <button class="btn btn-primary">
                                                                <i class="fa fa-twitter"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-success btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                    </div>
                                </div>
                            </div>-->
                            <!--<div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Dropdowns</strong> Groups
                                    </div>
                                    <div class="card-body card-block">
                                        <form class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-12">
                                                    <div class="input-group">
                                                        <div class="input-group-btn">
                                                            <div class="btn-group">
                                                                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle btn btn-primary">Dropdown</button>
                                                                <div tabindex="-1" aria-hidden="true" role="menu" class="dropdown-menu">
                                                                    <button type="button" tabindex="0" class="dropdown-item">Action</button>
                                                                    <button type="button" tabindex="0" class="dropdown-item">Another Action</button>
                                                                    <button type="button" tabindex="0" class="dropdown-item">Something else here</button>
                                                                    <div tabindex="-1" class="dropdown-divider"></div>
                                                                    <button type="button" tabindex="0" class="dropdown-item">Separated link</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <input type="text" id="input1-group3" name="input1-group3" placeholder="Username" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-12">
                                                    <div class="input-group">
                                                        <input type="email" id="input2-group3" name="input2-group3" placeholder="Email" class="form-control">
                                                        <div class="input-group-btn">
                                                            <div class="btn-group">
                                                                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle btn btn-primary">Dropdown</button>
                                                                <div tabindex="-1" aria-hidden="true" role="menu" class="dropdown-menu">
                                                                    <button type="button" tabindex="0" class="dropdown-item">Action</button>
                                                                    <button type="button" tabindex="0" class="dropdown-item">Another Action</button>
                                                                    <button type="button" tabindex="0" class="dropdown-item">Something else here</button>
                                                                    <div tabindex="-1" class="dropdown-divider"></div>
                                                                    <button type="button" tabindex="0" class="dropdown-item">Separated link</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-12">
                                                    <div class="input-group">
                                                        <div class="input-group-btn">
                                                            <div class="btn-group">
                                                                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle btn btn-primary">Action</button>
                                                                <div tabindex="-1" aria-hidden="true" role="menu" class="dropdown-menu">
                                                                    <button type="button" tabindex="0" class="dropdown-item">Action</button>
                                                                    <button type="button" tabindex="0" class="dropdown-item">Another Action</button>
                                                                    <button type="button" tabindex="0" class="dropdown-item">Something else here</button>
                                                                    <div tabindex="-1" class="dropdown-divider"></div>
                                                                    <button type="button" tabindex="0" class="dropdown-item">Separated link</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <input type="text" id="input3-group3" name="input3-group3" placeholder=".." class="form-control">
                                                        <div class="input-group-btn">
                                                            <div class="btn-group">
                                                                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle btn btn-primary">Dropdown</button>
                                                                <div tabindex="-1" aria-hidden="true" role="menu" class="dropdown-menu">
                                                                    <button type="button" tabindex="0" class="dropdown-item">Action</button>
                                                                    <button type="button" tabindex="0" class="dropdown-item">Another Action</button>
                                                                    <button type="button" tabindex="0" class="dropdown-item">Something else here</button>
                                                                    <div tabindex="-1" class="dropdown-divider"></div>
                                                                    <button type="button" tabindex="0" class="dropdown-item">Separated link</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-success btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                    </div>
                                </div>
                            </div>-->
                            <!--<div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        Use the grid for big devices!
                                        <small>
                                            <code>.col-lg-*</code>
                                            <code>.col-md-*</code>
                                            <code>.col-sm-*</code>
                                        </small>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-8">
                                                    <input type="text" placeholder=".col-md-8" class="form-control">
                                                </div>
                                                <div class="col col-md-4">
                                                    <input type="text" placeholder=".col-md-4" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-7">
                                                    <input type="text" placeholder=".col-md-7" class="form-control">
                                                </div>
                                                <div class="col col-md-5">
                                                    <input type="text" placeholder=".col-md-5" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-6">
                                                    <input type="text" placeholder=".col-md-6" class="form-control">
                                                </div>
                                                <div class="col col-md-6">
                                                    <input type="text" placeholder=".col-md-6" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-5">
                                                    <input type="text" placeholder=".col-md-5" class="form-control">
                                                </div>
                                                <div class="col col-md-7">
                                                    <input type="text" placeholder=".col-md-7" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-4">
                                                    <input type="text" placeholder=".col-md-4" class="form-control">
                                                </div>
                                                <div class="col col-md-8">
                                                    <input type="text" placeholder=".col-md-8" class="form-control">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">Action</button>
                                        <button class="btn btn-danger btn-sm">Action</button>
                                        <button class="btn btn-warning btn-sm">Action</button>
                                        <button class="btn btn-info btn-sm">Action</button>
                                        <button class="btn btn-success btn-sm">Action</button>
                                    </div>
                                </div>
                            </div>-->
                            <!--<div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        Input Grid for small devices!
                                        <small>
                                            <code>.col-*</code>
                                        </small>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col-4">
                                                    <input type="text" placeholder=".col-4" class="form-control">
                                                </div>
                                                <div class="col-8">
                                                    <input type="text" placeholder=".col-8" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-5">
                                                    <input type="text" placeholder=".col-5" class="form-control">
                                                </div>
                                                <div class="col-7">
                                                    <input type="text" placeholder=".col-7" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-6">
                                                    <input type="text" placeholder=".col-6" class="form-control">
                                                </div>
                                                <div class="col-6">
                                                    <input type="text" placeholder=".col-6" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-7">
                                                    <input type="text" placeholder=".col-5" class="form-control">
                                                </div>
                                                <div class="col-5">
                                                    <input type="text" placeholder=".col-5" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-8">
                                                    <input type="text" placeholder=".col-8" class="form-control">
                                                </div>
                                                <div class="col-4">
                                                    <input type="text" placeholder=".col-4" class="form-control">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">Action</button>
                                        <button class="btn btn-danger btn-sm">Action</button>
                                        <button class="btn btn-warning btn-sm">Action</button>
                                        <button class="btn btn-info btn-sm">Action</button>
                                        <button class="btn btn-success btn-sm">Action</button>
                                    </div>
                                </div>
                            </div>-->
                            <!--<div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">Example Form</div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Username</div>
                                                    <input type="text" id="username3" name="username3" class="form-control">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Email</div>
                                                    <input type="email" id="email3" name="email3" class="form-control">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-envelope"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Password</div>
                                                    <input type="password" id="password3" name="password3" class="form-control">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-asterisk"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions form-group">
                                                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>-->
                            <!--<div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">Example Form</div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" id="username2" name="username2" placeholder="Username" class="form-control">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="email" id="email2" name="email2" placeholder="Email" class="form-control">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-envelope"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="password" id="password2" name="password2" placeholder="Password" class="form-control">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-asterisk"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions form-group">
                                                <button type="submit" class="btn btn-secondary btn-sm">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>-->
                            <!--<div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">Example Form</div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                    <input type="text" id="username" name="username" placeholder="Username" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-envelope"></i>
                                                    </div>
                                                    <input type="email" id="email" name="email" placeholder="Email" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-asterisk"></i>
                                                    </div>
                                                    <input type="password" id="password" name="password" placeholder="Password" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-actions form-group">
                                                <button type="submit" class="btn btn-success btn-sm">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>-->
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2023 MAREX/Sous la direction de Dr Abdou Aziz NDIAYE. Tous droits réservés.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
