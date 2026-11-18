<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCollectionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyProductVariantConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyProductConnection;

/**
 * The items to which this price rule applies. This may be multiple products, product variants, collections or combinations of the aforementioned.
 */
class ShopifyPriceRuleItemEntitlements
{
    protected $collections;
    protected $productVariants;
    protected $products;
    protected $targetAllLineItems;

    
    /**
     * The collections to which the price rule applies.
     *
     * @return ShopifyCollectionConnection
     */
    public function getCollections(): ?ShopifyCollectionConnection
    {
        return $this->collections;
    }

    
    /**
     * The product variants to which the price rule applies.
     *
     * @return ShopifyProductVariantConnection
     */
    public function getProductVariants(): ?ShopifyProductVariantConnection
    {
        return $this->productVariants;
    }

    
    /**
     * The products to which the price rule applies.
     *
     * @return ShopifyProductConnection
     */
    public function getProducts(): ?ShopifyProductConnection
    {
        return $this->products;
    }

    
    /**
     * Whether the price rule applies to all line items.
     *
     * @return bool
     */
    public function getTargetAllLineItems(): ?bool
    {
        return $this->targetAllLineItems;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['collections']) && $data['collections'] !== null) {
                $instance->collections = ShopifyCollectionConnection::fromArray($data['collections']);
            }
            if (isset($data['productVariants']) && $data['productVariants'] !== null) {
                $instance->productVariants = ShopifyProductVariantConnection::fromArray($data['productVariants']);
            }
            if (isset($data['products']) && $data['products'] !== null) {
                $instance->products = ShopifyProductConnection::fromArray($data['products']);
            }
            if (isset($data['targetAllLineItems']) && $data['targetAllLineItems'] !== null) {
                $instance->targetAllLineItems = $data['targetAllLineItems'];
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
            if ($this->collections !== null) {
                $data['collections'] = $this->collections->asArray();
            }
            if ($this->productVariants !== null) {
                $data['productVariants'] = $this->productVariants->asArray();
            }
            if ($this->products !== null) {
                $data['products'] = $this->products->asArray();
            }
            if ($this->targetAllLineItems !== null) {
                $data['targetAllLineItems'] = $this->targetAllLineItems;
            }
            return $data;
        }
}
