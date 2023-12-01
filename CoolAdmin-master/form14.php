<?php
    include("../Model/db.php");
    session_start();

    if(isset($_POST['risques_miniers'])) {


        $_SESSION['panneaux'] = $_POST['panneaux'];
        $_SESSION['observations_panneaux'] = $_POST['observations_panneaux'];
        $_SESSION['portes_fermees'] = $_POST['portes_fermees'];
        $_SESSION['observations_portes_fermees'] = $_POST['observations_portes_fermees'];
        $_SESSION['poste_controle'] = $_POST['poste_controle'];
        $_SESSION['observations_poste_controle'] = $_POST['observations_poste_controle'];
        $_SESSION['registre_visiteurs'] = $_POST['registre_visiteurs'];
        $_SESSION['observations_registre_visiteurs'] = $_POST['observations_registre_visiteurs'];
        $_SESSION['hauteurs_pentes_front'] = $_POST['hauteurs_pentes_front'];
        $_SESSION['observations_hauteurs_pentes_front'] = $_POST['observations_hauteurs_pentes_front'];
        $_SESSION['sapement_paroi'] = $_POST['sapement_paroi'];
        $_SESSION['observations_sapement_paroi'] = $_POST['observations_sapement_paroi'];
        $_SESSION['indications_glissements_roche'] = $_POST['indications_glissements_roche'];
        $_SESSION['observations_indications_glissements_roche'] = $_POST['observations_indications_glissements_roche'];

        $_SESSION['entree_sortie_mine'] = $_POST['entree_sortie_mine'];
        $_SESSION['observations_entree_sortie_mine'] = $_POST['observations_entree_sortie_mine'];
        $_SESSION['disposition_panneaux'] = $_POST['disposition_panneaux'];
        $_SESSION['observations_disposition_panneaux'] = $_POST['observations_disposition_panneaux'];
        $_SESSION['usage_epi'] = $_POST['usage_epi'];
        $_SESSION['observations_usage_epi'] = $_POST['observations_usage_epi'];
        $_SESSION['securite_tunnel'] = $_POST['securite_tunnel'];
        $_SESSION['observations_securite_tunnel'] = $_POST['observations_securite_tunnel'];
        $_SESSION['soutenement_tunnel'] = $_POST['soutenement_tunnel'];
        $_SESSION['observations_soutenement_tunnel'] = $_POST['observations_soutenement_tunnel'];
        $_SESSION['sorties_tunnel_dispo'] = $_POST['sorties_tunnel_dispo'];
        $_SESSION['observations_sorties_tunnel_dispo'] = $_POST['observations_sorties_tunnel_dispo'];
        $_SESSION['entree_sortie_tunnel'] = $_POST['entree_sortie_tunnel'];
        $_SESSION['observations_entree_sortie_tunnel'] = $_POST['observations_entree_sortie_tunnel'];

        $_SESSION['ventilation_tunnel'] = $_POST['ventilation_tunnel'];
        $_SESSION['observations_ventilation_tunnel'] = $_POST['observations_ventilation_tunnel'];
        $_SESSION['eclairage_tunnel'] = $_POST['eclairage_tunnel'];
        $_SESSION['observations_eclairage_tunnel'] = $_POST['observations_eclairage_tunnel'];
        $_SESSION['dispositions_panneaux_danger'] = $_POST['dispositions_panneaux_danger'];
        $_SESSION['observations_dispositions_panneaux_danger'] = $_POST['observations_dispositions_panneaux_danger'];
        $_SESSION['entree_grillagee'] = $_POST['entree_grillagee'];
        $_SESSION['observations_entree_grillagee'] = $_POST['observations_entree_grillagee'];
        $_SESSION['epi_controle'] = $_POST['epi_controle'];
        $_SESSION['observations_epi_controle'] = $_POST['observations_epi_controle'];
        $_SESSION['gaz_souterrains'] = $_POST['gaz_souterrains'];
        $_SESSION['observations_gaz_souterrains'] = $_POST['observations_gaz_souterrains'];
        $_SESSION['oxygene_galeries'] = $_POST['oxygene_galeries'];
        $_SESSION['observations_oxygene_galeries'] = $_POST['observations_oxygene_galeries'];

        $_SESSION['entree_sortie_controle'] = $_POST['entree_sortie_controle'];
        $_SESSION['observations_entree_sortie_controle'] = $_POST['observations_entree_sortie_controle'];
        $_SESSION['panneaux_danger'] = $_POST['panneaux_danger'];
        $_SESSION['observations_panneaux_danger'] = $_POST['observations_panneaux_danger'];
        $_SESSION['epi_approprie'] = $_POST['epi_approprie'];
        $_SESSION['observations_epi_approprie'] = $_POST['observations_epi_approprie'];
        $_SESSION['securite_machine'] = $_POST['securite_machine'];
        $_SESSION['observations_securite_machine'] = $_POST['observations_securite_machine'];
        $_SESSION['responsable_charge_experimente'] = $_POST['responsable_charge_experimente'];
        $_SESSION['observations_responsable_charge_experimente'] = $_POST['observations_responsable_charge_experimente'];
        $_SESSION['explosifs_detonateurs'] = $_POST['explosifs_detonateurs'];
        $_SESSION['observations_explosifs_detonateurs'] = $_POST['observations_explosifs_detonateurs'];
        $_SESSION['horaire_minage'] = $_POST['horaire_minage'];
        $_SESSION['observations_horaire_minage'] = $_POST['observations_horaire_minage'];

        $_SESSION['procedures_minage'] = $_POST['procedures_minage'];
        $_SESSION['observations_procedures_minage'] = $_POST['observations_procedures_minage'];
        $_SESSION['type_explosif'] = $_POST['type_explosif'];
        $_SESSION['observations_type_explosif'] = $_POST['observations_type_explosif'];




        header("Location:form15.php");

        /*$req2 = $bdd->prepare('INSERT INTO minier_second(panneaux, observations_panneaux)
        VALUES (?,?)');

        $req2->execute(array($_SESSION['panneaux'], $_SESSION['observations_panneaux']));
        

        $req2->closeCursor();*/

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
                                    <a href="form8.php">Dashboard 1</a>
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
                    <!--<img src="images/icon/logo.png" alt="Cool Admin" />-->
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
                            <a href="form13.php" class="btn btn-primary"> >>> Revenir étape précédente</a>
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
                                    <div class="card-header">RISQUES MINIERS</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">15 - RISQUES MINIERS</h3>
                                        </div>
                                        <hr>
                                        <form action="form14.php" method="post" novalidate="novalidate">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                            Sur le site ; Question en OUI/NON et observations de l’inspecteur
                                                        </label>
                                                    
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                            <strong>Contrôle des mouvement des personnes</strong>
                                                        </label>
                                                    
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Des panneaux appropriés</label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="panneaux" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="panneaux" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_panneaux" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_panneaux']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Clôture et portes fermées</label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="portes_fermees" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="portes_fermees" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_portes_fermees" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_portes_fermees']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                            Poste de contrôle de sécurité
                                                        </label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="poste_controle" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="poste_controle" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_poste_controle" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_poste_controle']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                            Registre des visiteurs
                                                        </label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="registre_visiteurs" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="registre_visiteurs" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_registre_visiteurs" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_registre_visiteurs']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                            <strong>Sécurité à ciel ouvert</strong>
                                                        </label>
                                                    
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                            Hauteurs et pentes des fronts adéquats
                                                        </label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="hauteurs_pentes_fronts" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="hauteurs_pentes_fronts" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_hauteurs_pentes_fronts" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_hauteurs_pentes_fronts']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                            Pas de sapement de la paroi
                                                        </label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="sapement_paroi" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="sapement_paroi" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_sapement_paroi" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_sapement_paroi']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                            Indications des glissements dans la roche
                                                        </label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="indications_glissements_roche" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="indications_glissements_roche" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_indications_glissements_roche" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_indications_glissements_roche']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                            Entrée / sortie de la mine sous contrôle
                                                        </label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="entree_sortie_mine" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="entree_sortie_mine" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_entree_sortie_mine" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_entree_sortie_mine']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                            Disposition des panneaux de danger adéquat
                                                        </label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="disposition_panneaux" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="disposition_panneaux" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_disposition_panneaux" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_disposition_panneaux']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                            Usage d’EPI approprié est contrôlé
                                                        </label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="usage_epi" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="usage_epi" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_usage_epi" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_usage_epi']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                            <strong>Sécurité souterraine</strong>
                                                        </label>
                                                    
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <hr>
                                            
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                            Sécurité à l’entrée du tunnel (sans chute de pierre)
                                                        </label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="securite_tunnel" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="securite_tunnel" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_securite_tunnel" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_securite_tunnel']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                            Soutènement des tunnels adéquat
                                                        </label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="soutenement_tunnel" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="soutenement_tunnel" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_soutenement_tunnel" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_soutenement_tunnel']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                            Au moins deux sorties de tunnel disponibles
                                                        </label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="sorties_tunnel_dispo" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="sorties_tunnel_dispo" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_sorties_tunnel_dispo" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_sorties_tunnel_dispo']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                            Entrée/sortie du tunnel sous contrôle
                                                        </label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="entree_sortie_tunnel" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="entree_sortie_tunnel" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_entree_sortie_tunnel" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_entree_sortie_tunnel']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                            Ventilation adéquate dans le tunnel (artificielle ou naturelle)
                                                        </label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="ventilation_tunnel" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="ventilation_tunnel" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_ventilation_tunnel" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_ventilation_tunnel']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                            Eclairage du tunnel adéquat
                                                        </label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="eclairage_tunnel" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="eclairage_tunnel" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_eclairage_tunnel" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_eclairage_tunnel']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                        Disposition des panneaux de danger adéquat
                                                        </label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="disposition_panneaux_danger" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="disposition_panneaux_danger" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_disposition_panneaux_danger" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_disposition_panneaux_danger']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                            Entrée grillagée (p. ex., l’accès, machines)
                                                        </label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="entree_grillagee" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="entree_grillagee" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_entree_grillagee" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_entree_grillagee']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                            Usage d’EPI approprié est contrôlé
                                                        </label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="epi_controle" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="epi_controle" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_epi_controle" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_epi_controle']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                            Surveillance des gaz souterrains (particulièrement l’oxygène)
                                                        </label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="gaz_souterrains" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="gaz_souterrains" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_gaz_souterrains" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_gaz_souterrains']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                            Mesurez l’oxygène [%] au fond des galeries d’exploitation :
                                                        </label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="oxygene_galeries" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="oxygene_galeries" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_oxygene_galeries" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_oxygene_galeries']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                
                                                <div class="col-12">
                                                    <label for="x_card_code" class="control-label mb-1">
                                                        <strong>Sécurité de l’usine de traitement</strong>
                                                    </label>
                                                    
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                            Entrée / sortie sous contrôle
                                                        </label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="entree_sortie_controle" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="entree_sortie_controle" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_entree_sortie_controle" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_entree_sortie_controle']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                            Disposition des panneaux de danger adéquats
                                                        </label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="panneaux_danger" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="panneaux_danger" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_panneaux_danger" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_panneaux_danger']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                            Usage d’EPI approprié est contrôlé
                                                        </label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="epi_approprie" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="epi_approprie" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_epi_approprie" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_epi_approprie']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                            Sécurité du fonctionnement des machines
                                                        </label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="securite_machine" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="securite_machine" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_securite_machine" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_securite_machine']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                
                                                <div class="col-12">
                                                    <label for="x_card_code" class="control-label mb-1">
                                                        <strong>Sécurité au minage</strong>
                                                    </label>
                                                    
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                            Responsable en charge et expérimenté
                                                        </label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="responsable_charge_experimente" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="responsable_charge_experimente" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_responsable_charge_experimente" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_responsable_charge_experimente']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                            Le stockage d’explosifs et détonateurs est sécurisé
                                                        </label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="explosifs_detonateurs" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="explosifs_detonateurs" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_explosifs_detonateurs" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_explosifs_detonateurs']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                            Décrire l’horaire du minage
                                                        </label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="horaire_minage" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="horaire_minage" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_horaire_minage" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_horaire_minage']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                            Décrire les procédures opérationnelles du minage
                                                        </label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="procedures_minage" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="procedures_minage" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_procedures_minage" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_procedures_minage']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                            Type d’explosif utilisé
                                                        </label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="type_explosif" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="type_explosif" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_type_explosif" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_type_explosif']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            
                                        
                                            
                                            <br>
                                            
                                            <div>
                                                <button name="risques_miniers" id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
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
