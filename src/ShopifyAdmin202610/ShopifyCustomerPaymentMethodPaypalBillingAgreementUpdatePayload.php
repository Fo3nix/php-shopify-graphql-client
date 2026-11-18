<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCustomerPaymentMethod;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCustomerPaymentMethodUserError;

/**
 * Return type for `customerPaymentMethodPaypalBillingAgreementUpdate` mutation.
 */
class ShopifyCustomerPaymentMethodPaypalBillingAgreementUpdatePayload
{
    protected $customerPaymentMethod;
    protected $userErrors;

    
    /**
     * The customer payment method.
     *
     * @return ShopifyCustomerPaymentMethod
     */
    public function getCustomerPaymentMethod(): ?ShopifyCustomerPaymentMethod
    {
        return $this->customerPaymentMethod;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyCustomerPaymentMethodUserError[]
     */
    public function getUserErrors(): ?array
    {
        return $this->userErrors;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['customerPaymentMethod']) && $data['customerPaymentMethod'] !== null) {
                $instance->customerPaymentMethod = ShopifyCustomerPaymentMethod::fromArray($data['customerPaymentMethod']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyCustomerPaymentMethodUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->customerPaymentMethod !== null) {
                $data['customerPaymentMethod'] = $this->customerPaymentMethod->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
