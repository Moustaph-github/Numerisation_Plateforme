-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : ven. 01 déc. 2023 à 22:02
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `inspection`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `motdepasse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `username`, `motdepasse`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `minier`
--

CREATE TABLE `minier` (
  `id` int(11) NOT NULL,
  `site_minier` varchar(255) DEFAULT NULL,
  `date_inspection` date DEFAULT NULL,
  `inspecteur` varchar(255) DEFAULT NULL,
  `num_inspecteur` varchar(255) DEFAULT NULL,
  `sous_site_inspecte` varchar(255) DEFAULT NULL,
  `num_enreg_national` varchar(255) DEFAULT NULL,
  `nom_exploitant` varchar(255) DEFAULT NULL,
  `phone_exploitant` varchar(255) DEFAULT NULL,
  `email_exploitant` varchar(255) DEFAULT NULL,
  `siege_code_enreg` varchar(255) DEFAULT NULL,
  `adresse_siege` varchar(255) DEFAULT NULL,
  `type_societe` varchar(255) DEFAULT NULL,
  `nom_represen_legal` varchar(255) DEFAULT NULL,
  `phone_representant` varchar(255) DEFAULT NULL,
  `email_representant` varchar(255) DEFAULT NULL,
  `responsable_site` varchar(255) DEFAULT NULL,
  `phone_resp_site` varchar(255) DEFAULT NULL,
  `email_resp_site` varchar(255) DEFAULT NULL,
  `total_actionnaires` int(11) DEFAULT NULL,
  `actionnaires` varchar(255) DEFAULT NULL,
  `region_siege` varchar(255) DEFAULT NULL,
  `departement_siege` varchar(255) DEFAULT NULL,
  `commune_siege` varchar(255) DEFAULT NULL,
  `village` varchar(255) DEFAULT NULL,
  `utm_gps` varchar(255) DEFAULT NULL,
  `x_gps` varchar(255) DEFAULT NULL,
  `y_gps` varchar(255) DEFAULT NULL,
  `surface` double DEFAULT NULL,
  `activites_minieres` varchar(255) DEFAULT NULL,
  `type_permis` varchar(255) DEFAULT NULL,
  `num_degre_agrement` varchar(255) DEFAULT NULL,
  `date_delivrance` date DEFAULT NULL,
  `date_expiration` date DEFAULT NULL,
  `type_exploitation` varchar(255) DEFAULT NULL,
  `assurance_sociale` varchar(255) DEFAULT NULL,
  `arrete_attribution_titre` varchar(255) DEFAULT NULL,
  `observations_arrete_attr_titre` text DEFAULT NULL,
  `convention_miniere` varchar(255) DEFAULT NULL,
  `observations_convention_miniere` text DEFAULT NULL,
  `certificat_conformite_inspection` varchar(255) DEFAULT NULL,
  `observations_certificat_conformite` text DEFAULT NULL,
  `quitus_fiscal` varchar(255) DEFAULT NULL,
  `observations_quitus_fiscal` text DEFAULT NULL,
  `etude_faisabilite` varchar(255) DEFAULT NULL,
  `observations_etude_faisabilite` text DEFAULT NULL,
  `eies` varchar(255) DEFAULT NULL,
  `observations_eies` text DEFAULT NULL,
  `rapport_activites_trimestriels` varchar(255) DEFAULT NULL,
  `observations_rapport_activites_trimestriels` text DEFAULT NULL,
  `rapport_activites_annuel` varchar(255) DEFAULT NULL,
  `observations_rapport_activites_annuel` text DEFAULT NULL,
  `manuel_procedure` varchar(255) DEFAULT NULL,
  `observations_manuel_procedure` text DEFAULT NULL,
  `bilan_comptable_annuel` varchar(255) DEFAULT NULL,
  `observations_bilan_comptable_annuel` text DEFAULT NULL,
  `compte_resultat` varchar(255) DEFAULT NULL,
  `observations_compte_resultat` text DEFAULT NULL,
  `versement_redevance` varchar(255) DEFAULT NULL,
  `observations_versement_redevance` text DEFAULT NULL,
  `versement_taxe_superficiaire` varchar(255) DEFAULT NULL,
  `observations_versement_taxe_superficiaire` text DEFAULT NULL,
  `lois_reglements` varchar(255) DEFAULT NULL,
  `observations_lois_reglements` text DEFAULT NULL,
  `exploitation_permis` varchar(255) DEFAULT NULL,
  `observations_exploitation_permis` text DEFAULT NULL,
  `horaire_travail` varchar(255) DEFAULT NULL,
  `observations_horaire_travail` text DEFAULT NULL,
  `systeme_assurance` varchar(255) DEFAULT NULL,
  `observations_systeme_assurance` text DEFAULT NULL,
  `travailleurs` varchar(255) DEFAULT NULL,
  `observations_travailleurs` text DEFAULT NULL,
  `enfants_exploitation` varchar(255) DEFAULT NULL,
  `observations_enfants_exploitation` text DEFAULT NULL,
  `services_supplementaires` varchar(255) DEFAULT NULL,
  `observations_services_supplementaires` text DEFAULT NULL,
  `enfants_site_sans_travail` varchar(255) DEFAULT NULL,
  `observations_enfants_site_sans_travail` text DEFAULT NULL,
  `exploitation_travail_force` varchar(255) DEFAULT NULL,
  `observations_exploitation_travail_force` text DEFAULT NULL,
  `minerais_argent` varchar(255) DEFAULT NULL,
  `observations_minerais_argent` text DEFAULT NULL,
  `programme_exploration` varchar(255) DEFAULT NULL,
  `observations_programme_exploration` text DEFAULT NULL,
  `geologue_exploration` varchar(255) DEFAULT NULL,
  `observations_geologue_exploration` text DEFAULT NULL,
  `cartographie_geologique` varchar(255) DEFAULT NULL,
  `observations_cartographie_geologique` text DEFAULT NULL,
  `rapports_geologiques` varchar(255) DEFAULT NULL,
  `observations_rapports_geologiques` text DEFAULT NULL,
  `excavation` varchar(255) DEFAULT NULL,
  `observations_excavation` text DEFAULT NULL,
  `forage` varchar(255) DEFAULT NULL,
  `observations_forage` text DEFAULT NULL,
  `nombre_metres_fores` varchar(255) DEFAULT NULL,
  `observations_nombre_metres_fores` text DEFAULT NULL,
  `analyse_geochimique` varchar(255) DEFAULT NULL,
  `observations_analyse_geochimique` text DEFAULT NULL,
  `modelisation_estimation` varchar(255) DEFAULT NULL,
  `observations_modelisation_estimation` text DEFAULT NULL,
  `autres_activites_exploration` varchar(255) DEFAULT NULL,
  `observations_autres_activites_exploration` text DEFAULT NULL,
  `etude_faisabilite_reserves` text DEFAULT NULL,
  `observations_etude_faisabilite_reserves` text DEFAULT NULL,
  `depenses_exploration` text DEFAULT NULL,
  `observations_depenses_exploration` text DEFAULT NULL,
  `environnement_geologique` text DEFAULT NULL,
  `epaisseur_orientation` text DEFAULT NULL,
  `teneur` text DEFAULT NULL,
  `reserves_ressources` text DEFAULT NULL,
  `localisation_topographie` text DEFAULT NULL,
  `inspection_virtuelle` text DEFAULT NULL,
  `etat_lieux_acces` text DEFAULT NULL,
  `rehabilitation_sites_sondage` text DEFAULT NULL,
  `cartes_affleurements` text DEFAULT NULL,
  `observations_cartes_affleurements` text DEFAULT NULL,
  `carte_geologique` text DEFAULT NULL,
  `observations_carte_geologique` text DEFAULT NULL,
  `donnees_geochimie` text DEFAULT NULL,
  `observations_donnees_geochimie` text DEFAULT NULL,
  `cartes_geochimie` text DEFAULT NULL,
  `observations_cartes_geochimie` text DEFAULT NULL,
  `geophysique_aeroportee_drone` text DEFAULT NULL,
  `observations_geophysique_aeroportee_drone` text DEFAULT NULL,
  `geophysique_sol` text DEFAULT NULL,
  `observations_geophysique_sol` text DEFAULT NULL,
  `tranchees_puits` text DEFAULT NULL,
  `observations_tranchees_puits` text DEFAULT NULL,
  `carotte_plateau` text DEFAULT NULL,
  `observations_carotte_plateau` text DEFAULT NULL,
  `carotte_lavee_debarrassee` text DEFAULT NULL,
  `observations_carotte_lavee_debarrassee` text DEFAULT NULL,
  `carotte_etiquetee` text DEFAULT NULL,
  `observations_carotte_etiquetee` text DEFAULT NULL,
  `carotte_marque_orientation` text DEFAULT NULL,
  `observations_carotte_marque_orientation` text DEFAULT NULL,
  `recuperation_noyau` text DEFAULT NULL,
  `observations_recuperation_noyau` text DEFAULT NULL,
  `recuperation_carotte` text DEFAULT NULL,
  `observations_recuperation_carotte` text DEFAULT NULL,
  `marque_compteur` text DEFAULT NULL,
  `observations_marque_compteur` text DEFAULT NULL,
  `carotte_site_sondage` text DEFAULT NULL,
  `observations_carotte_site_sondage` text DEFAULT NULL,
  `intervalles_enlevement_quotidien` text DEFAULT NULL,
  `observations_intervalles_enlevement_quotidien` text DEFAULT NULL,
  `stockage_carotte` text DEFAULT NULL,
  `observations_stockage_carotte` text DEFAULT NULL,
  `collecte_carotte` text DEFAULT NULL,
  `carotte_etiquetee_consequence` text DEFAULT NULL,
  `observations_carotte_etiquetee_consequence` text DEFAULT NULL,
  `carotte_humide_seche` text DEFAULT NULL,
  `observations_carotte_humide_seche` text DEFAULT NULL,
  `logs_foreurs` text DEFAULT NULL,
  `observations_logs_foreurs` text DEFAULT NULL,
  `signature_geologue_foreur` text DEFAULT NULL,
  `observations_signature_geologue_foreur` text DEFAULT NULL,
  `divergences` text DEFAULT NULL,
  `observations_divergences` text DEFAULT NULL,
  `feuille_enregistrement` text DEFAULT NULL,
  `observations_feuille_enregistrement` text DEFAULT NULL,
  `infos_saisies_fiche_enregistrement` text DEFAULT NULL,
  `fiches_sondages` text DEFAULT NULL,
  `observations_fiches_sondages` text DEFAULT NULL,
  `registres_originaux` text DEFAULT NULL,
  `observations_registres_originaux` text DEFAULT NULL,
  `bd_journalisation` text DEFAULT NULL,
  `observations_bd_journalisation` int(11) DEFAULT NULL,
  `personnel_saisie_donnees` text DEFAULT NULL,
  `observations_personnel_saisie_donnees` text DEFAULT NULL,
  `acces_bd` text DEFAULT NULL,
  `observations_acces_bd` text DEFAULT NULL,
  `enregistrement_bd` text DEFAULT NULL,
  `noyau_photographie` text DEFAULT NULL,
  `observations_noyau_photographie` text DEFAULT NULL,
  `photographies_datees` text DEFAULT NULL,
  `observations_photographies_datees` text DEFAULT NULL,
  `photographies_stockees` text DEFAULT NULL,
  `observations_photographies_stockees` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `minier`
--

INSERT INTO `minier` (`id`, `site_minier`, `date_inspection`, `inspecteur`, `num_inspecteur`, `sous_site_inspecte`, `num_enreg_national`, `nom_exploitant`, `phone_exploitant`, `email_exploitant`, `siege_code_enreg`, `adresse_siege`, `type_societe`, `nom_represen_legal`, `phone_representant`, `email_representant`, `responsable_site`, `phone_resp_site`, `email_resp_site`, `total_actionnaires`, `actionnaires`, `region_siege`, `departement_siege`, `commune_siege`, `village`, `utm_gps`, `x_gps`, `y_gps`, `surface`, `activites_minieres`, `type_permis`, `num_degre_agrement`, `date_delivrance`, `date_expiration`, `type_exploitation`, `assurance_sociale`, `arrete_attribution_titre`, `observations_arrete_attr_titre`, `convention_miniere`, `observations_convention_miniere`, `certificat_conformite_inspection`, `observations_certificat_conformite`, `quitus_fiscal`, `observations_quitus_fiscal`, `etude_faisabilite`, `observations_etude_faisabilite`, `eies`, `observations_eies`, `rapport_activites_trimestriels`, `observations_rapport_activites_trimestriels`, `rapport_activites_annuel`, `observations_rapport_activites_annuel`, `manuel_procedure`, `observations_manuel_procedure`, `bilan_comptable_annuel`, `observations_bilan_comptable_annuel`, `compte_resultat`, `observations_compte_resultat`, `versement_redevance`, `observations_versement_redevance`, `versement_taxe_superficiaire`, `observations_versement_taxe_superficiaire`, `lois_reglements`, `observations_lois_reglements`, `exploitation_permis`, `observations_exploitation_permis`, `horaire_travail`, `observations_horaire_travail`, `systeme_assurance`, `observations_systeme_assurance`, `travailleurs`, `observations_travailleurs`, `enfants_exploitation`, `observations_enfants_exploitation`, `services_supplementaires`, `observations_services_supplementaires`, `enfants_site_sans_travail`, `observations_enfants_site_sans_travail`, `exploitation_travail_force`, `observations_exploitation_travail_force`, `minerais_argent`, `observations_minerais_argent`, `programme_exploration`, `observations_programme_exploration`, `geologue_exploration`, `observations_geologue_exploration`, `cartographie_geologique`, `observations_cartographie_geologique`, `rapports_geologiques`, `observations_rapports_geologiques`, `excavation`, `observations_excavation`, `forage`, `observations_forage`, `nombre_metres_fores`, `observations_nombre_metres_fores`, `analyse_geochimique`, `observations_analyse_geochimique`, `modelisation_estimation`, `observations_modelisation_estimation`, `autres_activites_exploration`, `observations_autres_activites_exploration`, `etude_faisabilite_reserves`, `observations_etude_faisabilite_reserves`, `depenses_exploration`, `observations_depenses_exploration`, `environnement_geologique`, `epaisseur_orientation`, `teneur`, `reserves_ressources`, `localisation_topographie`, `inspection_virtuelle`, `etat_lieux_acces`, `rehabilitation_sites_sondage`, `cartes_affleurements`, `observations_cartes_affleurements`, `carte_geologique`, `observations_carte_geologique`, `donnees_geochimie`, `observations_donnees_geochimie`, `cartes_geochimie`, `observations_cartes_geochimie`, `geophysique_aeroportee_drone`, `observations_geophysique_aeroportee_drone`, `geophysique_sol`, `observations_geophysique_sol`, `tranchees_puits`, `observations_tranchees_puits`, `carotte_plateau`, `observations_carotte_plateau`, `carotte_lavee_debarrassee`, `observations_carotte_lavee_debarrassee`, `carotte_etiquetee`, `observations_carotte_etiquetee`, `carotte_marque_orientation`, `observations_carotte_marque_orientation`, `recuperation_noyau`, `observations_recuperation_noyau`, `recuperation_carotte`, `observations_recuperation_carotte`, `marque_compteur`, `observations_marque_compteur`, `carotte_site_sondage`, `observations_carotte_site_sondage`, `intervalles_enlevement_quotidien`, `observations_intervalles_enlevement_quotidien`, `stockage_carotte`, `observations_stockage_carotte`, `collecte_carotte`, `carotte_etiquetee_consequence`, `observations_carotte_etiquetee_consequence`, `carotte_humide_seche`, `observations_carotte_humide_seche`, `logs_foreurs`, `observations_logs_foreurs`, `signature_geologue_foreur`, `observations_signature_geologue_foreur`, `divergences`, `observations_divergences`, `feuille_enregistrement`, `observations_feuille_enregistrement`, `infos_saisies_fiche_enregistrement`, `fiches_sondages`, `observations_fiches_sondages`, `registres_originaux`, `observations_registres_originaux`, `bd_journalisation`, `observations_bd_journalisation`, `personnel_saisie_donnees`, `observations_personnel_saisie_donnees`, `acces_bd`, `observations_acces_bd`, `enregistrement_bd`, `noyau_photographie`, `observations_noyau_photographie`, `photographies_datees`, `observations_photographies_datees`, `photographies_stockees`, `observations_photographies_stockees`) VALUES
(1, 'Kedougou', '2023-04-08', 'Mouhamadou Diop', '10203040', 'Kedougou', '203040', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Thies', '2023-04-12', 'Fallou Diop', '50403020', 'Thies', '504030', 'Mouhamdou Diop', '773500000', 'mouhamdou@gmail.com', 'thies-808', 'Thies', '', 'Mr Ndiaye', '773505050', 'ndiaye@gmail.com', 'Mactar Fall', '774005050', 'mactarfall@gmail.com', 5, 'Dangote, Sococim', '2', '1', 'Dandemayo', 'Dandemayo', '54', '24', '12', 150, 'Oui', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Matam', '2023-03-06', 'Mahamad Dieng', '121314', 'Matam', '141312', 'Pape Fall', '786505050', 'papefall@gmail.com', 'matam-minier', 'Matam ', '', 'Mr Ba', '789000405', 'ba@gmail.com', 'Pathe Ka', '765504050', 'patheka@gmail.com', 5, 'Sococim, Ciment du Sahel', '2', '2', 'Matam', 'Alwar', '40', '10', '23', 70, 'Oui', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Kidira', '2023-04-10', 'Mister Peter', '50607080', 'Kidira', '607080', 'Michelle Diatta', '785564343', 'michellediatta@gmail.com', '1950', 'Kidira', '', 'Mr Diop', '776200303', 'diop@gmail.com', 'Mariane Kane', '784503002', 'marianekane@gmail.com', 7, 'Sococim, Dangonte', '2', '1', 'Kidira', 'Kidira', '30', '15', '15', 75, 'Oui', 'AP', '01233456789', '2023-04-03', '2023-04-30', 'Zircon', 'oui', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Kidira', '2023-04-10', 'Mister Peter', '50607080', 'Kidira', '607080', 'Michelle Diatta', '785564343', 'michellediatta@gmail.com', '1950', 'Kidira', '', 'Mr Diop', '776200303', 'diop@gmail.com', 'Mariane Kane', '784503002', 'marianekane@gmail.com', 7, 'Sococim, Dangonte', '2', '1', 'Kidira', 'Kidira', '30', '15', '15', 75, 'Oui', 'AP', '01233456789', '2023-04-03', '2023-04-30', 'Zircon', 'oui', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Tambacounda', '2023-04-13', 'Cheikh Ndiaye', '102030405060', 'Kedougou', '102030', 'Mahi Fall', '783005050', 'mahi@gmail.com', '6575', 'Kidira', '', 'Mr Ba', '77908899', 'ba@gmail.com', 'Mr Thomas', '774005050', 'thomas@gmail.com', 2, 'Dangote', '2', '1', 'Kidira', 'Kidira', '54', '23', '12', 150, 'Oui', 'Carriere', '01233456789', '2023-04-20', '2023-04-30', 'Zircon', 'oui', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Kidira', '2023-04-20', 'Mister Peter', '1020304050', 'Kidira', '102030', 'Mahi Fall', '778090909', 'mahi@gmail.com', '2340', 'Kidira', '', 'Mme Sow', '779876543', 'sow@gmail.com', 'Mr Tall', '776000000', 'tall@gmail.com', 4, 'Ciment du Sahel', '1', '3', 'Kidira', 'kidira', '30', '23', '20', 150, 'Oui', 'Carriere', '01233456789', '2023-04-20', '2023-04-30', 'Zircon', 'oui', 'Oui', 'Arrêté d’attribution du titre', 'Oui', 'Convention minière', 'Oui', 'Certificat de conformité de la dernière inspection', '', 'Quitus Fiscal', 'Oui', 'Etude de faisabilité', '', 'EIES', 'Oui', 'Rapports d’activités trimestriels déposés au ministère', 'Oui', 'Rapport d’activités annuel déposés au ministère', 'Oui', 'Manuel de procédure', 'Oui', NULL, 'Oui', 'Compte de résultat certifié', 'Oui', 'Versement de redevance', 'Oui', 'Versement de la taxe superficiaire', 'Oui', 'Reconnaissance des Lois, réglements, et politiques nationales', 'Oui', 'L’exploitation se fait en accord avec les obligations du permis', 'Oui', 'Horaire de travail disponible', 'Oui', 'Système d’assurance pour tous les travailleurs', 'Oui', 'Tous les travailleurs sont enregistrés', 'Oui', 'Des enfants participent dans l’exploitation', 'Oui', 'Des enfants font des services supplémentaires', 'Oui', 'Des enfants sont présents sur le site sans y travailler', 'Oui', 'L’exploitation se fait par recours au travail forcé', 'Oui', 'Des minerais ou de l’argent sont extorqués aux travailleurs dans le site', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Saraya', '2023-04-24', 'Cheikh Ndiaye', '1020304050', 'Kedougou', '10203040', 'Mahi Fall', '779000908', 'mahi@gmail.com', '4565', 'kedougou', '', 'Mme Sow', '783456787', 'sow@gmail.com', 'Mr Timera', '769000908', 'timera@gmail.com', 4, 'Sococim', 'Kédougou', 'Salemata', 'SALEMATA', 'SALEMATA', '30', '34', '24', 150, 'Oui', 'PR', '01233456789', '2023-04-24', '2023-04-30', 'Zircon', 'oui', 'Oui', 'Arrêté d’attribution du titre', 'Oui', 'Convention minière', 'Oui', 'Certificat de conformité de la dernière inspection', '', 'Quitus Fiscal', 'Oui', 'Etude de faisabilité', '', 'EIES', 'Oui', 'Rapports d’activités trimestriels déposés au ministère', 'Oui', 'Rapport d’activités annuel déposés au ministère', 'Oui', 'Manuel de procédure', 'Oui', NULL, 'Oui', 'Compte de résultat certifié', 'Oui', 'Versement de redevance', 'Oui', 'Versement de la taxe superficiaire', 'Oui', 'Reconnaissance des Lois, réglements, et politiques nationales', 'Oui', 'L’exploitation se fait en accord avec les obligations du permis', 'Oui', 'Horaire de travail disponible', 'Oui', 'Système d’assurance pour tous les travailleurs', 'Oui', 'Tous les travailleurs sont enregistrés', 'Oui', 'Des enfants participent dans l’exploitation', 'Oui', 'Des enfants font des services supplémentaires', 'Oui', 'Des enfants sont présents sur le site sans y travailler', 'Oui', 'L’exploitation se fait par recours au travail forcé', 'Oui', 'Des minerais ou de l’argent sont extorqués aux travailleurs dans le site', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Thies', '2023-04-25', 'Mahamad Dieng', '203040506070', 'Thies', '102030', 'Mahi Fall', '779801432', 'mahi@gmail.com', '6578', 'Thies', '', 'Mme Sow', '769807654', 'sow@gmail.com', 'Mr Faty', '774005050', 'faty@gmail.com', 2, 'Dangote', 'Thiès', 'Tivaouane', 'Thies', 'Tivaoune', '30', '20', '23', 30, 'Oui', 'PR', '01233456789', '2023-04-24', '2023-04-30', 'Zircon', 'oui', 'Oui', 'Arrêté d’attribution du titre', 'Oui', 'Convention minière', 'Oui', 'Certificat de conformité de la dernière inspection', '', 'Quitus Fiscal', 'Oui', 'Etude de faisabilité', '', 'EIES', 'Oui', 'Rapports d’activités trimestriels déposés au ministère', 'Oui', 'Rapport d’activités annuel déposés au ministère', 'Oui', 'Manuel de procédure', 'Oui', NULL, 'Oui', 'Compte de résultat certifié', 'Oui', 'Versement de redevance', 'Oui', 'Versement de la taxe superficiaire', 'Oui', 'Reconnaissance des Lois, réglements, et politiques nationales', 'Oui', 'L’exploitation se fait en accord avec les obligations du permis', 'Oui', 'Horaire de travail disponible', 'Oui', 'Système d’assurance pour tous les travailleurs', 'Oui', 'Tous les travailleurs sont enregistrés', 'Oui', 'Des enfants participent dans l’exploitation', 'Oui', 'Des enfants font des services supplémentaires', 'Oui', 'Des enfants sont présents sur le site sans y travailler', 'Oui', 'L’exploitation se fait par recours au travail forcé', 'Oui', 'Des minerais ou de l’argent sont extorqués aux travailleurs dans le site', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Kidira', '2023-04-24', 'Cheikh Diop', '1020304050', 'Kidira', '102030', 'Michelle Diatta', '778900908', 'michellediatta@gmail.com', '2345', 'Kidira', '', 'Mr Ba', '776543212', 'ba@gmail.com', 'Mr Tall', '769000908', 'tall@gmail.com', 4, 'Dangote', 'Kédougou', 'Kédougou', 'Kidira', 'kedougou', '54', '12', '34', 150, 'Oui', 'Carriere', '01233456789', '2023-04-24', '2023-04-30', 'Zircon', 'oui', 'Oui', 'Arrêté d’attribution du titre', 'Oui', 'Convention minière', 'Oui', 'Certificat de conformité de la dernière inspection', '', 'Quitus Fiscal', 'Oui', 'Etude de faisabilité', '', 'EIES', 'Oui', 'Rapports d’activités trimestriels déposés au ministère', 'Oui', 'Rapport d’activités annuel déposés au ministère', 'Oui', 'Manuel de procédure', 'Oui', NULL, 'Oui', 'Compte de résultat certifié', 'Oui', 'Versement de redevance', 'Oui', 'Versement de la taxe superficiaire', 'Oui', 'Reconnaissance des Lois, réglements, et politiques nationales', 'Oui', 'L’exploitation se fait en accord avec les obligations du permis', 'Oui', 'Horaire de travail disponible', 'Oui', 'Système d’assurance pour tous les travailleurs', 'Oui', 'Tous les travailleurs sont enregistrés', 'Oui', 'Des enfants participent dans l’exploitation', 'Oui', 'Des enfants font des services supplémentaires', 'Oui', 'Des enfants sont présents sur le site sans y travailler', 'Oui', 'L’exploitation se fait par recours au travail forcé', 'Oui', 'Des minerais ou de l’argent sont extorqués aux travailleurs dans le site', 'Oui', 'Mise en place d’un programme d’exploration structuré', 'Oui', 'Un géologue d’exploration est présent sur le site', 'Oui', 'Réalisation de la cartographie géologique', 'Oui', 'Elaboration des rapports géologiques', 'Oui', 'Excavation pour l’échantillonnage géochimique', 'Oui', 'Forage pour les analyses géochimiques échantillons et des carottes', 'Oui', 'Nombre de mètres forés dans l\'année', 'Oui', 'Analyse géochimique régulière des échantillons', 'Oui', 'Modélisation/estimation des ressources', 'Oui', 'Autres activités d’exploration', 'Oui', 'Etude de faisabilité pour la définition des réserves', 'Oui', 'Précisez les dépenses d’exploration de l’année passée', '', 'Epaisseur typique et orientation', 'Epaisseur typique et orientation', 'Réserves/ressources estimèes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Matam', '2023-04-25', 'Fallou Diop', '1020304050', 'Matam', '102030', 'Ndiaga fall', '775467890', 'fallndiaga@gmail.com', '1234', 'Matam ', '', 'Mr Diop', '779087654', 'mbaye@gmail.com', 'Mr Talla', '776000000', 'talla@gmail.com', 5, 'Ciment du Sahel', 'Matam', 'Matam', 'Ranerou', 'Ranerou', '54', '13', '20', 150, 'Oui', 'PE', '01233456789', '2023-04-24', '2023-04-30', 'Zircon', 'oui', 'Oui', 'Arrêté d’attribution du titre', 'Oui', 'Convention minière', 'Oui', 'Certificat de conformité de la dernière inspection', '', 'Quitus Fiscal', 'Oui', 'Etude de faisabilité', '', 'EIES', 'Oui', 'Rapports d’activités trimestriels déposés au ministère', 'Oui', 'Rapport d’activités annuel déposés au ministère', 'Oui', 'Manuel de procédure', 'Oui', NULL, 'Oui', 'Compte de résultat certifié', 'Oui', 'Versement de redevance', 'Oui', 'Versement de la taxe superficiaire', 'Oui', '\r\nReconnaissance des Lois, réglements, et politiques nationales', 'Oui', 'L’exploitation se fait en accord avec les obligations du permis', 'Oui', 'Horaire de travail disponible', 'Oui', 'Système d’assurance pour tous les travailleurs', 'Oui', 'Tous les travailleurs sont enregistrés', 'Oui', 'Des enfants participent dans l’exploitation', 'Oui', 'Des enfants font des services supplémentaires', 'Oui', 'Des enfants sont présents sur le site sans y travailler', 'Oui', 'L’exploitation se fait par recours au travail forcé', 'Oui', 'Des minerais ou de l’argent sont extorqués aux travailleurs dans le site', 'Oui', 'Mise en place d’un programme d’exploration structuré', 'Oui', 'Un géologue d’exploration est présent sur le site', 'Oui', 'Réalisation de la cartographie géologique', 'Oui', 'Elaboration des rapports géologiques', 'Oui', 'Excavation pour l’échantillonnage géochimique', 'Oui', 'Forage pour les analyses géochimiques échantillons et des carottes', 'Oui', 'Nombre de mètres forés dans l\'année', 'Oui', 'Analyse géochimique régulière des échantillons', 'Oui', 'Modélisation/estimation des ressources', 'Oui', 'Autres activités d’exploration', 'Oui', 'Etude de faisabilité pour la définition des réserves', 'Oui', 'Précisez les dépenses d’exploration de l’année passée', '', 'Epaisseur typique et orientation', 'Epaisseur typique et orientation', 'Réserves/ressources estimèes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Matam', '2023-04-25', 'Fallou Diop', '1020304050', 'Matam', '102030', 'Ndiaga fall', '775467890', 'fallndiaga@gmail.com', '1234', 'Matam ', '', 'Mr Diop', '779087654', 'mbaye@gmail.com', 'Mr Talla', '776000000', 'talla@gmail.com', 5, 'Ciment du Sahel', 'Matam', 'Matam', 'Ranerou', 'Ranerou', '54', '13', '20', 150, 'Oui', 'PE', '01233456789', '2023-04-24', '2023-04-30', 'Zircon', 'oui', 'Oui', 'Arrêté d’attribution du titre', 'Oui', 'Convention minière', 'Oui', 'Certificat de conformité de la dernière inspection', '', 'Quitus Fiscal', 'Oui', 'Etude de faisabilité', '', 'EIES', 'Oui', 'Rapports d’activités trimestriels déposés au ministère', 'Oui', 'Rapport d’activités annuel déposés au ministère', 'Oui', 'Manuel de procédure', 'Oui', NULL, 'Oui', 'Compte de résultat certifié', 'Oui', 'Versement de redevance', 'Oui', 'Versement de la taxe superficiaire', 'Oui', '\r\nReconnaissance des Lois, réglements, et politiques nationales', 'Oui', 'L’exploitation se fait en accord avec les obligations du permis', 'Oui', 'Horaire de travail disponible', 'Oui', 'Système d’assurance pour tous les travailleurs', 'Oui', 'Tous les travailleurs sont enregistrés', 'Oui', 'Des enfants participent dans l’exploitation', 'Oui', 'Des enfants font des services supplémentaires', 'Oui', 'Des enfants sont présents sur le site sans y travailler', 'Oui', 'L’exploitation se fait par recours au travail forcé', 'Oui', 'Des minerais ou de l’argent sont extorqués aux travailleurs dans le site', 'Oui', 'Mise en place d’un programme d’exploration structuré', 'Oui', 'Un géologue d’exploration est présent sur le site', 'Oui', 'Réalisation de la cartographie géologique', 'Oui', 'Elaboration des rapports géologiques', 'Oui', 'Excavation pour l’échantillonnage géochimique', 'Oui', 'Forage pour les analyses géochimiques échantillons et des carottes', 'Oui', 'Nombre de mètres forés dans l\'année', 'Oui', 'Analyse géochimique régulière des échantillons', 'Oui', 'Modélisation/estimation des ressources', 'Oui', 'Autres activités d’exploration', 'Oui', 'Etude de faisabilité pour la définition des réserves', 'Oui', 'Précisez les dépenses d’exploration de l’année passée', '', 'Epaisseur typique et orientation', 'Epaisseur typique et orientation', 'Réserves/ressources estimèes', 'Localisation du périmètre, topographie, élévation et végétation', 'e programmes de forage a cessé, procéder à une inspection virtuelle (Google Maps)', 'Proximité par rapport à un centre de population, moyens d\'accès au bien, état des routes d\'accès, accès à l\'eau et à l\'électricité', 'Réhabilitation des sites de sondage', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Matam', '2023-04-24', 'Mister Peter', '10203040', 'Kedougou', '102030', 'Pape Fall', '778900976', 'papefall@gmail.com', '4567', 'kedougou', '', 'Mr Ndiaye', '789097654', 'ndiayekane@gmail.com', 'Mlle Sy', '785674321', 'sy@gmail.com', 4, 'Dangote', 'Kédougou', 'Salemata', 'SALEMATA', 'SALEMATA', '30', '20', '54', 150, 'Oui', 'Carriere', '01233456789', '2023-04-25', '2023-04-30', 'Zircon', 'oui', 'Oui', 'Arrêté d’attribution du titre', 'Oui', 'Convention minière', 'Oui', 'Certificat de conformité de la dernière inspection', '', 'Quitus Fiscal', 'Oui', 'Etude de faisabilité', '', 'EIES', 'Oui', 'Rapports d’activités trimestriels déposés au ministère', 'Oui', 'Rapport d’activités annuel déposés au ministère', 'Oui', 'Manuel de procédure', 'Oui', NULL, 'Oui', 'Compte de résultat certifié', 'Oui', 'Versement de redevance', 'Oui', 'Versement de la taxe superficiaire', 'Oui', 'Reconnaissance des Lois, réglements, et politiques nationales', 'Oui', 'L’exploitation se fait en accord avec les obligations du permis', 'Oui', 'Horaire de travail disponible', 'Oui', 'Système d’assurance pour tous les travailleurs', 'Oui', 'Tous les travailleurs sont enregistrés', 'Oui', 'Des enfants participent dans l’exploitation', 'Oui', 'Des enfants font des services supplémentaires', 'Oui', 'Des enfants sont présents sur le site sans y travailler', 'Oui', 'L’exploitation se fait par recours au travail forcé', 'Oui', 'Des minerais ou de l’argent sont extorqués aux travailleurs dans le site', 'Oui', 'Mise en place d’un programme d’exploration structuré', 'Oui', 'Un géologue d’exploration est présent sur le site', 'Oui', 'Réalisation de la cartographie géologique', 'Oui', 'Elaboration des rapports géologiques', NULL, 'Excavation pour l’échantillonnage géochimique', 'Oui', 'Forage pour les analyses géochimiques échantillons et des carottes', 'Oui', 'Nombre de mètres forés dans l\'année', 'Oui', 'Analyse géochimique régulière des échantillons', 'Oui', 'Modélisation/estimation des ressources', 'Oui', 'Autres activités d’exploration', 'Oui', 'Etude de faisabilité pour la définition des réserves', 'Oui', 'Précisez les dépenses d’exploration de l’année passée', '', 'Epaisseur typique et orientation', 'Epaisseur typique et orientation', 'Réserves/ressources estimèes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'Matam', '2023-04-24', 'Mister Peter', '10203040', 'Kedougou', '102030', 'Pape Fall', '778900976', 'papefall@gmail.com', '4567', 'kedougou', '', 'Mr Ndiaye', '789097654', 'ndiayekane@gmail.com', 'Mlle Sy', '785674321', 'sy@gmail.com', 4, 'Dangote', 'Kédougou', 'Salemata', 'SALEMATA', 'SALEMATA', '30', '20', '54', 150, 'Oui', 'Carriere', '01233456789', '2023-04-25', '2023-04-30', 'Zircon', 'oui', 'Oui', 'Arrêté d’attribution du titre', 'Oui', 'Convention minière', 'Oui', 'Certificat de conformité de la dernière inspection', '', 'Quitus Fiscal', 'Oui', 'Etude de faisabilité', '', 'EIES', 'Oui', 'Rapports d’activités trimestriels déposés au ministère', 'Oui', 'Rapport d’activités annuel déposés au ministère', 'Oui', 'Manuel de procédure', 'Oui', NULL, 'Oui', 'Compte de résultat certifié', 'Oui', 'Versement de redevance', 'Oui', 'Versement de la taxe superficiaire', 'Oui', 'Reconnaissance des Lois, réglements, et politiques nationales', 'Oui', 'L’exploitation se fait en accord avec les obligations du permis', 'Oui', 'Horaire de travail disponible', 'Oui', 'Système d’assurance pour tous les travailleurs', 'Oui', 'Tous les travailleurs sont enregistrés', 'Oui', 'Des enfants participent dans l’exploitation', 'Oui', 'Des enfants font des services supplémentaires', 'Oui', 'Des enfants sont présents sur le site sans y travailler', 'Oui', 'L’exploitation se fait par recours au travail forcé', 'Oui', 'Des minerais ou de l’argent sont extorqués aux travailleurs dans le site', 'Oui', 'Mise en place d’un programme d’exploration structuré', 'Oui', 'Un géologue d’exploration est présent sur le site', 'Oui', 'Réalisation de la cartographie géologique', 'Oui', 'Elaboration des rapports géologiques', NULL, 'Excavation pour l’échantillonnage géochimique', 'Oui', 'Forage pour les analyses géochimiques échantillons et des carottes', 'Oui', 'Nombre de mètres forés dans l\'année', 'Oui', 'Analyse géochimique régulière des échantillons', 'Oui', 'Modélisation/estimation des ressources', 'Oui', 'Autres activités d’exploration', 'Oui', 'Etude de faisabilité pour la définition des réserves', 'Oui', 'Précisez les dépenses d’exploration de l’année passée', '', 'Epaisseur typique et orientation', 'Epaisseur typique et orientation', 'Réserves/ressources estimèes', 'Localisation du périmètre, topographie, élévation et végétation', 'le programmes de forage a cessé, procéder à une inspection virtuelle (Google Maps)', 'Proximité par rapport à un centre de population, moyens d\'accès au bien, état des routes d\'accès, accès à l\'eau et à l\'électricité', 'Réhabilitation des sites de sondage', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Matam', '2023-04-24', 'Mister Peter', '10203040', 'Kedougou', '102030', 'Pape Fall', '778900976', 'papefall@gmail.com', '4567', 'kedougou', '', 'Mr Ndiaye', '789097654', 'ndiayekane@gmail.com', 'Mlle Sy', '785674321', 'sy@gmail.com', 4, 'Dangote', 'Kédougou', 'Salemata', 'SALEMATA', 'SALEMATA', '30', '20', '54', 150, 'Oui', 'Carriere', '01233456789', '2023-04-25', '2023-04-30', 'Zircon', 'oui', 'Oui', 'Arrêté d’attribution du titre', 'Oui', 'Convention minière', 'Oui', 'Certificat de conformité de la dernière inspection', '', 'Quitus Fiscal', 'Oui', 'Etude de faisabilité', '', 'EIES', 'Oui', 'Rapports d’activités trimestriels déposés au ministère', 'Oui', 'Rapport d’activités annuel déposés au ministère', 'Oui', 'Manuel de procédure', 'Oui', NULL, 'Oui', 'Compte de résultat certifié', 'Oui', 'Versement de redevance', 'Oui', 'Versement de la taxe superficiaire', 'Oui', 'Reconnaissance des Lois, réglements, et politiques nationales', 'Oui', 'L’exploitation se fait en accord avec les obligations du permis', 'Oui', 'Horaire de travail disponible', 'Oui', 'Système d’assurance pour tous les travailleurs', 'Oui', 'Tous les travailleurs sont enregistrés', 'Oui', 'Des enfants participent dans l’exploitation', 'Oui', 'Des enfants font des services supplémentaires', 'Oui', 'Des enfants sont présents sur le site sans y travailler', 'Oui', 'L’exploitation se fait par recours au travail forcé', 'Oui', 'Des minerais ou de l’argent sont extorqués aux travailleurs dans le site', 'Oui', 'Mise en place d’un programme d’exploration structuré', 'Oui', 'Un géologue d’exploration est présent sur le site', 'Oui', 'Réalisation de la cartographie géologique', 'Oui', 'Elaboration des rapports géologiques', NULL, 'Excavation pour l’échantillonnage géochimique', 'Oui', 'Forage pour les analyses géochimiques échantillons et des carottes', 'Oui', 'Nombre de mètres forés dans l\'année', 'Oui', 'Analyse géochimique régulière des échantillons', 'Oui', 'Modélisation/estimation des ressources', 'Oui', 'Autres activités d’exploration', 'Oui', 'Etude de faisabilité pour la définition des réserves', 'Oui', 'Précisez les dépenses d’exploration de l’année passée', '', 'Epaisseur typique et orientation', 'Epaisseur typique et orientation', 'Réserves/ressources estimèes', 'Localisation du périmètre, topographie, élévation et végétation', 'le programmes de forage a cessé, procéder à une inspection virtuelle (Google Maps)', 'Proximité par rapport à un centre de population, moyens d\'accès au bien, état des routes d\'accès, accès à l\'eau et à l\'électricité', 'Réhabilitation des sites de sondage', 'Oui', 'Cartes des affleurements', 'Oui', 'Carte géologique', 'Oui', 'Géochimie (données)', 'Oui', 'Géochimie (cartes)', 'Oui', 'Géophysique aéroportée ou levé par Drones', 'Oui', 'Géophysique Sol', 'Oui', 'Tranchées et Puits', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Saraya', '2023-04-26', 'Mahamad Dieng', '102030405060', 'Kidira', '102030', 'Lamine Ndiaye', '776500987', 'laminendiaye@gmail.com', '3445', 'kedougou', '', 'Mr Sall', '778092345', 'sall@gmail.com', 'Mr Thomas', '776000000', 'thomas@gmail.com', 4, 'Ciment du Sahel', 'Kédougou', 'Kédougou', 'SALEMATA', 'SALEMATA', '30', '12', '15', 150, 'Oui', 'PR', '01233456789', '2023-04-25', '2023-04-30', 'Zircon', 'oui', 'Oui', 'Arrêté d’attribution du titre', 'Oui', 'Convention minière', 'Oui', 'Certificat de conformité de la dernière inspection', '', 'Quitus Fiscal', 'Oui', 'Etude de faisabilité', '', 'EIES', 'Oui', 'Rapports d’activités trimestriels déposés au ministère', 'Oui', 'Rapport d’activités annuel déposés au ministère', 'Oui', 'Manuel de procédure', 'Oui', NULL, 'Oui', 'Compte de résultat certifié', 'Oui', 'Versement de redevance', 'Oui', 'Versement de la taxe superficiaire', 'Oui', 'Reconnaissance des Lois, réglements, et politiques nationales', 'Oui', 'L’exploitation se fait en accord avec les obligations du permis', 'Oui', 'Horaire de travail disponible', 'Oui', 'Système d’assurance pour tous les travailleurs', 'Oui', 'Tous les travailleurs sont enregistrés', 'Oui', 'Des enfants participent dans l’exploitation', 'Oui', 'Des enfants font des services supplémentaires', 'Oui', 'Des enfants sont présents sur le site sans y travailler', 'Oui', 'L’exploitation se fait par recours au travail forcé', 'Oui', 'Des minerais ou de l’argent sont extorqués aux travailleurs dans le site', 'Oui', '\r\nMise en place d’un programme d’exploration structuré', 'Oui', 'Un géologue d’exploration est présent sur le site', 'Oui', 'Réalisation de la cartographie géologique', 'Oui', 'Elaboration des rapports géologiques', 'Oui', 'Excavation pour l’échantillonnage géochimique', 'Oui', 'Forage pour les analyses géochimiques échantillons et des carottes', 'Oui', 'Nombre de mètres forés dans l\'année', 'Oui', 'Analyse géochimique régulière des échantillons', 'Oui', 'Modélisation/estimation des ressources', 'Oui', 'Autres activités d’exploration', 'Oui', 'Etude de faisabilité pour la définition des réserves', 'Oui', 'Précisez les dépenses d’exploration de l’année passée', '', 'Epaisseur typique et orientation', 'Epaisseur typique et orientation', 'Réserves/ressources estimèes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `minier_first`
--

CREATE TABLE `minier_first` (
  `id` int(11) NOT NULL,
  `bd_sondages_miniers` text DEFAULT NULL,
  `mesures_controle_verification` text DEFAULT NULL,
  `personne_qualifiee` text DEFAULT NULL,
  `nature_limitations_eventuelles` text DEFAULT NULL,
  `checking_datas` text DEFAULT NULL,
  `estimation_reserves` text DEFAULT NULL,
  `plan_exploitation` text DEFAULT NULL,
  `methodes_echantillonnage` text DEFAULT NULL,
  `description_methodologie` text DEFAULT NULL,
  `description_sondage_echantillonnage_recuperation` text DEFAULT NULL,
  `discussion_echantillon` text DEFAULT NULL,
  `description_types_roches` text DEFAULT NULL,
  `statistique_echantillon` text DEFAULT NULL,
  `suivi_evaluation_echantillon` text DEFAULT NULL,
  `protocole_cq_aq` text DEFAULT NULL,
  `proprete` text DEFAULT NULL,
  `securite` text DEFAULT NULL,
  `inventaire_plateau` text DEFAULT NULL,
  `controle_inventaire` text DEFAULT NULL,
  `noyau` text DEFAULT NULL,
  `proprete_laboratoire` text DEFAULT NULL,
  `protocole_etalonnage_labo` text DEFAULT NULL,
  `discussion_protocole_cq` text DEFAULT NULL,
  `preparation_echantillon` text DEFAULT NULL,
  `analyse_echantillon` text DEFAULT NULL,
  `nature_etendue_mesure` text DEFAULT NULL,
  `adequation_procedures` text DEFAULT NULL,
  `donnees_vers_bd` text DEFAULT NULL,
  `minerais_exploites` varchar(255) DEFAULT NULL,
  `observations_produit_secondaire` text DEFAULT NULL,
  `grandes_mines_ciel_ouvert` varchar(255) DEFAULT NULL,
  `petites_mines_ciel_ouvert` varchar(255) DEFAULT NULL,
  `mines_souterraines` varchar(255) DEFAULT NULL,
  `autres_mines` text DEFAULT NULL,
  `traitement_interne_residus` varchar(255) DEFAULT NULL,
  `observations_traitement_interne_residus` text DEFAULT NULL,
  `achat_residus` varchar(255) DEFAULT NULL,
  `observations_achat_residus` text DEFAULT NULL,
  `vente_residus_traitement` varchar(255) DEFAULT NULL,
  `observations_vente_residus_traitement` text DEFAULT NULL,
  `proportion_vente` text DEFAULT NULL,
  `terrils_residus` varchar(255) DEFAULT NULL,
  `observations_terrils_residus` text DEFAULT NULL,
  `nombre_dimensions` text DEFAULT NULL,
  `checking_infos` varchar(255) DEFAULT NULL,
  `autres_infos` text DEFAULT NULL,
  `methodes_exploitation` varchar(255) DEFAULT NULL,
  `autres_methodes_exploitation` text DEFAULT NULL,
  `compresseurs` text DEFAULT NULL,
  `equipements_lourds` text DEFAULT NULL,
  `marteau_piqueur` text NOT NULL,
  `pompes_eau` text NOT NULL,
  `equipement_bonne_condition` text NOT NULL,
  `equipement_en_panne` text NOT NULL,
  `plan_formation_operateurs` text NOT NULL,
  `autres_equipements` text NOT NULL,
  `orpaillage` text DEFAULT NULL,
  `concasseur_broyeur` text DEFAULT NULL,
  `jigs` text DEFAULT NULL,
  `table_secousses` text DEFAULT NULL,
  `lixiviation` text DEFAULT NULL,
  `amalgamation` text DEFAULT NULL,
  `autres_methodes_exploitations` text DEFAULT NULL,
  `perte_minerais_fins` text DEFAULT NULL,
  `produits_economiques` text DEFAULT NULL,
  `pre_concentre` text DEFAULT NULL,
  `concentre` text NOT NULL,
  `residu_traitement` text NOT NULL,
  `autre_produit_economique` text NOT NULL,
  `debut_activites_minieres` text NOT NULL,
  `duree_activites_minieres` text NOT NULL,
  `hauteurs_fronts_puits` text NOT NULL,
  `granulometrie` text NOT NULL,
  `minerais_produits_secondaires` text NOT NULL,
  `capacite_machines_extraction` text NOT NULL,
  `capacite_machines_traitement` text NOT NULL,
  `modalite_transport_minerai` text NOT NULL,
  `modalite_transport_concentre` text NOT NULL,
  `quantites_globales_mines` text NOT NULL,
  `teneur_moyenne_alimentation` text DEFAULT NULL,
  `teneur_moyenne_concentre` text DEFAULT NULL,
  `taux_recuperation_moyen` text DEFAULT NULL,
  `quantites_produites_type` text DEFAULT NULL,
  `quantites_vendues_mines` text DEFAULT NULL,
  `stocks_ouverture_produits` text DEFAULT NULL,
  `stocks_fermeture_produits` text DEFAULT NULL,
  `acheteurs` text DEFAULT NULL,
  `produits_vendus` text DEFAULT NULL,
  `prix_ventes_produit` text DEFAULT NULL,
  `recettes_produits_vendus` text DEFAULT NULL,
  `tonnage_produit` text DEFAULT NULL,
  `tonnage_vendu` text DEFAULT NULL,
  `stocks_terril` text DEFAULT NULL,
  `modalite_controle` text DEFAULT NULL,
  `autres_modalites_controle` text DEFAULT NULL,
  `num_identification_fiscale` text DEFAULT NULL,
  `formes_paiement` text DEFAULT NULL,
  `institutions_paiement` text DEFAULT NULL,
  `montants_payes_institution` text DEFAULT NULL,
  `frequence_paiement` text DEFAULT NULL,
  `nature_paiement` text DEFAULT NULL,
  `paiements_impot` text DEFAULT NULL,
  `indications_paiement` text DEFAULT NULL,
  `paiements_gouvernement` text DEFAULT NULL,
  `precision_paiement` text DEFAULT NULL,
  `redevances_concentre_principal` text DEFAULT NULL,
  `redevances_residus_valorises` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `minier_first`
--

INSERT INTO `minier_first` (`id`, `bd_sondages_miniers`, `mesures_controle_verification`, `personne_qualifiee`, `nature_limitations_eventuelles`, `checking_datas`, `estimation_reserves`, `plan_exploitation`, `methodes_echantillonnage`, `description_methodologie`, `description_sondage_echantillonnage_recuperation`, `discussion_echantillon`, `description_types_roches`, `statistique_echantillon`, `suivi_evaluation_echantillon`, `protocole_cq_aq`, `proprete`, `securite`, `inventaire_plateau`, `controle_inventaire`, `noyau`, `proprete_laboratoire`, `protocole_etalonnage_labo`, `discussion_protocole_cq`, `preparation_echantillon`, `analyse_echantillon`, `nature_etendue_mesure`, `adequation_procedures`, `donnees_vers_bd`, `minerais_exploites`, `observations_produit_secondaire`, `grandes_mines_ciel_ouvert`, `petites_mines_ciel_ouvert`, `mines_souterraines`, `autres_mines`, `traitement_interne_residus`, `observations_traitement_interne_residus`, `achat_residus`, `observations_achat_residus`, `vente_residus_traitement`, `observations_vente_residus_traitement`, `proportion_vente`, `terrils_residus`, `observations_terrils_residus`, `nombre_dimensions`, `checking_infos`, `autres_infos`, `methodes_exploitation`, `autres_methodes_exploitation`, `compresseurs`, `equipements_lourds`, `marteau_piqueur`, `pompes_eau`, `equipement_bonne_condition`, `equipement_en_panne`, `plan_formation_operateurs`, `autres_equipements`, `orpaillage`, `concasseur_broyeur`, `jigs`, `table_secousses`, `lixiviation`, `amalgamation`, `autres_methodes_exploitations`, `perte_minerais_fins`, `produits_economiques`, `pre_concentre`, `concentre`, `residu_traitement`, `autre_produit_economique`, `debut_activites_minieres`, `duree_activites_minieres`, `hauteurs_fronts_puits`, `granulometrie`, `minerais_produits_secondaires`, `capacite_machines_extraction`, `capacite_machines_traitement`, `modalite_transport_minerai`, `modalite_transport_concentre`, `quantites_globales_mines`, `teneur_moyenne_alimentation`, `teneur_moyenne_concentre`, `taux_recuperation_moyen`, `quantites_produites_type`, `quantites_vendues_mines`, `stocks_ouverture_produits`, `stocks_fermeture_produits`, `acheteurs`, `produits_vendus`, `prix_ventes_produit`, `recettes_produits_vendus`, `tonnage_produit`, `tonnage_vendu`, `stocks_terril`, `modalite_controle`, `autres_modalites_controle`, `num_identification_fiscale`, `formes_paiement`, `institutions_paiement`, `montants_payes_institution`, `frequence_paiement`, `nature_paiement`, `paiements_impot`, `indications_paiement`, `paiements_gouvernement`, `precision_paiement`, `redevances_concentre_principal`, `redevances_residus_valorises`) VALUES
(1, 'Base de données des sondages miniers', 'Mesures de contrôle de la qualité et procédures de vérification des données appliquées', 'Est-ce que la personne qualifiée a vérifié les données auxquelles il est fait référence ou sur lesquelles elle s\'appuie', 'Est-ce que la personne qualifiée a vérifié les données auxquelles il est fait référence ou sur lesquelles elle s\'appuie\r\nLa nature et les limitations éventuelles de cette vérification', 'Les raisons de tout échec de la vérification des données, le cas échéant', 'Estimation des réserves exploitables', 'Plans d\'exploitation détaillés', 'Une brève description des méthodes d\'échantillonnage et des détails pertinents sur l\'emplacement, le nombre', 'Une description de la méthodologie pour déterminer la densité, la sélection de l\'échantillon de densité, le minerai par rapport au recouvrement', 'Une description de tout facteur lié au sondage, à l\'échantillonnage ou à la récupération qui pourrait avoir une incidence importante sur l\'exactitude et la fiabilité des résultats', 'Une description de tout facteur lié au sondage, à l\'échantillonnage ou à la récupération qui pourrait avoir une incidence importante sur l\'exactitude et la fiabilité des résultats\r\nUne discussion sur la qualité de l\'échantillon, y compris si les échantillons sont représentatifs, et tous les facteurs qui ont pu entraîner des biais dans l\'échantillon', 'Une description des types de roches, des contrôles géologiques,', 'Une statistique des échantillons et composites d\'échantillons avec les valeurs et les largeurs réelles estimées', 'Suivi des échantillons, de la collecte à la préparation, l\'analyse, le rapport et le stockage/élimination, y compris la mesure de la densité', 'Expliquer le protocole d\'insertion des CQ/AQ pendant l\'échantillonnage', 'Impression générale', 'Sécurité', 'Inventaire des plateaux de base', 'Contrôle de l\'inventaire des rejets grossiers/fins', 'Le noyau rejette la description de fin de trou', 'Impression générale (propreté)', 'Protocoles d\'étalonnage des laboratoires. Récupérer le protocole', 'Discutez du protocole d\'insertion du CQ par le laboratoire d\'analyse', 'Indiquer si un aspect quelconque de la préparation de l\'échantillon a été effectué par un salarié, un dirigeant', 'Détails concernant la préparation des échantillons', 'Un résumé de la nature et de l\'étendue de toutes les mesures de contrôle de la qualité employées, et des analyses de contrôle et autres procédures d\'analyse et d\'essai de contrôle utilisées', 'Une déclaration de l\'opinion de l\'auteur sur l\'adéquation des procédures de préparation, de sécurité et d\'analyse des échantillons', 'Acquisition des données/transfert vers la base de données', 'Or', 'Produit secondaire ou rejet minier', 'ACTIF', 'ABANDONNE', 'ACTIF', 'Autres', 'Oui', 'L’exploitant fait le traitement interne des résidus ou stériles', 'Oui', 'L’exploitant achète des résidus/stériles et autres inputs externes pour le traitement', 'Oui', 'L’exploitant vend-t-il des résidus de traitement', 'Si oui, quelle est la proportion de cette vente par rapport à la production primaire', 'Oui', 'des terrils de résidus de traitement', 'Donnez les détails', 'Documents', 'Autres', 'Hydraulique (lavage au sluice)', 'Autres', 'Compresseur', 'Equipements lourds', 'Marteau-piqueur', 'Pompes à eau', 'Equipement en bonne conditions et bien entretenus', 'Equipement(s) en panne', 'Plan de la formation des opérateurs des équipements et autres', 'Autre', 'Pan de lavage (orpaillage)', 'Concasseur / broyeur', 'Jigs', 'Table à secousses', 'Lixiviation', 'Amalgamation', 'Autre', 'L’absence de traitement entraîne la perte des minerais fins', 'Produits économiques du site', 'Pré-concentré', 'Concentré', 'Résidu de traitement', 'Autre', 'Début des activités minières', 'Durée des activités minières en année', 'Hauteurs des fronts ou profondeur du(des) puits', 'Minerais exploités ou types de produits fabriqués', 'Minerai', 'Capacité des machines d\'extraction sur le site d\'extraction', 'Capacité des machines de traitement installées', 'Modalité de transport du minerai Tout Venant', 'Modalité de transport du concentré final vers l\'extérieur', 'Quantités globales extraites', 'Teneur moyenne d\'alimentation réalisée', 'Teneur moyenne du concentré', 'Taux de récupération moyen', 'Quantités produites par type', 'Quantités vendues - Total sur l\'année en cours', 'Stocks d\'ouverture par produits', 'Stocks de fermeture par produits', 'Acheteur (s)', 'Produit (s) vendu(s)', 'Prix de ventes réalisés par type de produit commercialisé', 'Recettes par types de produits vendues', 'Résidus de traitement : tonnage produit', 'Résidus de traitement valorisés : tonnage vendu', NULL, 'Par Documents', 'Autres', 'Numéro d’identification fiscale de l’exploitant', 'Lister les formes de paiement fait par l’exploitant minier/le propriétaire aux institutions locales et/ou centrales', 'Institution(s) ayant reçue le paiement', 'Montants payés / institution', 'Fréquence du paiement', 'Nature du paiement', 'L\'exploitant est-il à jour sur les paiements de l\'impôt', 'des indications que quelques responsables du gouvernement reçoivent des paiements non autorisés du site minier', 'Oui', 'Les paiements au gouvernement sont-ils publics', 'Redevances sur concentré principal', 'Redevances sur résidus valorisés'),
(2, '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, NULL, NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', '                                                                                                                    ', NULL, '                                                                                                                    ', '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', NULL, NULL, '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', NULL, '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ');

-- --------------------------------------------------------

--
-- Structure de la table `minier_five`
--

CREATE TABLE `minier_five` (
  `id` int(11) NOT NULL,
  `exploitant_site_minerais` varchar(255) DEFAULT NULL,
  `guide_ocde` varchar(255) DEFAULT NULL,
  `observations_guide_ocde` text DEFAULT NULL,
  `politiques_ddg` varchar(255) DEFAULT NULL,
  `observations_politiques_ddg` text DEFAULT NULL,
  `tenue_dossiers` varchar(255) DEFAULT NULL,
  `observations_tenue_dossiers` text DEFAULT NULL,
  `comptabilite` varchar(255) DEFAULT NULL,
  `observations_comptabilite` text DEFAULT NULL,
  `responsabilites_ddg_internes` varchar(255) DEFAULT NULL,
  `observations_responsabilites_ddg_internes` text DEFAULT NULL,
  `tracabilite_interne` varchar(255) DEFAULT NULL,
  `observations_tracabilite_interne` text DEFAULT NULL,
  `tracabilite_externe` varchar(255) DEFAULT NULL,
  `observations_tracabilite_externe` text DEFAULT NULL,
  `documentation_tracabilite` varchar(255) DEFAULT NULL,
  `observations_documentation_tracabilite` text DEFAULT NULL,
  `puits_galerie` varchar(255) DEFAULT NULL,
  `observations_puits_galerie` text DEFAULT NULL,
  `points_agregation` varchar(255) DEFAULT NULL,
  `observations_points_agregation` text DEFAULT NULL,
  `mineurs_impliques` varchar(255) DEFAULT NULL,
  `observations_mineurs_impliques` text DEFAULT NULL,
  `date_production` varchar(255) DEFAULT NULL,
  `observations_date_production` text DEFAULT NULL,
  `poids_production` varchar(255) DEFAULT NULL,
  `observations_poids_production` text DEFAULT NULL,
  `valeur_production` varchar(255) DEFAULT NULL,
  `observations_valeur_production` text DEFAULT NULL,
  `tracabilite_physique` varchar(255) DEFAULT NULL,
  `observations_tracabilite_physique` text DEFAULT NULL,
  `site_minier_tracabilite` varchar(255) DEFAULT NULL,
  `observations_site_minier_tracabilite` text DEFAULT NULL,
  `superviseurs_tracabilite` varchar(255) DEFAULT NULL,
  `observations_superviseurs_tracabilite` text DEFAULT NULL,
  `superviseurs_compagnie` varchar(255) DEFAULT NULL,
  `observations_superviseurs_compagnie` text DEFAULT NULL,
  `superviseurs_semi_externes` varchar(255) DEFAULT NULL,
  `observations_superviseurs_semi_externes` text DEFAULT NULL,
  `superviseurs_externes_gouvernement` varchar(255) DEFAULT NULL,
  `observations_superviseurs_externes_gouvernement` text DEFAULT NULL,
  `superviseurs_tracabilite_permanence` varchar(255) DEFAULT NULL,
  `observations_superviseurs_tracabilite_permanence` text DEFAULT NULL,
  `nbre_visite_sous_site` varchar(255) DEFAULT NULL,
  `observations_nbre_visite_sous_site` text DEFAULT NULL,
  `minerais_sensibles` varchar(255) DEFAULT NULL,
  `observations_minerais_sensibles` text DEFAULT NULL,
  `echantillonnage_afp` varchar(255) DEFAULT NULL,
  `observations_echantillonnage_afp` text DEFAULT NULL,
  `risques_itsci` varchar(255) DEFAULT NULL,
  `observations_risques_itsci` text DEFAULT NULL,
  `audit_mmg` varchar(255) DEFAULT NULL,
  `observations_audit_mmg` text DEFAULT NULL,
  `audit_interne` varchar(255) DEFAULT NULL,
  `observations_audit_interne` text DEFAULT NULL,
  `autre_audit` text DEFAULT NULL,
  `minerais_non_traces` varchar(255) DEFAULT NULL,
  `observations_minerais_non_traces` text DEFAULT NULL,
  `sortie_minerais_non_traces` varchar(255) DEFAULT NULL,
  `observations_sortie_minerais_non_traces` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `minier_five`
--

INSERT INTO `minier_five` (`id`, `exploitant_site_minerais`, `guide_ocde`, `observations_guide_ocde`, `politiques_ddg`, `observations_politiques_ddg`, `tenue_dossiers`, `observations_tenue_dossiers`, `comptabilite`, `observations_comptabilite`, `responsabilites_ddg_internes`, `observations_responsabilites_ddg_internes`, `tracabilite_interne`, `observations_tracabilite_interne`, `tracabilite_externe`, `observations_tracabilite_externe`, `documentation_tracabilite`, `observations_documentation_tracabilite`, `puits_galerie`, `observations_puits_galerie`, `points_agregation`, `observations_points_agregation`, `mineurs_impliques`, `observations_mineurs_impliques`, `date_production`, `observations_date_production`, `poids_production`, `observations_poids_production`, `valeur_production`, `observations_valeur_production`, `tracabilite_physique`, `observations_tracabilite_physique`, `site_minier_tracabilite`, `observations_site_minier_tracabilite`, `superviseurs_tracabilite`, `observations_superviseurs_tracabilite`, `superviseurs_compagnie`, `observations_superviseurs_compagnie`, `superviseurs_semi_externes`, `observations_superviseurs_semi_externes`, `superviseurs_externes_gouvernement`, `observations_superviseurs_externes_gouvernement`, `superviseurs_tracabilite_permanence`, `observations_superviseurs_tracabilite_permanence`, `nbre_visite_sous_site`, `observations_nbre_visite_sous_site`, `minerais_sensibles`, `observations_minerais_sensibles`, `echantillonnage_afp`, `observations_echantillonnage_afp`, `risques_itsci`, `observations_risques_itsci`, `audit_mmg`, `observations_audit_mmg`, `audit_interne`, `observations_audit_interne`, `autre_audit`, `minerais_non_traces`, `observations_minerais_non_traces`, `sortie_minerais_non_traces`, `observations_sortie_minerais_non_traces`) VALUES
(1, 'Non', 'Oui', 'L’exploitant minier connaît le contenu principal du guide OCDE sur le devoir de diligence (DDG)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Oui', 'Non', 'L’exploitant minier connaît le contenu principal du guide OCDE sur le devoir de diligence', 'Oui', 'L’exploitant minier a mis en place des politiques associées à la DDG', 'Non', 'L’exploitant minier utilise un système de tenue des dossiers', 'Oui', 'L’exploitant minier utilise un système de comptabilité', 'Oui', 'L’exploitant minier a assigné des responsabilités DDG internes', 'Oui', 'L’exploitant minier organise un système de traçabilité interne', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Oui', 'Oui', 'L’exploitant minier connaît le contenu principal du guide OCDE sur le devoir de diligence (DDG). Demandez des exemples', 'Oui', 'L’exploitant minier a mis en place des politiques associées à la DDG', 'Oui', 'L’exploitant minier utilise un système de tenue des dossiers', 'Oui', 'L’exploitant minier utilise un système de comptabilité', 'Non', 'L’exploitant minier a assigné des responsabilités DDG internes', 'Non', 'L’exploitant minier organise un système de traçabilité interne', 'Non', 'L’exploitant minier participe dans un système de traçabilité externe', NULL, 'une documentation de la traçabilité en identifiant', 'Oui', 'Puits / galerie d’origine', 'Oui', 'Les points d’agrégation', 'Oui', 'Les mineurs impliqués', 'Oui', 'La date de production', 'Non', 'Le poids de la production', 'Non', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Non', 'Non', 'Demandez des exemples', 'Non', 'Donnez des exemples', 'Non', 'L’exploitant minier utilise un système de tenue des dossiers', 'Non', 'L’exploitant minier utilise un système de comptabilité', 'Non', 'L’exploitant minier a assigné des responsabilités DDG internes', 'Non', 'L’exploitant minier organise un système de traçabilité interne', 'Non', 'L’exploitant minier participe dans un système de traçabilité externe', 'Non', 'une documentation de la traçabilité en identifiant', 'Non', 'Puits / galerie d’origine', 'Non', 'Les points d’agrégation', 'Non', 'Les mineurs impliqués', 'Non', 'La date de production', 'Non', 'Le poids de la production', 'Non', 'La valeur de la production', 'Non', 'la traçabilité physique est en vigueur', 'Non', 'Le site minier comprend plus d’un sous-site pour la traçabilité', 'Non', 'Il y a des superviseurs de traçabilité affectés à la mine', 'Non', 'Superviseurs internes', 'Non', 'Superviseurs semi-externes', 'Oui', 'Superviseurs externes', 'Oui', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Oui', 'Oui', 'L’exploitant minier connaît le contenu principal du guide OCDE sur le devoir de diligence', 'Oui', 'L’exploitant minier a mis en place des politiques associées à la DDG', 'Oui', 'L’exploitant minier utilise un système de tenue des dossiers', 'Oui', 'L’exploitant minier utilise un système de comptabilité', 'Oui', 'L’exploitant minier a assigné des responsabilités DDG internes', 'Oui', 'L’exploitant minier organise un système de traçabilité interne', 'Oui', 'L’exploitant minier participe dans un système de traçabilité externe', 'Oui', 'une documentation de la traçabilité en identifiant\r\n', 'Oui', 'Puits / galerie d’origine', 'Oui', 'Les points d’agrégation', 'Oui', 'Les mineurs impliqués', 'Oui', 'La date de production', 'Oui', 'Le poids de la production', 'Oui', 'La valeur de la production', 'Oui', 'la traçabilité physique est en vigueur', 'Oui', 'Le site minier comprend plus d’un sous-site pour la traçabilité', 'Oui', 'Il y a des superviseurs de traçabilité affectés à la mine', 'Oui', 'Superviseurs internes', 'Oui', 'Superviseurs semi-externes ', 'Oui', 'Superviseurs externes', 'Oui', 'Les superviseurs de traçabilité sont-ils basés en permanence sur le site minier', 'Oui', 'de fois visitent-ils les sous-sites', 'Oui', 'L’exploitant minier accepte l’échantillonnage de l’Empreinte Analytique (AFP)', 'Oui', 'L’échantillonnage AFP a déjà été réalisé au site', 'Oui', 'Evaluation des risques iTSCi', 'Oui', 'Audit MMG', 'Oui', 'Audit interne', 'Autre', NULL, NULL, NULL, NULL),
(6, 'Oui', 'Oui', 'guide OCDE sur le devoir de diligence (DDG)', 'Oui', 'L’exploitant minier a mis en place des politiques associées à la DDG', 'Oui', 'L’exploitant minier utilise un système de tenue des dossiers', 'Non', 'L’exploitant minier utilise un système de comptabilité', 'Non', 'L’exploitant minier a assigné des responsabilités DDG internes', 'Oui', 'L’exploitant minier organise un système de traçabilité interne', 'Oui', 'L’exploitant minier participe dans un système de traçabilité externe', 'Non', 'une documentation de la traçabilité en identifiant', 'Non', 'Puits / galerie d’origine', 'Non', 'Les points d’agrégation (lot)', 'Non', 'Les mineurs impliqués', 'Oui', 'Les mineurs impliqués', 'Oui', 'Le poids de la production', 'Non', 'La valeur de la production', 'Non', 'la traçabilité physique est en vigueur', 'Oui', 'Le site minier comprend plus d’un sous-site pour la traçabilité', 'Non', 'Il y a des superviseurs de traçabilité affectés à la mine', 'Oui', 'Superviseurs internes (compagnie minière)', 'Oui', 'Superviseurs semi-externes (engagés par la compagnie)', 'Oui', 'Superviseurs externes', 'Oui', 'Les superviseurs de traçabilité sont-ils basés en permanence sur le site minier ou ses sous-sites', 'Oui', 'combien de fois visitent-ils les sous-sites', 'Oui', 'L’exploitant minier accepte l’échantillonnage de l’Empreinte Analytique (AFP)', 'Oui', 'L’échantillonnage AFP a déjà été réalisé au site', 'Oui', 'Evaluation des risques iTSCi', 'Oui', 'Audit MMG', 'Oui', 'Audit interne', 'Autre', 'Oui', 'des minerais non- tracés* entrant dans le site / mélangés avec la production du site', 'Oui', 'des minerais non- tracés* qui sortent du site'),
(7, NULL, NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ');

-- --------------------------------------------------------

--
-- Structure de la table `minier_fourth`
--

CREATE TABLE `minier_fourth` (
  `id` int(11) NOT NULL,
  `travailleurs_site_minier` text DEFAULT NULL,
  `mineurs_masculins` text DEFAULT NULL,
  `mineurs_feminins` text DEFAULT NULL,
  `employes_permanents` text DEFAULT NULL,
  `employes_temporaires` text DEFAULT NULL,
  `nbre_travailleurs` varchar(255) DEFAULT NULL,
  `fluctuation_saisonniere` varchar(255) DEFAULT NULL,
  `observations_fluctuation_saisonniere` text DEFAULT NULL,
  `organisation_travailleurs` varchar(255) DEFAULT NULL,
  `observations_organisation_travailleurs` text DEFAULT NULL,
  `evidence_exploitant` varchar(255) DEFAULT NULL,
  `observations_evidence_exploitant` text DEFAULT NULL,
  `masse_salariale_annuelle` text DEFAULT NULL,
  `salaire_max` text DEFAULT NULL,
  `salaire_min` text DEFAULT NULL,
  `salaire_normal` text DEFAULT NULL,
  `paiement_normal_sous_traitant` text DEFAULT NULL,
  `paiement_normal_mineur` text DEFAULT NULL,
  `paiement_travailleur_temporaire` text DEFAULT NULL,
  `moyens_paiement` varchar(255) DEFAULT NULL,
  `casque_dispo` varchar(255) DEFAULT NULL,
  `observations_casque_dispo` text DEFAULT NULL,
  `propre_tache` varchar(255) DEFAULT NULL,
  `observations_propre_tache` text DEFAULT NULL,
  `porter` varchar(255) DEFAULT NULL,
  `observations_porter` text DEFAULT NULL,
  `chaussures_dispos` varchar(255) DEFAULT NULL,
  `observations_chaussures_dispos` text DEFAULT NULL,
  `bottes_tache_propre` varchar(255) DEFAULT NULL,
  `observations_bottes_tache_propre` text DEFAULT NULL,
  `bottes_portees` varchar(255) DEFAULT NULL,
  `observations_bottes_portees` text DEFAULT NULL,
  `tenues_dispos` varchar(255) DEFAULT NULL,
  `observations_tenues_dispos` text DEFAULT NULL,
  `tenues_tache_propre` varchar(255) DEFAULT NULL,
  `observations_tenues_tache_propre` text DEFAULT NULL,
  `tenues_portees` varchar(255) DEFAULT NULL,
  `observations_tenues_portees` text DEFAULT NULL,
  `equipements_dispos` varchar(255) DEFAULT NULL,
  `observations_equipements_dispos` text DEFAULT NULL,
  `equipements_tache_propre` varchar(255) DEFAULT NULL,
  `observations_equipements_tache_propre` text DEFAULT NULL,
  `equipements_portes` varchar(255) DEFAULT NULL,
  `observations_equipements_portes` text DEFAULT NULL,
  `autre_epi` varchar(255) DEFAULT NULL,
  `observations_autre_epi` text DEFAULT NULL,
  `magasinier_epi` varchar(255) DEFAULT NULL,
  `observations_magasinier_epi` text DEFAULT NULL,
  `achat_paiement_epi` varchar(255) DEFAULT NULL,
  `observations_achat_paiement_epi` text DEFAULT NULL,
  `sanction_epi` varchar(255) DEFAULT NULL,
  `observations_sanction_epi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `minier_fourth`
--

INSERT INTO `minier_fourth` (`id`, `travailleurs_site_minier`, `mineurs_masculins`, `mineurs_feminins`, `employes_permanents`, `employes_temporaires`, `nbre_travailleurs`, `fluctuation_saisonniere`, `observations_fluctuation_saisonniere`, `organisation_travailleurs`, `observations_organisation_travailleurs`, `evidence_exploitant`, `observations_evidence_exploitant`, `masse_salariale_annuelle`, `salaire_max`, `salaire_min`, `salaire_normal`, `paiement_normal_sous_traitant`, `paiement_normal_mineur`, `paiement_travailleur_temporaire`, `moyens_paiement`, `casque_dispo`, `observations_casque_dispo`, `propre_tache`, `observations_propre_tache`, `porter`, `observations_porter`, `chaussures_dispos`, `observations_chaussures_dispos`, `bottes_tache_propre`, `observations_bottes_tache_propre`, `bottes_portees`, `observations_bottes_portees`, `tenues_dispos`, `observations_tenues_dispos`, `tenues_tache_propre`, `observations_tenues_tache_propre`, `tenues_portees`, `observations_tenues_portees`, `equipements_dispos`, `observations_equipements_dispos`, `equipements_tache_propre`, `observations_equipements_tache_propre`, `equipements_portes`, `observations_equipements_portes`, `autre_epi`, `observations_autre_epi`, `magasinier_epi`, `observations_magasinier_epi`, `achat_paiement_epi`, `observations_achat_paiement_epi`, `sanction_epi`, `observations_sanction_epi`) VALUES
(1, 'Tous les travailleurs du site minier (f/m)', 'Mineurs masculins', 'Mineurs féminins', 'Employés permanents (f/m)', 'Employés temporaires (f/m)', 'L\'enregistrement', 'Oui', 'une fluctuation saisonnière des travailleurs sur le site minier', 'Oui', 'une organisation des travailleurs', 'Oui', 'd’évidence que l’exploitant minier soutient l’organisation des travailleurs', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Tous les travailleurs du site minier', 'Mineurs masculins', 'Mineurs féminins', 'Employés permanents', 'Employés temporaires', 'Les documents d’assurance', 'Non', 'une fluctuation saisonnière des travailleurs sur le site minier', NULL, 'une organisation des travailleurs', 'Non', 'l’exploitant minier soutient l’organisation des travailleurs', '30 Millions', '3 Millions', '150 milles', '300 milles', '150 milles', '150 milles', '5000', 'Transfert d’argent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Tous les travailleurs du site minier', 'Mineurs masculins', 'Mineurs féminins', 'Employés permanents', 'Employés temporaires', 'Les contrôles intermittents sur les sites miniers', 'Oui', 'une fluctuation saisonnière des travailleurs sur le site minier', 'Oui', 'une organisation des travailleurs', 'Oui', ' l’exploitant minier soutient l’organisation des travailleurs ', '500 Millions', '10 Millions', '300 Milles', '200 Milles', '200 Milles', '150 Milles', '10000', 'Transfert d’argent', 'Oui', 'Casque disponible', 'Oui', 'Propre à la tâche', 'Oui', 'Effectivement porté', 'Oui', 'Chaussures ou bottes disponibles', 'Oui', 'Propre à la tâche', 'Oui', 'Effectivement portés', 'Oui', 'Tenues disponibles', 'Oui', 'Propre à la tâche', 'Oui', 'Effectivement porté', 'Oui', 'Equipements disponibles', 'Oui', 'Propre à la tâche', 'Oui', 'Effectivement portés', 'Oui', 'Autre EPI', 'Oui', 'Organisée par un magasinier du site', 'Oui', 'Les mineurs doivent acheter / payer pour leur EPI', 'Oui', 'Le non-port d’EPI est sanctionné'),
(4, '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', NULL, NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', '                                                                                                                    ', NULL, NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ');

-- --------------------------------------------------------

--
-- Structure de la table `minier_second`
--

CREATE TABLE `minier_second` (
  `id` int(11) NOT NULL,
  `panneaux` varchar(255) DEFAULT NULL,
  `observations_panneaux` text DEFAULT NULL,
  `portes_fermees` varchar(255) DEFAULT NULL,
  `observations_portes_fermees` text DEFAULT NULL,
  `poste_controle` varchar(255) DEFAULT NULL,
  `observations_poste_controle` text DEFAULT NULL,
  `registre_visiteurs` varchar(255) DEFAULT NULL,
  `observations_registre_visiteurs` text DEFAULT NULL,
  `hauteurs_pentes_front` varchar(255) DEFAULT NULL,
  `observations_hauteurs_pentes_front` text DEFAULT NULL,
  `sapement_paroi` varchar(255) DEFAULT NULL,
  `observations_sapement_paroi` text DEFAULT NULL,
  `indications_glissements_roche` varchar(255) DEFAULT NULL,
  `observations_indications_glissements_roche` text DEFAULT NULL,
  `entree_sortie_mine` varchar(255) DEFAULT NULL,
  `observations_entree_sortie_mine` text DEFAULT NULL,
  `disposition_panneaux` varchar(255) DEFAULT NULL,
  `observations_disposition_panneaux` text DEFAULT NULL,
  `usage_epi` varchar(255) DEFAULT NULL,
  `observations_usage_epi` text DEFAULT NULL,
  `securite_tunnel` varchar(255) DEFAULT NULL,
  `observations_securite_tunnel` text DEFAULT NULL,
  `soutenement_tunnel` varchar(255) DEFAULT NULL,
  `observations_soutenement_tunnel` text DEFAULT NULL,
  `sorties_tunnel_dispo` varchar(255) DEFAULT NULL,
  `observations_sorties_tunnel_dispo` text DEFAULT NULL,
  `entree_sortie_tunnel` varchar(255) DEFAULT NULL,
  `observations_entree_sortie_tunnel` text DEFAULT NULL,
  `ventilation_tunnel` varchar(255) DEFAULT NULL,
  `observations_ventilation_tunnel` text DEFAULT NULL,
  `eclairage_tunnel` varchar(255) DEFAULT NULL,
  `observations_eclairage_tunnel` text DEFAULT NULL,
  `dispositions_panneaux_danger` varchar(255) DEFAULT NULL,
  `observations_dispositions_panneaux_danger` text DEFAULT NULL,
  `entree_grillagee` varchar(255) DEFAULT NULL,
  `observations_entree_grillagee` text DEFAULT NULL,
  `epi_controle` varchar(255) DEFAULT NULL,
  `observations_epi_controle` text DEFAULT NULL,
  `gaz_souterrains` varchar(255) DEFAULT NULL,
  `observations_gaz_souterrains` text DEFAULT NULL,
  `oxygene_galeries` varchar(255) DEFAULT NULL,
  `observations_oxygene_galeries` text DEFAULT NULL,
  `entree_sortie_controle` varchar(255) DEFAULT NULL,
  `observations_entree_sortie_controle` text NOT NULL,
  `panneaux_danger` varchar(255) DEFAULT NULL,
  `observations_panneaux_danger` text DEFAULT NULL,
  `epi_approprie` varchar(255) DEFAULT NULL,
  `observations_epi_approprie` text DEFAULT NULL,
  `securite_machine` varchar(255) DEFAULT NULL,
  `observations_securite_machine` text DEFAULT NULL,
  `responsable_charge_experimente` varchar(255) DEFAULT NULL,
  `observations_responsable_charge_experimente` text DEFAULT NULL,
  `explosifs_detonateurs` varchar(255) DEFAULT NULL,
  `observations_explosifs_detonateurs` text DEFAULT NULL,
  `horaire_minage` varchar(255) DEFAULT NULL,
  `observations_horaire_minage` text DEFAULT NULL,
  `procedures_minage` varchar(255) DEFAULT NULL,
  `observations_procedures_minage` text DEFAULT NULL,
  `type_explosif` varchar(255) DEFAULT NULL,
  `observations_type_explosif` text DEFAULT NULL,
  `hsqe` varchar(255) DEFAULT NULL,
  `environnement_bio_diversite` varchar(255) DEFAULT NULL,
  `formation_personnel` varchar(255) DEFAULT NULL,
  `rse` varchar(255) DEFAULT NULL,
  `anti_corruption_fraude` varchar(255) DEFAULT NULL,
  `genre` varchar(255) DEFAULT NULL,
  `autre_politique_exploitant` varchar(255) DEFAULT NULL,
  `cooperatives_entreprises` varchar(255) DEFAULT NULL,
  `observations_cooperatives_entreprises` varchar(255) DEFAULT NULL,
  `forces_publiques` varchar(255) DEFAULT NULL,
  `observations_forces_publiques` text DEFAULT NULL,
  `forces_privees` varchar(255) DEFAULT NULL,
  `observations_forces_privees` text DEFAULT NULL,
  `forces_engagees_exploitant` varchar(255) DEFAULT NULL,
  `observations_forces_engagees_exploitant` text DEFAULT NULL,
  `total_forces_securite` varchar(255) DEFAULT NULL,
  `observations_total_forces_securite` text DEFAULT NULL,
  `dimensions_mine` varchar(255) DEFAULT NULL,
  `observations_dimensions_mine` text DEFAULT NULL,
  `taches_forces_securite` text DEFAULT NULL,
  `incidents_securite` text DEFAULT NULL,
  `personnes_impliquees_incidents` varchar(255) DEFAULT NULL,
  `documentation_incidents` varchar(255) DEFAULT NULL,
  `observations_documentation_incidents` text DEFAULT NULL,
  `evaluations_risques_securite` varchar(255) DEFAULT NULL,
  `observations_evaluations_risques_securite` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `minier_second`
--

INSERT INTO `minier_second` (`id`, `panneaux`, `observations_panneaux`, `portes_fermees`, `observations_portes_fermees`, `poste_controle`, `observations_poste_controle`, `registre_visiteurs`, `observations_registre_visiteurs`, `hauteurs_pentes_front`, `observations_hauteurs_pentes_front`, `sapement_paroi`, `observations_sapement_paroi`, `indications_glissements_roche`, `observations_indications_glissements_roche`, `entree_sortie_mine`, `observations_entree_sortie_mine`, `disposition_panneaux`, `observations_disposition_panneaux`, `usage_epi`, `observations_usage_epi`, `securite_tunnel`, `observations_securite_tunnel`, `soutenement_tunnel`, `observations_soutenement_tunnel`, `sorties_tunnel_dispo`, `observations_sorties_tunnel_dispo`, `entree_sortie_tunnel`, `observations_entree_sortie_tunnel`, `ventilation_tunnel`, `observations_ventilation_tunnel`, `eclairage_tunnel`, `observations_eclairage_tunnel`, `dispositions_panneaux_danger`, `observations_dispositions_panneaux_danger`, `entree_grillagee`, `observations_entree_grillagee`, `epi_controle`, `observations_epi_controle`, `gaz_souterrains`, `observations_gaz_souterrains`, `oxygene_galeries`, `observations_oxygene_galeries`, `entree_sortie_controle`, `observations_entree_sortie_controle`, `panneaux_danger`, `observations_panneaux_danger`, `epi_approprie`, `observations_epi_approprie`, `securite_machine`, `observations_securite_machine`, `responsable_charge_experimente`, `observations_responsable_charge_experimente`, `explosifs_detonateurs`, `observations_explosifs_detonateurs`, `horaire_minage`, `observations_horaire_minage`, `procedures_minage`, `observations_procedures_minage`, `type_explosif`, `observations_type_explosif`, `hsqe`, `environnement_bio_diversite`, `formation_personnel`, `rse`, `anti_corruption_fraude`, `genre`, `autre_politique_exploitant`, `cooperatives_entreprises`, `observations_cooperatives_entreprises`, `forces_publiques`, `observations_forces_publiques`, `forces_privees`, `observations_forces_privees`, `forces_engagees_exploitant`, `observations_forces_engagees_exploitant`, `total_forces_securite`, `observations_total_forces_securite`, `dimensions_mine`, `observations_dimensions_mine`, `taches_forces_securite`, `incidents_securite`, `personnes_impliquees_incidents`, `documentation_incidents`, `observations_documentation_incidents`, `evaluations_risques_securite`, `observations_evaluations_risques_securite`) VALUES
(1, 'Oui', 'Des panneaux appropriés', 'Oui', 'Clôture et portes fermées', 'Oui', 'Poste de contrôle de sécurité', 'Oui', 'Registre des visiteurs', NULL, NULL, 'Oui', 'Pas de sapement de la paroi', 'Oui', 'Indications des glissements dans la roche', 'Oui', 'Entrée / sortie de la mine sous contrôle', 'Oui', 'Disposition des panneaux de danger adéquat', 'Oui', 'Usage d’EPI approprié est contrôlé', 'Oui', 'Sécurité à l’entrée du tunnel', 'Oui', 'Soutènement des tunnels adéquat', 'Oui', 'Au moins deux sorties de tunnel disponibles', 'Oui', 'Entrée/sortie du tunnel sous contrôle', 'Oui', 'Ventilation adéquate dans le tunnel', 'Oui', 'Eclairage du tunnel adéquat', NULL, NULL, 'Oui', 'Entrée grillagée', 'Oui', 'Usage d’EPI approprié est contrôlé', 'Oui', 'Surveillance des gaz souterrains', 'Oui', 'Mesurez l’oxygène', 'Oui', 'Entrée / sortie sous contrôle', 'Oui', 'Disposition des panneaux de danger adéquats', 'Oui', 'Usage d’EPI approprié est contrôlé', 'Oui', 'Sécurité du fonctionnement des machines', 'Oui', 'Responsable en charge et expérimenté', 'Oui', 'Le stockage d’explosifs et détonateurs est sécurisé', 'Oui', 'Décrire l’horaire du minage', 'Oui', 'Décrire les procédures opérationnelles du minage', 'Oui', 'Type d’explosif utilisé', 'Disponible', 'Disponible', 'Communiqué à Tous les travailleurs', 'Disponible', 'Disponible', 'Disponible', 'Disponible', 'Oui', 'Uniquement pour les coopératives', 'Oui', 'Des forces de sécurité professionnelles contrôlent le site', 'Oui', 'Des forces de sécurité professionnelles contrôlent le site forces privées', 'Oui', 'Sont-elles directement engagées par l’exploitant minier ', 'Oui', 'Nombre total des forces de sécurité sur le site', 'Oui', 'Par rapport à la dimension de la mine', 'les tâches spécifiques des forces de sécurité sur la mine', 'type d’incidents de sécurité s’est passé sur/autour de la mine depuis la dernière inspection', 'les personnes impliquées ', 'Oui', 'une documentation sur ces incidents de sécurité ', 'Oui', 'des évaluations des risques de sécurité étaient faites et ont été documentés'),
(2, NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, NULL, NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, NULL, NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', '                                                                                                                            ', '                                                                                                                            ', '                                                                                                                            ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ');

-- --------------------------------------------------------

--
-- Structure de la table `minier_seven`
--

CREATE TABLE `minier_seven` (
  `id` int(11) NOT NULL,
  `systemes_prix_distribution` text DEFAULT NULL,
  `droit_travailleurs` text DEFAULT NULL,
  `sante_securite_travailleurs` text DEFAULT NULL,
  `epi` text DEFAULT NULL,
  `impacts_environnementaux` text DEFAULT NULL,
  `gestion_substances_dangereuses` text DEFAULT NULL,
  `gestion_dechets_residus` text DEFAULT NULL,
  `fermeture_mine` text DEFAULT NULL,
  `corruption_fraude` text DEFAULT NULL,
  `consultations_sujets_connexes` text DEFAULT NULL,
  `entreprises_locales` text DEFAULT NULL,
  `plan_integre` text DEFAULT NULL,
  `documents_consentement` text DEFAULT NULL,
  `operations_minieres` text DEFAULT NULL,
  `problemes_majeurs_site` text DEFAULT NULL,
  `actions_correctives` text DEFAULT NULL,
  `sante_securite_travailleurs_operations` text DEFAULT NULL,
  `decision_suspension_temporaire` varchar(255) DEFAULT NULL,
  `date_suspension` date DEFAULT NULL,
  `cote_rouge_non_certifie` varchar(255) DEFAULT NULL,
  `date_cote_rouge` date DEFAULT NULL,
  `periode_minimale_suspension` date DEFAULT NULL,
  `cote_jaune` varchar(255) DEFAULT NULL,
  `date_cote_jaune` date DEFAULT NULL,
  `periode_grace` date DEFAULT NULL,
  `cote_vert_certifie` varchar(255) DEFAULT NULL,
  `date_cote_vert_certifie` date DEFAULT NULL,
  `date_inspection` date DEFAULT NULL,
  `lieu_inspection` varchar(255) DEFAULT NULL,
  `date_de_inspection` date DEFAULT NULL,
  `lieu_declaration` varchar(255) DEFAULT NULL,
  `date_declaration` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `minier_seven`
--

INSERT INTO `minier_seven` (`id`, `systemes_prix_distribution`, `droit_travailleurs`, `sante_securite_travailleurs`, `epi`, `impacts_environnementaux`, `gestion_substances_dangereuses`, `gestion_dechets_residus`, `fermeture_mine`, `corruption_fraude`, `consultations_sujets_connexes`, `entreprises_locales`, `plan_integre`, `documents_consentement`, `operations_minieres`, `problemes_majeurs_site`, `actions_correctives`, `sante_securite_travailleurs_operations`, `decision_suspension_temporaire`, `date_suspension`, `cote_rouge_non_certifie`, `date_cote_rouge`, `periode_minimale_suspension`, `cote_jaune`, `date_cote_jaune`, `periode_grace`, `cote_vert_certifie`, `date_cote_vert_certifie`, `date_inspection`, `lieu_inspection`, `date_de_inspection`, `lieu_declaration`, `date_declaration`) VALUES
(1, 'Les systèmes des prix et de distribution pour les mineurs artisanaux et les sous-traitants, ainsi que la rémunération pour les employés, sont équitables, légaux et règlementés', 'L’exploitant du site minier garantit et appuie le droit des travailleurs de s’organiser et de négocier collectivement avec leur employeur', 'L’exploitant du site minier assure la santé et la sécurité des travailleurs dans toutes ses opérations', 'L’exploitant du site minier fournit des équipements de sécurité (EPI) appropriés et une formation à tous les travailleurs', 'L’exploitant du site minier a mené une étude des impacts environnementaux', 'L’exploitant du site minier a mis en place un système pour la gestion et le traitement des substances dangereuses et des produits chimiques toxiques utilisés dans le processus de production', 'L’exploitant du site minier a mis en place un système pour la gestion des déchets et résidus provenant du site minier', 'L’exploitant du site minier a mis en place un plan pour la fermeture de la mine (y compris sa réhabilitation) et a réservé des fonds pour sa mise en œuvre', 'L’exploitant du site minier lutte activement contre toutes formes de corruption/fraude', 'L’exploitant du site minier organise régulièrement des consultations concernant l’exploitation des minéraux et des sujets connexes avec les collectivités locales', 'L’exploitant du site minier collabore avec les entreprises locales pour approvisionner ses opérations', 'L’exploitant du site minier a élaboré et mis en œuvre un plan intégré pour l’amélioration des infrastructures et des services sociaux', 'L’exploitant du site minier possède des documents prouvant qu’il a obtenu un consentement libre et éclairé avant d’acquérir des terrains ou des biens immobiliers des communautés et des autorités locales', 'L’exploitant du site minier conçoit et exécute les opérations minières dans le respect de l’égalité entre les sexes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Les systèmes des prix et de distribution pour les mineurs artisanaux et les sous-traitants, ainsi que la rémunération pour les employés, sont équitables, légaux et règlementés', 'L’exploitant du site minier garantit et appuie le droit des travailleurs de s’organiser et de négocier collectivement avec leur employeur', 'L’exploitant du site minier assure la santé et la sécurité des travailleurs dans toutes ses opérations', 'L’exploitant du site minier fournit des équipements de sécurité (EPI) appropriés et une formation à tous les travailleurs', 'L’exploitant du site minier a mené une étude des impacts environnementaux', 'L’exploitant du site minier a mis en place un système pour la gestion et le traitement des substances dangereuses et des produits chimiques toxiques utilisés dans le processus de production', 'L’exploitant du site minier a mis en place un système pour la gestion des déchets et résidus provenant du site minier', 'L’exploitant du site minier a mis en place un plan pour la fermeture de la mine (y compris sa réhabilitation) et a réservé des fonds pour sa mise en œuvre', 'L’exploitant du site minier lutte activement contre toutes formes de corruption/fraude', 'L’exploitant du site minier organise régulièrement des consultations concernant l’exploitation des minéraux et des sujets connexes avec les collectivités locales', 'L’exploitant du site minier collabore avec les entreprises locales pour approvisionner ses opérations', 'L’exploitant du site minier a élaboré et mis en œuvre un plan intégré pour l’amélioration des infrastructures et des services sociaux', 'L’exploitant du site minier possède des documents prouvant qu’il a obtenu un consentement libre et éclairé avant d’acquérir des terrains ou des biens immobiliers des communautés et des autorités locales', 'L’exploitant du site minier conçoit et exécute les opérations minières dans le respect de l’égalité entre les sexes', 'Problèmes majeures sur le site', 'Actions correctives proposées', 'L’exploitant du site minier assure la santé et la sécurité des travailleurs dans toutes ses opérations', 'Oui', '2023-04-25', 'Oui', '2023-04-26', '2023-04-25', 'Oui', '2023-04-27', '2023-04-25', 'Oui', '2023-04-30', '2023-04-30', NULL, NULL, NULL, NULL),
(3, 'Les systèmes des prix et de distribution pour les mineurs artisanaux et les sous-traitants', 'L’exploitant du site minier garantit et appuie le droit des travailleurs de s’organiser et de négocier collectivement avec leur employeur', 'L’exploitant du site minier assure la santé et la sécurité des travailleurs dans toutes ses opérations', 'L’exploitant du site minier fournit des équipements de sécurité (EPI) appropriés et une formation à tous les travailleurs', 'L’exploitant du site minier a mené une étude des impacts environnementaux', 'L’exploitant du site minier a mis en place un système pour la gestion et le traitement des substances dangereuses et des produits chimiques toxiques utilisés dans le processus de production', 'L’exploitant du site minier a mis en place un système pour la gestion des déchets et résidus provenant du site minier', 'L’exploitant du site minier a mis en place un plan pour la fermeture de la mine (y compris sa réhabilitation) et a réservé des fonds pour sa mise en œuvre', 'L’exploitant du site minier lutte activement contre toutes formes de corruption/fraude', 'L’exploitant du site minier organise régulièrement des consultations concernant l’exploitation des minéraux et des sujets connexes avec les collectivités locales', 'L’exploitant du site minier collabore avec les entreprises locales pour approvisionner ses opérations', 'L’exploitant du site minier a élaboré et mis en œuvre un plan intégré pour l’amélioration des infrastructures et des services sociaux', 'L’exploitant du site minier possède des documents prouvant qu’il a obtenu un consentement libre et éclairé avant d’acquérir des terrains ou des biens immobiliers des communautés et des autorités locales', 'L’exploitant du site minier conçoit et exécute les opérations minières dans le respect de l’égalité entre les sexes ', 'Assignez des numéros aux problèmes détectés spécifiques et proposez des actions correctives', 'Actions correctives proposées', 'L’exploitant du site minier assure la santé et la sécurité des travailleurs dans toutes ses opérations', 'Oui', '2023-04-25', 'Oui', '2023-04-25', '2023-04-30', 'Oui', '2023-04-26', '2023-04-27', 'Oui', '2023-04-28', '2023-04-30', 'Matam', '2023-04-30', NULL, NULL),
(4, 'Les systèmes des prix et de distribution pour les mineurs artisanaux et les sous-traitants', 'L’exploitant du site minier garantit et appuie le droit des travailleurs de s’organiser et de négocier collectivement avec leur employeur', 'L’exploitant du site minier assure la santé et la sécurité des travailleurs dans toutes ses opérations', 'L’exploitant du site minier fournit des équipements de sécurité (EPI) appropriés et une formation à tous les travailleurs', 'L’exploitant du site minier a mené une étude des impacts environnementaux', 'L’exploitant du site minier a mis en place un système pour la gestion et le traitement des substances dangereuses et des produits chimiques toxiques utilisés dans le processus de production', 'L’exploitant du site minier a mis en place un système pour la gestion des déchets et résidus provenant du site minier', 'L’exploitant du site minier a mis en place un plan pour la fermeture de la mine (y compris sa réhabilitation) et a réservé des fonds pour sa mise en œuvre', 'L’exploitant du site minier lutte activement contre toutes formes de corruption/fraude', 'L’exploitant du site minier organise régulièrement des consultations concernant l’exploitation des minéraux et des sujets connexes avec les collectivités locales', 'L’exploitant du site minier collabore avec les entreprises locales pour approvisionner ses opérations', 'L’exploitant du site minier a élaboré et mis en œuvre un plan intégré pour l’amélioration des infrastructures et des services sociaux', 'L’exploitant du site minier possède des documents prouvant qu’il a obtenu un consentement libre et éclairé avant d’acquérir des terrains ou des biens immobiliers des communautés et des autorités locales', 'L’exploitant du site minier conçoit et exécute les opérations minières dans le respect de l’égalité entre les sexes ', 'Assignez des numéros aux problèmes détectés spécifiques et proposez des actions correctives', 'Actions correctives proposées', 'L’exploitant du site minier assure la santé et la sécurité des travailleurs dans toutes ses opérations', 'Oui', '2023-04-25', 'Oui', '2023-04-25', '2023-04-30', 'Oui', '2023-04-26', '2023-04-27', 'Oui', '2023-04-28', '2023-04-30', 'Matam', '2023-04-26', NULL, NULL),
(5, 'la rémunération pour les employés, sont équitables, légaux et règlementés', 'L’exploitant du site minier garantit et appuie le droit des travailleurs de s’organiser et de négocier collectivement avec leur employeur', 'L’exploitant du site minier assure la santé et la sécurité des travailleurs dans toutes ses opérations', 'L’exploitant du site minier fournit des équipements de sécurité (EPI) appropriés et une formation à tous les travailleurs', 'L’exploitant du site minier a mené une étude des impacts environnementaux', 'L’exploitant du site minier a mis en place un système pour la gestion et le traitement des substances dangereuses et des produits chimiques toxiques utilisés dans le processus de production', 'L’exploitant du site minier a mis en place un système pour la gestion des déchets et résidus provenant du site minier', 'L’exploitant du site minier a mis en place un plan pour la fermeture de la mine (y compris sa réhabilitation) et a réservé des fonds pour sa mise en œuvre', 'L’exploitant du site minier lutte activement contre toutes formes de corruption/fraude', 'L’exploitant du site minier organise régulièrement des consultations concernant l’exploitation des minéraux et des sujets connexes avec les collectivités locales', 'L’exploitant du site minier collabore avec les entreprises locales pour approvisionner ses opérations', 'L’exploitant du site minier a élaboré et mis en œuvre un plan intégré pour l’amélioration des infrastructures et des services sociaux', 'L’exploitant du site minier possède des documents prouvant qu’il a obtenu un consentement libre et éclairé avant d’acquérir des terrains ou des biens immobiliers des communautés et des autorités locales', 'L’exploitant du site minier conçoit et exécute les opérations minières dans le respect de l’égalité entre les sexes', 'Problèmes majeures sur le site', 'Actions correctives proposées', 'L’exploitant du site minier assure la santé et la sécurité des travailleurs dans toutes ses opérations', 'Oui', '2023-04-25', 'Oui', '2023-04-26', '2023-04-27', 'Oui', '2023-04-28', '2023-04-30', 'Oui', '2023-04-28', '2023-04-29', 'Thies', '2023-04-26', 'Thies', '2023-04-27'),
(6, 'la rémunération pour les employés, sont équitables, légaux et règlementés', 'L’exploitant du site minier garantit et appuie le droit des travailleurs de s’organiser et de négocier collectivement avec leur employeur', 'L’exploitant du site minier assure la santé et la sécurité des travailleurs dans toutes ses opérations', 'L’exploitant du site minier fournit des équipements de sécurité (EPI) appropriés et une formation à tous les travailleurs', 'L’exploitant du site minier a mené une étude des impacts environnementaux', 'L’exploitant du site minier a mis en place un système pour la gestion et le traitement des substances dangereuses et des produits chimiques toxiques utilisés dans le processus de production', 'L’exploitant du site minier a mis en place un système pour la gestion des déchets et résidus provenant du site minier', 'L’exploitant du site minier a mis en place un plan pour la fermeture de la mine (y compris sa réhabilitation) et a réservé des fonds pour sa mise en œuvre', 'L’exploitant du site minier lutte activement contre toutes formes de corruption/fraude', 'L’exploitant du site minier organise régulièrement des consultations concernant l’exploitation des minéraux et des sujets connexes avec les collectivités locales', 'L’exploitant du site minier collabore avec les entreprises locales pour approvisionner ses opérations', 'L’exploitant du site minier a élaboré et mis en œuvre un plan intégré pour l’amélioration des infrastructures et des services sociaux', 'L’exploitant du site minier possède des documents prouvant qu’il a obtenu un consentement libre et éclairé avant d’acquérir des terrains ou des biens immobiliers des communautés et des autorités locales', 'L’exploitant du site minier conçoit et exécute les opérations minières dans le respect de l’égalité entre les sexes', 'Problèmes majeures sur le site', 'Actions correctives proposées', 'L’exploitant du site minier assure la santé et la sécurité des travailleurs dans toutes ses opérations', 'Oui', '2023-04-25', 'Oui', '2023-04-26', '2023-04-27', 'Oui', '2023-04-28', '2023-04-30', 'Oui', '2023-04-28', '2023-04-29', 'Thies', '2023-04-26', 'Mboro', '2023-04-29'),
(7, 'Les systèmes des prix et de distribution pour les mineurs artisanaux et les sous-traitants, ainsi que la rémunération pour les employés, sont équitables, légaux et règlementés', 'L’exploitant du site minier garantit et appuie le droit des travailleurs de s’organiser et de négocier collectivement avec leur employeur', 'L’exploitant du site minier assure la santé et la sécurité des travailleurs dans toutes ses opérations', 'L’exploitant du site minier fournit des équipements de sécurité (EPI) appropriés et une formation à tous les travailleurs', 'L’exploitant du site minier a mené une étude des impacts environnementaux', 'L’exploitant du site minier a mis en place un système pour la gestion et le traitement des substances dangereuses', 'L’exploitant du site minier a mis en place un système pour la gestion des déchets et résidus provenant du site minier', 'L’exploitant du site minier a mis en place un plan pour la fermeture de la mine (y compris sa réhabilitation) et a réservé des fonds pour sa mise en œuvre', 'L’exploitant du site minier lutte activement contre toutes formes de corruption/fraude', 'L’exploitant du site minier organise régulièrement des consultations concernant l’exploitation des minéraux et des sujets connexes avec les collectivités locales', 'L’exploitant du site minier collabore avec les entreprises locales pour approvisionner ses opérations', 'L’exploitant du site minier a élaboré et mis en œuvre un plan intégré pour l’amélioration des infrastructures et des services sociaux', 'L’exploitant du site minier possède des documents prouvant qu’il a obtenu un consentement libre et éclairé avant d’acquérir des terrains ou des biens immobiliers des communautés et des autorités locales', 'L’exploitant du site minier conçoit et exécute les opérations minières dans le respect de l’égalité entre les sexes', 'Problèmes majeures sur le site', 'Actions correctives proposées', 'L’exploitant du site minier assure la santé et la sécurité des travailleurs dans toutes ses opérations', 'Oui', '2023-04-26', 'Oui', '2023-04-26', '2023-04-27', 'Oui', '2023-04-28', '2023-04-29', 'Oui', '2023-04-30', '2023-04-30', 'Matam', '2023-04-26', 'Matam', '2023-04-27'),
(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Matam', '2023-05-25'),
(9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'kedougou', '2023-05-17'),
(10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kidira', '2023-05-04'),
(11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Faleme', '2023-05-05'),
(12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dinguira', '2023-05-31'),
(13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Thies', '2023-05-11'),
(14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Thies', '2023-05-12');

-- --------------------------------------------------------

--
-- Structure de la table `minier_six`
--

CREATE TABLE `minier_six` (
  `id` int(11) NOT NULL,
  `forum_discussion` varchar(255) DEFAULT NULL,
  `observations_forum_discussion` text DEFAULT NULL,
  `depuis_quand` date DEFAULT NULL,
  `rencontres_regulieres` varchar(255) DEFAULT NULL,
  `observations_rencontres_regulieres` text DEFAULT NULL,
  `groupes` varchar(255) DEFAULT NULL,
  `observations_groupes` text DEFAULT NULL,
  `entreprises_locales` varchar(255) DEFAULT NULL,
  `observations_entreprises_locales` text DEFAULT NULL,
  `developpement_local` varchar(255) DEFAULT NULL,
  `observations_developpement_local` text DEFAULT NULL,
  `garantie_moyens` varchar(255) DEFAULT NULL,
  `observations_garantie_moyens` text DEFAULT NULL,
  `infrastructure_locale` varchar(255) DEFAULT NULL,
  `observations_infrastructure_locale` text DEFAULT NULL,
  `education_formation` varchar(255) DEFAULT NULL,
  `observations_education_formation` text DEFAULT NULL,
  `renforcement_capacites` varchar(255) DEFAULT NULL,
  `observations_renforcement_capacites` text DEFAULT NULL,
  `aspects_genre` varchar(255) DEFAULT NULL,
  `observations_aspects_genre` text DEFAULT NULL,
  `elements_ad_hoc` varchar(255) DEFAULT NULL,
  `observations_elements_ad_hoc` text DEFAULT NULL,
  `autorites_locales` varchar(255) DEFAULT NULL,
  `observations_autorites_locales` text DEFAULT NULL,
  `acquisition_terrain` varchar(255) DEFAULT NULL,
  `observations_acquisition_terrain` text DEFAULT NULL,
  `usage_eaux` varchar(255) DEFAULT NULL,
  `observations_usage_eaux` text DEFAULT NULL,
  `usage_forets` varchar(255) DEFAULT NULL,
  `observations_usage_forets` text DEFAULT NULL,
  `impacts_miniers` varchar(255) DEFAULT NULL,
  `observations_impacts_miniers` text DEFAULT NULL,
  `autre_impact_minier` text DEFAULT NULL,
  `plaintes` varchar(255) DEFAULT NULL,
  `observations_plaintes` text DEFAULT NULL,
  `non_conformite_critique` varchar(255) DEFAULT NULL,
  `observations_non_conformite_critique` text DEFAULT NULL,
  `non_conformite_serieuse` varchar(255) DEFAULT NULL,
  `observations_non_conformite_serieuse` text DEFAULT NULL,
  `commentaire_un` text DEFAULT NULL,
  `commentaire_deux` text DEFAULT NULL,
  `commentaire_trois` text DEFAULT NULL,
  `representant_principal` text DEFAULT NULL,
  `titre_fonction` text DEFAULT NULL,
  `signature_numerique` text DEFAULT NULL,
  `gestionnaire_responsable` text DEFAULT NULL,
  `commentaire_gestionnaire` text DEFAULT NULL,
  `production_miniere` text DEFAULT NULL,
  `resultats_inspection` text DEFAULT NULL,
  `changements_procedures` text DEFAULT NULL,
  `production_site_minier` varchar(255) DEFAULT NULL,
  `risque_fraude_minerale` varchar(255) DEFAULT NULL,
  `groupes_armes` text DEFAULT NULL,
  `impot_illegal` text DEFAULT NULL,
  `extorque_mineraux` text DEFAULT NULL,
  `operations_legales` text DEFAULT NULL,
  `mineurs` text DEFAULT NULL,
  `travail_sans_recommandation` text DEFAULT NULL,
  `paiements_organisations_illegales` text DEFAULT NULL,
  `paiements_organisations_politiques` text DEFAULT NULL,
  `envois_minerais` text DEFAULT NULL,
  `minerais_designes` text DEFAULT NULL,
  `etat_non_conformite` text DEFAULT NULL,
  `etat_critique_non_conformite` text DEFAULT NULL,
  `etat_grave_non_conformite` text DEFAULT NULL,
  `societes_affiliees` text DEFAULT NULL,
  `minerais_points_acces` text DEFAULT NULL,
  `actions_mineraux_proprietaires` text DEFAULT NULL,
  `performance_environnement` text DEFAULT NULL,
  `agents_gouvernement` text DEFAULT NULL,
  `proprietaire_site_minier` text DEFAULT NULL,
  `acteurs_site_minier` text DEFAULT NULL,
  `empreinte_analytique_afp` text DEFAULT NULL,
  `relations_communautaires` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `minier_six`
--

INSERT INTO `minier_six` (`id`, `forum_discussion`, `observations_forum_discussion`, `depuis_quand`, `rencontres_regulieres`, `observations_rencontres_regulieres`, `groupes`, `observations_groupes`, `entreprises_locales`, `observations_entreprises_locales`, `developpement_local`, `observations_developpement_local`, `garantie_moyens`, `observations_garantie_moyens`, `infrastructure_locale`, `observations_infrastructure_locale`, `education_formation`, `observations_education_formation`, `renforcement_capacites`, `observations_renforcement_capacites`, `aspects_genre`, `observations_aspects_genre`, `elements_ad_hoc`, `observations_elements_ad_hoc`, `autorites_locales`, `observations_autorites_locales`, `acquisition_terrain`, `observations_acquisition_terrain`, `usage_eaux`, `observations_usage_eaux`, `usage_forets`, `observations_usage_forets`, `impacts_miniers`, `observations_impacts_miniers`, `autre_impact_minier`, `plaintes`, `observations_plaintes`, `non_conformite_critique`, `observations_non_conformite_critique`, `non_conformite_serieuse`, `observations_non_conformite_serieuse`, `commentaire_un`, `commentaire_deux`, `commentaire_trois`, `representant_principal`, `titre_fonction`, `signature_numerique`, `gestionnaire_responsable`, `commentaire_gestionnaire`, `production_miniere`, `resultats_inspection`, `changements_procedures`, `production_site_minier`, `risque_fraude_minerale`, `groupes_armes`, `impot_illegal`, `extorque_mineraux`, `operations_legales`, `mineurs`, `travail_sans_recommandation`, `paiements_organisations_illegales`, `paiements_organisations_politiques`, `envois_minerais`, `minerais_designes`, `etat_non_conformite`, `etat_critique_non_conformite`, `etat_grave_non_conformite`, `societes_affiliees`, `minerais_points_acces`, `actions_mineraux_proprietaires`, `performance_environnement`, `agents_gouvernement`, `proprietaire_site_minier`, `acteurs_site_minier`, `empreinte_analytique_afp`, `relations_communautaires`) VALUES
(1, 'Oui', 'Il y a un forum de discussion entre les représentants de la communauté et l’exploitant minier', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Oui', 'Il y a un forum de discussion entre les représentants de la communauté et l’exploitant minier', '2023-04-26', 'Oui', 'Il y a des rencontres régulières', 'Oui', 'Tous les groupes de la communauté sont présents au forum', 'Oui', 'L’exploitant minier coopère avec les entreprises locales', 'Oui', 'L’exploitant minier a développé une stratégie de développement local en consultation avec la communauté', 'Oui', 'Garantie des moyens d’existence', 'Oui', 'L’infrastructure locale', 'Oui', 'L’éducation / la formation', 'Oui', 'Renforcement des capacités', 'Oui', 'Les aspects « genre »', 'Oui', 'Les éléments ci-dessus sont réalisés d’une façon ad-hoc, sans stratégie préalable', 'Oui', 'Il y a des consultations (documentées) entre les autorités locales, les communautés, et l’exploitant minier', 'Oui', 'L\'acquisition du terrain', 'Oui', 'L’usage des eaux', 'Oui', 'L’usage des forêts', 'Oui', 'Des impacts miniers aux résidents locaux', 'Autre (précisez)', 'Oui', 'des plaintes contre l’exploitant minier', 'Oui', 'Non-conformité critique', 'Oui', 'Non-conformité sérieuse', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Non', 'les représentants de la communauté et l’exploitant minier', '2023-04-30', 'Non', 'Il y a des rencontres régulières', 'Oui', 'Tous les groupes de la communauté sont présents au forum', 'Oui', 'L’exploitant minier coopère avec les entreprises locales', 'Non', 'L’exploitant minier a développé une stratégie de développement local en consultation avec la communauté', 'Oui', 'Garantie des moyens d’existence', 'Non', 'L’infrastructure locale', 'Oui', 'L’éducation / la formation', 'Non', 'Renforcement des capacités', 'Oui', 'Les aspects « genre »', 'Oui', 'Les éléments ci-dessus sont réalisés d’une façon ad-hoc, sans stratégie préalable', 'Oui', 'Il y a des consultations (documentées) entre les autorités locales, les communautés, et l’exploitant minier', 'Non', 'L\'acquisition du terrain', 'Non', 'L’usage des eaux', 'Non', 'L’usage des forêts', 'Oui', 'Des impacts miniers aux résidents locaux', 'Autre', 'Non', 'des plaintes contre l’exploitant minier', 'Oui', 'Non-conformité critique', 'Non', 'Non-conformité sérieuse', 'Observations', 'Observations 2', 'Observations 3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Oui', 'Il y a un forum de discussion entre les représentants de la communauté et l’exploitant minier', '2023-04-28', 'Oui', 'Il y a des rencontres régulières', 'Non', 'Tous les groupes de la communauté sont présents au forum', 'Oui', 'L’exploitant minier coopère avec les entreprises locales', 'Non', 'L’exploitant minier a développé une stratégie de développement local en consultation avec la communauté', 'Non', 'Garantie des moyens d’existence', 'Non', 'L’infrastructure locale', 'Non', 'L’éducation / la formation', 'Non', 'Renforcement des capacités', 'Non', 'Les aspects « genre »', 'Non', 'Les éléments ci-dessus sont réalisés d’une façon ad-hoc, sans stratégie préalable', 'Oui', 'Il y a des consultations (documentées) entre les autorités locales, les communautés, et l’exploitant minier', 'Oui', 'L\'acquisition du terrain', 'Oui', 'L’usage des eaux', 'Oui', 'L’usage des forêts', 'Non', 'Des impacts miniers aux résidents locaux', 'Autre', 'Oui', 'des plaintes contre l’exploitant minier', 'Oui', 'Non-conformité critique', 'Oui', 'Non-conformité sérieuse', 'Observations un', 'Observations deux', 'Observations trois', 'Mr Ndiaye', 'Inspecteur des mines', 'Signature', 'Mr Thomas Fuller', 'Commentaire du gestionnaire en matière d’inspection', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Oui', 'Il y a un forum de discussion entre les représentants de la communauté et l’exploitant minier', '2023-04-29', 'Oui', 'Il y a des rencontres régulières', 'Non', 'Tous les groupes de la communauté sont présents au forum', 'Oui', 'L’exploitant minier coopère avec les entreprises locales', 'Non', 'L’exploitant minier a développé une stratégie de développement local en consultation avec la communauté', 'Oui', 'Garantie des moyens d’existence', 'Oui', 'L’infrastructure locale', 'Non', 'L’éducation / la formation', 'Oui', 'Renforcement des capacités', 'Oui', 'Les aspects « genre »', 'Non', 'Les éléments ci-dessus sont réalisés d’une façon ad-hoc, sans stratégie préalable', 'Oui', 'Il y a des consultations (documentées) entre les autorités locales, les communautés, et l’exploitant minier', 'Non', 'L\'acquisition du terrain', 'Non', 'L’usage des eaux', 'Oui', 'L’usage des forêts', 'Non', 'Des impacts miniers aux résidents locaux', 'Autre', 'Oui', 'des plaintes contre l’exploitant minier', 'Oui', 'Non-conformité critique', 'Non', 'Non-conformité sérieuse', 'Observations un', 'Observations deux', 'Observations trois', 'Mr Faty Diop', 'Inspecteur des sites miniers', 'Signature', 'Mme Tall', 'Commentaire du gestionnaire en matière d’inspection', 'Comparez les chiffres de la production minière comme indiqué dans la section', 'Après examen de vos résultats de l’inspection ainsi que des rapports et des données provenant d’autres sources', 'des changements des procédures et paramètres', 'Relativement clair', 'Très faible', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Oui', 'Il y a un forum de discussion entre les représentants de la communauté et l’exploitant minier', '2023-04-30', 'Non', 'Il y a des rencontres régulières', 'Non', 'donnez les détails', 'Non', 'pour l’alimentation ; donnez les détails', 'Non', 'L’exploitant minier a développé une stratégie de développement local en consultation avec la communauté', 'Non', 'Garantie des moyens d’existence', 'Non', 'L’infrastructure locale', 'Non', 'L’éducation / la formation', 'Non', 'Renforcement des capacités', 'Non', 'Les aspects « genre »', 'Non', 'Les éléments ci-dessus sont réalisés d’une façon ad-hoc, sans stratégie préalable', 'Non', ' les communautés, et l’exploitant minier', 'Non', 'L\'acquisition du terrain', 'Non', 'L’usage des eaux', 'Non', 'L’usage des forêts', 'Non', 'Des impacts miniers aux résidents locaux', 'Autre', 'Non', 'des plaintes contre l’exploitant minier', 'Non', 'Non-conformité critique', 'Non', 'Non-conformité sérieuse', 'Observations one', 'Observations two', 'Observations three', 'Mister Peter', 'Inspecteur des sites miniers', 'une signature numérique', 'Mme Bovari', 'Commentaire du gestionnaire en matière d’inspection', 'aux activités minières observés et aux équipements utilisés sur le site', 'Donnez une description détaillée des anomalies de production pendant cette période et évaluez si celles-ci sont justifiées', 'la sécurité des stocks des minerais', 'Probablement pas', 'Elevé', 'Des groupes armés non-étatiques', 'leurs membres imposent illégalement des impôts ou extorquent de l’argent ou des minéraux aux points d’accès aux sites miniers', 'des impôts ou extorquent de l’argent ou des actions des minéraux des propriétaires ou des exploitants des sites miniers', 'cote rouge pour les sites « industriels » ; pour les sites « artisanaux » c’est la cote jaune', 'Des enfants de moins de 18 ans sont employés dans l’exploitation du site minier', NULL, 'Des paiements sont versés par le propriétaire ou l’exploitant du site minier aux organisations illégales ou criminelles', 'Des paiements sont versés par le propriétaire ou l’exploitant aux partis politiques ou aux organisations politiques en violation des lois', 'cote rouge pour les sites \"industriels\" ; pour les sites \"artisanaux\" c’est la cote jaune', 'l’inspecteur devrait envisager d’assigner une cote rouge au site pour cette norme', 'c’est un critère de progrès', 'L’exploitant du site minier se trouve en état critique de non-conformité par rapport aux lois sénégalaises relatives à la performance en matière d’environnement', 'L’exploitant du site minier se trouve en état grave de non- conformité par rapport aux lois sénégalaises relatives aux relations communautaires', 'Des forces de sécurité publiques ou privées ou des sociétés affiliées contrôlent illégalement des sites miniers', 'Des groupes armés non-étatiques ou leurs membres imposent illégalement des impôts ou extorquent de l’argent ou des minéraux aux points d’accès aux sites miniers', 'Des forces de sécurité publiques ou privées ou leurs membres imposent illégalement des impôts ou extorquent de l’argent ou des actions des minéraux des propriétaires ou des exploitants des sites miniers', 'L\' exploitant du site minier se trouve en état de non-conformité par rapport aux lois relatives à la performance en matière d’environnement', 'agents miniers, forces de sécurité, autorités municipales, unités militaires', '', 'Le propriétaire du site minier', 'l’inspecteur des échantillons de minéraux pour l’Empreinte Analytique (AFP) ou pour un outil diagnostique similaire', 'L’exploitant du site minier se trouve en état de non-conformité par rapport aux lois sénégalaises relatives aux relations communautaires');

-- --------------------------------------------------------

--
-- Structure de la table `minier_third`
--

CREATE TABLE `minier_third` (
  `id` int(11) NOT NULL,
  `eau_contaminee` varchar(255) DEFAULT NULL,
  `observations_eau_contaminee` text DEFAULT NULL,
  `violation_protection_forets` varchar(255) DEFAULT NULL,
  `observations_violation_protection_forets` text DEFAULT NULL,
  `problemes_erosion` varchar(255) DEFAULT NULL,
  `observations_problemes_erosion` text DEFAULT NULL,
  `destructions_environnementales` text DEFAULT NULL,
  `travaux_historiques_mines` text DEFAULT NULL,
  `communautes_locales` text DEFAULT NULL,
  `interventions_eie` varchar(255) DEFAULT NULL,
  `observations_interventions_eie` text DEFAULT NULL,
  `expert_environnement` varchar(255) DEFAULT NULL,
  `observations_expert_environnement` text DEFAULT NULL,
  `pepiniere_disponible` varchar(255) DEFAULT NULL,
  `observations_pepiniere_disponible` text DEFAULT NULL,
  `digue_steriles` varchar(255) DEFAULT NULL,
  `observations_digue_steriles` text DEFAULT NULL,
  `bassin_decantation` varchar(255) DEFAULT NULL,
  `observations_bassin_decantation` text DEFAULT NULL,
  `mesures_protection` varchar(255) DEFAULT NULL,
  `observations_mesures_protection` text DEFAULT NULL,
  `dechets_miniers` varchar(255) DEFAULT NULL,
  `observations_dechets_miniers` text DEFAULT NULL,
  `restauration_excavations` varchar(255) DEFAULT NULL,
  `observations_restauration_excavations` text DEFAULT NULL,
  `sol_empile` varchar(255) DEFAULT NULL,
  `observations_sol_empile` text DEFAULT NULL,
  `reforestation` varchar(255) DEFAULT NULL,
  `observations_reforestation` text DEFAULT NULL,
  `non_conformite_critique` varchar(255) DEFAULT NULL,
  `observations_non_conformite_critique` text DEFAULT NULL,
  `non_conformite_serieuse` varchar(255) DEFAULT NULL,
  `observations_non_conformite_serieuse` text DEFAULT NULL,
  `etude_base` varchar(255) DEFAULT NULL,
  `observations_etude_base` text DEFAULT NULL,
  `qualite_eau` varchar(255) DEFAULT NULL,
  `observations_qualite_eau` text DEFAULT NULL,
  `vibrations` varchar(255) DEFAULT NULL,
  `observations_vibrations` text DEFAULT NULL,
  `surveillance_poussiere` varchar(255) DEFAULT NULL,
  `observations_surveillance_poussiere` text DEFAULT NULL,
  `produits_chimiques` varchar(255) DEFAULT NULL,
  `observations_produits_chimiques` text DEFAULT NULL,
  `surveillance_chimiques` varchar(255) DEFAULT NULL,
  `observations_surveillance_chimiques` text DEFAULT NULL,
  `etude_eie` varchar(255) DEFAULT NULL,
  `observations_etude_eie` text DEFAULT NULL,
  `plan_gestion_environnementale` varchar(255) DEFAULT NULL,
  `observations_plan_gestion_environnementale` text DEFAULT NULL,
  `execution_eie` varchar(255) DEFAULT NULL,
  `observations_execution_eie` text DEFAULT NULL,
  `gestion_dechets_miniers` varchar(255) DEFAULT NULL,
  `observations_gestion_dechets_miniers` text DEFAULT NULL,
  `substances_dangereuses` varchar(255) DEFAULT NULL,
  `observations_substances_dangereuses` text DEFAULT NULL,
  `surveillance_environnement` varchar(255) DEFAULT NULL,
  `observations_surveillance_environnement` text DEFAULT NULL,
  `fermeture_mine` varchar(255) DEFAULT NULL,
  `observations_fermeture_mine` text DEFAULT NULL,
  `provisions` varchar(255) DEFAULT NULL,
  `observations_provisions` text DEFAULT NULL,
  `plan_urgence` varchar(255) DEFAULT NULL,
  `observations_plan_urgence` text DEFAULT NULL,
  `plan_site` varchar(255) DEFAULT NULL,
  `observations_plan_site` text DEFAULT NULL,
  `responsables` varchar(255) DEFAULT NULL,
  `observations_responsables` text DEFAULT NULL,
  `secours` varchar(255) DEFAULT NULL,
  `observations_secours` text DEFAULT NULL,
  `equipements_secours` varchar(255) DEFAULT NULL,
  `observations_equipements_secours` text NOT NULL,
  `emplacement_equipement` varchar(255) DEFAULT NULL,
  `observations_emplacement_equipement` text DEFAULT NULL,
  `accidents_travail` varchar(255) DEFAULT NULL,
  `observations_accidents_travail` text DEFAULT NULL,
  `consignes_securite` varchar(255) DEFAULT NULL,
  `observations_consignes_securite` text DEFAULT NULL,
  `evaluation_risque` varchar(255) DEFAULT NULL,
  `observations_evaluation_risque` text DEFAULT NULL,
  `preuve_formation` varchar(255) DEFAULT NULL,
  `observations_preuve_formation` text DEFAULT NULL,
  `procedures_operationnelles` varchar(255) DEFAULT NULL,
  `observations_procedures_operationnelles` text DEFAULT NULL,
  `agent_sante` varchar(255) DEFAULT NULL,
  `observations_agent_sante` text DEFAULT NULL,
  `consignes_orpailleurs` varchar(255) DEFAULT NULL,
  `observations_consignes_orpailleurs` text DEFAULT NULL,
  `rapport_mensuel_accidents` varchar(255) DEFAULT NULL,
  `observations_rapport_mensuel_accidents` text DEFAULT NULL,
  `rapport_annuel_accidents` varchar(255) DEFAULT NULL,
  `observations_rapport_annuel_accidents` text DEFAULT NULL,
  `documentation_blessures` varchar(255) DEFAULT NULL,
  `observations_documentation_blessures` text DEFAULT NULL,
  `documentation_incidents` varchar(255) DEFAULT NULL,
  `observations_documentation_incidents` text DEFAULT NULL,
  `toilettes_hygieniques` varchar(255) DEFAULT NULL,
  `observations_toilettes_hygieniques` text DEFAULT NULL,
  `douches_hygieniques` varchar(255) DEFAULT NULL,
  `observations_douches_hygieniques` text DEFAULT NULL,
  `toilettes_vestiaires` varchar(255) DEFAULT NULL,
  `observations_toilettes_vestiaires` text DEFAULT NULL,
  `eau_potable` varchar(255) DEFAULT NULL,
  `observations_eau_potable` text DEFAULT NULL,
  `brochures_infos` varchar(255) DEFAULT NULL,
  `observations_brochures_infos` text DEFAULT NULL,
  `program_sensibilisation` varchar(255) DEFAULT NULL,
  `observations_program_sensibilisation` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `minier_third`
--

INSERT INTO `minier_third` (`id`, `eau_contaminee`, `observations_eau_contaminee`, `violation_protection_forets`, `observations_violation_protection_forets`, `problemes_erosion`, `observations_problemes_erosion`, `destructions_environnementales`, `travaux_historiques_mines`, `communautes_locales`, `interventions_eie`, `observations_interventions_eie`, `expert_environnement`, `observations_expert_environnement`, `pepiniere_disponible`, `observations_pepiniere_disponible`, `digue_steriles`, `observations_digue_steriles`, `bassin_decantation`, `observations_bassin_decantation`, `mesures_protection`, `observations_mesures_protection`, `dechets_miniers`, `observations_dechets_miniers`, `restauration_excavations`, `observations_restauration_excavations`, `sol_empile`, `observations_sol_empile`, `reforestation`, `observations_reforestation`, `non_conformite_critique`, `observations_non_conformite_critique`, `non_conformite_serieuse`, `observations_non_conformite_serieuse`, `etude_base`, `observations_etude_base`, `qualite_eau`, `observations_qualite_eau`, `vibrations`, `observations_vibrations`, `surveillance_poussiere`, `observations_surveillance_poussiere`, `produits_chimiques`, `observations_produits_chimiques`, `surveillance_chimiques`, `observations_surveillance_chimiques`, `etude_eie`, `observations_etude_eie`, `plan_gestion_environnementale`, `observations_plan_gestion_environnementale`, `execution_eie`, `observations_execution_eie`, `gestion_dechets_miniers`, `observations_gestion_dechets_miniers`, `substances_dangereuses`, `observations_substances_dangereuses`, `surveillance_environnement`, `observations_surveillance_environnement`, `fermeture_mine`, `observations_fermeture_mine`, `provisions`, `observations_provisions`, `plan_urgence`, `observations_plan_urgence`, `plan_site`, `observations_plan_site`, `responsables`, `observations_responsables`, `secours`, `observations_secours`, `equipements_secours`, `observations_equipements_secours`, `emplacement_equipement`, `observations_emplacement_equipement`, `accidents_travail`, `observations_accidents_travail`, `consignes_securite`, `observations_consignes_securite`, `evaluation_risque`, `observations_evaluation_risque`, `preuve_formation`, `observations_preuve_formation`, `procedures_operationnelles`, `observations_procedures_operationnelles`, `agent_sante`, `observations_agent_sante`, `consignes_orpailleurs`, `observations_consignes_orpailleurs`, `rapport_mensuel_accidents`, `observations_rapport_mensuel_accidents`, `rapport_annuel_accidents`, `observations_rapport_annuel_accidents`, `documentation_blessures`, `observations_documentation_blessures`, `documentation_incidents`, `observations_documentation_incidents`, `toilettes_hygieniques`, `observations_toilettes_hygieniques`, `douches_hygieniques`, `observations_douches_hygieniques`, `toilettes_vestiaires`, `observations_toilettes_vestiaires`, `eau_potable`, `observations_eau_potable`, `brochures_infos`, `observations_brochures_infos`, `program_sensibilisation`, `observations_program_sensibilisation`) VALUES
(1, 'Oui', 'De l’eau contaminée', 'Oui', 'Violation de la protection des forêts', 'Oui', 'Problèmes d’érosion', 'Autres destructions environnementales récentes', 'Travaux historiques dans la mine causant des problèmes environnementaux', 'Les communautés locales rapportent des problèmes environnementaux', 'Oui', 'Les interventions se font sur base d’une EIE', 'Oui', 'Expert / chargé d’environnement sur le site', 'Oui', 'Pépinière disponible', 'Non', 'Digue de stériles construite et bien entretenue', 'Non', 'Bassin de décantation construit et bien entretenu', 'Oui', 'Réalisation des mesures de protection contre l’érosion', 'Oui', 'Gestion des déchets miniers', 'Non', 'Restauration des excavations', 'Non', 'Sol de couverture empilé et protégé contre l’érosion', 'Oui', 'Reforestation', 'Oui', 'Non-conformité critique', 'Non', 'Non-conformité sérieuse', 'Oui', 'Etude de base disponible', 'Non', 'Surveillance de la qualité de l’eau', 'Oui', 'Surveillance des vibrations', 'Non', 'Surveillance de la poussière due aux activités minières', 'Non', 'Surveillance des produits chimiques', 'Oui', 'Surveillance des produits chimiques', 'Oui', 'Etude / Déclaration d’Impact Environnemental (EIE) disponible', 'Non', 'Plan de gestion environnementale disponible', 'Oui', 'Mise en exécution systématique de l’EIE', '', 'Système de gestion des déchets miniers et des stériles disponible', 'Oui', 'Système de gestion des substances dangereuses', 'Oui', 'La surveillance régulière de l’environnement est documentée', 'Oui', 'Plan de fermeture de la mine disponible', 'Oui', 'Des provisions suffisantes ont été prises pour la fermeture du site et la surveillance', 'Oui', 'Plan d’urgence par écrit', 'Oui', 'Plan / cartes du site', 'Oui', 'Personnes responsables nommées', 'Oui', 'Responsable du secourisme', 'Oui', 'Equipements de premiers secours adéquats', 'Non', 'L’emplacement de l’équipement ci-dessus est marqué', 'Oui', 'Il y a des accidents de travail pendant l’année passée', 'Oui', 'Consignes de sécurité écrites pour tous les travailleurs', 'Oui', 'Evaluation écrite des risques pour les descriptions de tâches spéciales', 'Non', 'Preuve de formation adéquate', 'Non', 'Procédures opérationnelles élaborées pour des tâches/risques spécifiques', 'Oui', 'Agent dédié à la santé et à la sécurité disponible', 'Oui', 'Uniquement pour les Orpailleurs', 'Oui', 'Rapport mensuel de tous les accidents', 'Oui', 'Rapport annuel de tous les accidents (différenciez la gravité)', 'Oui', 'Documentation sur les blessures', 'Oui', 'Documentation sur les incidents', 'Oui', 'Toilettes hygiéniques / urinoirs disponibles directement sur le site', 'Oui', 'Douches hygiéniques / vestiaires / salle d’allaitement maternel disponible sur un site central', 'Oui', 'Toilettes et vestiaires séparés selon le genre', 'Oui', 'Disponibilité d’eau potable pour tous les travailleurs', 'Oui', 'Brochures d’information disponibles', NULL, NULL),
(2, NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', '                                                                                                                            ', '                                                                                                                            ', '                                                                                                                            ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                                                                                                                                        ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ', NULL, '                                                                                                                    ');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `motdepasse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `motdepasse`) VALUES
(1, 'connect', 'connect'),
(2, 'admin', 'admin');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `minier`
--
ALTER TABLE `minier`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `minier_first`
--
ALTER TABLE `minier_first`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `minier_five`
--
ALTER TABLE `minier_five`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `minier_fourth`
--
ALTER TABLE `minier_fourth`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `minier_second`
--
ALTER TABLE `minier_second`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `minier_seven`
--
ALTER TABLE `minier_seven`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `minier_six`
--
ALTER TABLE `minier_six`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `minier_third`
--
ALTER TABLE `minier_third`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `minier`
--
ALTER TABLE `minier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `minier_first`
--
ALTER TABLE `minier_first`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `minier_five`
--
ALTER TABLE `minier_five`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `minier_fourth`
--
ALTER TABLE `minier_fourth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `minier_second`
--
ALTER TABLE `minier_second`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `minier_seven`
--
ALTER TABLE `minier_seven`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `minier_six`
--
ALTER TABLE `minier_six`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `minier_third`
--
ALTER TABLE `minier_third`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
