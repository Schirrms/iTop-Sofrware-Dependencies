<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2024 Schirrms
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

 Dict::Add('FR FR', 'French', 'Français', array(
	// Dictionary entries go here
	'Class:FunctionalCI/Attribute:softwareinstance_list' => 'Logiciel(s) dépendant(s)',
	'Class:SoftwareInstance/Attribute:ci_depends_list' => 'Éléments(s) nécessaire(s)',
  'Class:SoftwareInstance/Attribute:ci_depends_list+' => 'Cet(s) CI(s) est(sont) nécessaires pour que le logiciel puisse fonctionner',
  'Class:SoftwareInstance/Attribute:secondary_redundancy' => 'Mode  de redondance (normallement désactivé, car \'indispensable\')',
  'Class:SoftwareInstance/Attribute:secondary_redundancy/disabled' => 'Tous les composants listés sont nécessaires simultanément',
  'Class:SoftwareInstance/Attribute:secondary_redundancy/percent' => '%2$s est opérationnel si au moins %1$s %% des éléments sous-jacents sont opérationnels',
  'Class:SoftwareInstance/Attribute:secondary_redundancy/count' => '%2$s est opérationnel si au moins %1$s élément(s) sous-jacent(s) est/sont opérationnel(s)',
  'Class:SoftwareInstance/Attribute:secondary_redundancy+' => 'La valeur la plus probable est \'redondance  désactivée\'',
));
?>
