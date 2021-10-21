<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace LoginRadius\Ciam\Model;

use Magento\Framework\Event\ObserverInterface;

class Observer implements ObserverInterface {

    protected $_messageManager;
    protected $_objectManager;

    public function __construct(
    \Magento\Framework\Message\ManagerInterface $messageManager, \Magento\Framework\ObjectManagerInterface $objectManager
    ) {
        $this->_messageManager = $messageManager;
        $this->_objectManager = $objectManager;
    }

    public function execute(\Magento\Framework\Event\Observer $observer) {
        $activationHelper = $this->_objectManager->get('LoginRadius\Ciam\Model\Helper\Data');
        if ($activationHelper->enableSinglesignon() == '1') {
            $urlInterface = \Magento\Framework\App\ObjectManager::getInstance()->get('Magento\Framework\UrlInterface');
            $ssoRootUrl = parse_url($urlInterface->getUrl(''));
            $ssoRootUrl['path'] = isset($ssoRootUrl['path']) ? trim(trim($ssoRootUrl['path'], "/")) : '';
            $ssoTempDir = explode("/", $ssoRootUrl['path']);
            $ssoPath = isset($ssoTempDir[0]) ? '/' . trim($ssoTempDir[0]) . '/' : '';
            ?>
            <html>
                <head>
                    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
                    <script src_type="url" src="https://auth.lrcontent.com/v2/js/LoginRadiusV2.js"></script>
                    <script>
                        //require(['jquery'], function ($) {
                            jQuery(document).ready(function (e) {
                                var commonOptions = {};
                                commonOptions.apiKey = '<?= $activationHelper->siteApiKey(); ?>';
                                commonOptions.appName = '<?= $activationHelper->siteName(); ?>';
                                var LRObject = new LoginRadiusV2(commonOptions);
                                var logout_options = {};
                                //e.preventDefault();
                                logout_options.onSuccess = function () {                                    
                                    window.location = "<?= $urlInterface->getUrl('customer/account/logout'); ?>";
                                };
                                LRObject.init("logout", logout_options);
                            });
                      //  });
                    </script></head><body>Loading...</body></html>
            <?php
            $appState = \Magento\Framework\App\ObjectManager::getInstance()->get('Magento\Framework\App\State');
            switch ( $appState->getMode() ) {
                case \Magento\Framework\App\State::MODE_DEFAULT:
                    $debugMode = 'default';
                    break;
                case \Magento\Framework\App\State::MODE_PRODUCTION:
                    $debugMode = 'production';
                    break;
                case \Magento\Framework\App\State::MODE_DEVELOPER:
                    $debugMode = 'developer';
                    break;
            }

            if (isset($debugMode) && $debugMode === 'developer') {
                $e = $observer->getEvent()->getException();
                $errorDescription = isset($e->getErrorResponse()->Description) ? $e->getErrorResponse()->Description : '';
                $this->_messageManager->addError($errorDescription);
            }
        }
        return;
    }

}
