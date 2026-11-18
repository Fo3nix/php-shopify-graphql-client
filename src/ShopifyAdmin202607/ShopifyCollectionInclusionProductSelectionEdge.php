<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCollectionInclusionProductSelection;

/**
 * An auto-generated type which holds one CollectionInclusionProductSelection and a cursor during pagination.
 */
class ShopifyCollectionInclusionProductSelectionEdge
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
     * The item at the end of CollectionInclusionProductSelectionEdge.
     *
     * @return ShopifyCollectionInclusionProductSelection
     */
    public function getNode(): ?ShopifyCollectionInclusionProductSelection
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
                $instance->node = ShopifyCollectionInclusionProductSelection::fromArray($data['node']);
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
                $data['node'] = $this->node->asArray();
            }
            return $data;
        }
}
