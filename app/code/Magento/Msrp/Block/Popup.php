<?php
/**
 * @copyright Copyright (c) 2014 X.commerce, Inc. (http://www.magentocommerce.com)
 */
namespace Magento\Msrp\Block;

class Popup extends \Magento\Framework\View\Element\Template
{
    /**
     * @var \Magento\Msrp\Model\Config
     */
    protected $config;

    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Magento\Msrp\Model\Config $config
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Msrp\Model\Config $config,
        array $data = []
    ) {
        $this->config = $config;
        parent::__construct($context, $data);
    }

    /**
     * @return bool
     */
    public function isEnabled()
    {
        return $this->config->isEnabled();
    }

    /**
     * @return string
     */
    public function getExplanationMessage()
    {
        return $this->config->getExplanationMessage();
    }

    /**
     * @return string
     */
    public function getExplanationMessageWhatsThis()
    {
        return $this->config->getExplanationMessageWhatsThis();
    }
}