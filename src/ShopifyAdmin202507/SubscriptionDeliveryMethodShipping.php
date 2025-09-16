<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MailingAddress;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\SubscriptionDeliveryMethodShippingOption;

class SubscriptionDeliveryMethodShipping
{
    protected $address;
    protected $shippingOption;

    
    /**
     * @return MailingAddress
     */
    public function getAddress()
    {
        return $this->address;
    }

    
    /**
     * @return SubscriptionDeliveryMethodShippingOption
     */
    public function getShippingOption()
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
                $instance->address = MailingAddress::fromArray($data['address']);
            }
            if (isset($data['shippingOption']) && $data['shippingOption'] !== null) {
                $instance->shippingOption = SubscriptionDeliveryMethodShippingOption::fromArray($data['shippingOption']);
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
