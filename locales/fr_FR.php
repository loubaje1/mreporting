<?php
/*
 * @version $Id: HEADER 15930 2011-10-30 15:47:55Z tsmr $
 -------------------------------------------------------------------------
 Mreporting plugin for GLPI
 Copyright (C) 2003-2011 by the mreporting Development Team.

 https://forge.indepnet.net/projects/mreporting
 -------------------------------------------------------------------------

 LICENSE

 This file is part of mreporting.

 mreporting is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 mreporting is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with mreporting. If not, see <http://www.gnu.org/licenses/>.
 --------------------------------------------------------------------------
 */
 
$LANG['plugin_mreporting']["name"] = "Plus de rapports";

$LANG['plugin_mreporting']["error"][0] = "Aucun rapport disponible !";
$LANG['plugin_mreporting']["error"][1] = "Aucune données pour cette plage de date !";
$LANG['plugin_mreporting']["error"][2] = "Non défini";
$LANG['plugin_mreporting']["error"][3] = "aucun graphique sélectionné";
$LANG['plugin_mreporting']["error"][4] = "L'objet existe déjà";

$LANG['plugin_mreporting']["export"][0] = "Rapport général - ODT";
$LANG['plugin_mreporting']["export"][1] = "Nombre";
$LANG['plugin_mreporting']["export"][2] = "Données";

$LANG['plugin_mreporting']["config"][0] = "Configuration";
$LANG['plugin_mreporting']["config"][1] = "Voir l'aire";
$LANG['plugin_mreporting']["config"][2] = "Incurver les lignes (SVG)";
$LANG['plugin_mreporting']["config"][3] = "Voir les valeurs";
$LANG['plugin_mreporting']["config"][4] = "Inverser le tableau de données";
$LANG['plugin_mreporting']["config"][5] = "Au passage de la souris";
$LANG['plugin_mreporting']["config"][6] = "Toujours";
$LANG['plugin_mreporting']["config"][7] = "Jamais";
$LANG['plugin_mreporting']["config"][8] = "Unité";
$LANG['plugin_mreporting']["config"][9] = "Délai par défaut";
$LANG['plugin_mreporting']["config"][10] = "Initialiser la configuration des graphiques";
$LANG['plugin_mreporting']["config"][11] = "Condition supplémentaire Mysql";

$LANG['plugin_mreporting']['Helpdesk']['title'] = "Reporting Helpdesk";
$LANG['plugin_mreporting']['Helpdesk']['reportHbarTicketNumberByEntity']['title'] = "Barres - Nombre de ticket par entités";
$LANG['plugin_mreporting']['Helpdesk']['reportHbarTicketNumberByEntity']['category'] = "Par entités";

$LANG['plugin_mreporting']['Helpdesk']['reportPieTicketNumberByEntity']['title'] = "Camembert - Nombre de ticket par entités";
$LANG['plugin_mreporting']['Helpdesk']['reportPieTicketNumberByEntity']['category'] = "Par entités";

$LANG['plugin_mreporting']['Helpdesk']['reportHgbarTicketNumberByCatAndEntity']['title'] = "Barres groupées - Nombre de ticket par catégories et entités";
$LANG['plugin_mreporting']['Helpdesk']['reportHgbarTicketNumberByCatAndEntity']['category'] = "Par entités";

$LANG['plugin_mreporting']['Helpdesk']['reportPieTopTenAuthor']['title'] = "Camembert - Top 10 des demandeurs";
$LANG['plugin_mreporting']['Helpdesk']['reportPieTopTenAuthor']['category'] = "Par demandeurs";

$LANG['plugin_mreporting']['Helpdesk']['reportHgbarOpenTicketNumberByCategoryAndByType']['title'] = "Barres groupées - Nombre de tickets ouverts par catégories et par types";
$LANG['plugin_mreporting']['Helpdesk']['reportHgbarOpenTicketNumberByCategoryAndByType']['category'] = "Par catégories";

$LANG['plugin_mreporting']['Helpdesk']['reportHgbarCloseTicketNumberByCategoryAndByType']['title'] = "Barres groupées - Nombre de tickets clôturés par catégories et par types";
$LANG['plugin_mreporting']['Helpdesk']['reportHgbarCloseTicketNumberByCategoryAndByType']['category'] = "Par catégories";

$LANG['plugin_mreporting']['Helpdesk']['reportHgbarOpenedTicketNumberByCategory']['title'] = "Barres groupées - Nombre de tickets ouverts par catégories et par statuts";
$LANG['plugin_mreporting']['Helpdesk']['reportHgbarOpenedTicketNumberByCategory']['category'] = "Par catégories";

$LANG['plugin_mreporting']['Helpdesk']['reportHgbarTicketNumberByService']['title'] = "Barres groupées - Nombre de tickets ouverts et clôturés par services";
$LANG['plugin_mreporting']['Helpdesk']['reportHgbarTicketNumberByService']['category'] = "Par services";

$LANG['plugin_mreporting']['Helpdesk']['reportPieTicketOpenedAndClosed']['title'] = "Camembert - Nombre de tickets ouverts et clôturés";
$LANG['plugin_mreporting']['Helpdesk']['reportPieTicketOpenedAndClosed']['category'] = "Par tickets";

$LANG['plugin_mreporting']['Helpdesk']['reportPieTicketOpenedbyStatus']['title'] = "Camembert - Nombre de tickets ouverts par statuts";
$LANG['plugin_mreporting']['Helpdesk']['reportPieTicketOpenedbyStatus']['category'] = "Par tickets";

$LANG['plugin_mreporting']['Helpdesk']['reportAreaNbTicket']['title'] = "Aire - Evolution du nombre de ticket sur la période";
$LANG['plugin_mreporting']['Helpdesk']['reportAreaNbTicket']['category'] = "Par tickets";

$LANG['plugin_mreporting']['Helpdesk']['reportLineNbTicket']['title'] = "Ligne - Evolution du nombre de ticket sur la période";
$LANG['plugin_mreporting']['Helpdesk']['reportLineNbTicket']['category'] = "Par tickets";

$LANG['plugin_mreporting']['Helpdesk']['reportGlineNbTicket']['title'] = "Lignes - Evolution du nombre de ticket sur la période (par Statut)";
$LANG['plugin_mreporting']['Helpdesk']['reportGlineNbTicket']['category'] = "Par tickets";

$LANG['plugin_mreporting']['Helpdesk']['reportGareaNbTicket']['title'] = "Aire - Evolution du nombre de ticket sur la période (par Statut)";
$LANG['plugin_mreporting']['Helpdesk']['reportGareaNbTicket']['category'] = "Par tickets";

$LANG['plugin_mreporting']['Helpdesk']['reportVstackbarNbTicket']['title'] = "Barres empilées - Evolution du nombre de ticket sur la période (par Statut)";
$LANG['plugin_mreporting']['Helpdesk']['reportVstackbarNbTicket']['category'] = "Par tickets";

$LANG['plugin_mreporting']['Helpdesk']['reportSunburstTicketByCategories']['title'] = "Donut - Repartition des tickets par catégories et sous catégories";
$LANG['plugin_mreporting']['Helpdesk']['reportSunburstTicketByCategories']['category'] = "Par catégories";

?>