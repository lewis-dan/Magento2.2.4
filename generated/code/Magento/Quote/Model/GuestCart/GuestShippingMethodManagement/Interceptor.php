<?php
namespace Magento\Quote\Model\GuestCart\GuestShippingMethodManagement;

/**
 * Interceptor class for @see \Magento\Quote\Model\GuestCart\GuestShippingMethodManagement
 */
class Interceptor extends \Magento\Quote\Model\GuestCart\GuestShippingMethodManagement implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Quote\Api\ShippingMethodManagementInterface $shippingMethodManagement, \Magento\Quote\Model\QuoteIdMaskFactory $quoteIdMaskFactory)
    {
        $this->___init();
        parent::__construct($shippingMethodManagement, $quoteIdMaskFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function get($cartId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'get');
        if (!$pluginInfo) {
            return parent::get($cartId);
        } else {
            return $this->___callPlugins('get', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getList($cartId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getList');
        if (!$pluginInfo) {
            return parent::getList($cartId);
        } else {
            return $this->___callPlugins('getList', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function set($cartId, $carrierCode, $methodCode)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'set');
        if (!$pluginInfo) {
            return parent::set($cartId, $carrierCode, $methodCode);
        } else {
            return $this->___callPlugins('set', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function estimateByAddress($cartId, \Magento\Quote\Api\Data\EstimateAddressInterface $address)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'estimateByAddress');
        if (!$pluginInfo) {
            return parent::estimateByAddress($cartId, $address);
        } else {
            return $this->___callPlugins('estimateByAddress', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function estimateByExtendedAddress($cartId, \Magento\Quote\Api\Data\AddressInterface $address)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'estimateByExtendedAddress');
        if (!$pluginInfo) {
            return parent::estimateByExtendedAddress($cartId, $address);
        } else {
            return $this->___callPlugins('estimateByExtendedAddress', func_get_args(), $pluginInfo);
        }
    }
}
