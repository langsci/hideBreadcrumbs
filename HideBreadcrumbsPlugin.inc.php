<?php

/**
 * @file plugins/generic/hideBreadcrumbs/HideBreadcrumbsPlugin.inc.php
 *
 * Copyright (c) 2016 Language Science Press
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class HideBreadcrumbsPlugin
 */

import('lib.pkp.classes.plugins.GenericPlugin');

class HideBreadcrumbsPlugin extends GenericPlugin {
	
	/**
	 * Register the plugin.
	 * @param $category string
	 * @param $path string
	 */
	function register($category, $path) {

		if (parent::register($category, $path)) {
			if ($this->getEnabled()) {
				HookRegistry::register('TemplateManager::include', array(&$this, 'handleIncludeTemplate'));
			}
			return true;
		}
		return false;
	}
	
	/**
	 * Handle templates that are called with an include hook.
	 * @param $hookName string
	 * @param $args array
	 */
	function handleIncludeTemplate($hookName, $args) {
		
		$templateMgr =& $args[0];
		$params =& $args[1];
		if (!isset($params['smarty_include_tpl_file'])) {
			return false;
		}
		switch ($params['smarty_include_tpl_file']) {
			
			case 'frontend/components/breadcrumbs.tpl':
			
				$templateMgr->display('', 'text/html', 'TemplateManager::include');
				return true; 

		}
		return false;
	}

	

	/**
	 * @copydoc PKPPlugin::getDisplayName()
	 */
	function getDisplayName() {
		return __('plugins.generic.hideBreadcrumbs.displayName');
	}

	/**
	 * @copydoc PKPPlugin::getDescription()
	 */
	function getDescription() {
		return __('plugins.generic.hideBreadcrumbs.description');
	}

	/**
	 * @copydoc PKPPlugin::getTemplatePath
	 */
	function getTemplatePath() {
		return parent::getTemplatePath() . 'templates/';
	}
	
}

?>
