<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\DepositConfiguration;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\PaymentTermsTemplate;

class BuyerExperienceConfiguration
{
    protected $checkoutToDraft;
    protected $deposit;
    protected $editableShippingAddress;
    protected $payNowOnly;
    protected $paymentTermsTemplate;

    
    /**
     * @return bool
     */
    public function getCheckoutToDraft()
    {
        return $this->checkoutToDraft;
    }

    
    /**
     * @return DepositConfiguration
     */
    public function getDeposit()
    {
        return $this->deposit;
    }

    
    /**
     * @return bool
     */
    public function getEditableShippingAddress()
    {
        return $this->editableShippingAddress;
    }

    
    /**
     * @return bool
     */
    public function getPayNowOnly()
    {
        return $this->payNowOnly;
    }

    
    /**
     * @return PaymentTermsTemplate
     */
    public function getPaymentTermsTemplate()
    {
        return $this->paymentTermsTemplate;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['checkoutToDraft']) && $data['checkoutToDraft'] !== null) {
                $instance->checkoutToDraft = $data['checkoutToDraft'];
            }
            if (isset($data['deposit']) && $data['deposit'] !== null) {
                $instance->deposit = DepositConfiguration::fromArray($data['deposit']);
            }
            if (isset($data['editableShippingAddress']) && $data['editableShippingAddress'] !== null) {
                $instance->editableShippingAddress = $data['editableShippingAddress'];
            }
            if (isset($data['payNowOnly']) && $data['payNowOnly'] !== null) {
                $instance->payNowOnly = $data['payNowOnly'];
            }
            if (isset($data['paymentTermsTemplate']) && $data['paymentTermsTemplate'] !== null) {
                $instance->paymentTermsTemplate = PaymentTermsTemplate::fromArray($data['paymentTermsTemplate']);
            }
            return $instance;
        }

        /**
         * @param string $json
         * @return self
         */
        public static function fromJson(string $json): self
        {
            $data = json_decode($json, true);
            if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
                throw new \InvalidArgumentException('Invalid JSON provided to fromJson method: ' . json_last_error_msg());
            }
            return self::fromArray($data);
        }

        /**
         * Converts this object to an array.
         * @return array
         */
        public function asArray(): array
        {
            $data = [];
            if ($this->checkoutToDraft !== null) {
                $data['checkoutToDraft'] = $this->checkoutToDraft;
            }
            if ($this->deposit !== null) {
                $data['deposit'] = $this->deposit->asArray();
            }
            if ($this->editableShippingAddress !== null) {
                $data['editableShippingAddress'] = $this->editableShippingAddress;
            }
            if ($this->payNowOnly !== null) {
                $data['payNowOnly'] = $this->payNowOnly;
            }
            if ($this->paymentTermsTemplate !== null) {
                $data['paymentTermsTemplate'] = $this->paymentTermsTemplate->asArray();
            }
            return $data;
        }
}
