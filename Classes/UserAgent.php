<?php

require_once \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('p2_mobiledetect', 'Resources/Private/Libraries/Mobile_Detect.php');

class Tx_P2Mobiledetect_UserAgent {

	/** @var Mobile_Detect */
	static protected $_mobileDetect;

	/**
	 * @return string
	 * @hook t3lib/div/class.t3lib_utility_client.php
	 * @see t3lib_utility_Client::getDeviceType()
	 */
	public function getMobileDeviceType(array $parameters, $parentObject) {
		if (!self::$_mobileDetect) {
			self::$_mobileDetect = new Mobile_Detect();
		}
		$type = '';
		if (self::$_mobileDetect->isTablet($parameters['userAgent'])) {
			$type = 'tablet';
		} elseif (self::$_mobileDetect->isMobile($parameters['userAgent'])) {
			$type = 'smartPhone';
		} else {
			$parameters['returnResult'] = false;
		}
		return $type;
	}
}

?>