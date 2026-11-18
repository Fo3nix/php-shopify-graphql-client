<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyJob;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyProduct;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyProductDuplicateOperation;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyShop;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyUserError;

/**
 * Return type for `productDuplicate` mutation.
 */
class ShopifyProductDuplicatePayload
{
    protected $imageJob;
    protected $newProduct;
    protected $productDuplicateOperation;
    protected $shop;
    protected $userErrors;

    
    /**
     * The asynchronous job that duplicates the product images.
     *
     * @return ShopifyJob
     */
    public function getImageJob(): ?ShopifyJob
    {
        return $this->imageJob;
    }

    
    /**
     * The duplicated product.
     *
     * @return ShopifyProduct
     */
    public function getNewProduct(): ?ShopifyProduct
    {
        return $this->newProduct;
    }

    
    /**
     * The product duplicate operation, returned when run in asynchronous mode.
     *
     * @return ShopifyProductDuplicateOperation
     */
    public function getProductDuplicateOperation(): ?ShopifyProductDuplicateOperation
    {
        return $this->productDuplicateOperation;
    }

    
    /**
     * The user's shop.
     *
     * @return ShopifyShop
     */
    public function getShop(): ?ShopifyShop
    {
        return $this->shop;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyUserError[]
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
            if (isset($data['imageJob']) && $data['imageJob'] !== null) {
                $instance->imageJob = ShopifyJob::fromArray($data['imageJob']);
            }
            if (isset($data['newProduct']) && $data['newProduct'] !== null) {
                $instance->newProduct = ShopifyProduct::fromArray($data['newProduct']);
            }
            if (isset($data['productDuplicateOperation']) && $data['productDuplicateOperation'] !== null) {
                $instance->productDuplicateOperation = ShopifyProductDuplicateOperation::fromArray($data['productDuplicateOperation']);
            }
            if (isset($data['shop']) && $data['shop'] !== null) {
                $instance->shop = ShopifyShop::fromArray($data['shop']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->imageJob !== null) {
                $data['imageJob'] = $this->imageJob->asArray();
            }
            if ($this->newProduct !== null) {
                $data['newProduct'] = $this->newProduct->asArray();
            }
            if ($this->productDuplicateOperation !== null) {
                $data['productDuplicateOperation'] = $this->productDuplicateOperation->asArray();
            }
            if ($this->shop !== null) {
                $data['shop'] = $this->shop->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
