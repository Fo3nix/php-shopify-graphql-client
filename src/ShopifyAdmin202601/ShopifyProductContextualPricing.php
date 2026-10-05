<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyProductVariantContextualPricing;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyProductPriceRangeV2;

class ShopifyProductContextualPricing
{
    protected $fixedQuantityRulesCount;
    protected $maxVariantPricing;
    protected $minVariantPricing;
    protected $priceRange;

    
    /**
     * @return int
     */
    public function getFixedQuantityRulesCount()
    {
        return $this->fixedQuantityRulesCount;
    }

    
    /**
     * @return ShopifyProductVariantContextualPricing
     */
    public function getMaxVariantPricing()
    {
        return $this->maxVariantPricing;
    }

    
    /**
     * @return ShopifyProductVariantContextualPricing
     */
    public function getMinVariantPricing()
    {
        return $this->minVariantPricing;
    }

    
    /**
     * @return ShopifyProductPriceRangeV2
     */
    public function getPriceRange()
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
