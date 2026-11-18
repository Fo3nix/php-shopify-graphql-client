<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyProductVariantConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCount;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyProduct;

/**
 * The product component information.
 */
class ShopifyProductComponentType
{
    protected $componentVariants;
    protected $componentVariantsCount;
    protected $nonComponentVariants;
    protected $nonComponentVariantsCount;
    protected $product;

    
    /**
     * The list of products' variants that are components.
     *
     * @return ShopifyProductVariantConnection
     */
    public function getComponentVariants(): ?ShopifyProductVariantConnection
    {
        return $this->componentVariants;
    }

    
    /**
     * The number of component variants for the product component.
     *
     * @return ShopifyCount
     */
    public function getComponentVariantsCount(): ?ShopifyCount
    {
        return $this->componentVariantsCount;
    }

    
    /**
     * The list of products' variants that are not components.
     *
     * @return ShopifyProductVariantConnection
     */
    public function getNonComponentVariants(): ?ShopifyProductVariantConnection
    {
        return $this->nonComponentVariants;
    }

    
    /**
     * The number of non_components variants for the product component.
     *
     * @return ShopifyCount
     */
    public function getNonComponentVariantsCount(): ?ShopifyCount
    {
        return $this->nonComponentVariantsCount;
    }

    
    /**
     * The product that's a component.
     *
     * @return ShopifyProduct
     */
    public function getProduct(): ?ShopifyProduct
    {
        return $this->product;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['componentVariants']) && $data['componentVariants'] !== null) {
                $instance->componentVariants = ShopifyProductVariantConnection::fromArray($data['componentVariants']);
            }
            if (isset($data['componentVariantsCount']) && $data['componentVariantsCount'] !== null) {
                $instance->componentVariantsCount = ShopifyCount::fromArray($data['componentVariantsCount']);
            }
            if (isset($data['nonComponentVariants']) && $data['nonComponentVariants'] !== null) {
                $instance->nonComponentVariants = ShopifyProductVariantConnection::fromArray($data['nonComponentVariants']);
            }
            if (isset($data['nonComponentVariantsCount']) && $data['nonComponentVariantsCount'] !== null) {
                $instance->nonComponentVariantsCount = ShopifyCount::fromArray($data['nonComponentVariantsCount']);
            }
            if (isset($data['product']) && $data['product'] !== null) {
                $instance->product = ShopifyProduct::fromArray($data['product']);
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
            if ($this->componentVariants !== null) {
                $data['componentVariants'] = $this->componentVariants->asArray();
            }
            if ($this->componentVariantsCount !== null) {
                $data['componentVariantsCount'] = $this->componentVariantsCount->asArray();
            }
            if ($this->nonComponentVariants !== null) {
                $data['nonComponentVariants'] = $this->nonComponentVariants->asArray();
            }
            if ($this->nonComponentVariantsCount !== null) {
                $data['nonComponentVariantsCount'] = $this->nonComponentVariantsCount->asArray();
            }
            if ($this->product !== null) {
                $data['product'] = $this->product->asArray();
            }
            return $data;
        }
}
