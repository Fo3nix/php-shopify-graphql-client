<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyProduct;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyProductVariant;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMediaUserError;

/**
 * Return type for `productVariantAppendMedia` mutation.
 */
class ShopifyProductVariantAppendMediaPayload
{
    protected $product;
    protected $productVariants;
    protected $userErrors;

    
    /**
     * The product associated with the variants and media.
     *
     * @return ShopifyProduct
     */
    public function getProduct(): ?ShopifyProduct
    {
        return $this->product;
    }

    
    /**
     * The product variants that were updated.
     *
     * @return ShopifyProductVariant[]
     */
    public function getProductVariants(): ?array
    {
        return $this->productVariants;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyMediaUserError[]
     */
    public function getUserErrors(): ?array
    {
        return $this->userErrors;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['product']) && $data['product'] !== null) {
                $instance->product = ShopifyProduct::fromArray($data['product']);
            }
            if (isset($data['productVariants']) && $data['productVariants'] !== null) {
                $instance->productVariants = array_map(function($item) { return ShopifyProductVariant::fromArray($item); }, $data['productVariants']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyMediaUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->product !== null) {
                $data['product'] = $this->product->asArray();
            }
            if ($this->productVariants !== null) {
                $data['productVariants'] = array_map(function($item) { return $item->asArray(); }, $this->productVariants);
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
