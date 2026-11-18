<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyProduct;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyProductSetOperation;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyGiftCardProductSetUserError;

/**
 * Return type for `giftCardProductSet` mutation.
 */
class ShopifyGiftCardProductSetPayload
{
    protected $product;
    protected $productSetOperation;
    protected $userErrors;

    
    /**
     * The gift card product object.
     *
     * @return ShopifyProduct
     */
    public function getProduct(): ?ShopifyProduct
    {
        return $this->product;
    }

    
    /**
     * The product set operation, returned when run in asynchronous mode.
     *
     * @return ShopifyProductSetOperation
     */
    public function getProductSetOperation(): ?ShopifyProductSetOperation
    {
        return $this->productSetOperation;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyGiftCardProductSetUserError[]
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
            if (isset($data['productSetOperation']) && $data['productSetOperation'] !== null) {
                $instance->productSetOperation = ShopifyProductSetOperation::fromArray($data['productSetOperation']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyGiftCardProductSetUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->productSetOperation !== null) {
                $data['productSetOperation'] = $this->productSetOperation->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
