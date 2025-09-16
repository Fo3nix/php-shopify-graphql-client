<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\SubscriptionDeliveryOption;

class SubscriptionDeliveryOptionResultSuccess
{
    protected $deliveryOptions;

    
    /**
     * @return SubscriptionDeliveryOption[]
     */
    public function getDeliveryOptions()
    {
        return $this->deliveryOptions;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['deliveryOptions']) && $data['deliveryOptions'] !== null) {
                $instance->deliveryOptions = array_map(function($item) { return SubscriptionDeliveryOption::fromArray($item); }, $data['deliveryOptions']);
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
            if ($this->deliveryOptions !== null) {
                $data['deliveryOptions'] = array_map(function($item) { return $item->asArray(); }, $this->deliveryOptions);
            }
            return $data;
        }
}
