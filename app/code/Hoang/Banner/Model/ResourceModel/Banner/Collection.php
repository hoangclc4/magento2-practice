<?php

namespace Hoang\Banner\Model\ResourceModel\Banner;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    protected function _construct()
    {
        // Model + Resource Model
        $this->_init('Hoang\Banner\Model\Banner', 'Hoang\Banner\Model\ResourceModel\Banner');
    }

}
