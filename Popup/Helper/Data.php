<?php

namespace Commerce9\Popup\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{

		const XML_PATH_HELLOWORLD = 'helloworld/';

		public function getConfigValue($field, $storeId = null)
		{
	$sectionid = "helloworld/";
	$generalid ="general/";
			return $this->scopeConfig->getValue(
	                $sectionid.$generalid.$field,
	                \Magento\Store\Model\ScopeInterface::SCOPE_STORE
	                );
		}

		public function getGeneralConfig($code, $storeId = null)
		{

			return $this->getConfigValue(self::XML_PATH_HELLOWORLD .'general/'. $code, $storeId);
		}

}