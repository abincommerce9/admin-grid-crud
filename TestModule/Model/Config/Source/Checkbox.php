<?php 
namespace Commerce9\TestModule\Model\Config\Source;
 
/**
 * Used in creating options for getting product type value
 *
 */
class Checkbox
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [['value' => 'checkbox', 'label'=>__('Checkbox')]];
    }
}