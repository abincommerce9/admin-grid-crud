<?php

namespace Commerce9\Quote\Block\Adminhtml\Quote\Edit;
/**
 * Class Form
 * @package MageDigest\CustomerReview\Block\Adminhtml\Reviews\Edit
 */
class Form extends \Magento\Backend\Block\Widget\Form\Generic
{

    /**
     * @var
     */
    protected $_systemStore;

    

    /**
     * Form constructor.
     * @param \Magento\Backend\Block\Template\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param \Magento\Framework\Data\FormFactory $formFactory
     * @param \Magento\Cms\Model\Wysiwyg\Config $wysiwygConfig
     * @param array $data
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Framework\Data\FormFactory $formFactory,
        \Magento\Cms\Model\Wysiwyg\Config $wysiwygConfig,
        array $data = []
    )
    {
        $this->_wysiwygConfig = $wysiwygConfig;
        parent::__construct($context, $registry, $formFactory, $data);
    }

    /**
     * @return Form
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    protected function _prepareForm()
    {
        $model = $this->_coreRegistry->registry('row_data');
        $form = $this->_formFactory->create(['data' => ['id' => 'edit_form', 'enctype' => 'multipart/form-data', 'action' => $this->getData('action'), 'method' => 'post']]);
        $form->setHtmlIdPrefix('cquotesid_');
        if ($model) {
            $fieldset = $form->addFieldset('base_fieldset', ['legend' => __('Review Details'), 'class' => 'fieldset-wide']);
            $fieldset->addField('id', 'hidden', ['name' => 'id']);
        } else {
            $fieldset = $form->addFieldset('base_fieldset', ['legend' => __('Review Details'), 'class' => 'fieldset-wide']);
        }
        $fieldset->addField(
            'name',
            'text',
            [
                'name' => 'name',
                'label' => __('Customer Name'),
                'title' => __('Customer Name'),
                'class' => 'required-entry',
                'required' => true,
            ]
        );
        $fieldset->addField(
            'email',
            'text',
            [
                'name' => 'email',
                'label' => __('Customer Email'),
                'title' => __('Customer Email'),
                'class' => 'required-entry',
                'required' => true,
                'disabled' => $model ? true : false,
            ]
        );
         $fieldset->addField(
            'quote_text',
            'text',
            [
                'name' => 'quote_text',
                'label' => __('Quote'),
                'title' => __('Quote'),
                'class' => 'required-entry',
                'required' => true,
            ]
        );
         $fieldset->addField(
            'product_name',
            'text',
            [
                'name' => 'product_name',
                'label' => __('Product Name'),
                'title' => __('Product Name'),
                'class' => 'required-entry',
                'required' => true,
            ]
        );
          $fieldset->addField(
            'product_price',
            'text',
            [
                'name' => 'product_price',
                'label' => __('Product Price'),
                'title' => __('Product Price'),
                'class' => 'required-entry',
                'required' => true,
            ]
        );

       
        $form->setValues($model ? $model->getData() : '');
        $form->setUseContainer(true);
        $this->setForm($form);
        return parent::_prepareForm();
    }
}