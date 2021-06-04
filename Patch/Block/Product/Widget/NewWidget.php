<?php
namespace Commerce9\Patch\Block\Product\Widget;

class NewWidget extends \Magento\Catalog\Block\Product\Widget\NewWidget
{
  protected function _construct()
    {
      parent::_construct();
      $this->setTemplate('Commerce9_Patch::product/widget/new/content/new_grid.phtml');
    }
}