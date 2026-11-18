<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyProductDeleteOperation;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyShop;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyUserError;

/**
 * Return type for `productDelete` mutation.
 */
class ShopifyProductDeletePayload
{
    protected $deletedProductId;
    protected $productDeleteOperation;
    protected $shop;
    protected $userErrors;

    
    /**
     * The ID of the deleted product.
     *
     * @return string
     */
    public function getDeletedProductId(): ?string
    {
        return $this->deletedProductId;
    }

    
    /**
     * The product delete operation, returned when run in asynchronous mode.
     *
     * @return ShopifyProductDeleteOperation
     */
    public function getProductDeleteOperation(): ?ShopifyProductDeleteOperation
    {
        return $this->productDeleteOperation;
    }

    
    /**
     * The shop associated with the product.
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
            if (isset($data['deletedProductId']) && $data['deletedProductId'] !== null) {
                $instance->deletedProductId = $data['deletedProductId'];
            }
            if (isset($data['productDeleteOperation']) && $data['productDeleteOperation'] !== null) {
                $instance->productDeleteOperation = ShopifyProductDeleteOperation::fromArray($data['productDeleteOperation']);
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
            if ($this->deletedProductId !== null) {
                $data['deletedProductId'] = $this->deletedProductId;
            }
            if ($this->productDeleteOperation !== null) {
                $data['productDeleteOperation'] = $this->productDeleteOperation->asArray();
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
