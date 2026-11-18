<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyProductVariantContextualPricing;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyProductPriceRangeV2;

/**
 * The price of a [product](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product) in a specific country. Shows the minimum and maximum variant prices through the price range and the count of fixed quantity rules that apply to the product's variants in the given pricing context.
 */
class ShopifyProductContextualPricing
{
    protected $fixedQuantityRulesCount;
    protected $maxVariantPricing;
    protected $minVariantPricing;
    protected $priceRange;

    
    /**
     * The number of fixed quantity rules for the product's variants on the price list.
     *
     * @return int
     */
    public function getFixedQuantityRulesCount(): ?int
    {
        return $this->fixedQuantityRulesCount;
    }

    
    /**
     * The pricing of the variant with the highest price in the given context.
     *
     * @return ShopifyProductVariantContextualPricing
     */
    public function getMaxVariantPricing(): ?ShopifyProductVariantContextualPricing
    {
        return $this->maxVariantPricing;
    }

    
    /**
     * The pricing of the variant with the lowest price in the given context.
     *
     * @return ShopifyProductVariantContextualPricing
     */
    public function getMinVariantPricing(): ?ShopifyProductVariantContextualPricing
    {
        return $this->minVariantPricing;
    }

    
    /**
     * The minimum and maximum prices of a product, expressed in decimal numbers.
     * For example, if the product is priced between $10.00 and $50.00,
     * then the price range is $10.00 - $50.00.
     *
     * @return ShopifyProductPriceRangeV2
     */
    public function getPriceRange(): ?ShopifyProductPriceRangeV2
    {
        return $this->priceRange;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['fixedQuantityRulesCount']) && $data['fixedQuantityRulesCount'] !== null) {
                $instance->fixedQuantityRulesCount = $data['fixedQuantityRulesCount'];
            }
            if (isset($data['maxVariantPricing']) && $data['maxVariantPricing'] !== null) {
                $instance->maxVariantPricing = ShopifyProductVariantContextualPricing::fromArray($data['maxVariantPricing']);
            }
            if (isset($data['minVariantPricing']) && $data['minVariantPricing'] !== null) {
                $instance->minVariantPricing = ShopifyProductVariantContextualPricing::fromArray($data['minVariantPricing']);
            }
            if (isset($data['priceRange']) && $data['priceRange'] !== null) {
                $instance->priceRange = ShopifyProductPriceRangeV2::fromArray($data['priceRange']);
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
            if ($this->fixedQuantityRulesCount !== null) {
                $data['fixedQuantityRulesCount'] = $this->fixedQuantityRulesCount;
            }
            if ($this->maxVariantPricing !== null) {
                $data['maxVariantPricing'] = $this->maxVariantPricing->asArray();
            }
            if ($this->minVariantPricing !== null) {
                $data['minVariantPricing'] = $this->minVariantPricing->asArray();
            }
            if ($this->priceRange !== null) {
                $data['priceRange'] = $this->priceRange->asArray();
            }
            return $data;
        }
}
