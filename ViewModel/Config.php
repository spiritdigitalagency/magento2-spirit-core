<?php

namespace Spirit\Core\ViewModel;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use Magento\Store\Model\ScopeInterface;

class Config implements ArgumentInterface
{
    /**
     * @var ScopeConfigInterface
     */
    protected ScopeConfigInterface $_scopeConfig;
    
    /**
     * Config constructor.
     *
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        ScopeConfigInterface $scopeConfig
    ) {
        $this->_scopeConfig = $scopeConfig;
    }
    
    /**
     * @param string $key
     *
     * @return mixed
     */
    public function getConfig(string $key)
    {
        return $this->_scopeConfig->getValue(
            $key,
            ScopeInterface::SCOPE_STORE
        );
    }
}
