<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMarket;

/**
 * Represents a parent/child relationship between two markets.
 */
class ShopifyMarketRelationship implements ShopifyNode
{
    protected $childMarket;
    protected $id;
    protected $parentMarket;

    
    /**
     * The child market in the relationship.
     *
     * @return ShopifyMarket
     */
    public function getChildMarket(): ?ShopifyMarket
    {
        return $this->childMarket;
    }

    
    /**
     * The unique identifier for the market relationship.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The parent market in the relationship.
     *
     * @return ShopifyMarket
     */
    public function getParentMarket(): ?ShopifyMarket
    {
        return $this->parentMarket;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['childMarket']) && $data['childMarket'] !== null) {
                $instance->childMarket = ShopifyMarket::fromArray($data['childMarket']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['parentMarket']) && $data['parentMarket'] !== null) {
                $instance->parentMarket = ShopifyMarket::fromArray($data['parentMarket']);
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
            if ($this->childMarket !== null) {
                $data['childMarket'] = $this->childMarket->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->parentMarket !== null) {
                $data['parentMarket'] = $this->parentMarket->asArray();
            }
            return $data;
        }
}
