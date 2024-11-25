<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2024 Schirrms
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('EN US', 'English', 'English', array(
	// Dictionary entries go here
	'Class::FunctionalCI/Attribute:softwareinstance_id' => 'Software depending on me',
	'Class::FunctionalCI/Attribute:softwareinstance_name' => 'Software depending on me name',
	'Class:SoftwareInstance/Attribute:ci_depends_list' => 'Needed item(s)',
  'Class:SoftwareInstance/Attribute:ci_depends_list+' => 'This item is mandatory for operation',
  'Class:SoftwareInstance/Attribute:secondary_redundancy' => 'Redundancy mode (normally set at 1, as \'really needed\')',
  'Class:SoftwareInstance/Attribute:secondary_redundancy/disabled' => 'All listed items must be up & running',
  'Class:SoftwareInstance/Attribute:secondary_redundancy/percent' => '%2$s is up if at least %1$s %% of needed items are up',
  'Class:SoftwareInstance/Attribute:secondary_redundancy/count' => '%2$s is up if at least %1$s needed item(s) is/are up',
  'Class:SoftwareInstance/Attribute:secondary_redundancy+' => 'Generally speaking, this should probably be set at 100%',
));
?>
