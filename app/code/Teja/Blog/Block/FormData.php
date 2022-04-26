<?php

namespace Teja\Blog\Block;

use \Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;
use \Teja\Blog\Model\ResourceModel\FormData\CollectionFactory as FormCollectionFactory;

class FormData extends Template
{
    
    protected $_formCollectionFactory = null;
    
    /**
     * Constructor
     *
     * @param Context $context
     * @param ViewCollectionFactory $viewCollectionFactory
     * @param array $data
     */
    public function __construct(
        Context $context,
        FormCollectionFactory $formCollectionFactory,
        array $data = []
    ) {
        $this->_formCollectionFactory  = $formCollectionFactory;
        parent::__construct($context, $data);
    }

    public function getFormAction()
    {
        return $this->getUrl('tejablog/index/post', ['_secure' => true]);
    }
   
}


