<?php

namespace Teja\Blog\Controller\Index;

use \Magento\Framework\App\Action\Context;
use \Magento\Framework\App\Action\Action;
use \Magento\Framework\App\Action\HttpGetActionInterface;//this is for magento 2.4.3
use \Magento\Framework\View\Result\PageFactory;
use \Magento\Framework\Exception\LocalizedException;
use \Teja\Blog\Model\FormDataFactory;
use \Magento\Framework\Controller\Result\RedirectFactory;

class Post extends Action
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $resultPageFactory;

    /**
     * @param PageFactory $resultPageFactory
     */
    public function __construct(Context $context,FormDataFactory $formdataFactory,PageFactory $resultPageFactory,RedirectFactory $resultRedirectFactory) {
        $this->_resultPageFactory = $resultPageFactory;
        $this->resultRedirectFactory = $resultRedirectFactory;
        $this->_formdataFactory = $formdataFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        // $valid=$this->validatedParams();
        // print_r($valid);
        // die();
        
        // $this->_formdataFactory->create()->setData($valid)->save();
        // $resultRedirect = $this->resultRedirectFactory->create();//to return to page
        // $this->messageManager->addSuccessMessage(__('You saved the Record .'));
        // return $resultRedirect->setPath('tejablog/index/post');

        try {
            $valid=$this->validatedParams();
            if ($valid) {
                $savingFormData = $this->_formdataFactory->create()->setData($valid)->save();
                $this->messageManager->addSuccessMessage(__("Record Saved Successfully."));
            }
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage($e, __("We can't saved record, Please try again."));
        }
        $resultRedirect = $this->resultRedirectFactory->create();
        return $resultRedirect->setPath('tejablog/index/form');
    }
    private function validatedParams()
    {
        $request = $this->getRequest();
        /*if (trim($request->getParam('name')) === '') {
            throw new LocalizedException(__('Enter the Name and try again.'));
        }
        if (trim($request->getParam('comment')) === '') {
            throw new LocalizedException(__('Enter the comment and try again.'));
        }
        if (false === \strpos($request->getParam('email'), '@')) {
            throw new LocalizedException(__('The email address is invalid. Verify the email address and try again.'));
        }
        if (trim($request->getParam('hideit')) !== '') {
            throw new \Exception();
        }*/

        return $request->getParams();
    }
}