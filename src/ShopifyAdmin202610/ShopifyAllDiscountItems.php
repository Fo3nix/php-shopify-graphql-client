<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

/**
 * Represents a discount configuration that applies to all items in a customer's cart without restriction. This object enables store-wide promotions that affect every product equally.
 *
 * For example, a "Sitewide 10% Off Everything" sale would target all items, ensuring that every product in the customer's cart receives the promotional discount regardless of category or collection.
 *
 * This universal targeting approach simplifies promotional campaigns and provides customers with clear, straightforward savings across the entire product catalog.
 */
class ShopifyAllDiscountItems
{
    protected $allItems;

    
    /**
     * Whether all items are eligible for the discount. This value always returns `true`.
     *
     * @return bool
     */
    public function getAllItems(): ?bool
    {
        return $this->allItems;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['allItems']) && $data['allItems'] !== null) {
                $instance->allItems = $data['allItems'];
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
            if ($this->allItems !== null) {
                $data['allItems'] = $this->allItems;
            }
            return $data;
        }
}
