<?php
defined('TYPO3_MODE') || defined('TYPO3') || die('Access denied.');

call_user_func(function()
{
  /**
   * Temporary variables
   */
  $extensionKey = 'favicon';

  /**
   * Default TypoScript for Microtemplate
   */
  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    $extensionKey,
    'Configuration/TypoScript',
    'Favicon'
  );
});
