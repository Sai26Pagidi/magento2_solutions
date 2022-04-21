<?php
namespace Teja\Blog\Observer;

use \Teja\Blog\Model\FormDataFactory;

class CustomerLogin implements \Magento\Framework\Event\ObserverInterface 
{
   protected $_customform;

    public function __construct(FormDataFactory $customform) {
       $this->_customform = $customform;
    }
   public function execute(\Magento\Framework\Event\Observer $observer) 
   {
      $customer = $observer->getEvent()->getCustomer(); 
      
      // Start :: Log the Data
      $writer = new \Zend_Log_Writer_Stream(BP . '/var/log/customfile.log');
      $logger = new \Zend_Log();
      $logger->addWriter($writer);
      $logger->info('Customer Email:- '.print_r($customer->getEmail(),true)); 
      // End :: Log the Data
      $this->_customform->create()->load(1)->setEmail('sai@gmail.com')->save();

      return $this;    
   }  
}