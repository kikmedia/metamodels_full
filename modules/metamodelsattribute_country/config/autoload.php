<?php

/**
 * The MetaModels extension allows the creation of multiple collections of custom items,
 * each with its own unique set of selectable attributes, with attribute extendability.
 * The Front-End modules allow you to build powerful listing and filtering of the
 * data in each collection.
 *
 * PHP version 5
 * @package     MetaModels
 * @subpackage  AttributeCountry
 * @author      Oliver Hoff <oliver@hofff.com>
 * @author      Andreas Isaak <info@andreas-isaak.de>
 * @copyright   The MetaModels team.
 * @license     LGPL.
 * @filesource
 */

/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'MetaModelAttributeCountry'              => 'system/modules/metamodelsattribute_country/MetaModelAttributeCountry.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'mm_attr_country'              => 'system/modules/metamodelsattribute_country/templates',
));
