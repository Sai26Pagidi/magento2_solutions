<?php
namespace Teja\Blog\Model\ResourceModel\JobPosts;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Magento\Framework\Data\Collection\EntityFactoryInterface;
use Psr\Log\LoggerInterface;
use Magento\Framework\Data\Collection\Db\FetchStrategyInterface;
use Magento\Framework\Event\ManagerInterface;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Framework\DB\Adapter\AdapterInterface;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'job_id'; //primary id of the table

    public function __construct(
        EntityFactoryInterface $entityFactory,
        LoggerInterface $logger,
        FetchStrategyInterface $fetchStrategy,
        ManagerInterface $eventManager,
        StoreManagerInterface $storeManager,
        AdapterInterface $connection = null,
        AbstractDb $resource = null
    ) {
        $this->_init(\Teja\Blog\Model\JobPosts::class, \Teja\Blog\Model\ResourceModel\JobPosts::class);//collection model is considered a resource model which allow us to filter and fetch a collection table data
        
        
        parent::__construct($entityFactory, $logger, $fetchStrategy, $eventManager, $connection, $resource);
        $this->storeManager = $storeManager;
    }
    protected function _initSelect()
    {
        parent::_initSelect();
        // if we want to print query write echo befor $this and exit; after 40
        $this->getSelect()->joinLeft(
            ['secondTable' => $this->getTable('sales_order_grid')], //2nd table name by which you want to join mail table
            '`main_table`.job_id= `secondTable`.entity_id', // common column which available in both table 
            ['secondTable.customer_email','secondTable.customer_name'] // '*' define that you want all column of 2nd table. if you want some particular column then you can define as ['column1','column2']
        );
    }
}