<?php

namespace Saiteja\Myownmodule\Block;

use \Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;
use \Saiteja\Myownmodule\Model\ResourceModel\View\CollectionFactory as ViewCollectionFactory;
use \Saiteja\Myownmodule\Model\View;

class Art extends Template
{
    /**
     * CollectionFactory
     * @var null|CollectionFactory
     */
    protected $_viewCollectionFactory = null;

    /**
     * Constructor
     *
     * @param Context $context
     * @param ViewCollectionFactory $viewCollectionFactory
     * @param array $data
     */
    public function __construct(
        Context $context,
        ViewCollectionFactory $viewCollectionFactory,
        array $data = []
    ) {
        $this->_viewCollectionFactory  = $viewCollectionFactory;
        parent::__construct($context, $data);
    }

    /**
     * @return Post[]
     */
    public function getCollection()
    {
        /** @var ViewCollection $viewCollection */
        $viewCollection = $this->_viewCollectionFactory ->create();
        $viewCollection->addFieldToSelect('*')->load();
        return $viewCollection->getItems();
    }

    /**
     * For a given post, returns its url
     * @param Post $post
     * @return string
     */
    public function getArticleUrl(View $view) {
        return '/myownmodule/index/index/' . $view->getId();
    }

    public function Myownmodule(){
        $arr = array("sai",1,"teja");
        return $arr;
    }
    public function Adding(){
        $a = 10;
        $b = 20;
        $c =$a+$b;
        return $c;
    }

}