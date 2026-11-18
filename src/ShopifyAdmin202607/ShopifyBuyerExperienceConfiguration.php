<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyDepositConfigurationHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyPaymentTermsTemplate;

/**
 * Settings describing the behavior of checkout for a B2B buyer.
 */
class ShopifyBuyerExperienceConfiguration
{
    protected $checkoutToDraft;
    protected $deposit;
    protected $editableShippingAddress;
    protected $payNowOnly;
    protected $paymentTermsTemplate;

    
    /**
     * Whether to checkout to draft order for merchant review.
     *
     * @return bool
     */
    public function getCheckoutToDraft(): ?bool
    {
        return $this->checkoutToDraft;
    }

    
    /**
     * The portion required to be paid at checkout.
     *
     * @return ShopifyDepositPercentage
     */
    public function getDeposit(): ?ShopifyDepositPercentage
    {
        return $this->deposit;
    }

    
    /**
     * Whether to allow customers to use editable shipping addresses.
     *
     * @return bool
     */
    public function getEditableShippingAddress(): ?bool
    {
        return $this->editableShippingAddress;
    }

    
    /**
     * Whether a buyer must pay at checkout or they can also choose to pay
     * later using net terms.
     *
     * @return bool
     */
    public function getPayNowOnly(): ?bool
    {
        return $this->payNowOnly;
    }

    
    /**
     * Represents the merchant configured payment terms.
     *
     * @return ShopifyPaymentTermsTemplate
     */
    public function getPaymentTermsTemplate(): ?ShopifyPaymentTermsTemplate
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
                $instance->deposit = ShopifyDepositConfigurationHydrator::fromArray($data['deposit']);
            }
            if (isset($data['editableShippingAddress']) && $data['editableShippingAddress'] !== null) {
                $instance->editableShippingAddress = $data['editableShippingAddress'];
            }
            if (isset($data['payNowOnly']) && $data['payNowOnly'] !== null) {
                $instance->payNowOnly = $data['payNowOnly'];
            }
            if (isset($data['paymentTermsTemplate']) && $data['paymentTermsTemplate'] !== null) {
                $instance->paymentTermsTemplate = ShopifyPaymentTermsTemplate::fromArray($data['paymentTermsTemplate']);
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
                $data['deposit'] = ShopifyDepositConfigurationHydrator::toArray($this->deposit);
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
