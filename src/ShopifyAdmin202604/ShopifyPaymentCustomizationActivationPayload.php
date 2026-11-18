<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyPaymentCustomizationError;

/**
 * Return type for `paymentCustomizationActivation` mutation.
 */
class ShopifyPaymentCustomizationActivationPayload
{
    protected $ids;
    protected $userErrors;

    
    /**
     * The IDs of the updated payment customizations.
     *
     * @return string[]
     */
    public function getIds(): ?array
    {
        return $this->ids;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyPaymentCustomizationError[]
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
            if (isset($data['ids']) && $data['ids'] !== null) {
                $instance->ids = $data['ids'];
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyPaymentCustomizationError::fromArray($item); }, $data['userErrors']);
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
            if ($this->ids !== null) {
                $data['ids'] = $this->ids;
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
