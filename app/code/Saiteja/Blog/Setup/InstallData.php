<?php

namespace Saiteja\Blog\Setup;

use \Magento\Framework\Setup\InstallDataInterface;
use \Magento\Framework\Setup\ModuleContextInterface;
use \Magento\Framework\Setup\ModuleDataSetupInterface;

/**
 * Class UpgradeData
 *
 * @package Thecoachsmb\Mymodule\Setup
 */
class InstallData implements InstallDataInterface
{

    /**
     * Creates sample articles
     *
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        $conn = $setup->getConnection(); 
            $tableName = $setup->getTable('saiteja_blog');

            $data = [
                [
                    'title' => 'How to create table in Magento2',
                    'description' => 'description of the first post.',
                    'status' => 0,
                ],
                [
                    'title' => 'How to create table in Magento2',
                    'description' => 'description of the second post.',
                    'status' => 1,
                ],
            ];
        
        $conn->insertMultiple($tableName, $data);
        $setup->endSetup();
    }
}