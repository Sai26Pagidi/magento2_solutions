<?php

namespace Customers\CustomCustomerAttribute\Model\Resolver;

use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Exception\GraphQlInputException;
use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;
use Magento\Catalog\Model\Product;
use Magento\Framework\App\ResourceConnection;
use Magento\Setup\Exception;
use Magento\Customer\Model\ResourceModel\Customer\CollectionFactory;
use Magento\Store\Model\StoreManagerInterface;

class GetMobileNumber implements ResolverInterface
{
    protected $productFactory;
    protected $_resourceConnection;
    protected $_customerFactory;
    protected $storemanager;
    public function __construct(Product $productFactory, ResourceConnection $resourceConnection, \Magento\Catalog\Model\ProductFactory $prodFactory, CollectionFactory $customer, StoreManagerInterface $storemanager,\Magento\Customer\Api\CustomerRepositoryInterface $customerRepositoryInterface)
    {
        $this->productFactory = $productFactory;
        $this->_resourceConnection = $resourceConnection;
        $this->_prodFactory = $prodFactory;
        $this->_customerFactory = $customer;
        $this->storemanager = $storemanager;
        $this->_customerRepositoryInterface = $customerRepositoryInterface;
    }
    public function resolve(
        Field $field,
        $context,
        ResolveInfo $info,
        array $value = null,
        array $args = null
    ) {
         $email = $args['email'];
        // // $websiteID = $this->storemanager->getStore()->getWebsiteId();
        // // $customerObj = $this->_customerFactory->create()->setWebsiteId($websiteID)->loadByEmail($email);
        // $customerObj = $this->_customerFactory->create()->load();
        $sqlQuery = 'SELECT  cev.value FROM `customer_entity` ce INNER JOIN customer_entity_varchar cev on ce.entity_id = cev.entity_id where ce.email = "'.$email.'"';
        $conn = $this->_resourceConnection->getConnection();
        $res = $conn->fetchAll($sqlQuery);
        // print_r($res);die;
        foreach($res as $result){
            $response['mobile_number'] = $result['value'];
        }
        return $response;
    }
}
