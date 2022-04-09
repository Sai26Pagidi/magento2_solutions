<?php

namespace Saiteja\Blog\Block;

use \Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;
use \Saiteja\Blog\Model\ResourceModel\Blog\CollectionFactory as BlogCollectionFactory;
use \Saiteja\Blog\Model\BlogFactory as BlogFactory;
use \Saiteja\Myownmodule\Block\Art;

class BlogData extends Template
{
    /**
     * CollectionFactory
     * @var null|CollectionFactory
     */
    protected $_blogCollectionFactory = null;
    protected $_BlogFactory;
    protected $_art;

    /**
     * Constructor
     *
     * @param Context $context
     * @param ViewCollectionFactory $viewCollectionFactory
     * @param array $data
     */
    public function __construct(
        Context $context,
        BlogCollectionFactory $blogCollectionFactory,
        BlogFactory $blogFactory,
        Art $art,
        array $data = []
    ) {
        $this->_blogCollectionFactory  = $blogCollectionFactory;
        $this->_blogFactory = $blogFactory;
        $this->_art = $art;
        parent::__construct($context, $data);
    }

    //fetching group of records 
    public function getCollection()
    {
        /** @var ViewCollection $viewCollection */
        $blogCollection = $this->_blogCollectionFactory ->create();
        $blogCollection->addFieldToSelect(['id','title'])->load();
        return $blogCollection->getItems();
    }

    
    public function getArticleUrl($blog) {
        return $this->getUrl('blog/index/view/id/'. $blog, ['_secure' => true]);
        //return '/blog/index/index/id/' . $blog;
    }

    //fetching single row data 
    public function getSingleRow(){
        $id = $this->getRequest()->getParam('id');        
        $blogFactory = $this->_blogFactory->create();
        $singleData = $blogFactory->load($id);
        return $singleData;
    }
   
   //creating own function and calling in view.phtml 
    public function getSaiTeja(){
        $arr =array("id","title","content");
        return $arr;
    }

    //calling two functions from another module of block..
    public function Myownmodule(){
       $anotherBlock= $this->_art->Myownmodule();
       return $anotherBlock;
    }
    public function Adding(){
         $add= $this->_art->Adding();
         return $add;
    }
}