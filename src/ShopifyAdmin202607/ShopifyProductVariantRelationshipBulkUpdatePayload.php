<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyProductVariant;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyProductVariantRelationshipBulkUpdateUserError;

/**
 * Return type for `productVariantRelationshipBulkUpdate` mutation.
 */
class ShopifyProductVariantRelationshipBulkUpdatePayload
{
    protected $parentProductVariants;
    protected $userErrors;

    
    /**
     * The product variants with successfully updated product variant relationships.
     *
     * @return ShopifyProductVariant[]
     */
    public function getParentProductVariants(): ?array
    {
        return $this->parentProductVariants;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyProductVariantRelationshipBulkUpdateUserError[]
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
            if (isset($data['parentProductVariants']) && $data['parentProductVariants'] !== null) {
                $instance->parentProductVariants = array_map(function($item) { return ShopifyProductVariant::fromArray($item); }, $data['parentProductVariants']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyProductVariantRelationshipBulkUpdateUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->parentProductVariants !== null) {
                $data['parentProductVariants'] = array_map(function($item) { return $item->asArray(); }, $this->parentProductVariants);
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
