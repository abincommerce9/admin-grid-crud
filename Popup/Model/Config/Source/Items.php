<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Commerce9\Popup\Model\Config\Source;

/**
 * @api
 * @since 100.0.2
 */
class Items implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [['value' => 1, 'label' => __('Car')],
        ['value' => 2, 'label' => __('Motor Bike')],
         ['value' => 3, 'label' => __('Lorry')]];
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
        return [1 => __('Car'), 2 => __('Motor Bike'), 3 => __('Lorry')];
    }
}
