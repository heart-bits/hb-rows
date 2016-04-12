<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2013 Leo Feyer
 *
 * @package contao-rows
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Elements
	'Contao\ContentRowStart'     => 'system/modules/hb-rows/elements/ContentRowStart.php',
	'Contao\ContentRowPart'     => 'system/modules/hb-rows/elements/ContentRowPart.php',
	'Contao\ContentRowStop'      => 'system/modules/hb-rows/elements/ContentRowStop.php',
));

/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_rowStart' => 'system/modules/hb-rows/templates',
	'ce_rowPart' => 'system/modules/hb-rows/templates',
	'ce_rowStop' => 'system/modules/hb-rows/templates',
));
