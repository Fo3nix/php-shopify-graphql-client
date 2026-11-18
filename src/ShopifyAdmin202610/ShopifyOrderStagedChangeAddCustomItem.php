<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMoneyV2;

/**
 * A change to the order representing the addition of a
 * custom line item. For example, you might want to add gift wrapping service
 * as a custom line item.
 */
class ShopifyOrderStagedChangeAddCustomItem
{
    protected $originalUnitPrice;
    protected $quantity;
    protected $title;

    
    /**
     * The price of an individual item without any discounts applied. This value can't be negative.
     *
     * @return ShopifyMoneyV2
     */
    public function getOriginalUnitPrice(): ?ShopifyMoneyV2
    {
        return $this->originalUnitPrice;
    }

    
    /**
     * The quantity of the custom item to add to the order. This value must be greater than zero.
     *
     * @return int
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    
    /**
     * The title of the custom item.
     *
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['originalUnitPrice']) && $data['originalUnitPrice'] !== null) {
                $instance->originalUnitPrice = ShopifyMoneyV2::fromArray($data['originalUnitPrice']);
            }
            if (isset($data['quantity']) && $data['quantity'] !== null) {
                $instance->quantity = $data['quantity'];
            }
            if (isset($data['title']) && $data['title'] !== null) {
                $instance->title = $data['title'];
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
            if ($this->originalUnitPrice !== null) {
                $data['originalUnitPrice'] = $this->originalUnitPrice->asArray();
            }
            if ($this->quantity !== null) {
                $data['quantity'] = $this->quantity;
            }
            if ($this->title !== null) {
                $data['title'] = $this->title;
            }
            return $data;
        }
}
