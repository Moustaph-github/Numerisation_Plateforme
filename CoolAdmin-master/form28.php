<?php
    include("../Model/db.php");
    session_start();

    if(isset($_POST['exigences_cotation'])) {


        $_SESSION['groupes_armes'] = $_POST['groupes_armes'];
        $_SESSION['impot_illegal'] = $_POST['impot_illegal'];
        $_SESSION['extorque_mineraux'] = $_POST['extorque_mineraux'];
        $_SESSION['operations_legales'] = $_POST['operations_legales'];
        $_SESSION['mineurs'] = $_POST['mineurs'];
        $_SESSION['travail_sans_recommandation'] = $_POST['travail_sans_recommandation'];
        $_SESSION['paiements_organisations_illegales'] = $_POST['paiements_organisations_illegales'];
        $_SESSION['paiements_organisations_politiques'] = $_POST['paiements_organisations_politiques'];
        $_SESSION['envois_minerais'] = $_POST['envois_minerais'];
        $_SESSION['minerais_designes'] = $_POST['minerais_designes'];
        $_SESSION['etat_non_conformite'] = $_POST['etat_non_conformite'];
        $_SESSION['etat_critique_non_conformite'] = $_POST['etat_critique_non_conformite'];
        $_SESSION['etat_grave_non_conformite'] = $_POST['etat_grave_non_conformite'];
        $_SESSION['societes_affiliees'] = $_POST['societes_affiliees'];

        $_SESSION['minerais_points_acces'] = $_POST['minerais_points_acces'];
        $_SESSION['actions_mineraux_proprietaires'] = $_POST['actions_mineraux_proprietaires'];
        $_SESSION['performance_environnement'] = $_POST['performance_environnement'];
        $_SESSION['agents_gouvernement'] = $_POST['agents_gouvernement'];
        $_SESSION['proprietaire_site_minier'] = $_POST['proprietaire_site_minier'];
        $_SESSION['acteurs_site_minier'] = $_POST['acteurs_site_minier'];
        $_SESSION['empreinte_analytique_afp'] = $_POST['empreinte_analytique_afp'];
        $_SESSION['relations_communautaires'] = $_POST['relations_communautaires'];
        

        header("Location:form29.php");

        $req6 = $bdd->prepare('INSERT INTO minier_six(forum_discussion, observations_forum_discussion, depuis_quand, 
        rencontres_regulieres, observations_rencontres_regulieres, groupes, observations_groupes, 
        entreprises_locales, observations_entreprises_locales, developpement_local, observations_developpement_local, 
        garantie_moyens, observations_garantie_moyens, infrastructure_locale, observations_infrastructure_locale, 
        education_formation, observations_education_formation, renforcement_capacites, observations_renforcement_capacites, 
        aspects_genre, observations_aspects_genre, elements_ad_hoc, observations_elements_ad_hoc, 
        autorites_locales, observations_autorites_locales, acquisition_terrain, observations_acquisition_terrain, 
        usage_eaux, observations_usage_eaux, usage_forets, observations_usage_forets, impacts_miniers, 
        observations_impacts_miniers, autre_impact_minier, plaintes, observations_plaintes, non_conformite_critique, 
        observations_non_conformite_critique, non_conformite_serieuse, observations_non_conformite_serieuse, 
        commentaire_un, commentaire_deux, commentaire_trois, representant_principal, titre_fonction, 
        signature_numerique, gestionnaire_responsable, commentaire_gestionnaire, production_miniere, 
        resultats_inspection, changements_procedures, production_site_minier, risque_fraude_minerale, 
        groupes_armes, impot_illegal, extorque_mineraux, operations_legales, mineurs, travail_sans_recommandation, 
        paiements_organisations_illegales, paiements_organisations_politiques, envois_minerais, 
        minerais_designes, etat_non_conformite, etat_critique_non_conformite, etat_grave_non_conformite, 
        societes_affiliees, minerais_points_acces, actions_mineraux_proprietaires, performance_environnement, 
        agents_gouvernement, proprietaire_site_minier, acteurs_site_minier, empreinte_analytique_afp, relations_communautaires)
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,
        ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');

        $req6->execute(array($_SESSION['forum_discussion'], $_SESSION['observations_forum_discussion'], 
        $_SESSION['depuis_quand'], $_SESSION['rencontres_regulieres'], $_SESSION['observations_rencontres_regulieres'], 
        $_SESSION['groupes'], $_SESSION['observations_groupes'], $_SESSION['entreprises_locales'], 
        $_SESSION['observations_entreprises_locales'], $_SESSION['developpement_local'], $_SESSION['observations_developpement_local'], 
        $_SESSION['garantie_moyens'], $_SESSION['observations_garantie_moyens'], $_SESSION['infrastructure_locale'], 
        $_SESSION['observations_infrastructure_locale'], $_SESSION['education_formation'], $_SESSION['observations_education_formation'], 
        $_SESSION['renforcement_capacites'], $_SESSION['observations_renforcement_capacites'], $_SESSION['aspects_genre'], 
        $_SESSION['observations_aspects_genre'], $_SESSION['elements_ad_hoc'], $_SESSION['observations_elements_ad_hoc'], 
        $_SESSION['autorites_locales'], $_SESSION['observations_autorites_locales'], $_SESSION['acquisition_terrain'], 
        $_SESSION['observations_acquisition_terrain'], $_SESSION['usage_eaux'], $_SESSION['observations_usage_eaux'], 
        $_SESSION['usage_forets'], $_SESSION['observations_usage_forets'], $_SESSION['impacts_miniers'], 
        $_SESSION['observations_impacts_miniers'], $_SESSION['autre_impact_minier'], $_SESSION['plaintes'], 
        $_SESSION['observations_plaintes'], $_SESSION['non_conformite_critique'], $_SESSION['observations_non_conformite_critique'], 
        $_SESSION['non_conformite_serieuse'], $_SESSION['observations_non_conformite_serieuse'], 
        $_SESSION['commentaire_un'], $_SESSION['commentaire_deux'], $_SESSION['commentaire_trois'], 
        $_SESSION['representant_principal'], $_SESSION['titre_fonction'], $_SESSION['signature_numerique'], 
        $_SESSION['gestionnaire_responsable'], $_SESSION['commentaire_gestionnaire'], 
        $_SESSION['production_miniere'], $_SESSION['resultats_inspection'], $_SESSION['changements_procedures'], 
        $_SESSION['production_site_minier'], $_SESSION['risque_fraude_minerale'], $_SESSION['groupes_armes'], 
        $_SESSION['impot_illegal'], $_SESSION['extorque_mineraux'], $_SESSION['operations_legales'], 
        $_SESSION['mineurs'], $_SESSION['travail_sans_recommandation'], $_SESSION['paiements_organisations_illegales'], 
        $_SESSION['paiements_organisations_politiques'], $_SESSION['envois_minerais'], $_SESSION['minerais_designes'], 
        $_SESSION['etat_non_conformite'], $_SESSION['etat_critique_non_conformite'], $_SESSION['etat_grave_non_conformite'], 
        $_SESSION['societes_affiliees'], $_SESSION['minerais_points_acces'], $_SESSION['actions_mineraux_proprietaires'], 
        $_SESSION['performance_environnement'], $_SESSION['agents_gouvernement'], $_SESSION['proprietaire_site_minier'], 
        $_SESSION['acteurs_site_minier'], $_SESSION['empreinte_analytique_afp'], $_SESSION['relations_communautaires']));
        

        $req6->closeCursor();


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
                            <a href="form27.php" class="btn btn-primary"> >>> Revenir étape précédente</a>
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
                                    <div class="card-header">EXIGENCES DE COTATION « ROUGE/JAUNE » SELON LA CERTIFICATION</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">29 - EXIGENCES DE COTATION « ROUGE/JAUNE » SELON LA CERTIFICATION</h3>
                                        </div>
                                        <hr>
                                        <form action="form28.php" method="post" novalidate="novalidate">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                        Cette section sera remplie par l’inspecteur responsable et ses collègues se référant aux résultats de l’inspection ci-dessus [voir le N° entre parenthèses].
                                                        La section doit être remplie au bureau après l’achèvement de l’inspection minière sur le terrain. L’attribution d’une cote rouge/jaune devrait être faite sur la base d’un examen de tous les résultats de l’inspection, comme indiqué ci-dessus
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
                                                            <strong>L’inspection a mis en évidence des violations (oui / non)</strong>
                                                        </label>
                                                    
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <hr>
                                            
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="x_card_code" class="control-label mb-1">
                                                        Des groupes armés non-étatiques ou leurs membres contrôlent illégalement des sites miniers
                                                    </label>
                                                    <div class="input-group">
                                                        <textarea name="groupes_armes" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['groupes_armes']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="x_card_code" class="control-label mb-1">
                                                    Des groupes armés non-étatiques ou leurs membres imposent illégalement des impôts ou extorquent de l’argent ou des minéraux aux points d’accès aux sites miniers
                                                    </label>
                                                    <div class="input-group">
                                                        <textarea name="impot_illegal" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['impot_illegal']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="x_card_code" class="control-label mb-1">
                                                    Des groupes armés non-étatiques ou leurs membres imposent illégalement des impôts ou extorquent de l’argent ou des actions des minéraux des propriétaires ou des exploitants des sites miniers.
                                                    </label>
                                                    <div class="input-group">
                                                        <textarea name="extorque_mineraux" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['extorque_mineraux']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="x_card_code" class="control-label mb-1">
                                                    Des groupes armés non-étatiques mènent des opérations dans les limites légales d’un site minier ou d’une concession minière,
                                                    REMARQUE : cote rouge pour les sites « industriels » ; pour les sites « artisanaux » c’est la cote jaune
                                                    </label>
                                                    <div class="input-group">
                                                        <textarea name="operations_legales" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['operations_legales']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="x_card_code" class="control-label mb-1">
                                                    Des enfants de moins de 18 ans sont employés dans l’exploitation du site minier
                                                    </label>
                                                    <div class="input-group">
                                                        <textarea name="mineurs" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['mineurs']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="x_card_code" class="control-label mb-1">
                                                    Le travail forcé est pratiqué sur le site minier ; les travailleurs sont constamment forcés de travailler sans rémunération ; les travailleurs sont forcés pendant certains jours de la semaine, de céder le fruit de leur travail au patron du site minier
                                                    </label>
                                                    <div class="input-group">
                                                        <textarea name="travail_sans_renumeration" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['travail_sans_renumeration']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="x_card_code" class="control-label mb-1">
                                                    Des paiements sont versés par le propriétaire ou l’exploitant du site minier aux organisations illégales ou criminelles
                                                    </label>
                                                    <div class="input-group">
                                                        <textarea name="paiements_organisations_illegales" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['paiements_organisations_illegales']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="x_card_code" class="control-label mb-1">
                                                    Des paiements sont versés par le propriétaire ou l’exploitant aux partis politiques ou aux organisations politiques en violation des lois
                                                    </label>
                                                    <div class="input-group">
                                                        <textarea name="paiements_organisations_politiques" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['paiements_organisations_politiques']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="x_card_code" class="control-label mb-1">
                                                    Des envois de minerais quittent le site minier sans avoir été enregistrés ou inscrits par un système de chaîne de possession qui peut suivre les minéraux jusqu’à leur prochaine destination en dehors du site minier.
                                                    REMARQUE: cote rouge pour les sites "industriels" ; pour les sites "artisanaux" c’est la cote jaune
                                                    </label>
                                                    <div class="input-group">
                                                        <textarea name="envois_minerais" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['envois_minerais']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="x_card_code" class="control-label mb-1">
                                                    Des minerais désignés en provenance d’un autre site minier inconnu entrent dans le site minier ou sont mélangés avec les minéraux désignés produits sur le site minier.
REMARQUE : il s’                                    agit d’une norme sensible aux risques. La classification tient compte des résultats de l’évaluation de la plausibilité de production ainsi que des risques de fraude au site. Si la production n’est pas plausible, ou le risque de fraude est significatif ou élevé, l’inspecteur devrait envisager d’assigner une cote rouge au site pour cette norme
                                                    </label>
                                                    <div class="input-group">
                                                        <textarea name="minerais_designes" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['minerais_designes']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="x_card_code" class="control-label mb-1">
                                                    Le site minier n’a pas été enregistré auprès des autorités minières et/ou se trouve en état de non-conformité avec les lois règlements sénégalais relatifs au titre minier [24.1 ; voir aussi 3.2 concernant les coordonnées de l’exploitation et la périmètre du permis]
                                                    REMARQUE : cote rouge pour les sites « industriels »; pour les sites « artisanaux » c’est un critère de progrès
                                                    </label>
                                                    <div class="input-group">
                                                        <textarea name="etat_non_conformite" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['etat_non_conformite']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="x_card_code" class="control-label mb-1">
                                                    L’exploitant du site minier se trouve en état critique de non-conformité par rapport aux lois sénégalaises relatives à la performance en matière d’environnement [18.18 et 18.19]. REMARQUE : cote rouge pour les sites « industriels » ; n’existe pas pour les sites « artisanaux »
                                                    </label>
                                                    <div class="input-group">
                                                        <textarea name="etat_critique_non_conformite" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['etat_critique_non_conformite']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="x_card_code" class="control-label mb-1">
                                                    L’exploitant du site minier se trouve en état grave de non- conformité par rapport aux lois sénégalaises relatives aux relations communautaires [25.17]
                                                    REMARQUE : cote rouge pour les sites « industriels » ; n’existe pas pour les sites « artisanaux »
                                                    </label>
                                                    <div class="input-group">
                                                        <textarea name="etat_grave_non_conformite" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['etat_grave_non_conformite']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <hr>
                                            
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                            <strong>L’inspection a mis en évidence des violations entraînant la cote jaune (oui / non)</strong>
                                                        </label>
                                                    
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="x_card_code" class="control-label mb-1">
                                                    Des forces de sécurité publiques ou privées ou des sociétés affiliées contrôlent illégalement des sites miniers
                                                    </label>
                                                    <div class="input-group">
                                                        <textarea name="societes_affiliees" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['societes_affiliees']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="x_card_code" class="control-label mb-1">
                                                    Des groupes armés non-étatiques ou leurs membres imposent illégalement des impôts ou extorquent de l’argent ou des minéraux aux points d’accès aux sites miniers
                                                    </label>
                                                    <div class="input-group">
                                                        <textarea name="minerais_points_acces" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['minerais_points_acces']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="x_card_code" class="control-label mb-1">
                                                        Des forces de sécurité publiques ou privées ou leurs membres imposent illégalement des impôts ou extorquent de l’argent ou des actions des minéraux des propriétaires ou des exploitants des sites miniers
                                                    </label>
                                                    <div class="input-group">
                                                        <textarea name="actions_mineraux_proprietaires" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['actions_mineraux_proprietaires']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="x_card_code" class="control-label mb-1">
                                                    L' exploitant du site minier se trouve en état de non-conformité par rapport aux lois relatives à la performance en matière d’environnement [18.4]
                                                    REMARQUE: cote jaune pour les sites « industriels » ; n’existe pas pour les sites « artisanaux »
                                                    </label>
                                                    <div class="input-group">
                                                        <textarea name="performance_environnement" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['performance_environnement']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="x_card_code" class="control-label mb-1">
                                                    Des agents du gouvernement (agents miniers, forces de sécurité, autorités municipales, unités militaires, etc.) imposent aux employés ou aux propriétaires d’un site minier des taxes ou d’autres paiements qui sont disproportionnés par rapport aux services rendus, d’une manière non autorisée par le code ou le règlement minier du Sénégal [14.8]
                                                    </label>
                                                    <div class="input-group">
                                                        <textarea name="agents_gouvernement" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['agents_gouvernement']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="x_card_code" class="control-label mb-1">
                                                    Le propriétaire du site minier, l’exploitant du site minier, les intermédiaires, les négociants, les sociétés d’exportation ou tout autre minier offrent, promettent ou demandent des pots de vin pour cacher ou déguiser l’origine des minéraux, faire de fausses déclarations de taxes, de frais, de redevances versées au gouvernement pour l’extraction, le commerce, la manutention, le transport et l’exportation des minéraux [14.9]
                                                    </label>
                                                    <div class="input-group">
                                                        <textarea name="proprietaire_site_minier" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['proprietaire_site_minier']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="x_card_code" class="control-label mb-1">
                                                    Le propriétaire du site minier, l’exploitant du site minier, ou tout autre acteur en amont de la chaîne de possession et opérant sur le site minier ne verse pas au gouvernement toutes les taxes, frais et redevances relatifs à l’extraction, au commerce et à l’exportation.
                                                    Une ligne directrice qui permet un niveau de divulgation approprié est celle de l’Initiative pour la Transparence dans les Industries Extractives (ITIE) [14.7 et 14.9] REMARQUE: cote jaune pour les sites « industriels »; pour les sites « artisanaux » c’est un critère de progrès
                                                    </label>
                                                    <div class="input-group">
                                                        <textarea name="acteurs_site_minier" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['acteurs_site_minier']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="x_card_code" class="control-label mb-1">
                                                    Le propriétaire ou l’exploitant du site minier refuse de fournir à l’inspecteur des échantillons de minéraux pour l’Empreinte Analytique (AFP) ou pour un outil diagnostique similaire [24.6]
                                                    </label>
                                                    <div class="input-group">
                                                        <textarea name="empreinte_analytique_afp" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['empreinte_analytique_afp']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="x_card_code" class="control-label mb-1">
                                                    L’exploitant du site minier se trouve en état de non-conformité par rapport aux lois sénégalaises relatives aux relations communautaires [25.17].
                                                    REMARQUE: cote jaune pour les sites « industriels » ; n’existe pas pour les sites « artisanaux »
                                                    </label>
                                                    <div class="input-group">
                                                        <textarea name="relations_communautaires" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['relations_communautaires']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                                
                                            </div>
                                           
                                            
                                            <br>
                                            
                                            <div>
                                                <button name="exigences_cotation" id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
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
