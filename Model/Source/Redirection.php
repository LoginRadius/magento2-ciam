<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

/**
 * Used in creating options for Yes|No config value selection
 *
 */

namespace LoginRadius\Ciam\Model\Source;

class Redirection implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [['value' => 'same', 'label' => __('Same page')], 
            ['value' => 'account', 'label' => __('Account page')],
            ['value' => 'home', 'label' => __('Home page')],
            ['value' => 'custom', 'label' => __('Custom URL')]];
    }
       
}
