<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyProductVariant;

/**
 * A product variant component that is included within a bundle.
 *
 * These are the individual product variants that make up a bundle product,
 * where each component has a specific required quantity.
 */
class ShopifyProductVariantComponent implements ShopifyNode
{
    protected $id;
    protected $productVariant;
    protected $quantity;

    
    /**
     * A globally-unique ID.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The product variant associated with the component.
     *
     * @return ShopifyProductVariant
     */
    public function getProductVariant(): ?ShopifyProductVariant
    {
        return $this->productVariant;
    }

    
    /**
     * The required quantity of the component.
     *
     * @return int
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['productVariant']) && $data['productVariant'] !== null) {
                $instance->productVariant = ShopifyProductVariant::fromArray($data['productVariant']);
            }
            if (isset($data['quantity']) && $data['quantity'] !== null) {
                $instance->quantity = $data['quantity'];
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
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->productVariant !== null) {
                $data['productVariant'] = $this->productVariant->asArray();
            }
            if ($this->quantity !== null) {
                $data['quantity'] = $this->quantity;
            }
            return $data;
        }
}
