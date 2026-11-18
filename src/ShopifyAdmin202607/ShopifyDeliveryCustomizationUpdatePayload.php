<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyDeliveryCustomization;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyDeliveryCustomizationError;

/**
 * Return type for `deliveryCustomizationUpdate` mutation.
 */
class ShopifyDeliveryCustomizationUpdatePayload
{
    protected $deliveryCustomization;
    protected $userErrors;

    
    /**
     * Returns the updated delivery customization.
     *
     * @return ShopifyDeliveryCustomization
     */
    public function getDeliveryCustomization(): ?ShopifyDeliveryCustomization
    {
        return $this->deliveryCustomization;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyDeliveryCustomizationError[]
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
            if (isset($data['deliveryCustomization']) && $data['deliveryCustomization'] !== null) {
                $instance->deliveryCustomization = ShopifyDeliveryCustomization::fromArray($data['deliveryCustomization']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyDeliveryCustomizationError::fromArray($item); }, $data['userErrors']);
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
            if ($this->deliveryCustomization !== null) {
                $data['deliveryCustomization'] = $this->deliveryCustomization->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
