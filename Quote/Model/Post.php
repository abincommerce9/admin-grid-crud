<?php
namespace Commerce9\Quote\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'commerce9_quote_post';

	protected $_cacheTag = 'commerce9_quote_post';

	protected $_eventPrefix = 'commerce9_quote_post';

	protected function _construct()
	{
		$this->_init('Commerce9\Quote\Model\ResourceModel\Post');
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];

		return $values;
	}
}