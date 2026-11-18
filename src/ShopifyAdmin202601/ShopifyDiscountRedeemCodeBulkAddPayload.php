<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyDiscountRedeemCodeBulkCreation;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyDiscountUserError;

/**
 * Return type for `discountRedeemCodeBulkAdd` mutation.
 */
class ShopifyDiscountRedeemCodeBulkAddPayload
{
    protected $bulkCreation;
    protected $userErrors;

    
    /**
     * The ID of bulk operation that creates multiple unique discount codes.
     * You can use the
     * [`discountRedeemCodeBulkCreation` query](https://shopify.dev/api/admin-graphql/latest/queries/discountRedeemCodeBulkCreation)
     * to track the status of the bulk operation.
     *
     * @return ShopifyDiscountRedeemCodeBulkCreation
     */
    public function getBulkCreation(): ?ShopifyDiscountRedeemCodeBulkCreation
    {
        return $this->bulkCreation;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyDiscountUserError[]
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
            if (isset($data['bulkCreation']) && $data['bulkCreation'] !== null) {
                $instance->bulkCreation = ShopifyDiscountRedeemCodeBulkCreation::fromArray($data['bulkCreation']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyDiscountUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->bulkCreation !== null) {
                $data['bulkCreation'] = $this->bulkCreation->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
