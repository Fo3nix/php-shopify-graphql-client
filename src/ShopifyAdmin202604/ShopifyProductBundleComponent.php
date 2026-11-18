<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyProduct;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyProductVariantConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCount;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyProductBundleComponentOptionSelection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyProductBundleComponentQuantityOption;

/**
 * The product's component information.
 */
class ShopifyProductBundleComponent
{
    protected $componentProduct;
    protected $componentVariants;
    protected $componentVariantsCount;
    protected $optionSelections;
    protected $quantity;
    protected $quantityOption;

    
    /**
     * The product that's related as a component.
     *
     * @return ShopifyProduct
     */
    public function getComponentProduct(): ?ShopifyProduct
    {
        return $this->componentProduct;
    }

    
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
     * The options in the parent and the component options they're connected to, along with the chosen option values
     * that appear in the bundle.
     *
     * @return ShopifyProductBundleComponentOptionSelection[]
     */
    public function getOptionSelections(): ?array
    {
        return $this->optionSelections;
    }

    
    /**
     * The quantity of the component product set for this bundle line.
     * It will be null if there's a quantityOption present.
     *
     * @return int
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    
    /**
     * The quantity as option of the component product. It will be null if there's a quantity set.
     *
     * @return ShopifyProductBundleComponentQuantityOption
     */
    public function getQuantityOption(): ?ShopifyProductBundleComponentQuantityOption
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
                $instance->componentProduct = ShopifyProduct::fromArray($data['componentProduct']);
            }
            if (isset($data['componentVariants']) && $data['componentVariants'] !== null) {
                $instance->componentVariants = ShopifyProductVariantConnection::fromArray($data['componentVariants']);
            }
            if (isset($data['componentVariantsCount']) && $data['componentVariantsCount'] !== null) {
                $instance->componentVariantsCount = ShopifyCount::fromArray($data['componentVariantsCount']);
            }
            if (isset($data['optionSelections']) && $data['optionSelections'] !== null) {
                $instance->optionSelections = array_map(function($item) { return ShopifyProductBundleComponentOptionSelection::fromArray($item); }, $data['optionSelections']);
            }
            if (isset($data['quantity']) && $data['quantity'] !== null) {
                $instance->quantity = $data['quantity'];
            }
            if (isset($data['quantityOption']) && $data['quantityOption'] !== null) {
                $instance->quantityOption = ShopifyProductBundleComponentQuantityOption::fromArray($data['quantityOption']);
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
