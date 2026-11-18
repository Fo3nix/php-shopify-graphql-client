<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyBulkOperation;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyBulkOperationUserError;

/**
 * Return type for `bulkOperationRunQuery` mutation.
 */
class ShopifyBulkOperationRunQueryPayload
{
    protected $bulkOperation;
    protected $userErrors;

    
    /**
     * The newly created bulk operation.
     *
     * @return ShopifyBulkOperation
     */
    public function getBulkOperation(): ?ShopifyBulkOperation
    {
        return $this->bulkOperation;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyBulkOperationUserError[]
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
            if (isset($data['bulkOperation']) && $data['bulkOperation'] !== null) {
                $instance->bulkOperation = ShopifyBulkOperation::fromArray($data['bulkOperation']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyBulkOperationUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->bulkOperation !== null) {
                $data['bulkOperation'] = $this->bulkOperation->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
