<?php
    include("../Model/db.php");
    session_start();

    if(isset($_POST['sondage_materiel_echantillonnage'])) {


        $_SESSION['carotte_plateau'] = $_POST['carotte_plateau'];
        $_SESSION['observations_carotte_plateau'] = $_POST['observations_carotte_plateau'];
        $_SESSION['carotte_lavee_debarrassee'] = $_POST['carotte_lavee_debarrassee'];
        $_SESSION['observations_carotte_lavee_debarrassee'] = $_POST['observations_carotte_lavee_debarrassee'];
        $_SESSION['carotte_etiquetee'] = $_POST['carotte_etiquetee'];
        $_SESSION['observations_carotte_etiquetee'] = $_POST['observations_carotte_etiquetee'];
        $_SESSION['carotte_marque_orientation'] = $_POST['carotte_marque_orientation'];
        $_SESSION['observations_carotte_marque_orientation'] = $_POST['observations_carotte_marque_orientation'];
        $_SESSION['recuperation_noyau'] = $_POST['recuperation_noyau'];
        $_SESSION['observations_recuperation_noyau'] = $_POST['observations_recuperation_noyau'];
        $_SESSION['recuperation_carotte'] = $_POST['recuperation_carotte'];
        $_SESSION['observations_recuperation_carotte'] = $_POST['observations_recuperation_carotte'];
        $_SESSION['marque_compteur'] = $_POST['marque_compteur'];
        $_SESSION['observations_marque_compteur'] = $_POST['observations_marque_compteur'];

        $_SESSION['carotte_site_sondage'] = $_POST['carotte_site_sondage'];
        $_SESSION['observations_carotte_site_sondage'] = $_POST['observations_carotte_site_sondage'];
        $_SESSION['intervalles_enlevement_quotidien'] = $_POST['intervalles_enlevement_quotidien'];
        $_SESSION['observations_intervalles_enlevement_quotidien'] = $_POST['observations_intervalles_enlevement_quotidien'];
        $_SESSION['stockage_carotte'] = $_POST['stockage_carotte'];
        $_SESSION['observations_stockage_carotte'] = $_POST['observations_stockage_carotte'];
        $_SESSION['collecte_carotte'] = $_POST['collecte_carotte'];
        $_SESSION['carotte_etiquetee_consequence'] = $_POST['carotte_etiquetee_consequence'];
        $_SESSION['observations_carotte_etiquetee_consequence'] = $_POST['observations_carotte_etiquetee_consequence'];
        $_SESSION['carotte_humide_seche'] = $_POST['carotte_humide_seche'];
        $_SESSION['observations_carotte_humide_seche'] = $_POST['observations_carotte_humide_seche'];
        $_SESSION['logs_foreurs'] = $_POST['logs_foreurs'];
        $_SESSION['observations_logs_foreurs'] = $_POST['observations_logs_foreurs'];
        $_SESSION['signature_geologue_foreur'] = $_POST['signature_geologue_foreur'];

        $_SESSION['observations_signature_geologue_foreur'] = $_POST['observations_signature_geologue_foreur'];
        $_SESSION['divergences'] = $_POST['divergences'];
        $_SESSION['observations_divergences'] = $_POST['observations_divergences'];
        $_SESSION['feuille_enregistrement'] = $_POST['feuille_enregistrement'];
        $_SESSION['observations_feuille_enregistrement'] = $_POST['observations_feuille_enregistrement'];
        $_SESSION['infos_saisies_fiche_enregistrement'] = $_POST['infos_saisies_fiche_enregistrement'];
        $_SESSION['fiches_sondages'] = $_POST['fiches_sondages'];
        $_SESSION['observations_fiches_sondages'] = $_POST['observations_fiches_sondages'];
        $_SESSION['registres_originaux'] = $_POST['registres_originaux'];
        $_SESSION['observations_registres_originaux'] = $_POST['observations_registres_originaux'];
        $_SESSION['bd_journalisation'] = $_POST['bd_journalisation'];
        $_SESSION['observations_bd_journalisation'] = $_POST['observations_bd_journalisation'];
        $_SESSION['personnel_saisie_donnees'] = $_POST['personnel_saisie_donnees'];
        $_SESSION['observations_personnel_saisie_donnees'] = $_POST['observations_personnel_saisie_donnees'];

        $_SESSION['acces_bd'] = $_POST['acces_bd'];
        $_SESSION['observations_acces_bd'] = $_POST['observations_acces_bd'];
        $_SESSION['enregistrement_bd'] = $_POST['enregistrement_bd'];
        $_SESSION['noyau_photographie'] = $_POST['noyau_photographie'];
        $_SESSION['observations_noyau_photographie'] = $_POST['observations_noyau_photographie'];
        $_SESSION['photographies_datees'] = $_POST['photographies_datees'];
        $_SESSION['observations_photographies_datees'] = $_POST['observations_photographies_datees'];
        $_SESSION['photographies_stockees'] = $_POST['photographies_stockees'];
        $_SESSION['observations_photographies_stockees'] = $_POST['observations_photographies_stockees'];
        

        header("Location:form9.php");

        $req = $bdd->prepare('INSERT INTO minier(site_minier, date_inspection, inspecteur, num_inspecteur, sous_site_inspecte, 
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
        observations_exploitation_travail_force, minerais_argent, observations_minerais_argent,
        programme_exploration, observations_programme_exploration, geologue_exploration, 
        observations_geologue_exploration, cartographie_geologique, observations_cartographie_geologique, 
        rapports_geologiques, observations_rapports_geologiques, excavation, observations_excavation, 
        forage, observations_forage, nombre_metres_fores, observations_nombre_metres_fores, 
        analyse_geochimique, observations_analyse_geochimique, modelisation_estimation, 
        observations_modelisation_estimation, autres_activites_exploration, 
        observations_autres_activites_exploration, etude_faisabilite_reserves, 
        observations_etude_faisabilite_reserves, depenses_exploration, 
        observations_depenses_exploration, environnement_geologique, epaisseur_orientation, 
        teneur, reserves_ressources, localisation_topographie, inspection_virtuelle, 
        etat_lieux_acces, rehabilitation_sites_sondage, cartes_affleurements, observations_cartes_affleurements, 
        carte_geologique, observations_carte_geologique, donnees_geochimie, observations_donnees_geochimie, 
        cartes_geochimie, observations_cartes_geochimie, geophysique_aeroportee_drone, 
        observations_geophysique_aeroportee_drone, geophysique_sol, observations_geophysique_sol, 
        tranchees_puits, observations_tranchees_puits, carotte_plateau, observations_carotte_plateau, 
        carotte_lavee_debarrassee, observations_carotte_lavee_debarrassee, carotte_etiquetee, 
        observations_carotte_etiquetee, carotte_marque_orientation, observations_carotte_marque_orientation, 
        recuperation_noyau, observations_recuperation_noyau, recuperation_carotte, 
        observations_recuperation_carotte, marque_compteur, observations_marque_compteur, 
        carotte_site_sondage, observations_carotte_site_sondage, intervalles_enlevement_quotidien, 
        observations_intervalles_enlevement_quotidien, stockage_carotte, observations_stockage_carotte, 
        collecte_carotte, carotte_etiquetee_consequence, observations_carotte_etiquetee_consequence, 
        carotte_humide_seche, observations_carotte_humide_seche, logs_foreurs, 
        observations_logs_foreurs, signature_geologue_foreur, observations_signature_geologue_foreur, 
        divergences, observations_divergences, feuille_enregistrement, observations_feuille_enregistrement, 
        infos_saisies_fiche_enregistrement, fiches_sondages, observations_fiches_sondages, 
        registres_originaux, observations_registres_originaux, bd_journalisation, 
        observations_bd_journalisation, personnel_saisie_donnees, observations_personnel_saisie_donnees, 
        acces_bd, observations_acces_bd, enregistrement_bd, noyau_photographie, 
        observations_noyau_photographie, photographies_datees, observations_photographies_datees, 
        photographies_stockees, observations_photographies_stockees)
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,
                ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,
                ?,?,?,?,?,?,?,?,?,?,?,
                ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,
                ?,?,?,?,?,?,?,?,?,?,?,?,?,?,
                ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,
                ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');

        $req->execute(array($_SESSION['site_minier'], $_SESSION['date_inspection'], $_SESSION['inspecteur'], $_SESSION['num_inspecteur'], $_SESSION['sous_site_inspecte'],
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
        $_SESSION['enfants_site_sans_travail'], $_SESSION['observations_enfants_site_sans_travail'], $_SESSION['exploitation_travail_force'], $_SESSION['observations_exploitation_travail_force'], $_SESSION['minerais_argent'], $_SESSION['observations_minerais_argent'], 

        $_SESSION['programme_exploration'], $_SESSION['observations_programme_exploration'], $_SESSION['geologue_exploration'], $_SESSION['observations_geologue_exploration'], 
        $_SESSION['cartographie_geologique'], $_SESSION['observations_cartographie_geologique'], $_SESSION['rapports_geologiques'], $_SESSION['observations_rapports_geologiques'], 
        $_SESSION['excavation'], $_SESSION['observations_excavation'], $_SESSION['forage'], $_SESSION['observations_forage'], 
        $_SESSION['nombre_metres_fores'], $_SESSION['observations_nombre_metres_fores'], $_SESSION['analyse_geochimique'], $_SESSION['observations_analyse_geochimique'], 
        $_SESSION['modelisation_estimation'], $_SESSION['observations_modelisation_estimation'], $_SESSION['autres_activites_exploration'], $_SESSION['observations_autres_activites_exploration'], 
        $_SESSION['etude_faisabilite_reserves'], $_SESSION['observations_etude_faisabilite_reserves'], $_SESSION['depenses_exploration'], $_SESSION['observations_depenses_exploration'], 
        $_SESSION['environnement_geologique'], $_SESSION['epaisseur_orientation'], $_SESSION['epaisseur_orientation'], $_SESSION['reserves_ressources'], 

        $_SESSION['localisation_topographie'], $_SESSION['inspection_virtuelle'], $_SESSION['etat_lieux_acces'], 
        $_SESSION['rehabilitation_sites_sondage'], $_SESSION['cartes_affleurements'], $_SESSION['observations_cartes_affleurements'], 
        $_SESSION['carte_geologique'], $_SESSION['observations_carte_geologique'], $_SESSION['donnees_geochimie'], 
        $_SESSION['observations_donnees_geochimie'], $_SESSION['cartes_geochimie'], $_SESSION['observations_cartes_geochimie'], 
        $_SESSION['geophysique_aeroportee_drone'], $_SESSION['observations_geophysique_aeroportee_drone'], $_SESSION['geophysique_sol'], 
        $_SESSION['observations_geophysique_sol'], $_SESSION['tranchees_puits'], $_SESSION['observations_tranchees_puits'], 
        $_SESSION['carotte_plateau'], $_SESSION['observations_carotte_plateau'], $_SESSION['carotte_lavee_debarrassee'], 
        $_SESSION['observations_carotte_lavee_debarrassee'], $_SESSION['carotte_etiquetee'], $_SESSION['observations_carotte_etiquetee'], 
        $_SESSION['carotte_marque_orientation'], $_SESSION['observations_carotte_marque_orientation'], $_SESSION['recuperation_noyau'], 
        $_SESSION['observations_recuperation_noyau'], $_SESSION['recuperation_carotte'], $_SESSION['observations_recuperation_carotte'], 
        $_SESSION['marque_compteur'], $_SESSION['observations_marque_compteur'], $_SESSION['carotte_site_sondage'], 
        $_SESSION['observations_carotte_site_sondage'], $_SESSION['intervalles_enlevement_quotidien'], $_SESSION['observations_intervalles_enlevement_quotidien'], 
        $_SESSION['stockage_carotte'], $_SESSION['observations_stockage_carotte'], $_SESSION['collecte_carotte'], 
        $_SESSION['carotte_etiquetee_consequence'], $_SESSION['observations_carotte_etiquetee_consequence'], $_SESSION['carotte_humide_seche'], 
        $_SESSION['observations_carotte_humide_seche'], $_SESSION['logs_foreurs'], $_SESSION['observations_logs_foreurs'], 
        $_SESSION['signature_geologue_foreur'], $_SESSION['observations_signature_geologue_foreur'], $_SESSION['divergences'], 
        $_SESSION['observations_divergences'], $_SESSION['feuille_enregistrement'], $_SESSION['observations_feuille_enregistrement'], 
        $_SESSION['infos_saisies_fiche_enregistrement'], $_SESSION['fiches_sondages'], $_SESSION['observations_fiches_sondages'], 
        $_SESSION['registres_originaux'], $_SESSION['observations_registres_originaux'], $_SESSION['bd_journalisation'], 
        $_SESSION['observations_bd_journalisation'], $_SESSION['personnel_saisie_donnees'], $_SESSION['observations_personnel_saisie_donnees'], 
        $_SESSION['acces_bd'], $_SESSION['observations_acces_bd'], $_SESSION['enregistrement_bd'], 
        $_SESSION['noyau_photographie'], $_SESSION['observations_noyau_photographie'], $_SESSION['photographies_datees'], 
        $_SESSION['observations_photographies_datees'], $_SESSION['photographies_stockees'], $_SESSION['observations_photographies_stockees']
        ));
        
        $req->closeCursor();

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
                            <a href="form7.php" class="btn btn-primary"> >>> Revenir étape précédente</a>
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
                                    <div class="card-header">Sondage et Matériels échantillonnage</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">9 - Sondage et Matériels échantillonnage (#Audit Géologique)</h3>
                                        </div>
                                        <hr>
                                        <form action="form8.php" method="post" novalidate="novalidate">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                            (Sur site; indicateurs à incidence sur l'inventaire des ressources & réserves et sur la cartographie)
                                                        </label>
                                                    
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                            <strong>Gestion des carottes</strong>
                                                        </label>
                                                    
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">La carotte est-elle placée dans des plateaux à carottes appropriés ?</label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="carotte_plateau" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="carotte_plateau" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_carotte_plateau" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_carotte_plateau']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">La carotte est-elle lavée ou débarrassée de tout débris ?</label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="carotte_lavee_debarrassee" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="carotte_lavee_debarrassee" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_carotte_lavee_debarrassee" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_carotte_lavee_debarrassee']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                            Les plateaux de carottes sont-ils étiquetés (c'est-à-dire le numéro du plateau, ID du trou, les profondeurs de départ et d'arrivée ?)
                                                        </label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="carottte_etiquetee" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="carottte_etiquetee" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_carotte_etiquetee" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_carotte_etiquetee']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">La carotte comporte-t-elle une marque d'orientation du fond de trou ?</label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="carotte_marque_orientation" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="carotte_marque_orientation" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_carotte_marque_orientation" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_carotte_marque_orientation']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Des récupérations de noyau sont-elles effectuées ?</label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="recuperation_noyau" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="recuperation_noyau" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_recuperation_noyau" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_recuperation_noyau']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Les récupérations de carottes sont-elles effectuées sur place ?</label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="recuperation_carotte" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="recuperation_carotte" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_recuperation_carotte" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_recuperation_carotte']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Y a-t-il des marques de compteur sur le noyau ?</label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="marque_compteur" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="marque_compteur" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_marque_compteur" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_marque_compteur']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                            Les carottes sont-elles régulièrement retirées du site de sondage ?
                                                        </label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="carotte_site_sondage" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="carotte_site_sondage" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_carotte_site_sondage" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_carotte_site_sondage']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                            Si oui, quels étaient les intervalles d'enlèvement, quotidiens ?
                                                        </label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="intervalles_enlevement_quotidien" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="intervalles_enlevement_quotidien" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_intervalles_enlevement_quotidien" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_intervalles_enlevement_quotidien']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                            Où sont stockées les carottes ? (magasin protégé?, plein air?, etc.)
                                                        </label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="stockage_carotte" type="checkbox" class="form-control cc-cvc" value="magazin" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">magazin
                                                            <input id="x_card_code" name="stockage_carotte" type="checkbox" class="form-control cc-cvc" value="plein air" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">plein air
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Autres</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_stockage_carotte" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_stockage_carotte']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                            <strong>Si le forage à circulation inversée (RC)</strong>
                                                        </label>
                                                    
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="row">
                                                
                                                <div class="col-12">
                                                    <label for="x_card_code" class="control-label mb-1">
                                                        Quel est le taux de collecte des carottes, c'est-à-dire chaque mètre ?
                                                    </label>
                                                    <div class="input-group">
                                                        <textarea name="collecte_carotte" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['collecte_carotte']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                            Les plateaux à carottes sont-ils étiquetés en conséquence, c'est-à- dire numéro du plateau, identifiant du trou, profondeur ?
                                                        </label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="carotte_etiquetee_consequence" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="carotte_etiquetee_consequence" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_carotte_etiquetee_consequence" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_carotte_etiquetee_consequence']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Les carottes étaient-ils humides/seches ?</label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="carotte_humide_seche" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="carotte_humide_seche" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_carotte_humide_seche" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_carotte_humide_seche']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                            <strong>Fiche journalière des foreurs</strong>
                                                        </label>
                                                    
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Les logs des foreurs sont-ils disponibles ?</label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="logs_foreurs" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="logs_foreurs" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_logs_foreurs" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_logs_foreurs']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Sont-ils signés par le géologue et le foreur sur place ?</label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="signature_geologue_foreur" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="signature_geologue_foreur" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_signature_geologue_foreur" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_signature_geologue_foreur']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                            Y a-t-il des divergences importantes entre la feuille de forage et la feuille de récupération des carottes du géologue ?
                                                        </label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="divergences" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="divergences" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_divergences" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_divergences']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                            <strong>Enregistrement des carottes</strong>
                                                        </label>
                                                    
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                            Existe-t-il des feuilles d'enregistrement des carottes standardisées ?
                                                        </label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="feuille_enregistrement" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="feuille_enregistrement" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_feuille_enregistrement" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_feuille_enregistrement']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                
                                                <div class="col-12">
                                                    <label for="x_card_code" class="control-label mb-1">
                                                        Quelles informations sont saisies sur les fiches d'enregistrement ?
                                                    </label>
                                                    <div class="input-group">
                                                        <textarea name="infos_saisies_fiche_enregistrement" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['infos_saisies_fiche_enregistrement']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                            Ces informations sont-elles identiques sur l'ensemble des fiches de sondages? Par exemple, une lithologie est désignée différemment plusieurs fois
                                                        </label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="fiches_sondages" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="fiches_sondages" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_fiches_sondages" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_fiches_sondages']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                            Les registres originaux sont-ils classés?
                                                        </label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="registres_originaux" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="registres_originaux" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_registres_originaux" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_registres_originaux']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                            Existe-t-il une base de données dédiée à la journalisation ?
                                                        </label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="bd_journalisation" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="bd_journalisation" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_bd_journalisation" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_bd_journalisation']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                            Y'a-t-il du personnel dédié à la saisie des données ?
                                                        </label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="personnel_saisie_donnees" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="personnel_saisie_donnees" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_personnel_saisie_donnees" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_personnel_saisie_donnees']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                            Existe-t-il des restrictions d'accès à la base de données ?
                                                        </label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="acces_bd" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="acces_bd" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_acces_bd" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_acces_bd']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                
                                                <div class="col-12">
                                                    <label for="x_card_code" class="control-label mb-1">
                                                        Sélectionnez au moins 30 % des trous, confirmez les feuilles d'enregistrement par rapport aux entrées de la base de données.
                                                    </label>
                                                    <div class="input-group">
                                                        <textarea name="enregistrement_bd" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['enregistrement_bd']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                            <strong>Photographies</strong>
                                                        </label>
                                                    
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                            Le noyau est-il photographié ?
                                                        </label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="noyau_photographie" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="noyau_photographie" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_noyau_photographie" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_noyau_photographie']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                            Les photographies sont-elles datées ?
                                                        </label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="photographies_datees" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="photographies_datees" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_photographies_datees" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_photographies_datees']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                            Où et sous quel format les photographies sont-elles stockées ?
                                                        </label>
                                                        <div class="input-group">
                                                            <input id="x_card_code" name="photographies_stockees" type="checkbox" class="form-control cc-cvc" value="Oui" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Oui
                                                            <input id="x_card_code" name="photographies_stockees" type="checkbox" class="form-control cc-cvc" value="Non" data-val="true" data-val-required="Please enter the security code"
                                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">Non
                                                        </div>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Observations</label>
                                                    <div class="input-group">
                                                        <textarea name="observations_photographies_stockees" class="form-control" id="" cols="30" rows="10">
                                                            <?php echo $_SESSION['observations_photographies_stockees']?>
                                                        </textarea>

                                                    </div>
                                                </div>
                                            </div>
                                        
                                            
                                            <br>
                                            
                                            <div>
                                                <button name="sondage_materiel_echantillonnage" id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
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
