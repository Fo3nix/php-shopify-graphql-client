<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyProductVariantConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCount;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyProduct;

class ShopifyProductComponentType
{
    protected $componentVariants;
    protected $componentVariantsCount;
    protected $nonComponentVariants;
    protected $nonComponentVariantsCount;
    protected $product;

    
    /**
     * @return ShopifyProductVariantConnection
     */
    public function getComponentVariants()
    {
        return $this->componentVariants;
    }

    
    /**
     * @return ShopifyCount
     */
    public function getComponentVariantsCount()
    {
        return $this->componentVariantsCount;
    }

    
    /**
     * @return ShopifyProductVariantConnection
     */
    public function getNonComponentVariants()
    {
        return $this->nonComponentVariants;
    }

    
    /**
     * @return ShopifyCount
     */
    public function getNonComponentVariantsCount()
    {
        return $this->nonComponentVariantsCount;
    }

    
    /**
     * @return ShopifyProduct
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
