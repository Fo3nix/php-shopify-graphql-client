<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyQuantityPriceBreakConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyProductVariant;

/**
 * Pricing for a [`ProductVariant`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductVariant) on a [`PriceList`](https://shopify.dev/docs/api/admin-graphql/latest/objects/PriceList). Represents the variant's price, compare-at price, and whether the price is fixed or calculated using percentage-based adjustments. The [`PriceListPriceOriginType`](https://shopify.dev/docs/api/admin-graphql/latest/enums/PriceListPriceOriginType) distinguishes between prices set directly on the price list (fixed) and prices calculated using the price list's adjustment configuration (relative).
 *
 * Learn more about [building catalogs with different pricing models](https://shopify.dev/docs/apps/build/markets/build-catalog).
 */
class ShopifyPriceListPrice
{
    protected $compareAtPrice;
    protected $originType;
    protected $price;
    protected $quantityPriceBreaks;
    protected $variant;

    
    /**
     * The compare-at price of the product variant on this price list.
     *
     * @return ShopifyMoneyV2
     */
    public function getCompareAtPrice(): ?ShopifyMoneyV2
    {
        return $this->compareAtPrice;
    }

    
    /**
     * The origin of a price, either fixed (defined on the price list) or relative (calculated using a price list adjustment configuration).
     *
     * @return string A ShopifyPriceListPriceOriginTypeEnumObject value
     */
    public function getOriginType(): ?string
    {
        return $this->originType;
    }

    
    /**
     * The price of the product variant on this price list.
     *
     * @return ShopifyMoneyV2
     */
    public function getPrice(): ?ShopifyMoneyV2
    {
        return $this->price;
    }

    
    /**
     * A list of quantity breaks for the product variant.
     *
     * @return ShopifyQuantityPriceBreakConnection
     */
    public function getQuantityPriceBreaks(): ?ShopifyQuantityPriceBreakConnection
    {
        return $this->quantityPriceBreaks;
    }

    
    /**
     * The product variant associated with this price.
     *
     * @return ShopifyProductVariant
     */
    public function getVariant(): ?ShopifyProductVariant
    {
        return $this->variant;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['compareAtPrice']) && $data['compareAtPrice'] !== null) {
                $instance->compareAtPrice = ShopifyMoneyV2::fromArray($data['compareAtPrice']);
            }
            if (isset($data['originType']) && $data['originType'] !== null) {
                $instance->originType = $data['originType'];
            }
            if (isset($data['price']) && $data['price'] !== null) {
                $instance->price = ShopifyMoneyV2::fromArray($data['price']);
            }
            if (isset($data['quantityPriceBreaks']) && $data['quantityPriceBreaks'] !== null) {
                $instance->quantityPriceBreaks = ShopifyQuantityPriceBreakConnection::fromArray($data['quantityPriceBreaks']);
            }
            if (isset($data['variant']) && $data['variant'] !== null) {
                $instance->variant = ShopifyProductVariant::fromArray($data['variant']);
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
            if ($this->compareAtPrice !== null) {
                $data['compareAtPrice'] = $this->compareAtPrice->asArray();
            }
            if ($this->originType !== null) {
                $data['originType'] = $this->originType;
            }
            if ($this->price !== null) {
                $data['price'] = $this->price->asArray();
            }
            if ($this->quantityPriceBreaks !== null) {
                $data['quantityPriceBreaks'] = $this->quantityPriceBreaks->asArray();
            }
            if ($this->variant !== null) {
                $data['variant'] = $this->variant->asArray();
            }
            return $data;
        }
}
