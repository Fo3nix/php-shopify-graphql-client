<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\DiscountItems;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\DiscountCustomerGetsValue;

class DiscountCustomerGets
{
    protected $appliesOnOneTimePurchase;
    protected $appliesOnSubscription;
    protected $items;
    protected $value;

    
    /**
     * @return bool
     */
    public function getAppliesOnOneTimePurchase()
    {
        return $this->appliesOnOneTimePurchase;
    }

    
    /**
     * @return bool
     */
    public function getAppliesOnSubscription()
    {
        return $this->appliesOnSubscription;
    }

    
    /**
     * @return DiscountItems
     */
    public function getItems()
    {
        return $this->items;
    }

    
    /**
     * @return DiscountCustomerGetsValue
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
            if (isset($data['appliesOnOneTimePurchase']) && $data['appliesOnOneTimePurchase'] !== null) {
                $instance->appliesOnOneTimePurchase = $data['appliesOnOneTimePurchase'];
            }
            if (isset($data['appliesOnSubscription']) && $data['appliesOnSubscription'] !== null) {
                $instance->appliesOnSubscription = $data['appliesOnSubscription'];
            }
            if (isset($data['items']) && $data['items'] !== null) {
                $instance->items = DiscountItems::fromArray($data['items']);
            }
            if (isset($data['value']) && $data['value'] !== null) {
                $instance->value = DiscountCustomerGetsValue::fromArray($data['value']);
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
            if ($this->appliesOnOneTimePurchase !== null) {
                $data['appliesOnOneTimePurchase'] = $this->appliesOnOneTimePurchase;
            }
            if ($this->appliesOnSubscription !== null) {
                $data['appliesOnSubscription'] = $this->appliesOnSubscription;
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
