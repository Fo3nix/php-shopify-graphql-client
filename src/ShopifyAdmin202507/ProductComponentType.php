<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ProductVariantConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Count;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Product;

class ProductComponentType
{
    protected $componentVariants;
    protected $componentVariantsCount;
    protected $nonComponentVariants;
    protected $nonComponentVariantsCount;
    protected $product;

    
    /**
     * @return ProductVariantConnection
     */
    public function getComponentVariants()
    {
        return $this->componentVariants;
    }

    
    /**
     * @return Count
     */
    public function getComponentVariantsCount()
    {
        return $this->componentVariantsCount;
    }

    
    /**
     * @return ProductVariantConnection
     */
    public function getNonComponentVariants()
    {
        return $this->nonComponentVariants;
    }

    
    /**
     * @return Count
     */
    public function getNonComponentVariantsCount()
    {
        return $this->nonComponentVariantsCount;
    }

    
    /**
     * @return Product
     */
    public function getProduct()
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
                $instance->componentVariants = ProductVariantConnection::fromArray($data['componentVariants']);
            }
            if (isset($data['componentVariantsCount']) && $data['componentVariantsCount'] !== null) {
                $instance->componentVariantsCount = Count::fromArray($data['componentVariantsCount']);
            }
            if (isset($data['nonComponentVariants']) && $data['nonComponentVariants'] !== null) {
                $instance->nonComponentVariants = ProductVariantConnection::fromArray($data['nonComponentVariants']);
            }
            if (isset($data['nonComponentVariantsCount']) && $data['nonComponentVariantsCount'] !== null) {
                $instance->nonComponentVariantsCount = Count::fromArray($data['nonComponentVariantsCount']);
            }
            if (isset($data['product']) && $data['product'] !== null) {
                $instance->product = Product::fromArray($data['product']);
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
