<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCustomerPaymentMethodGetDuplicationDataUserError;

/**
 * Return type for `customerPaymentMethodGetDuplicationData` mutation.
 */
class ShopifyCustomerPaymentMethodGetDuplicationDataPayload
{
    protected $encryptedDuplicationData;
    protected $userErrors;

    
    /**
     * The encrypted data from the payment method to be duplicated.
     *
     * @return string
     */
    public function getEncryptedDuplicationData(): ?string
    {
        return $this->encryptedDuplicationData;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyCustomerPaymentMethodGetDuplicationDataUserError[]
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
            if (isset($data['encryptedDuplicationData']) && $data['encryptedDuplicationData'] !== null) {
                $instance->encryptedDuplicationData = $data['encryptedDuplicationData'];
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyCustomerPaymentMethodGetDuplicationDataUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->encryptedDuplicationData !== null) {
                $data['encryptedDuplicationData'] = $this->encryptedDuplicationData;
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
