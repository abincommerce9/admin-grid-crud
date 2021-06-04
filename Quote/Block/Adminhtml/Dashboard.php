<?php

namespace Commerce9\Quote\Block\Adminhtml;

class Dashboard extends \Magento\Backend\Block\Template
{

	public function __construct( \Magento\Backend\Block\Template\Context $context,
    \Commerce9\Quote\Model\PostFactory $postFactory, array $data = array()) {
	    $this->_modelFactory = $postFactory;
	    parent::__construct($context, $data);
	}

	public function getCollection(){
    	return $this->_modelFactory->create()->getCollection();
	}

    public function sayHello()
    {
        $txt = 'Hello World';
        return $txt;
    }
}