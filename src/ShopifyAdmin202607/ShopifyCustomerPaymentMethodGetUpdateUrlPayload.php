<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCustomerPaymentMethodGetUpdateUrlUserError;

/**
 * Return type for `customerPaymentMethodGetUpdateUrl` mutation.
 */
class ShopifyCustomerPaymentMethodGetUpdateUrlPayload
{
    protected $updatePaymentMethodUrl;
    protected $userErrors;

    
    /**
     * The URL to redirect the customer to update the payment method.
     *
     * @return string
     */
    public function getUpdatePaymentMethodUrl(): mixed
    {
        return $this->updatePaymentMethodUrl;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyCustomerPaymentMethodGetUpdateUrlUserError[]
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
            if (isset($data['updatePaymentMethodUrl']) && $data['updatePaymentMethodUrl'] !== null) {
                $instance->updatePaymentMethodUrl = $data['updatePaymentMethodUrl'];
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyCustomerPaymentMethodGetUpdateUrlUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->updatePaymentMethodUrl !== null) {
                $data['updatePaymentMethodUrl'] = $this->updatePaymentMethodUrl;
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
