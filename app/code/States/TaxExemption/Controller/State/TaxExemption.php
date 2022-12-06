<?php

declare(strict_types=1);

namespace States\TaxExemption\Controller\State;

use \Magento\Framework\App\Action\HttpGetActionInterface;
use \Magento\Framework\View\Result\PageFactory;

class TaxExemption implements HttpGetActionInterface
{
    private $pageFactory;

    public function __construct(
        PageFactory $pageFactory
    ) {
        $this->pageFactory = $pageFactory;
    }

    /**
     * @inheritDoc
     */
    public function execute()
    {
        $resultPage = $this->pageFactory->create();
        $resultPage->getConfig()->getTitle()->prepend(__('REQUEST TAX EXEMPTION'));
        return $resultPage;
    }
}