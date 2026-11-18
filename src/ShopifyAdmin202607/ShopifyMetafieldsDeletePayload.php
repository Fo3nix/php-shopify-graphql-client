<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMetafieldIdentifier;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyUserError;

/**
 * Return type for `metafieldsDelete` mutation.
 */
class ShopifyMetafieldsDeletePayload
{
    protected $deletedMetafields;
    protected $userErrors;

    
    /**
     * List of metafield identifiers that were deleted, null if the corresponding metafield isn't found.
     *
     * @return ShopifyMetafieldIdentifier[]
     */
    public function getDeletedMetafields(): ?array
    {
        return $this->deletedMetafields;
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
            if (isset($data['deletedMetafields']) && $data['deletedMetafields'] !== null) {
                $instance->deletedMetafields = array_map(function($item) { return ShopifyMetafieldIdentifier::fromArray($item); }, $data['deletedMetafields']);
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
            if ($this->deletedMetafields !== null) {
                $data['deletedMetafields'] = array_map(function($item) { return $item->asArray(); }, $this->deletedMetafields);
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
