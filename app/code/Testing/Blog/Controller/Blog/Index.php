<?php 

namespace Testing\Blog\Controller\Blog;

use \Magento\Framework\App\Action\HttpGetActionInterface;
use \Magento\Framework\View\Result\PageFactory;

class Index implements HttpGetActionInterface
{

    /**
     * @var \Magento\Framework\View\Result\PageFactory
     * Pagefactory is used to initialize the layout.
     */
    protected $resultPageFactory;

    public function __construct(PageFactory $resultPageFactory) {
        $this->resultPageFactory = $resultPageFactory;
    }
    public function execute()
    {
        //print_r("I'm in index.php"); die();
        return $this->resultPageFactory->create();
    }

}