<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMailingAddress;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifySubscriptionDeliveryMethodShippingOption;

/**
 * Represents a shipping delivery method: a mailing address and a shipping option.
 */
class ShopifySubscriptionDeliveryMethodShipping
{
    protected $address;
    protected $shippingOption;

    
    /**
     * The address to ship to.
     *
     * @return ShopifyMailingAddress
     */
    public function getAddress(): ?ShopifyMailingAddress
    {
        return $this->address;
    }

    
    /**
     * The details of the shipping method to use.
     *
     * @return ShopifySubscriptionDeliveryMethodShippingOption
     */
    public function getShippingOption(): ?ShopifySubscriptionDeliveryMethodShippingOption
    {
        return $this->shippingOption;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['address']) && $data['address'] !== null) {
                $instance->address = ShopifyMailingAddress::fromArray($data['address']);
            }
            if (isset($data['shippingOption']) && $data['shippingOption'] !== null) {
                $instance->shippingOption = ShopifySubscriptionDeliveryMethodShippingOption::fromArray($data['shippingOption']);
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
            if ($this->address !== null) {
                $data['address'] = $this->address->asArray();
            }
            if ($this->shippingOption !== null) {
                $data['shippingOption'] = $this->shippingOption->asArray();
            }
            return $data;
        }
}
