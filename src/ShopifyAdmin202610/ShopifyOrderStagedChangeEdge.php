<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyOrderStagedChangeHydrator;

/**
 * An auto-generated type which holds one OrderStagedChange and a cursor during pagination.
 */
class ShopifyOrderStagedChangeEdge
{
    protected $cursor;
    protected $node;

    
    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     *
     * @return string
     */
    public function getCursor(): ?string
    {
        return $this->cursor;
    }

    
    /**
     * The item at the end of OrderStagedChangeEdge.
     *
     * @return ShopifyOrderStagedChangeAddCustomItem|ShopifyOrderStagedChangeAddLineItemDiscount|ShopifyOrderStagedChangeAddShippingLine|ShopifyOrderStagedChangeAddVariant|ShopifyOrderStagedChangeDecrementItem|ShopifyOrderStagedChangeIncrementItem|ShopifyOrderStagedChangeRemoveDiscount|ShopifyOrderStagedChangeRemoveShippingLine
     */
    public function getNode(): ShopifyOrderStagedChangeAddCustomItem|ShopifyOrderStagedChangeAddLineItemDiscount|ShopifyOrderStagedChangeAddShippingLine|ShopifyOrderStagedChangeAddVariant|ShopifyOrderStagedChangeDecrementItem|ShopifyOrderStagedChangeIncrementItem|ShopifyOrderStagedChangeRemoveDiscount|ShopifyOrderStagedChangeRemoveShippingLine|null
    {
        return $this->node;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['cursor']) && $data['cursor'] !== null) {
                $instance->cursor = $data['cursor'];
            }
            if (isset($data['node']) && $data['node'] !== null) {
                $instance->node = ShopifyOrderStagedChangeHydrator::fromArray($data['node']);
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
            if ($this->cursor !== null) {
                $data['cursor'] = $this->cursor;
            }
            if ($this->node !== null) {
                $data['node'] = ShopifyOrderStagedChangeHydrator::toArray($this->node);
            }
            return $data;
        }
}
