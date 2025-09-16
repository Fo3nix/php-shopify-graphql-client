<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\SubscriptionShippingOption;

class SubscriptionShippingOptionResultSuccess
{
    protected $shippingOptions;

    
    /**
     * @return SubscriptionShippingOption[]
     */
    public function getShippingOptions()
    {
        return $this->shippingOptions;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['shippingOptions']) && $data['shippingOptions'] !== null) {
                $instance->shippingOptions = array_map(function($item) { return SubscriptionShippingOption::fromArray($item); }, $data['shippingOptions']);
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
            if ($this->shippingOptions !== null) {
                $data['shippingOptions'] = array_map(function($item) { return $item->asArray(); }, $this->shippingOptions);
            }
            return $data;
        }
}
