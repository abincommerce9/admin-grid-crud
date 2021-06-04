<?php

namespace Commerce9\TestModule\Controller\Index;

class Config extends \Magento\Framework\App\Action\Action
{

	protected $helperData;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Commerce9\TestModule\Helper\Data $helperData

	)
	{
		$this->helperData = $helperData;
		return parent::__construct($context);
	}

	public function execute()
	{

		echo $this->helperData->getGeneralConfig('color');
		echo $this->helperData->getGeneralConfig('display_text');
		echo $this->helperData->getGeneralConfig('area1');
		echo $this->helperData->getGeneralConfig('checkbox1');
		exit();

	}
}