<?php
namespace Hoang\Banner\Setup;

use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\DB\Ddl\Table;

class UpgradeSchema implements \Magento\Framework\Setup\UpgradeSchemaInterface
{

    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        if (version_compare($context->getVersion(), '1.0.1', '<')) {
                  $setup->startSetup();

                $connection = $setup->getConnection();
                $tableName = $setup->getTable('banner');
                $setup->run("ALTER TABLE " . $tableName . " ADD COLUMN sort_order SMALLINT, ADD COLUMN status BOOLEAN;");
        }
        $setup->endSetup();
    }
}