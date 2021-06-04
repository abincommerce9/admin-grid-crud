<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Commerce9\TestModule\Model\Config\Source;

/**
 * @api
 * @since 100.0.2
 */
class Colours implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [['value' => 1, 'label' => __('Red')],
        ['value' => 2, 'label' => __('Yellow')],
         ['value' => 3, 'label' => __('Green')]];
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
        return [1 => __('Red'), 2 => __('Yellow'), 3 => __('Green')];
    }
}
