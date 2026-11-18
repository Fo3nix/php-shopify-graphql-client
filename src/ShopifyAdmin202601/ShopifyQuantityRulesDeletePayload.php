<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyQuantityRuleUserError;

/**
 * Return type for `quantityRulesDelete` mutation.
 */
class ShopifyQuantityRulesDeletePayload
{
    protected $deletedQuantityRulesVariantIds;
    protected $userErrors;

    
    /**
     * A list of product variant IDs whose quantity rules were removed from the price list.
     *
     * @return string[]
     */
    public function getDeletedQuantityRulesVariantIds(): ?array
    {
        return $this->deletedQuantityRulesVariantIds;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyQuantityRuleUserError[]
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
            if (isset($data['deletedQuantityRulesVariantIds']) && $data['deletedQuantityRulesVariantIds'] !== null) {
                $instance->deletedQuantityRulesVariantIds = $data['deletedQuantityRulesVariantIds'];
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyQuantityRuleUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->deletedQuantityRulesVariantIds !== null) {
                $data['deletedQuantityRulesVariantIds'] = $this->deletedQuantityRulesVariantIds;
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
