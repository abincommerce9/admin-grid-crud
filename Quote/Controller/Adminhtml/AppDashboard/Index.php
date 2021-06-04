<?php

namespace Commerce9\Quote\Controller\Adminhtml\AppDashboard;

class Index extends \Magento\Backend\App\Action
{
    private $resultPageFactory;

    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create(); // this crete an empty page 
        $resultPage->getConfig()->getTitle()->prepend(__('Quotes From Customers'));//this is your page heading 
        $resultPage->setActiveMenu('Commerce9_Quote::helloworld');
        return $resultPage;// this show page
    }
}