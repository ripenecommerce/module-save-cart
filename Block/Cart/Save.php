<?php

namespace Vekeryk\SaveCart\Block\Cart;

class Save extends \Magento\Framework\View\Element\Template
{
    /**
     * @var string
     */
    protected $_template = 'cart/save.phtml';

    /**
     * Return the save action Url.
     *
     * @return string
     */
    public function getAction()
    {
        return $this->getUrl('savecart/cart/save');
    }
}
