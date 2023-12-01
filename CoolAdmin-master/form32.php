<?php
    include("../Model/db.php");
    session_start();

    if(isset($_POST['declaration_directeur'])) {    

        $_SESSION['lieu_declaration'] = $_POST['lieu_declaration'];
        $_SESSION['date_declaration'] = $_POST['date_declaration'];

        // requete

        /*$req = $bdd->prepare('INSERT INTO minier(site_minier,date_inspection,inspecteur,num_inspecteur,
        sous_site_inspecte,num_enreg_national,nom_exploitant,phone_exploitant,email_exploitant,
        siege_code_enreg,adresse_siege,type_societe,nom_represen_legal,phone_representant,
        email_representant,responsable_site,phone_resp_site,email_resp_site,total_actionnaires,
        actionnaires,region_siege,departement_siege,commune_siege,village,utm_gps,x_gps,y_gps,
        surface,activites_minieres,type_permis,num_degre_agrement,date_delivrance,date_expiration,
        type_exploitation,assurance_sociale,arrete_attribution_titre,observations_arrete_attr_titre,
        convention_miniere,observations_convention_miniere,certificat_conformite_inspection,
        observations_certificat_conformite,quitus_fiscal,observations_quitus_fiscal,
        etude_faisabilite,observations_etude_faisabilite,eies,observations_eies,rapport_activites_trimestriels,
        observations_rapport_activites_trimestriels,rapport_activites_annuel,observations_rapport_activites_annuel,
        manuel_procedure,observations_manuel_procedure,bilan_comptable_annuel,
        observations_bilan_comptable_annuel,compte_resultat,observations_compte_resultat,
        versement_redevance,observations_versement_redevance,versement_taxe_superficiaire,
        observations_versement_taxe_superficiaire,lois_reglements,observations_lois_reglements,
        exploitation_permis,observations_exploitation_permis,horaire_travail,observations_horaire_travail,
        systeme_assurance,observations_systeme_assurance,travailleurs,observations_travailleurs,
        enfants_exploitation,observations_enfants_exploitation,services_supplementaires,
        observations_services_supplementaires,enfants_site_sans_travail,observations_enfants_site_sans_travail,
        exploitation_travail_force,observations_exploitation_travail_force,minerais_argent,
        observations_minerais_argent,programme_exploration,observations_programme_exploration,
        geologue_exploration,observations_geologue_exploration,cartographie_geologique,
        observations_cartographie_geologique,rapports_geologiques,observations_rapports_geologiques,
        excavation,observations_excavation,forage,observations_forage,nombre_metres_fores,
        observations_nombre_metres_fores,analyse_geochimique,observations_analyse_geochimique,
        modelisation_estimation,observations_modelisation_estimation,autres_activites_exploration,
        observations_autres_activites_exploration,etude_faisabilite_reserves,observations_etude_faisabilite_reserves,
        depenses_exploration,observations_depenses_exploration,environnement_geologique,
        epaisseur_orientation,teneur,reserves_ressources,localisation_topographie,inspection_virtuelle,
        etat_lieux_acces,rehabilitation_sites_sondage,cartes_affleurements,
        observations_cartes_affleurements,carte_geologique,observations_carte_geologique,
        donnees_geochimie,observations_donnees_geochimie,cartes_geochimie,observations_cartes_geochimie,
        geophysique_aeroportee_drone,observations_geophysique_aeroportee_drone,geophysique_sol,
        observations_geophysique_sol,tranchees_puits,observations_tranchees_puits,
        carotte_plateau,observations_carotte_plateau,carotte_lavee_debarrassee,observations_carotte_lavee_debarrassee,
        carotte_etiquetee,observations_carotte_etiquetee,carotte_marque_orientation,
        observations_carotte_marque_orientation,recuperation_noyau,observations_recuperation_noyau,
        recuperation_carotte,observations_recuperation_carotte,marque_compteur,
        observations_marque_compteur,carotte_site_sondage,observations_carotte_site_sondage,
        intervalles_enlevement_quotidien,observations_intervalles_enlevement_quotidien,
        stockage_carotte,observations_stockage_carotte,collecte_carotte,carotte_etiquetee_consequence,
        observations_carotte_etiquetee_consequence,carotte_humide_seche,observations_carotte_humide_seche,
        logs_foreurs,observations_logs_foreurs,signature_geologue_foreur,observations_signature_geologue_foreur,
        divergences,observations_divergences,feuille_enregistrement,
        observations_feuille_enregistrement,infos_saisies_fiche_enregistrement,fiches_sondages,
        observations_fiches_sondages,registres_originaux,observations_registres_originaux,
        bd_journalisation,observations_bd_journalisation,personnel_saisie_donnees,
        observations_personnel_saisie_donnees,acces_bd,observations_acces_bd,enregistrement_bd,
        noyau_photographie,observations_noyau_photographie,photographies_datees,
        observations_photographies_datees,photographies_stockees,
        observations_photographies_stockees)
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,
        ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,
        ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,
        ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,
        ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,
        ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');*/

        /*$req->execute(array($_SESSION['site_minier'],$_SESSION['date_inspection'],$_SESSION['inspecteur'],
        $_SESSION['num_inspecteur'],$_SESSION['sous_site_inspecte'],$_SESSION['num_enreg_national'],$_SESSION['nom_exploitant'],
        $_SESSION['phone_exploitant'],$_SESSION['email_exploitant'],$_SESSION['siege_code_enreg'],$_SESSION['adresse_siege'],
        $_SESSION['type_societe'],$_SESSION['nom_represen_legal'],$_SESSION['phone_representant'],$_SESSION['email_representant'],
        $_SESSION['responsable_site'],$_SESSION['phone_resp_site'],$_SESSION['email_resp_site'],$_SESSION['total_actionnaires'],
        $_SESSION['actionnaires'],$_SESSION['region_siege'],$_SESSION['departement_siege'],$_SESSION['commune_siege'],
        $_SESSION['village'],$_SESSION['utm_gps'],$_SESSION['x_gps'],$_SESSION['y_gps'],
        $_SESSION['surface'],$_SESSION['activites_minieres'],$_SESSION['type_permis'],$_SESSION['num_degre_agrement'],
        $_SESSION['date_delivrance'],$_SESSION['date_expiration'],$_SESSION['type_exploitation'],$_SESSION['assurance_sociale'],
        $_SESSION['arrete_attribution_titre'],$_SESSION['observations_arrete_attr_titre'],$_SESSION['convention_miniere'],$_SESSION['observations_convention_miniere'],
        $_SESSION['certificat_conformite_inspection'],$_SESSION['observations_certificat_conformite'],$_SESSION['quitus_fiscal'],$_SESSION['observations_quitus_fiscal'],
        $_SESSION['etude_faisabilite'],$_SESSION['observations_etude_faisabilite'],$_SESSION['eies'],$_SESSION['observations_eies'],
        $_SESSION['rapport_activites_trimestriels'],$_SESSION['observations_rapport_activites_trimestriels'],$_SESSION['rapport_activites_annuel'],$_SESSION['observations_rapport_activites_annuel'],
        $_SESSION['manuel_procedure'],$_SESSION['observations_manuel_procedure'],$_SESSION['bilan_comptable_annuel'],$_SESSION['observations_bilan_comptable_annuel'],
        $_SESSION['compte_resultat'],$_SESSION['observations_compte_resultat'],$_SESSION['versement_redevance'],$_SESSION['observations_versement_redevance'],
        $_SESSION['versement_taxe_superficiaire'],$_SESSION['observations_versement_taxe_superficiaire'],$_SESSION['lois_reglements'],$_SESSION['observations_lois_reglements'],
        $_SESSION['exploitation_permis'],$_SESSION['observations_exploitation_permis'],$_SESSION['horaire_travail'],$_SESSION['observations_horaire_travail'],
        $_SESSION['systeme_assurance'],$_SESSION['observations_systeme_assurance'],$_SESSION['travailleurs'],$_SESSION['observations_travailleurs'],
        $_SESSION['enfants_exploitation'],$_SESSION['observations_enfants_exploitation'],$_SESSION['services_supplementaires'],$_SESSION['observations_services_supplementaires'],
        $_SESSION['enfants_site_sans_travail'],$_SESSION['observations_enfants_site_sans_travail'],$_SESSION['exploitation_travail_force'],$_SESSION['observations_exploitation_travail_force'],
        $_SESSION['minerais_argent'],$_SESSION['observations_minerais_argent'],$_SESSION['programme_exploration'],$_SESSION['observations_programme_exploration'],
        $_SESSION['geologue_exploration'],$_SESSION['observations_geologue_exploration'],$_SESSION['cartographie_geologique'],$_SESSION['observations_cartographie_geologique'],
        $_SESSION['rapports_geologiques'],$_SESSION['observations_rapports_geologiques'],$_SESSION['excavation'],$_SESSION['observations_excavation'],
        $_SESSION['forage'],$_SESSION['observations_forage'],$_SESSION['nombre_metres_fores'],$_SESSION['observations_nombre_metres_fores'],
        $_SESSION['analyse_geochimique'],$_SESSION['observations_analyse_geochimique'],$_SESSION['modelisation_estimation'],$_SESSION['observations_modelisation_estimation'],
        $_SESSION['autres_activites_exploration'],$_SESSION['observations_autres_activites_exploration'],$_SESSION['etude_faisabilite_reserves'],$_SESSION['observations_etude_faisabilite_reserves'],
        $_SESSION['depenses_exploration'],$_SESSION['observations_depenses_exploration'],$_SESSION['environnement_geologique'],$_SESSION['epaisseur_orientation'],
        $_SESSION['teneur'],$_SESSION['reserves_ressources'],$_SESSION['localisation_topographie'],$_SESSION['inspection_virtuelle'],
        $_SESSION['etat_lieux_acces'],$_SESSION['rehabilitation_sites_sondage'],$_SESSION['cartes_affleurements'],$_SESSION['observations_cartes_affleurements'],
        $_SESSION['carte_geologique'],$_SESSION['observations_carte_geologique'],$_SESSION['donnees_geochimie'],$_SESSION['observations_donnees_geochimie'],
        $_SESSION['cartes_geochimie'],$_SESSION['observations_cartes_geochimie'],$_SESSION['geophysique_aeroportee_drone'],$_SESSION['observations_geophysique_aeroportee_drone'],
        $_SESSION['geophysique_sol'],$_SESSION['observations_geophysique_sol'],$_SESSION['tranchees_puits'],$_SESSION['observations_tranchees_puits'],
        $_SESSION['carotte_plateau'],$_SESSION['observations_carotte_plateau'],$_SESSION['carotte_lavee_debarrassee'],$_SESSION['observations_carotte_lavee_debarrassee'],
        $_SESSION['carotte_etiquetee'],$_SESSION['observations_carotte_etiquetee'],$_SESSION['carotte_marque_orientation'],$_SESSION['observations_carotte_marque_orientation'],
        $_SESSION['recuperation_noyau'],$_SESSION['observations_recuperation_noyau'],$_SESSION['recuperation_carotte'],$_SESSION['observations_recuperation_carotte'],
        $_SESSION['marque_compteur'],$_SESSION['observations_marque_compteur'],$_SESSION['carotte_site_sondage'],$_SESSION['observations_carotte_site_sondage'],
        $_SESSION['intervalles_enlevement_quotidien'],$_SESSION['observations_intervalles_enlevement_quotidien'],$_SESSION['stockage_carotte'],$_SESSION['observations_stockage_carotte'],
        $_SESSION['collecte_carotte'],$_SESSION['carotte_etiquetee_consequence'],$_SESSION['observations_carotte_etiquetee_consequence'],$_SESSION['carotte_humide_seche'],
        $_SESSION['observations_carotte_humide_seche'],$_SESSION['logs_foreurs'],$_SESSION['observations_logs_foreurs'],$_SESSION['signature_geologue_foreur'],
        $_SESSION['observations_signature_geologue_foreur'],$_SESSION['divergences'],$_SESSION['observations_divergences'],$_SESSION['feuille_enregistrement'],
        $_SESSION['observations_feuille_enregistrement'],$_SESSION['infos_saisies_fiche_enregistrement'],$_SESSION['fiches_sondages'],$_SESSION['observations_fiches_sondages'],
        $_SESSION['registres_originaux'],$_SESSION['observations_registres_originaux'],$_SESSION['bd_journalisation'],$_SESSION['observations_bd_journalisation'],
        $_SESSION['personnel_saisie_donnees'],$_SESSION['observations_personnel_saisie_donnees'],$_SESSION['acces_bd'],$_SESSION['observations_acces_bd'],
        $_SESSION['enregistrement_bd'],$_SESSION['noyau_photographie'],$_SESSION['observations_noyau_photographie'],$_SESSION['photographies_datees'],
        $_SESSION['observations_photographies_datees'],$_SESSION['photographies_stockees'],$_SESSION['observations_photographies_stockees']));
        */

        /*$req->closeCursor();*/


        // requete first

        /*$req1 = $bdd->prepare('INSERT INTO minier-first(bd_sondages_miniers,mesures_controle_verification,
        personne_qualifiee,nature_limitations_eventuelles,checking_datas,estimation_reserves,plan_exploitation,
        methodes_echantillonnage,description_methodologie,description_sondage_echantillonnage_recuperation,
        discussion_echantillon,description_types_roches,statistique_echantillon,suivi_evaluation_echantillon,
        protocole_cq_aq,proprete,securite,inventaire_plateau,controle_inventaire,noyau,proprete_laboratoire,
        protocole_etalonnage_labo,discussion_protocole_cq,preparation_echantillon,analyse_echantillon,
        nature_etendue_mesure,adequation_procedures,donnees_vers_bd,minerais_exploites,observations_produit_secondaire,
        grandes_mines_ciel_ouvert,petites_mines_ciel_ouvert,mines_souterraines,autres_mines,
        traitement_interne_residus,observations_traitement_interne_residus,achat_residus,observations_achat_residus,
        vente_residus_traitement,observations_vente_residus_traitement,proportion_vente,terrils_residus,
        observations_terrils_residus,nombre_dimensions,checking_infos,autres_infos,methodes_exploitation,
        autres_methodes_exploitation,compresseurs,equipements_lourds,marteau_piqueur,pompes_eau,
        equipement_bonne_condition,equipement_en_panne,plan_formation_operateurs,autres_equipements,
        orpaillage,concasseur_broyeur,jigs,table_secousses,lixiviation,amalgamation,autres_methodes_exploitations,
        perte_minerais_fins,produits_economiques,pre_concentre,concentre,residu_traitement,
        autre_produit_economique,debut_activites_minieres,duree_activites_minieres,
        hauteurs_fronts_puits,granulometrie,minerais_produits_secondaires,capacite_machines_extraction,
        capacite_machines_traitement,modalite_transport_minerai,modalite_transport_concentre,
        quantites_globales_mines,teneur_moyenne_alimentation,teneur_moyenne_concentre,
        taux_recuperation_moyen,quantites_produites_type,quantites_vendues_mines,stocks_ouverture_produits,
        stocks_fermeture_produits,acheteurs,produits_vendus,prix_ventes_produit,recettes_produits_vendus,
        tonnage_produit,tonnage_vendu,stocks_terril,modalite_controle,autres_modalites_controle,
        num_identification_fiscale,formes_paiement,institutions_paiement,montants_payes_institution,
        frequence_paiement,nature_paiement,paiements_impot,indications_paiement,paiements_gouvernement,
        precision_paiement,redevances_concentre_principal,redevances_residus_valorises)
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,
        ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,
        ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,
        ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');*/

        /*$req1->execute(array($_SESSION['bd_sondages_miniers'],$_SESSION['mesures_controle_verification'],$_SESSION['personne_qualifiee'],
        $_SESSION['nature_limitations_eventuelles'],$_SESSION['checking_datas'],$_SESSION['estimation_reserves'],$_SESSION['plan_exploitation'],
        $_SESSION['methodes_echantillonnage'],$_SESSION['description_methodologie'],$_SESSION['description_sondage_echantillonnage_recuperation'],$_SESSION['discussion_echantillon'],
        $_SESSION['description_types_roches'],$_SESSION['statistique_echantillon'],$_SESSION['suivi_evaluation_echantillon'],$_SESSION['protocole_cq_aq'],
        $_SESSION['proprete'],$_SESSION['securite'],$_SESSION['inventaire_plateau'],$_SESSION['controle_inventaire'],
        $_SESSION['noyau'],$_SESSION['proprete_laboratoire'],$_SESSION['protocole_etalonnage_labo'],$_SESSION['discussion_protocole_cq'],
        $_SESSION['preparation_echantillon'],$_SESSION['analyse_echantillon'],$_SESSION['nature_etendue_mesure'],$_SESSION['adequation_procedures'],
        $_SESSION['donnees_vers_bd'],$_SESSION['minerais_exploites'],$_SESSION['observations_produit_secondaire'],$_SESSION['grandes_mines_ciel_ouvert'],
        $_SESSION['petites_mines_ciel_ouvert'],$_SESSION['mines_souterraines'],$_SESSION['autres_mines'],$_SESSION['traitement_interne_residus'],
        $_SESSION['observations_traitement_interne_residus'],$_SESSION['achat_residus'],$_SESSION['observations_achat_residus'],$_SESSION['vente_residus_traitement'],
        $_SESSION['observations_vente_residus_traitement'],$_SESSION['proportion_vente'],$_SESSION['terrils_residus'],$_SESSION['observations_terrils_residus'],
        $_SESSION['nombre_dimensions'],$_SESSION['checking_infos'],$_SESSION['autres_infos'],$_SESSION['methodes_exploitation'],
        $_SESSION['autres_methodes_exploitation'],$_SESSION['compresseurs'],$_SESSION['equipements_lourds'],$_SESSION['marteau_piqueur'],
        $_SESSION['pompes_eau'],$_SESSION['equipement_bonne_condition'],$_SESSION['equipement_en_panne'],$_SESSION['plan_formation_operateurs'],
        $_SESSION['autres_equipements'],$_SESSION['orpaillage'],$_SESSION['concasseur_broyeur'],$_SESSION['jigs'],
        $_SESSION['table_secousses'],$_SESSION['lixiviation'],$_SESSION['amalgamation'],$_SESSION['autres_methodes_exploitations'],
        $_SESSION['perte_minerais_fins'],$_SESSION['produits_economiques'],$_SESSION['pre_concentre'],$_SESSION['concentre'],
        $_SESSION['residu_traitement'],$_SESSION['autre_produit_economique'],$_SESSION['debut_activites_minieres'],$_SESSION['duree_activites_minieres'],
        $_SESSION['hauteurs_fronts_puits'],$_SESSION['granulometrie'],$_SESSION['minerais_produits_secondaires'],$_SESSION['capacite_machines_extraction'],
        $_SESSION['capacite_machines_traitement'],$_SESSION['modalite_transport_minerai'],$_SESSION['modalite_transport_concentre'],$_SESSION['quantites_globales_mines'],
        $_SESSION['teneur_moyenne_alimentation'],$_SESSION['teneur_moyenne_concentre'],$_SESSION['taux_recuperation_moyen'],$_SESSION['quantites_produites_type'],
        $_SESSION['quantites_vendues_mines'],$_SESSION['stocks_ouverture_produits'],$_SESSION['stocks_fermeture_produits'],$_SESSION['acheteurs'],
        $_SESSION['produits_vendus'],$_SESSION['prix_ventes_produit'],$_SESSION['recettes_produits_vendus'],$_SESSION['tonnage_produit'],
        $_SESSION['tonnage_vendu'],$_SESSION['stocks_terril'],$_SESSION['modalite_controle'],$_SESSION['autres_modalites_controle'],
        $_SESSION['num_identification_fiscale'],$_SESSION['formes_paiement'],$_SESSION['institutions_paiement'],$_SESSION['montants_payes_institution'],
        $_SESSION['frequence_paiement'],$_SESSION['nature_paiement'],$_SESSION['paiements_impot'],$_SESSION['indications_paiement'],
        $_SESSION['paiements_gouvernement'],$_SESSION['precision_paiement'],$_SESSION['redevances_concentre_principal'],$_SESSION['redevances_residus_valorises']));
        */
        /*$req1->closeCursor();*/
        
        // requete second

        /*$req2 = $bdd->prepare('INSERT INTO minier-second(panneaux,observations_panneaux,portes_fermees,
        observations_portes_fermees,poste_controle,observations_poste_controle,registre_visiteurs,
        observations_registre_visiteurs,hauteurs_pentes_front,observations_hauteurs_pentes_front,
        sapement_paroi,observations_sapement_paroi,indications_glissements_roche,observations_indications_glissements_roche,
        entree_sortie_mine,observations_entree_sortie_mine,disposition_panneaux,observations_disposition_panneaux,
        usage_epi,observations_usage_epi,securite_tunnel,observations_securite_tunnel,soutenement_tunnel,
        observations_soutenement_tunnel,sorties_tunnel_dispo,observations_sorties_tunnel_dispo,entree_sortie_tunnel,
        observations_entree_sortie_tunnel,ventilation_tunnel,observations_ventilation_tunnel,eclairage_tunnel,
        observations_eclairage_tunnel,dispositions_panneaux_danger,observations_dispositions_panneaux_danger,
        entree_grillagee,observations_entree_grillagee,epi_controle,observations_epi_controle,gaz_souterrains,
        observations_gaz_souterrains,oxygene_galeries,observations_oxygene_galeries,entree_sortie_controle,
        observations_entree_sortie_controle,panneaux_danger,observations_panneaux_danger,epi_approprie,
        observations_epi_approprie,securite_machine,observations_securite_machine,responsable_charge_experimente,
        observations_responsable_charge_experimente,explosifs_detonateurs,observations_explosifs_detonateurs,
        horaire_minage,observations_horaire_minage,procedures_minage,observations_procedures_minage,
        type_explosif,observations_type_explosif,hsqe,environnement_bio_diversite,
        formation_personnel,rse,anti_corruption_fraude,genre,autre_politique_exploitant,cooperatives_entreprises,
        observations_cooperatives_entreprises,forces_publiques,observations_forces_publiques,
        forces_privees,observations_forces_privees,forces_engagees_exploitant,observations_forces_engagees_exploitant,
        total_forces_securite,observations_total_forces_securite,dimensions_mine,observations_dimensions_mine,
        taches_forces_securite,incidents_securite,personnes_impliquees_incidents,documentation_incidents,
        observations_documentation_incidents,evaluations_risques_securite,observations_evaluations_risques_securite)
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,
        ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,
        ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');*/

        /*$req2->execute(array($_SESSION['panneaux'],$_SESSION['observations_panneaux'],$_SESSION['portes_fermees'],
        $_SESSION['observations_portes_fermees'],$_SESSION['poste_controle'],$_SESSION['observations_poste_controle'],$_SESSION['registre_visiteurs'],
        $_SESSION['observations_registre_visiteurs'],$_SESSION['hauteurs_pentes_front'],$_SESSION['observations_hauteurs_pentes_front'],$_SESSION['sapement_paroi'],
        $_SESSION['observations_sapement_paroi'],$_SESSION['indications_glissements_roche'],$_SESSION['observations_indications_glissements_roche'],$_SESSION['entree_sortie_mine'],
        $_SESSION['observations_entree_sortie_mine'],$_SESSION['disposition_panneaux'],$_SESSION['observations_disposition_panneaux'],$_SESSION['usage_epi'],
        $_SESSION['observations_usage_epi'],$_SESSION['securite_tunnel'],$_SESSION['observations_securite_tunnel'],$_SESSION['soutenement_tunnel'],
        $_SESSION['observations_soutenement_tunnel'],$_SESSION['sorties_tunnel_dispo'],$_SESSION['observations_sorties_tunnel_dispo'],$_SESSION['entree_sortie_tunnel'],
        $_SESSION['observations_entree_sortie_tunnel'],$_SESSION['ventilation_tunnel'],$_SESSION['observations_ventilation_tunnel'],$_SESSION['eclairage_tunnel'],
        $_SESSION['observations_eclairage_tunnel'],$_SESSION['dispositions_panneaux_danger'],$_SESSION['observations_dispositions_panneaux_danger'],$_SESSION['entree_grillagee'],
        $_SESSION['observations_entree_grillagee'],$_SESSION['epi_controle'],$_SESSION['observations_epi_controle'],$_SESSION['gaz_souterrains'],
        $_SESSION['observations_gaz_souterrains'],$_SESSION['oxygene_galeries'],$_SESSION['observations_oxygene_galeries'],$_SESSION['entree_sortie_controle'],
        $_SESSION['observations_entree_sortie_controle'],$_SESSION['panneaux_danger'],$_SESSION['observations_panneaux_danger'],$_SESSION['epi_approprie'],
        $_SESSION['observations_epi_approprie'],$_SESSION['securite_machine'],$_SESSION['observations_securite_machine'],$_SESSION['responsable_charge_experimente'],
        $_SESSION['observations_responsable_charge_experimente'],$_SESSION['explosifs_detonateurs'],$_SESSION['observations_explosifs_detonateurs'],$_SESSION['horaire_minage'],
        $_SESSION['observations_horaire_minage'],$_SESSION['procedures_minage'],$_SESSION['observations_procedures_minage'],$_SESSION['type_explosif'],
        $_SESSION['observations_type_explosif'],$_SESSION['hsqe'],$_SESSION['environnement_bio_diversite'],$_SESSION['formation_personnel'],
        $_SESSION['rse'],$_SESSION['anti_corruption_fraude'],$_SESSION['genre'],$_SESSION['autre_politique_exploitant'],
        $_SESSION['cooperatives_entreprises'],$_SESSION['observations_cooperatives_entreprises'],$_SESSION['forces_publiques'],$_SESSION['observations_forces_publiques'],
        $_SESSION['forces_privees'],$_SESSION['observations_forces_privees'],$_SESSION['forces_engagees_exploitant'],$_SESSION['observations_forces_engagees_exploitant'],
        $_SESSION['total_forces_securite'],$_SESSION['observations_total_forces_securite'],$_SESSION['dimensions_mine'],$_SESSION['observations_dimensions_mine'],
        $_SESSION['taches_forces_securite'],$_SESSION['incidents_securite'],$_SESSION['personnes_impliquees_incidents'],$_SESSION['documentation_incidents'],
        $_SESSION['observations_documentation_incidents'],$_SESSION['evaluations_risques_securite'],$_SESSION['observations_evaluations_risques_securite']));
        */
        /*$req2->closeCursor();*/

        // requete third

        /*$req3 = $bdd->prepare('INSERT INTO minier-third(eau_contaminee,observations_eau_contaminee,violation_protection_forets,
        observations_violation_protection_forets,problemes_erosion,observations_problemes_erosion,
        destructions_environnementales,travaux_historiques_mines,communautes_locales,
        interventions_eie,observations_interventions_eie,expert_environnement,observations_expert_environnement,
        pepiniere_disponible,observations_pepiniere_disponible,digue_steriles,observations_digue_steriles,
        bassin_decantation,observations_bassin_decantation,mesures_protection,observations_mesures_protection,
        dechets_miniers,observations_dechets_miniers,restauration_excavations,observations_restauration_excavations,
        sol_empile,observations_sol_empile,reforestation,observations_reforestation,non_conformite_critique,
        observations_non_conformite_critique,non_conformite_serieuse,observations_non_conformite_serieuse,
        etude_base,observations_etude_base,qualite_eau,observations_qualite_eau,vibrations,
        observations_vibrations,surveillance_poussiere,observations_surveillance_poussiere,produits_chimiques,
        observations_produits_chimiques,surveillance_chimiques,observations_surveillance_chimiques,
        etude_eie,observations_etude_eie,plan_gestion_environnementale,observations_plan_gestion_environnementale,
        execution_eie,observations_execution_eie,gestion_dechets_miniers,observations_gestion_dechets_miniers,
        substances_dangereuses,observations_substances_dangereuses,surveillance_environnement,
        observations_surveillance_environnement,fermeture_mine,observations_fermeture_mine,provisions,
        observations_provisions,plan_urgence,observations_plan_urgence,plan_site,observations_plan_site,
        responsables,observations_responsables,secours,observations_secours,equipements_secours,
        observations_equipements_secours,emplacement_equipement,observations_emplacement_equipement,
        accidents_travail,observations_accidents_travail,consignes_securite,observations_consignes_securite,
        evaluation_risque,observations_evaluation_risque,preuve_formation,observations_preuve_formation,
        procedures_operationnelles,observations_procedures_operationnelles,agent_sante,
        observations_agent_sante,consignes_orpailleurs,observations_consignes_orpailleurs,
        rapport_mensuel_accidents,observations_rapport_mensuel_accidents,rapport_annuel_accidents,
        observations_rapport_annuel_accidents,documentation_blessures,observations_documentation_blessures,
        documentation_incidents,observations_documentation_incidents,toilettes_hygieniques,
        observations_toilettes_hygieniques,douches_hygieniques,observations_douches_hygieniques,
        toilettes_vestiaires,observations_toilettes_vestiaires,eau_potable,observations_eau_potable,
        brochures_infos,observations_brochures_infos,program_sensibilisation,observations_program_sensibilisation)
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,
        ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,
        ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,
        ?,?,?,?,?,?,?,?)');*/

        /*$req3->execute(array($_SESSION['eau_contaminee'],$_SESSION['observations_eau_contaminee'],$_SESSION['violation_protection_forets'],
        $_SESSION['observations_violation_protection_forets'],$_SESSION['problemes_erosion'],$_SESSION['observations_problemes_erosion'],$_SESSION['destructions_environnementales'],
        $_SESSION['travaux_historiques_mines'],$_SESSION['communautes_locales'],$_SESSION['interventions_eie'],$_SESSION['observations_interventions_eie'],
        $_SESSION['expert_environnement'],$_SESSION['observations_expert_environnement'],$_SESSION['pepiniere_disponible'],$_SESSION['observations_pepiniere_disponible'],
        $_SESSION['digue_steriles'],$_SESSION['observations_digue_steriles'],$_SESSION['bassin_decantation'],$_SESSION['observations_bassin_decantation'],
        $_SESSION['mesures_protection'],$_SESSION['observations_mesures_protection'],$_SESSION['dechets_miniers'],$_SESSION['observations_dechets_miniers'],
        $_SESSION['restauration_excavations'],$_SESSION['observations_restauration_excavations'],$_SESSION['sol_empile'],$_SESSION['observations_sol_empile'],
        $_SESSION['reforestation'],$_SESSION['observations_reforestation'],$_SESSION['non_conformite_critique'],$_SESSION['observations_non_conformite_critique'],
        $_SESSION['non_conformite_serieuse'],$_SESSION['observations_non_conformite_serieuse'],$_SESSION['etude_base'],$_SESSION['observations_etude_base'],
        $_SESSION['qualite_eau'],$_SESSION['observations_qualite_eau'],$_SESSION['vibrations'],$_SESSION['observations_vibrations'],
        $_SESSION['surveillance_poussiere'],$_SESSION['observations_surveillance_poussiere'],$_SESSION['produits_chimiques'],$_SESSION['observations_produits_chimiques'],
        $_SESSION['surveillance_chimiques'],$_SESSION['observations_surveillance_chimiques'],$_SESSION['etude_eie'],$_SESSION['observations_etude_eie'],
        $_SESSION['plan_gestion_environnementale'],$_SESSION['observations_plan_gestion_environnementale'],$_SESSION['execution_eie'],$_SESSION['observations_execution_eie'],
        $_SESSION['gestion_dechets_miniers'],$_SESSION['observations_gestion_dechets_miniers'],$_SESSION['substances_dangereuses'],$_SESSION['observations_substances_dangereuses'],
        $_SESSION['surveillance_environnement'],$_SESSION['observations_surveillance_environnement'],$_SESSION['fermeture_mine'],$_SESSION['observations_fermeture_mine'],
        $_SESSION['provisions'],$_SESSION['observations_provisions'],$_SESSION['plan_urgence'],$_SESSION['observations_plan_urgence'],
        $_SESSION['plan_site'],$_SESSION['observations_plan_site'],$_SESSION['responsables'],$_SESSION['observations_responsables'],
        $_SESSION['secours'],$_SESSION['observations_secours'],$_SESSION['equipements_secours'],$_SESSION['observations_equipements_secours'],
        $_SESSION['emplacement_equipement'],$_SESSION['observations_emplacement_equipement'],$_SESSION['accidents_travail'],$_SESSION['observations_accidents_travail'],
        $_SESSION['consignes_securite'],$_SESSION['observations_consignes_securite'],$_SESSION['evaluation_risque'],$_SESSION['observations_evaluation_risque'],
        $_SESSION['preuve_formation'],$_SESSION['observations_preuve_formation'],$_SESSION['procedures_operationnelles'],$_SESSION['observations_procedures_operationnelles'],
        $_SESSION['agent_sante'],$_SESSION['observations_agent_sante'],$_SESSION['consignes_orpailleurs'],$_SESSION['observations_consignes_orpailleurs'],
        $_SESSION['rapport_mensuel_accidents'],$_SESSION['observations_rapport_mensuel_accidents'],$_SESSION['rapport_annuel_accidents'],$_SESSION['observations_rapport_annuel_accidents'],
        $_SESSION['documentation_blessures'],$_SESSION['observations_documentation_blessures'],$_SESSION['documentation_incidents'],$_SESSION['observations_documentation_incidents'],
        $_SESSION['toilettes_hygieniques'],$_SESSION['observations_toilettes_hygieniques'],$_SESSION['douches_hygieniques'],$_SESSION['observations_douches_hygieniques'],
        $_SESSION['toilettes_vestiaires'],$_SESSION['observations_toilettes_vestiaires'],$_SESSION['eau_potable'],$_SESSION['observations_eau_potable'],
        $_SESSION['brochures_infos'],$_SESSION['observations_brochures_infos'],$_SESSION['program_sensibilisation'],$_SESSION['observations_program_sensibilisation']));
        */
        /*$req3->closeCursor();*/

        // requete four

        /*$req4 = $bdd->prepare('INSERT INTO minier-fourth(travailleurs_site_minier,mineurs_masculins,mineurs_feminins,
        employes_permanents,employes_temporaires,nbre_travailleurs,fluctuation_saisonniere,observations_fluctuation_saisonniere,
        organisation_travailleurs,observations_organisation_travailleurs,evidence_exploitant,
        observations_evidence_exploitant,masse_salariale_annuelle,salaire_max,salaire_min,salaire_normal,
        paiement_normal_sous_traitant,paiement_normal_mineur,paiement_travailleur_temporaire,moyens_paiement,
        casque_dispo,observations_casque_dispo,propre_tache,observations_propre_tache,porter,
        observations_porter,chaussures_dispos,observations_chaussures_dispos,bottes_tache_propre,
        observations_bottes_tache_propre,bottes_portees,observations_bottes_portees,tenues_dispos,
        observations_tenues_dispos,tenues_tache_propre,observations_tenues_tache_propre,tenues_portees,
        observations_tenues_portees,equipements_dispos,observations_equipements_dispos,equipements_tache_propre,
        observations_equipements_tache_propre,equipements_portes,observations_equipements_portes,
        autre_epi,observations_autre_epi,magasinier_epi,observations_magasinier_epi,achat_paiement_epi,
        observations_achat_paiement_epi,sanction_epi,observations_sanction_epi)
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,
        ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');

        $req4->execute(array($_SESSION['travailleurs_site_minier'],$_SESSION['mineurs_masculins'],$_SESSION['mineurs_feminins'],
        $_SESSION['employes_permanents'],$_SESSION['employes_temporaires'],$_SESSION['nbre_travailleurs'],$_SESSION['fluctuation_saisonniere'],
        $_SESSION['observations_fluctuation_saisonniere'],$_SESSION['organisation_travailleurs'],$_SESSION['observations_organisation_travailleurs'],$_SESSION['evidence_exploitant'],
        $_SESSION['observations_evidence_exploitant'],$_SESSION['masse_salariale_annuelle'],$_SESSION['salaire_max'],$_SESSION['salaire_min'],
        $_SESSION['salaire_normal'],$_SESSION['paiement_normal_sous_traitant'],$_SESSION['paiement_normal_mineur'],$_SESSION['paiement_travailleur_temporaire'],
        $_SESSION['moyens_paiement'],$_SESSION['casque_dispo'],$_SESSION['observations_casque_dispo'],$_SESSION['propre_tache'],
        $_SESSION['observations_propre_tache'],$_SESSION['porter'],$_SESSION['observations_porter'],$_SESSION['chaussures_dispos'],
        $_SESSION['observations_chaussures_dispos'],$_SESSION['bottes_tache_propre'],$_SESSION['observations_bottes_tache_propre'],$_SESSION['bottes_portees'],
        $_SESSION['observations_bottes_portees'],$_SESSION['tenues_dispos'],$_SESSION['observations_tenues_dispos'],$_SESSION['tenues_tache_propre'],
        $_SESSION['observations_tenues_tache_propre'],$_SESSION['tenues_portees'],$_SESSION['observations_tenues_portees'],$_SESSION['equipements_dispos'],
        $_SESSION['observations_equipements_dispos'],$_SESSION['equipements_tache_propre'],$_SESSION['observations_equipements_tache_propre'],$_SESSION['equipements_portes'],
        $_SESSION['observations_equipements_portes'],$_SESSION['autre_epi'],$_SESSION['observations_autre_epi'],$_SESSION['magasinier_epi'],
        $_SESSION['observations_magasinier_epi'],$_SESSION['achat_paiement_epi'],$_SESSION['observations_achat_paiement_epi'],
        $_SESSION['sanction_epi'],$_SESSION['observations_sanction_epi']));
        */
        /*$req4->closeCursor();*/

        // requete five

        /*$req5 = $bdd->prepare('INSERT INTO minier-five(exploitant_site_minerais,guide_ocde,observations_guide_ocde,
        politiques_ddg,observations_politiques_ddg,tenue_dossiers,observations_tenue_dossiers,
        comptabilite,observations_comptabilite,responsabilites_ddg_internes,observations_responsabilites_ddg_internes,
        tracabilite_interne,observations_tracabilite_interne,tracabilite_externe,observations_tracabilite_externe,
        documentation_tracabilite,observations_documentation_tracabilite,puits_galerie,
        observations_puits_galerie,points_agregation,observations_points_agregation,mineurs_impliques,
        observations_mineurs_impliques,date_production,observations_date_production,poids_production,
        observations_poids_production,valeur_production,observations_valeur_production,tracabilite_physique,
        observations_tracabilite_physique,site_minier_tracabilite,observations_site_minier_tracabilite,
        superviseurs_tracabilite,observations_superviseurs_tracabilite,superviseurs_compagnie,
        observations_superviseurs_compagnie,superviseurs_semi_externes,observations_superviseurs_semi_externes,
        superviseurs_externes_gouvernement,observations_superviseurs_externes_gouvernement,
        superviseurs_tracabilite_permanence,observations_superviseurs_tracabilite_permanence,
        nbre_visite_sous_site,observations_nbre_visite_sous_site,minerais_sensibles,
        observations_minerais_sensibles,echantillonnage_afp,observations_echantillonnage_afp,
        risques_itsci,observations_risques_itsci,audit_mmg,observations_audit_mmg,audit_interne,
        observations_audit_interne,autre_audit,minerais_non_traces,observations_minerais_non_traces,
        sortie_minerais_non_traces,observations_sortie_minerais_non_traces)
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,
        ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');*/

        /*$req5->execute(array($_SESSION['exploitant_site_minerais'],$_SESSION['guide_ocde'],$_SESSION['observations_guide_ocde'],
        $_SESSION['politiques_ddg'],$_SESSION['observations_politiques_ddg'],$_SESSION['tenue_dossiers'],$_SESSION['observations_tenue_dossiers'],
        $_SESSION['comptabilite'],$_SESSION['observations_comptabilite'],$_SESSION['responsabilites_ddg_internes'],$_SESSION['observations_responsabilites_ddg_internes'],
        $_SESSION['tracabilite_interne'],$_SESSION['observations_tracabilite_interne'],$_SESSION['tracabilite_externe'],$_SESSION['observations_tracabilite_externe'],
        $_SESSION['documentation_tracabilite'],$_SESSION['observations_documentation_tracabilite'],$_SESSION['puits_galerie'],$_SESSION['observations_puits_galerie'],
        $_SESSION['points_agregation'],$_SESSION['observations_points_agregation'],$_SESSION['mineurs_impliques'],$_SESSION['observations_mineurs_impliques'],
        $_SESSION['date_production'],$_SESSION['observations_date_production'],$_SESSION['poids_production'],$_SESSION['observations_poids_production'],
        $_SESSION['valeur_production'],$_SESSION['observations_valeur_production'],$_SESSION['tracabilite_physique'],$_SESSION['observations_tracabilite_physique'],
        $_SESSION['site_minier_tracabilite'],$_SESSION['observations_site_minier_tracabilite'],$_SESSION['superviseurs_tracabilite'],$_SESSION['observations_superviseurs_tracabilite'],
        $_SESSION['superviseurs_compagnie'],$_SESSION['observations_superviseurs_compagnie'],$_SESSION['superviseurs_semi_externes'],$_SESSION['observations_superviseurs_semi_externes'],
        $_SESSION['superviseurs_externes_gouvernement'],$_SESSION['observations_superviseurs_externes_gouvernement'],$_SESSION['superviseurs_tracabilite_permanence'],$_SESSION['observations_superviseurs_tracabilite_permanence'],
        $_SESSION['nbre_visite_sous_site'],$_SESSION['observations_nbre_visite_sous_site'],$_SESSION['minerais_sensibles'],$_SESSION['observations_minerais_sensibles'],
        $_SESSION['echantillonnage_afp'],$_SESSION['observations_echantillonnage_afp'],$_SESSION['risques_itsci'],$_SESSION['observations_risques_itsci'],
        $_SESSION['audit_mmg'],$_SESSION['observations_audit_mmg'],$_SESSION['audit_interne'],$_SESSION['observations_audit_interne'],
        $_SESSION['autre_audit'],$_SESSION['minerais_non_traces'],$_SESSION['observations_minerais_non_traces'],$_SESSION['sortie_minerais_non_traces'],
        $_SESSION['observations_sortie_minerais_non_traces']));*/
        
        /*$req5->closeCursor();*/

        // requete six

        /*$req6 = $bdd->prepare('INSERT INTO minier-six(forum_discussion,observations_forum_discussion,depuis_quand,
        rencontres_regulieres,observations_rencontres_regulieres,groupes,observations_groupes,entreprises_locales,
        observations_entreprises_locales,developpement_local,observations_developpement_local,garantie_moyens,
        observations_garantie_moyens,infrastructure_locale,observations_infrastructure_locale,
        education_formation,observations_education_formation,renforcement_capacites,
        observations_renforcement_capacites,aspects_genre,observations_aspects_genre,elements_ad_hoc,
        observations_elements_ad_hoc,autorites_locales,observations_autorites_locales,acquisition_terrain,
        observations_acquisition_terrain,usage_eaux,observations_usage_eaux,usage_forets,
        observations_usage_forets,impacts_miniers,observations_impacts_miniers,autre_impact_minier,
        plaintes,observations_plaintes,non_conformite_critique,observations_non_conformite_critique,
        non_conformite_serieuse,observations_non_conformite_serieuse,commentaire_un,commentaire_deux,
        commentaire_trois,representant_principal,titre_fonction,signature_numerique,gestionnaire_responsable,
        commentaire_gestionnaire,production_miniere,resultats_inspection,changements_procedures,
        production_site_minier,risque_fraude_minerale,groupes_armes,impot_illegal,extorque_mineraux,
        operations_legales,mineurs,travail_sans_recommandation,paiements_organisations_illegales,
        paiements_organisations_politiques,envois_minerais,minerais_designes,etat_non_conformite,
        etat_critique_non_conformite,etat_grave_non_conformite,societes_affiliees,minerais_points_acces,
        actions_mineraux_proprietaires,performance_environnement,agents_gouvernement,proprietaire_site_minier,
        acteurs_site_minier,empreinte_analytique_afp,relations_communautaires)
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,
        ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');*/

        /*$req6->execute(array($_SESSION['forum_discussion'],$_SESSION['observations_forum_discussion'],$_SESSION['depuis_quand'],
        $_SESSION['rencontres_regulieres'],$_SESSION['observations_rencontres_regulieres'],$_SESSION['groupes'],$_SESSION['observations_groupes'],
        $_SESSION['entreprises_locales'],$_SESSION['observations_entreprises_locales'],$_SESSION['developpement_local'],$_SESSION['observations_developpement_local'],
        $_SESSION['garantie_moyens'],$_SESSION['observations_garantie_moyens'],$_SESSION['infrastructure_locale'],$_SESSION['observations_infrastructure_locale'],
        $_SESSION['education_formation'],$_SESSION['observations_education_formation'],$_SESSION['renforcement_capacites'],$_SESSION['observations_renforcement_capacites'],
        $_SESSION['aspects_genre'],$_SESSION['observations_aspects_genre'],$_SESSION['elements_ad_hoc'],$_SESSION['observations_elements_ad_hoc'],
        $_SESSION['autorites_locales'],$_SESSION['observations_autorites_locales'],$_SESSION['acquisition_terrain'],$_SESSION['observations_acquisition_terrain'],
        $_SESSION['usage_eaux'],$_SESSION['observations_usage_eaux'],$_SESSION['usage_forets'],$_SESSION['observations_usage_forets'],
        $_SESSION['impacts_miniers'],$_SESSION['observations_impacts_miniers'],$_SESSION['autre_impact_minier'],$_SESSION['plaintes'],
        $_SESSION['observations_plaintes'],$_SESSION['non_conformite_critique'],$_SESSION['observations_non_conformite_critique'],$_SESSION['non_conformite_serieuse'],
        $_SESSION['observations_non_conformite_serieuse'],$_SESSION['commentaire_un'],$_SESSION['commentaire_deux'],$_SESSION['commentaire_trois'],
        $_SESSION['representant_principal'],$_SESSION['titre_fonction'],$_SESSION['signature_numerique'],$_SESSION['gestionnaire_responsable'],
        $_SESSION['commentaire_gestionnaire'],$_SESSION['production_miniere'],$_SESSION['resultats_inspection'],$_SESSION['changements_procedures'],
        $_SESSION['production_site_minier'],$_SESSION['risque_fraude_minerale'],$_SESSION['groupes_armes'],$_SESSION['impot_illegal'],
        $_SESSION['extorque_mineraux'],$_SESSION['operations_legales'],$_SESSION['mineurs'],$_SESSION['travail_sans_recommandation'],
        $_SESSION['paiements_organisations_illegales'],$_SESSION['paiements_organisations_politiques'],$_SESSION['envois_minerais'],$_SESSION['minerais_designes'],
        $_SESSION['etat_non_conformite'],$_SESSION['etat_critique_non_conformite'],$_SESSION['etat_grave_non_conformite'],$_SESSION['societes_affiliees'],
        $_SESSION['minerais_points_acces'],$_SESSION['actions_mineraux_proprietaires'],$_SESSION['performance_environnement'],$_SESSION['agents_gouvernement'],
        $_SESSION['proprietaire_site_minier'],$_SESSION['acteurs_site_minier'],$_SESSION['empreinte_analytique_afp'],$_SESSION['relations_communautaires']));
        */
        /*$req6->closeCursor();*/

        // requete seven

        $req7 = $bdd->prepare('INSERT INTO minier_seven(systemes_prix_distribution, droit_travailleurs, 
        sante_securite_travailleurs, epi, impacts_environnementaux, gestion_substances_dangereuses, 
        gestion_dechets_residus, fermeture_mine, corruption_fraude, consultations_sujets_connexes, 
        entreprises_locales, plan_integre, documents_consentement, operations_minieres, 
        problemes_majeurs_site, actions_correctives, sante_securite_travailleurs_operations, 
        decision_suspension_temporaire, date_suspension, cote_rouge_non_certifie, 
        date_cote_rouge, periode_minimale_suspension, cote_jaune, date_cote_jaune, 
        periode_grace, cote_vert_certifie, date_cote_vert_certifie, date_inspection, 
        lieu_inspection, date_de_inspection, lieu_declaration, date_declaration)
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,
        ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');

        $req7->execute(array($_SESSION['systemes_prix_distribution'], $_SESSION['droit_travailleurs'], $_SESSION['sante_securite_travailleurs'], 
        $_SESSION['epi'], $_SESSION['impacts_environnementaux'], $_SESSION['gestion_substances_dangereuses'], 
        $_SESSION['gestion_dechets_residus'], $_SESSION['fermeture_mine'], $_SESSION['corruption_fraude'], 
        $_SESSION['consultations_sujets_connexes'], $_SESSION['entreprises_locales'], $_SESSION['plan_integre'], 
        $_SESSION['documents_consentement'], $_SESSION['operations_minieres'], 
        $_SESSION['problemes_majeurs_site'], $_SESSION['actions_correctives'], 
        $_SESSION['sante_securite_travailleurs_operations'], $_SESSION['decision_suspension_temporaire'], 
        $_SESSION['date_suspension'], $_SESSION['cote_rouge_non_certifie'], 
        $_SESSION['date_cote_rouge'], $_SESSION['periode_minimale_suspension'], 
        $_SESSION['cote_jaune'], $_SESSION['date_cote_jaune'], 
        $_SESSION['periode_grace'], $_SESSION['cote_vert_certifie'], 
        $_SESSION['date_cote_vert_certifie'], $_SESSION['date_inspection'], 
        $_SESSION['lieu_inspection'], $_SESSION['date_de_inspection'], 
        $_SESSION['lieu_declaration'], $_SESSION['date_declaration'] 
        ));
        

        $req7->closeCursor();

        $success = "<div class='alert alert-success' role='alert'> Enregistrement effectué avec succès ! </div>";
        
        echo $success;

        location('form.php');
    
        
        
        
        
        
        
        
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
                        <!--<<li>
                            <a href="chart.php">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>-->
                        <!--<<li>
                            <a href="table.php">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>-->
                        <!--<<li class="active">
                            <a href="form.php">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>-->
                        <!--<li>
                            <a href="calendar.php">
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
                                    <a href="login.php">Login</a>
                                </li>
                                <li>
                                    <a href="register.php">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.php">Forget Password</a>
                                </li>
                            </ul>
                        </li>-->
                        <!--<li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
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
                            <a href="form31.php" class="btn btn-primary"> >>> Revenir étape précédente</a>
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
                                                    <span class="email">auditeur</span>
                                                </div>
                                            </div>
                                           
                                            <div class="account-dropdown__footer">
                                                <a href="../html/logout.php">
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
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">DECLARATION DU DIRECTEUR DE LA DCSOM</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">33 - DECLARATION DU DIRECTEUR DE LA DCSOM</h3>
                                        </div>
                                        <hr>
                                        <form action="form32.php" method="post" novalidate="novalidate">
                                            
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">
                                                            <strong>Nom du Directeur de la DCSOM</strong>
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

                                                        Je confirme que l’inspection minière ci-dessus, y compris la classification d’état de certification du site minier, a été effectuée selon les normes du Ministère des Mines et de la Géologie.
                                                        </label>
                                                    
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <!--<div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Signature</label>
                                                        <input id="cc-exp" name="site_minier" type="file" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration"
                                                            data-val-cc-exp="Please enter a valid month and year" placeholder="Site minier"
                                                            autocomplete="cc-exp">
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>-->
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Lieu</label>
                                                    <div class="input-group">
                                                        <input id="x_card_code" name="lieu_declaration" type="text" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                                            data-val-cc-cvc="Please enter a valid security code" autocomplete="off">

                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Date</label>
                                                        <input id="cc-exp" name="date_declaration" type="date" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration"
                                                            data-val-cc-exp="Please enter a valid month and year" placeholder="inspecteur"
                                                            autocomplete="cc-exp">
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--<div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Date</label>
                                                        <input id="cc-exp" name="inspecteur" type="date" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration"
                                                            data-val-cc-exp="Please enter a valid month and year" placeholder="inspecteur"
                                                            autocomplete="cc-exp">
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Zone de Cachet de DCSOM</label>
                                                    <div class="input-group">
                                                        <input id="x_card_code" name="num_inspecteur" type="file" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                                            data-val-cc-cvc="Please enter a valid security code" autocomplete="off">

                                                    </div>
                                                </div>
                                            </div>-->
                                            
                                            <div>
                                                <button name="declaration_directeur" type="submit" class="btn btn-lg btn-info btn-block">
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
