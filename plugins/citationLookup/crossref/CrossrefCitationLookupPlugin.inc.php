<?php

/**
 * @file plugins/citationLookup/crossref/CrossrefCitationLookupPlugin.inc.php
 *
 * Copyright (c) 2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class CrossrefCitationLookupPlugin
 * @ingroup plugins_citationLookup_crossref
 *
 * @brief CrossRef citation database connector plug-in.
 */


import('lib.pkp.plugins.citationLookup.crossref.PKPCrossrefCitationLookupPlugin');

class CrossrefCitationLookupPlugin extends PKPCrossrefCitationLookupPlugin {
	/**
	 * Constructor
	 */
	function CrossrefCitationLookupPlugin() {
		parent::PKPCrossrefCitationLookupPlugin();
	}
}

?>
