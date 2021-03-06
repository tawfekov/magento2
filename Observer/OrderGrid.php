<?php
/**
 * Copyright � 2015 SIGNIFYD Inc. All rights reserved.
 * See LICENSE.txt for license details.
 */

namespace Signifyd\Connect\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Sales\Model\Order;
use Magento\Sales\Model\Order\Address;
use Signifyd\Connect\Helper\LogHelper;
use Signifyd\Connect\Model\ResourceModel\Casedata;

/**
 * Observer for order grid building events. Appends Signifyd data
 */
class OrderGrid implements ObserverInterface
{
    /**
     * @var \Signifyd\Connect\Helper\LogHelper
     */
    protected $_logger;

    public function __construct(
        LogHelper $logger
    ) {
        $this->_logger = $logger;
    }

    public function execute(Observer $observer)
    {
        /** @var $collection \Magento\Sales\Model\ResourceModel\Order\Grid\Collection *
        $collection = $observer->getData('order_grid_collection');
        Casedata::JoinWithOrder($collection);*/
    }
}
