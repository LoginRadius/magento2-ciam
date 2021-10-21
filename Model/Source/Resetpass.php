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
use LoginRadiusSDK\Utility\Functions;

class Resetpass implements \Magento\Framework\Option\ArrayInterface
{
    
    protected $_objectManager;

    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager) {
        $this->_objectManager = $objectManager;
    }
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        $activationHelper = $this->_objectManager->get('LoginRadius\Ciam\Model\Helper\Data');
       
        if ($activationHelper->siteApiKey() != '' && $activationHelper->siteApiSecret() != '') {
            try {
                $decrypted_secret = $activationHelper->lr_secret_encrypt_and_decrypt( $activationHelper->siteApiSecret(), $activationHelper->siteApiKey(), 'd' );
                $query_array = array(
                    'apiKey' => $activationHelper->siteApiKey(),
                    'apiSecret' => $decrypted_secret
                  );
                  $options = array(
                    'output_format' => 'json',
                  );
                  $url = 'https://config.lrcontent.com/ciam/appInfo/templates';
                  $templates = Functions::apiClient($url, $query_array, $options);
                  
            }
            catch (LoginRadiusException $e) {
                
            }
        }
            
        $template = array();
        $template[''] = 'select';
        if(!empty($templates->EmailTemplates)){
        foreach ($templates->EmailTemplates->ResetPassword as $name) {
            $template[$name] = $name; 
        }}
     
        return $template;
    }
}
