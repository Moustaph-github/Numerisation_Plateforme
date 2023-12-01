<?php
    include("../Model/db.php");
    session_start();

    $req = $bdd->prepare('SELECT * FROM minier');
    $req->execute();
    $enregminier = $req->fetchAll(PDO::FETCH_OBJ);

    if(isset($_POST["exporter"]))
    {
        //$query = "SELECT * FROM minier";
        //$res = mysqli_query($connect, $query);
        if($enregminier > 0)
        {
            $excel = "";
            $excel .= "Id\tSite_Minier\tDate_inspection\tInspecteur\tNumero_inspecteur\tSous_site_inspecte\tNumero_Enregistrement_National\tnom_exploitant\tphone_exploitant\temail_exploitant\tsiege_code_enreg\tadresse_siege\ttype_societe\tnom_represen_legal\tphone_representant\temail_representant\tresponsable_site\tphone_resp_site\temail_resp_site\ttotal_actionnaires\tactionnaires\tregion_siege\tdepartement_siege\tcommune_siege\tvillage\tutm_gps\tx_gps\ty_gps\tsurface\tactivites_minieres\ttype_permis\tnum_degre_agrement\tdate_delivrance\tdate_expiration\ttype_exploitation\tassurance_sociale\tarrete_attribution_titre\tobservations_arrete_attr_titre\tconvention_miniere\tobservations_convention_miniere\tcertificat_conformite_inspection\tobservations_certificat_conformite\tquitus_fiscal\tobservations_quitus_fiscal\tetude_faisabilite\tobservations_etude_faisabilite\teies\tobservations_eies\trapport_activites_trimestriels\tobservations_rapport_activites_trimestriels\trapport_activites_annuel\tobservations_rapport_activites_annuel\tmanuel_procedure\tobservations_manuel_procedure\tbilan_comptable_annuel\tobservations_bilan_comptable_annuel\tcompte_resultat\tobservations_compte_resultat\tversement_redevance\tobservations_versement_redevance\tversement_taxe_superficiaire\tobservations_versement_taxe_superficiaire\tlois_reglements\tobservations_lois_reglements\texploitation_permis\tobservations_exploitation_permis\thoraire_travail\tobservations_horaire_travail\tsysteme_assurance\tobservations_systeme_assurance\ttravailleurs\tobservations_travailleurs\tenfants_exploitation\tobservations_enfants_exploitation\tservices_supplementaires\tobservations_services_supplementaires\tenfants_site_sans_travail\tobservations_enfants_site_sans_travail\texploitation_travail_force\tobservations_exploitation_travail_force\tminerais_argent\tobservations_minerais_argent\tprogramme_exploration\tobservations_programme_exploration\tgeologue_exploration\tobservations_geologue_exploration\tcartographie_geologique\tobservations_cartographie_geologique\trapports_geologiques\tobservations_rapports_geologiques\texcavation\tobservations_excavation\tforage\tobservations_forage\tnombre_metres_fores\tobservations_nombre_metres_fores\tanalyse_geochimique\tobservations_analyse_geochimique\tmodelisation_estimation\tobservations_modelisation_estimation\tautres_activites_exploration\tobservations_autres_activites_exploration\tetude_faisabilite_reserves\tobservations_etude_faisabilite_reserves\tdepenses_exploration\tobservations_depenses_exploration\tenvironnement_geologique\tepaisseur_orientation\tteneur\treserves_ressources\tlocalisation_topographie\tinspection_virtuelle\tetat_lieux_acces\trehabilitation_sites_sondage\tcartes_affleurements\tobservations_cartes_affleurements\tcarte_geologique\tobservations_carte_geologique\tdonnees_geochimie\tobservations_donnees_geochimie\tcartes_geochimie\tobservations_cartes_geochimie\tgeophysique_aeroportee_drone\tobservations_geophysique_aeroportee_drone\tgeophysique_sol\tobservations_geophysique_sol\ttranchees_puits\tobservations_tranchees_puits\tcarotte_plateau\tobservations_carotte_plateau\tcarotte_lavee_debarrassee\tobservations_carotte_lavee_debarrassee\tcarotte_etiquetee\tobservations_carotte_etiquetee\tcarotte_marque_orientation\tobservations_carotte_marque_orientation\trecuperation_noyau\tobservations_recuperation_noyau\trecuperation_carotte\tobservations_recuperation_carotte\tmarque_compteur\tobservations_marque_compteur\tcarotte_site_sondage\tobservations_carotte_site_sondage\tintervalles_enlevement_quotidien\tobservations_intervalles_enlevement_quotidien\tstockage_carotte\tobservations_stockage_carotte\tcollecte_carotte\tcarotte_etiquetee_consequence\tobservations_carotte_etiquetee_consequence\tcarotte_humide_seche\tobservations_carotte_humide_seche\tlogs_foreurs\tobservations_logs_foreurs\tsignature_geologue_foreur\tobservations_signature_geologue_foreur\tdivergences\tobservations_divergences\tfeuille_enregistrement\tobservations_feuille_enregistrement\tinfos_saisies_fiche_enregistrement\tfiches_sondages\tobservations_fiches_sondages\tregistres_originaux\tobservations_registres_originaux\tbd_journalisation\tobservations_bd_journalisation\tpersonnel_saisie_donnees\tobservations_personnel_saisie_donnees\tacces_bd\tobservations_acces_bd\tenregistrement_bd\tnoyau_photographie\tobservations_noyau_photographie\tphotographies_datees\tobservations_photographies_datees\tphotographies_stockees\tobservations_photographies_stockees\n";
            
            
            foreach($enregminier as $enregminier){
                $excel .= "$enregminier->id\t$enregminier->site_minier\t$enregminier->date_inspection\t$enregminier->inspecteur\t$enregminier->num_inspecteur\t$enregminier->sous_site_inspecte\t$enregminier->num_enreg_national\t$enregminier->nom_exploitant\t$enregminier->phone_exploitant\t$enregminier->email_exploitant\t$enregminier->siege_code_enreg\t$enregminier->adresse_siege\t$enregminier->type_societe\t$enregminier->nom_represen_legal\t$enregminier->phone_representant\t$enregminier->email_representant\t$enregminier->responsable_site\t$enregminier->phone_resp_site\t$enregminier->email_resp_site\t$enregminier->total_actionnaires\t$enregminier->actionnaires\t$enregminier->region_siege\t$enregminier->departement_siege\t$enregminier->commune_siege\t$enregminier->village\t$enregminier->utm_gps\t$enregminier->x_gps\t$enregminier->y_gps\t$enregminier->surface\t$enregminier->activites_minieres\t$enregminier->type_permis\t$enregminier->num_degre_agrement\t$enregminier->date_delivrance\t$enregminier->date_expiration\t$enregminier->type_exploitation\t$enregminier->assurance_sociale\t$enregminier->arrete_attribution_titre\t$enregminier->observations_arrete_attr_titre\t$enregminier->convention_miniere\t$enregminier->observations_convention_miniere\t$enregminier->certificat_conformite_inspection\t$enregminier->observations_certificat_conformite\t$enregminier->quitus_fiscal\t$enregminier->observations_quitus_fiscal\t$enregminier->etude_faisabilite\t$enregminier->observations_etude_faisabilite\t$enregminier->eies\t$enregminier->observations_eies\t$enregminier->rapport_activites_trimestriels\t$enregminier->observations_rapport_activites_trimestriels\t$enregminier->rapport_activites_annuel\t$enregminier->observations_rapport_activites_annuel\t$enregminier->manuel_procedure\t$enregminier->observations_manuel_procedure\t$enregminier->bilan_comptable_annuel\t$enregminier->observations_bilan_comptable_annuel\t$enregminier->compte_resultat\t$enregminier->observations_compte_resultat\t$enregminier->versement_redevance\t$enregminier->observations_versement_redevance\t$enregminier->versement_taxe_superficiaire\t$enregminier->observations_versement_taxe_superficiaire\t$enregminier->lois_reglements\t$enregminier->observations_lois_reglements\t$enregminier->exploitation_permis\t$enregminier->observations_exploitation_permis\t$enregminier->horaire_travail\t$enregminier->observations_horaire_travail\t$enregminier->systeme_assurance\t$enregminier->observations_systeme_assurance\t$enregminier->travailleurs\t$enregminier->observations_travailleurs\t$enregminier->enfants_exploitation\t$enregminier->observations_enfants_exploitation\t$enregminier->services_supplementaires\t$enregminier->observations_services_supplementaires\t$enregminier->enfants_site_sans_travail\t$enregminier->observations_enfants_site_sans_travail\t$enregminier->exploitation_travail_force\t$enregminier->observations_exploitation_travail_force\t$enregminier->minerais_argent\t$enregminier->observations_minerais_argent\t$enregminier->programme_exploration\t$enregminier->observations_programme_exploration\t$enregminier->geologue_exploration\t$enregminier->observations_geologue_exploration\t$enregminier->cartographie_geologique\t$enregminier->observations_cartographie_geologique\t$enregminier->rapports_geologiques\t$enregminier->observations_rapports_geologiques\t$enregminier->excavation\t$enregminier->observations_excavation\t$enregminier->forage\t$enregminier->observations_forage\t$enregminier->nombre_metres_fores\t$enregminier->observations_nombre_metres_fores\t$enregminier->analyse_geochimique\t$enregminier->observations_analyse_geochimique\t$enregminier->modelisation_estimation\t$enregminier->observations_modelisation_estimation\t$enregminier->autres_activites_exploration\t$enregminier->observations_autres_activites_exploration\t$enregminier->etude_faisabilite_reserves\t$enregminier->observations_etude_faisabilite_reserves\t$enregminier->depenses_exploration\t$enregminier->observations_depenses_exploration\t$enregminier->environnement_geologique\t$enregminier->epaisseur_orientation\t$enregminier->teneur\t$enregminier->reserves_ressources\t$enregminier->localisation_topographie\t$enregminier->inspection_virtuelle\t$enregminier->etat_lieux_acces\t$enregminier->rehabilitation_sites_sondage\t$enregminier->cartes_affleurements\t$enregminier->observations_cartes_affleurements\t$enregminier->carte_geologique\t$enregminier->observations_carte_geologique\t$enregminier->donnees_geochimie\t$enregminier->observations_donnees_geochimie\t$enregminier->cartes_geochimie\t$enregminier->observations_cartes_geochimie\t$enregminier->geophysique_aeroportee_drone\t$enregminier->observations_geophysique_aeroportee_drone\t$enregminier->geophysique_sol\t$enregminier->observations_geophysique_sol\t$enregminier->tranchees_puits\t$enregminier->observations_tranchees_puits\t$enregminier->carotte_plateau\t$enregminier->observations_carotte_plateau\t$enregminier->carotte_lavee_debarrassee\t$enregminier->observations_carotte_lavee_debarrassee\t$enregminier->carotte_etiquetee\t$enregminier->observations_carotte_etiquetee\t$enregminier->carotte_marque_orientation\t$enregminier->observations_carotte_marque_orientation\t$enregminier->recuperation_noyau\t$enregminier->observations_recuperation_noyau\t$enregminier->recuperation_carotte\t$enregminier->observations_recuperation_carotte\t$enregminier->marque_compteur\t$enregminier->observations_marque_compteur\t$enregminier->carotte_site_sondage\t$enregminier->observations_carotte_site_sondage\t$enregminier->intervalles_enlevement_quotidien\t$enregminier->observations_intervalles_enlevement_quotidien\t$enregminier->stockage_carotte\t$enregminier->observations_stockage_carotte\t$enregminier->collecte_carotte\t$enregminier->carotte_etiquetee_consequence\t$enregminier->observations_carotte_etiquetee_consequence\t$enregminier->carotte_humide_seche\t$enregminier->observations_carotte_humide_seche\t$enregminier->logs_foreurs\t$enregminier->observations_logs_foreurs\t$enregminier->signature_geologue_foreur\t$enregminier->observations_signature_geologue_foreur\t$enregminier->divergences\t$enregminier->observations_divergences\t$enregminier->feuille_enregistrement\t$enregminier->observations_feuille_enregistrement\t$enregminier->infos_saisies_fiche_enregistrement\t$enregminier->fiches_sondages\t$enregminier->observations_fiches_sondages\t$enregminier->registres_originaux\t$enregminier->observations_registres_originaux\t$enregminier->bd_journalisation\t$enregminier->observations_bd_journalisation\t$enregminier->personnel_saisie_donnees\t$enregminier->observations_personnel_saisie_donnees\t$enregminier->acces_bd\t$enregminier->observations_acces_bd\t$enregminier->enregistrement_bd\t$enregminier->noyau_photographie\t$enregminier->observations_noyau_photographie\t$enregminier->photographies_datees\t$enregminier->observations_photographies_datees\t$enregminier->photographies_stockees\t$enregminier->observations_photographies_stockees\n";
            }
            header('Content-type: application/vnd.ms-excel');
            header('Content-disposition: attachment; filename=minier.xls');

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
                                <form action="index.php" method="post">
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
                                                <th>Site Minier</th>
                                                <th>Date inspection</th>
                                                <th>Inspecteur</th>
                                                <th class="text-right">Numero inspecteur</th>
                                                <th class="text-right">Sous site inspecte</th>
                                                <th class="text-right">Numero enregistrement national</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php if($enregminier):
                                                foreach($enregminier as $enregminier): ?>
                                                <tr>
                                                    <td><?=$enregminier->site_minier;?></td>
                                                    <td><?=$enregminier->date_inspection;?></td>
                                                    <td><?=$enregminier->inspecteur;?></td>
                                                    <td class="text-right"><?=$enregminier->num_inspecteur;?></td>
                                                    <td class="text-right"><?=$enregminier->sous_site_inspecte;?></td>
                                                    <td class="text-right"><?=$enregminier->num_enreg_national;?></td>
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
