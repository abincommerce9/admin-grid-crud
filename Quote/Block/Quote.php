<?php
namespace Commerce9\Quote\Block;

use Magento\Framework\Registry;

class Quote extends \Magento\Framework\View\Element\Template
{
	 protected $customerSession;
	 /**
     * @var Registry
     */
    protected $registry;

    /**
     * @var Product
     */
    private $product;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        Registry $registry,
        \Magento\Customer\Model\Session $customerSession,
        array $data = []
    ) {
    	$this->registry = $registry;
        parent::__construct($context, $data);

        $this->customerSession = $customerSession;
    }

    public function getCustomerName()
    {

    	return $this->customerSession->getCustomer()->getName();
    }
    public function getCustomerEmail()
    {

    	return $this->customerSession->getCustomer()->getEmail();
    }

	 /**
     * @return Product
     */
    private function getProduct()
    {
        if (is_null($this->product)) {
            $this->product = $this->registry->registry('product');

            if (!$this->product->getId()) {
                throw new LocalizedException(__('Failed to initialize product'));
            }
        }

        return $this->product;
    }

    public function getProductName()
    {
        return $this->getProduct()->getName();
    }
    public function getProductPrice()
    {
        return $this->getProduct()->getPrice();
    }
}