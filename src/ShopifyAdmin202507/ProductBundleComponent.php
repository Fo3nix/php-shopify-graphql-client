<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Product;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ProductVariantConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Count;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ProductBundleComponentOptionSelection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ProductBundleComponentQuantityOption;

class ProductBundleComponent
{
    protected $componentProduct;
    protected $componentVariants;
    protected $componentVariantsCount;
    protected $optionSelections;
    protected $quantity;
    protected $quantityOption;

    
    /**
     * @return Product
     */
    public function getComponentProduct()
    {
        return $this->componentProduct;
    }

    
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
     * @return ProductBundleComponentOptionSelection[]
     */
    public function getOptionSelections()
    {
        return $this->optionSelections;
    }

    
    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    
    /**
     * @return ProductBundleComponentQuantityOption
     */
    public function getQuantityOption()
    {
        return $this->quantityOption;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['componentProduct']) && $data['componentProduct'] !== null) {
                $instance->componentProduct = Product::fromArray($data['componentProduct']);
            }
            if (isset($data['componentVariants']) && $data['componentVariants'] !== null) {
                $instance->componentVariants = ProductVariantConnection::fromArray($data['componentVariants']);
            }
            if (isset($data['componentVariantsCount']) && $data['componentVariantsCount'] !== null) {
                $instance->componentVariantsCount = Count::fromArray($data['componentVariantsCount']);
            }
            if (isset($data['optionSelections']) && $data['optionSelections'] !== null) {
                $instance->optionSelections = array_map(function($item) { return ProductBundleComponentOptionSelection::fromArray($item); }, $data['optionSelections']);
            }
            if (isset($data['quantity']) && $data['quantity'] !== null) {
                $instance->quantity = $data['quantity'];
            }
            if (isset($data['quantityOption']) && $data['quantityOption'] !== null) {
                $instance->quantityOption = ProductBundleComponentQuantityOption::fromArray($data['quantityOption']);
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
            if ($this->componentProduct !== null) {
                $data['componentProduct'] = $this->componentProduct->asArray();
            }
            if ($this->componentVariants !== null) {
                $data['componentVariants'] = $this->componentVariants->asArray();
            }
            if ($this->componentVariantsCount !== null) {
                $data['componentVariantsCount'] = $this->componentVariantsCount->asArray();
            }
            if ($this->optionSelections !== null) {
                $data['optionSelections'] = array_map(function($item) { return $item->asArray(); }, $this->optionSelections);
            }
            if ($this->quantity !== null) {
                $data['quantity'] = $this->quantity;
            }
            if ($this->quantityOption !== null) {
                $data['quantityOption'] = $this->quantityOption->asArray();
            }
            return $data;
        }
}
