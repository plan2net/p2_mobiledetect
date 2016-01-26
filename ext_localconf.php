<?php

// Hook into TYPO3-Core Condition on device; Usage eg. [device = tablet], [device = smartPhone]
if (TYPO3_MODE === 'FE') {
	$TYPO3_CONF_VARS['SC_OPTIONS']['t3lib/div/class.t3lib_utility_client.php']['getDeviceType'][] = 'EXT:p2_mobiledetect/Classes/UserAgent.php:&Tx_P2Mobiledetect_UserAgent->getMobileDeviceType';
}

