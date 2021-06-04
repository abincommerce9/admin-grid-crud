<?php 
namespace Commerce9\Quote\Controller\Index;
use Bss\Schema\Model\DataExampleFactory;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Context;
class Save extends \Magento\Framework\App\Action\Action{
    protected $_dataPost;
    protected $resultRedirect;
    public function __construct(\Magento\Framework\App\Action\Context $context,
        \Commerce9\Quote\Model\PostFactory  $dataPost,
    \Magento\Framework\Controller\ResultFactory $result){
        parent::__construct($context);
        $this->_dataPost = $dataPost;
        $this->resultRedirect = $result;
    }
	public function execute(){
		$data = (array)$this->getRequest()->getPost();
 if($data):
 	$name=$data['name'];
 	$email=$data['email'];
    $product_name = $data['product_name'];
 	$quote_text = $data['quote_text'];
 	$product_price = $data['product_price'];

        $resultRedirect = $this->resultRedirect->create(ResultFactory::TYPE_REDIRECT);
        $resultRedirect->setUrl($this->_redirect->getRefererUrl());
		$model = $this->_dataPost->create();
		$model->addData([
			"name" => $name,
			"email" => $email,
			"quote_text" => $quote_text,
            "product_name" => $product_name,
			"product_price" => $product_price
			]);
        $saveData = $model->save();
        if($saveData){
            $this->messageManager->addSuccess( __('Quote Submitted Succesfully. Thank You!') );
        }
		return $resultRedirect;
	endif;
	}
}
 ?>