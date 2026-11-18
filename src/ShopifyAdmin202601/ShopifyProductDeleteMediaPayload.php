<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMediaUserError;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyProduct;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyUserError;

/**
 * Return type for `productDeleteMedia` mutation.
 */
class ShopifyProductDeleteMediaPayload
{
    protected $deletedMediaIds;
    protected $deletedProductImageIds;
    protected $mediaUserErrors;
    protected $product;
    protected $userErrors;

    
    /**
     * List of media IDs which were deleted.
     *
     * @return string[]
     */
    public function getDeletedMediaIds(): ?array
    {
        return $this->deletedMediaIds;
    }

    
    /**
     * List of product image IDs which were deleted.
     *
     * @return string[]
     */
    public function getDeletedProductImageIds(): ?array
    {
        return $this->deletedProductImageIds;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyMediaUserError[]
     */
    public function getMediaUserErrors(): ?array
    {
        return $this->mediaUserErrors;
    }

    
    /**
     * The product associated with the deleted media.
     *
     * @return ShopifyProduct
     */
    public function getProduct(): ?ShopifyProduct
    {
        return $this->product;
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
            if (isset($data['deletedMediaIds']) && $data['deletedMediaIds'] !== null) {
                $instance->deletedMediaIds = $data['deletedMediaIds'];
            }
            if (isset($data['deletedProductImageIds']) && $data['deletedProductImageIds'] !== null) {
                $instance->deletedProductImageIds = $data['deletedProductImageIds'];
            }
            if (isset($data['mediaUserErrors']) && $data['mediaUserErrors'] !== null) {
                $instance->mediaUserErrors = array_map(function($item) { return ShopifyMediaUserError::fromArray($item); }, $data['mediaUserErrors']);
            }
            if (isset($data['product']) && $data['product'] !== null) {
                $instance->product = ShopifyProduct::fromArray($data['product']);
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
            if ($this->deletedMediaIds !== null) {
                $data['deletedMediaIds'] = $this->deletedMediaIds;
            }
            if ($this->deletedProductImageIds !== null) {
                $data['deletedProductImageIds'] = $this->deletedProductImageIds;
            }
            if ($this->mediaUserErrors !== null) {
                $data['mediaUserErrors'] = array_map(function($item) { return $item->asArray(); }, $this->mediaUserErrors);
            }
            if ($this->product !== null) {
                $data['product'] = $this->product->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
