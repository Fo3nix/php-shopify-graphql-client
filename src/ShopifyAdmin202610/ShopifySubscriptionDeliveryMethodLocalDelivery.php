<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMailingAddress;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySubscriptionDeliveryMethodLocalDeliveryOption;

class ShopifySubscriptionDeliveryMethodLocalDelivery
{
    protected $address;
    protected $localDeliveryOption;

    
    /**
     * @return ShopifyMailingAddress
     */
    public function getAddress()
    {
        return $this->address;
    }

    
    /**
     * @return ShopifySubscriptionDeliveryMethodLocalDeliveryOption
     */
    public function getLocalDeliveryOption()
    {
        return $this->localDeliveryOption;
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
            if (isset($data['localDeliveryOption']) && $data['localDeliveryOption'] !== null) {
                $instance->localDeliveryOption = ShopifySubscriptionDeliveryMethodLocalDeliveryOption::fromArray($data['localDeliveryOption']);
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
            if ($this->localDeliveryOption !== null) {
                $data['localDeliveryOption'] = $this->localDeliveryOption->asArray();
            }
            return $data;
        }
}
