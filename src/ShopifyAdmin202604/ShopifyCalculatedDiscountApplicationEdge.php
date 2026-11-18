<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCalculatedDiscountApplicationHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCalculatedDiscountApplication;

/**
 * An auto-generated type which holds one CalculatedDiscountApplication and a cursor during pagination.
 */
class ShopifyCalculatedDiscountApplicationEdge
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
     * The item at the end of CalculatedDiscountApplicationEdge.
     *
     * @return ShopifyCalculatedDiscountApplication
     */
    public function getNode(): ?ShopifyCalculatedDiscountApplication
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
                $instance->node = ShopifyCalculatedDiscountApplicationHydrator::fromArray($data['node']);
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
                $data['node'] = ShopifyCalculatedDiscountApplicationHydrator::toArray($this->node);
            }
            return $data;
        }
}
