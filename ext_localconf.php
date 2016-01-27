<?php

defined('TYPO3_MODE') or die ('Access denied.');

// Hook into TYPO3-Core Condition on device; Usage eg. [device = tablet], [device = smartPhone]
if (TYPO3_MODE == 'FE') {
	$TYPO3_CONF_VARS['SC_OPTIONS']['t3lib/div/class.t3lib_utility_client.php']['getDeviceType'][] = 'EXT:p2_mobiledetect/Classes/Detect.php:Plan2net\MobileDetect\Detect->getMobileDeviceType';
}

