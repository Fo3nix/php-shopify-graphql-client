<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyProduct;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyProductOptionsDeleteUserError;

/**
 * Return type for `productOptionsDelete` mutation.
 */
class ShopifyProductOptionsDeletePayload
{
    protected $deletedOptionsIds;
    protected $product;
    protected $userErrors;

    
    /**
     * IDs of the options deleted.
     *
     * @return string[]
     */
    public function getDeletedOptionsIds(): ?array
    {
        return $this->deletedOptionsIds;
    }

    
    /**
     * The updated product object.
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
     * @return ShopifyProductOptionsDeleteUserError[]
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
            if (isset($data['deletedOptionsIds']) && $data['deletedOptionsIds'] !== null) {
                $instance->deletedOptionsIds = $data['deletedOptionsIds'];
            }
            if (isset($data['product']) && $data['product'] !== null) {
                $instance->product = ShopifyProduct::fromArray($data['product']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyProductOptionsDeleteUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->deletedOptionsIds !== null) {
                $data['deletedOptionsIds'] = $this->deletedOptionsIds;
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
