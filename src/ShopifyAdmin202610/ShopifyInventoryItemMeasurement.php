<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyWeight;

/**
 * Weight information for an [`InventoryItem`](https://shopify.dev/docs/api/admin-graphql/latest/objects/InventoryItem) when packaged. Provides the weight specification used for inventory management and shipping calculations. Learn more about [managing inventory](https://shopify.dev/docs/apps/build/orders-fulfillment/inventory-management-apps).
 */
class ShopifyInventoryItemMeasurement implements ShopifyNode
{
    protected $id;
    protected $weight;

    
    /**
     * A globally-unique ID.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The weight of the inventory item.
     *
     * @return ShopifyWeight
     */
    public function getWeight(): ?ShopifyWeight
    {
        return $this->weight;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['weight']) && $data['weight'] !== null) {
                $instance->weight = ShopifyWeight::fromArray($data['weight']);
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
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->weight !== null) {
                $data['weight'] = $this->weight->asArray();
            }
            return $data;
        }
}
