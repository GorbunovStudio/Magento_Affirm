<?php
/**
 * OnePica
 * NOTICE OF LICENSE
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to codemaster@onepica.com so we can send you a copy immediately.
 *
 * @category    Affirm
 * @package     Affirm_Affirm
 * @copyright   Copyright (c) 2014 One Pica, Inc. (http://www.onepica.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Class Affirm_Affirm_Model_Credential_Sandbox
 */
class Affirm_Affirm_Model_Credential_Sandbox extends Affirm_Affirm_Model_Credential_Abstract
{
    /**
     * Payment affirm api url
     */
    const PAYMENT_AFFIRM_API_URL = 'https://sandbox.affirm.com';

    /**
     * Payment affirm api key
     */
    const PAYMENT_AFFIRM_API_KEY = 'payment/affirm/api_key_sandbox';

    /**
     * Payment affirm secret key
     */
    const PAYMENT_AFFIRM_SECRET_KEY = 'payment/affirm/secret_key_sandbox';

    /**
     * Get api url
     *
     * @return string
     */
    public function getApiUrl()
    {
        return self::PAYMENT_AFFIRM_API_URL;
    }

    /**
     * Get api key
     *
     * @param Mage_Core_Model_Store $store
     * @return string
     * @throws Mage_Core_Model_Store_Exception
     */
    public function getApiKey($store = null)
    {
        if ($store === null) {
            $store = Mage::app()->getStore()->getId();
        }

        return Mage::getStoreConfig(self::PAYMENT_AFFIRM_API_KEY, $store);
    }

    /**
     * Get secret key
     *
     * @param Mage_Core_Model_Store $store
     * @return string
     */
    public function getSecretKey($store = null)
    {
        if ($store === null) {
            $store = Mage::app()->getStore()->getId();
        }

        return Mage::getStoreConfig(self::PAYMENT_AFFIRM_SECRET_KEY, $store);
    }
}
