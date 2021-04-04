<?php

namespace Hoang\Banner\Model;

class Banner extends \Magento\Framework\Model\AbstractModel
{

   
  /**
     * Banner's Statuses
     */
    const STATUS_ENABLED = 1;
    const STATUS_DISABLED = 0;
 protected function _construct()
    {
        $this->_init('Hoang\Banner\Model\ResourceModel\Banner');
    }
    /**
     * Prepare banner's statuses.
     */
    public function getAvailableStatuses()
    {
        return [self::STATUS_ENABLED => __('Enabled'), self::STATUS_DISABLED => __('Disabled')];
    }
}