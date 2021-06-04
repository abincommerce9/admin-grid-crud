<?php

namespace Commerce9\Popup\Controller\Index;

class Config extends \Magento\Framework\App\Action\Action
{

	protected $helperData;



	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Commerce9\Popup\Helper\Data $helperData

	)
	{
		$this->helperData = $helperData;
		return parent::__construct($context);
	}

	public function execute()
	{

		// TODO: Implement execute() method.
		 $block = $this->_view->getLayout()->createBlock('Commerce9\Popup\Block\Template');
            $block->setTemplate('Commerce9_Popup::index.phtml');
            $this->getResponse()->appendBody($block->toHtml());

		// echo $this->helperData->getConfigValue('offer_category');
		// echo $this->helperData->getConfigValue('offer_title');
		// echo $this->helperData->getConfigValue('offer_description');
		// exit();

	}
}