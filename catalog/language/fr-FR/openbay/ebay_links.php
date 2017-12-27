<?php
/* 
*  Copyright (C) 2015-2016 P. Mergey
*  This program is free software: you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation, either version 3 of the License, or
*  (at your option) any later version.
*  This program is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*  You should have received a copy of the GNU General Public License
*  along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/ 

// Heading
$_['heading_title'] = 'Liaisons de produit';
$_['text_openbay'] = 'OpenBay Pro';
$_['text_ebay'] = 'eBay';
// Buttons
$_['button_resync'] = 'Nouvelle synchronisation';
$_['button_check_unlinked'] = 'Vérifier les objets non liés';
$_['button_remove_link'] = 'Supprimer la liaison';
// Errors
$_['error_ajax_load'] = 'Désolé, impossible d’obtenir une réponse. Veuillez réessayez plus tard.';
$_['error_validation'] = 'Vous devez vous inscrire afin d’obtenir le jeton de votre API et activer le module.';
$_['error_no_listings'] = 'Aucun produit lié n’a été trouvé';
$_['error_link_value'] = 'La valeur de l’identifiant du produit n’est pas valide.';
$_['error_link_no_stock'] = 'Impossible de créer une liaison pour un objet qui n’est plus en stock. Veuillez terminer la mise en vente manuellement sur eBay.';
$_['error_subtract_setting'] = 'Ce produit est configuré pour ne pas être soustrait au stock OpenCart.';
// Text
$_['text_linked_items'] = 'Objets liés';
$_['text_unlinked_items'] = 'Objets non liés';
$_['text_alert_stock_local'] = 'Vos annonces eBay seront mises à jour en fonction de votre niveau de stock local !';
$_['text_link_desc1'] = 'Lier vos objets permettra le contrôle du stock des produits eBay.';
$_['text_link_desc2'] = 'Pour chaque objet mis à jour dans le stock local (le stock de votre boutique Opencart), la valeur du stock sera mise à jour sur eBay.';
$_['text_link_desc3'] = 'Votre stock local est le nombre de produits disponibles. Vos niveaux de stock eBay et stock local doivent correspondre.';
$_['text_link_desc4'] = 'Votre stock alloué correspond aux objets qui ont été vendu mais qui n’ont pas encore été payés. Ces éléments devraient être mis de côté et non pris en compte dans vos niveaux de stock disponible.';
$_['text_text_linked_desc'] = 'Les objets liés sont les objets OpenCart qui ont une liaison vers une annonce eBay.';
$_['text_text_unlinked_desc'] = 'Les objets non liés sont les annonces de votre compte eBay qui n’ont pas de liaisons avec vos produits OpenCart.';
$_['text_text_unlinked_info'] = 'Cliquez sur le bouton [Vérifier les objets non liés] pour rechercher les annonces eBay non liées. Cela peut prendre beaucoup de temps si vous avez plusieurs annonces eBay.';
$_['text_text_loading_items'] = 'Traitement des éléments';
$_['text_failed'] = 'Échec du chargement';
$_['text_limit_reached'] = 'Le nombre maximum de vérifications par demande a été atteint, cliquez sur le bouton pour poursuivre la recherche';
$_['text_stock_error'] = 'Erreur de stock';
$_['text_listing_ended'] = 'Mise en vente terminée';
$_['text_filter'] = 'Filtrer les résultats';
$_['text_filter_title'] = 'Titre';
$_['text_filter_range'] = 'Niveau de stock';
$_['text_filter_range_from'] = 'Minimum';
$_['text_filter_range_to'] = 'Maximum';
$_['text_filter_var'] = 'Inclure les variantes';
// Tables
$_['column_action'] = 'Action';
$_['column_status'] = 'Statut';
$_['column_variants'] = 'Variantes';
$_['column_item_id'] = 'Identifiant eBay';
$_['column_product'] = 'Produit';
$_['column_product_auto'] = 'Nom du produit (saisie semi-automatique)';
$_['column_listing_title'] = 'Titre de l’annonce eBay';
$_['column_allocated'] = 'Stock alloué';
$_['column_ebay_stock'] = 'Stock eBay';
$_['column_stock_available'] = 'Stock de la boutique';
$_['column_stock_reserve'] = 'Niveau de réserve';
