<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

$rootlinefields = &$GLOBALS["TYPO3_CONF_VARS"]["FE"]["addRootLineFields"];
if ($rootlinefields !== '') {
    $rootlinefields .= ' , ';
}

$rootlinefields .= 'tx_favicon_favicon';
