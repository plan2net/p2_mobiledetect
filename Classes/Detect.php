<?php

namespace Plan2net\MobileDetect;

use \TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

/**
 * Class Detect
 *
 * @package Plan2net\MobileDetect
 */
class Detect {

	public function __construct() {
		require_once(ExtensionManagementUtility::extPath('p2_mobiledetect') . '/vendor/autoload.php');
	}

	/**
	 * @param array $parameters
	 * @param null $parent
	 * @return string|null
	 */
	public function getMobileDeviceType($parameters, $parent = NULL) {
		/** @var \Detection\MobileDetect $mobileDetection */
		$mobileDetection = new \Detection\MobileDetect();
		$mobileDetection->setUserAgent($parameters['userAgent']);

		$type = NULL;
		if ($mobileDetection->isTablet()) {
			$type = 'tablet';
		} elseif ($mobileDetection->isMobile()) {
			$type = 'smartPhone';
		} else {
			$parameters['returnResult'] = FALSE;
		}

		return $type;
	}

}

