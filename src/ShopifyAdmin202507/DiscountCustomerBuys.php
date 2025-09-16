<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\DiscountItems;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\DiscountCustomerBuysValue;

class DiscountCustomerBuys
{
    protected $isOneTimePurchase;
    protected $isSubscription;
    protected $items;
    protected $value;

    
    /**
     * @return bool
     */
    public function getIsOneTimePurchase()
    {
        return $this->isOneTimePurchase;
    }

    
    /**
     * @return bool
     */
    public function getIsSubscription()
    {
        return $this->isSubscription;
    }

    
    /**
     * @return DiscountItems
     */
    public function getItems()
    {
        return $this->items;
    }

    
    /**
     * @return DiscountCustomerBuysValue
     */
    public function getValue()
    {
        return $this->value;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['isOneTimePurchase']) && $data['isOneTimePurchase'] !== null) {
                $instance->isOneTimePurchase = $data['isOneTimePurchase'];
            }
            if (isset($data['isSubscription']) && $data['isSubscription'] !== null) {
                $instance->isSubscription = $data['isSubscription'];
            }
            if (isset($data['items']) && $data['items'] !== null) {
                $instance->items = DiscountItems::fromArray($data['items']);
            }
            if (isset($data['value']) && $data['value'] !== null) {
                $instance->value = DiscountCustomerBuysValue::fromArray($data['value']);
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
            if ($this->isOneTimePurchase !== null) {
                $data['isOneTimePurchase'] = $this->isOneTimePurchase;
            }
            if ($this->isSubscription !== null) {
                $data['isSubscription'] = $this->isSubscription;
            }
            if ($this->items !== null) {
                $data['items'] = $this->items->asArray();
            }
            if ($this->value !== null) {
                $data['value'] = $this->value->asArray();
            }
            return $data;
        }
}
