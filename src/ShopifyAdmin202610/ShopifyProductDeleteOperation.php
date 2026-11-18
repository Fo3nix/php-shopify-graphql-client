<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyProduct;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyUserError;

/**
 * An entity that represents details of an asynchronous
 * [ProductDelete](https://shopify.dev/api/admin-graphql/current/mutations/productDelete) mutation.
 *
 * By querying this entity with the
 * [productOperation](https://shopify.dev/api/admin-graphql/current/queries/productOperation) query
 * using the ID that was returned when the product was deleted, this can be used to check the status of an operation.
 *
 * The `status` field indicates whether the operation is `CREATED`, `ACTIVE`, or `COMPLETE`.
 *
 * The `deletedProductId` field provides the ID of the deleted product.
 *
 * The `userErrors` field provides mutation errors that occurred during the operation.
 */
class ShopifyProductDeleteOperation implements ShopifyNode, ShopifyProductOperation
{
    protected $deletedProductId;
    protected $id;
    protected $product;
    protected $status;
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
     * A globally-unique ID.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The product on which the operation is being performed.
     *
     * @return ShopifyProduct
     */
    public function getProduct(): ?ShopifyProduct
    {
        return $this->product;
    }

    
    /**
     * The status of this operation.
     *
     * @return string A ShopifyProductOperationStatusEnumObject value
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    
    /**
     * Returns mutation errors occurred during background mutation processing.
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
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['product']) && $data['product'] !== null) {
                $instance->product = ShopifyProduct::fromArray($data['product']);
            }
            if (isset($data['status']) && $data['status'] !== null) {
                $instance->status = $data['status'];
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
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->product !== null) {
                $data['product'] = $this->product->asArray();
            }
            if ($this->status !== null) {
                $data['status'] = $this->status;
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
