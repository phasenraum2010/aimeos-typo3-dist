<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "aimeos_dist"
 *
 * Auto generated by Extension Builder 2015-01-02
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Aimeos web shop distribution',
	'description' => 'The Aimeos web shop distribution is a fast, flexible and usability optimized shop system and e-commerce solution available in multiple languages. It contains all necessary components for running a web shop and integrates perfectly in CRM and ERP systems as well as payment and delivery service providers',
	'category' => 'distribution',
	'author' => 'Aimeos',
	'author_email' => 'aimeos@aimeos.org',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => '0',
	'createDirs' => '',
	'clearCacheOnLoad' => 0,
	'version' => '1.6.0',
	'constraints' => array(
		'depends' => array(
			'typo3' => '6.2.0-7.99.99',
			'aimeos' => '2.2.0-2.99.99',
			'bootstrap_package' => '6.2.0-6.99.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
			'realurl' => '1.13.3-2.99.99',
		),
	),
);
