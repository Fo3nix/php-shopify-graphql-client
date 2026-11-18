<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySellingPlanGroupUserError;

/**
 * Return type for `sellingPlanGroupRemoveProductVariants` mutation.
 */
class ShopifySellingPlanGroupRemoveProductVariantsPayload
{
    protected $removedProductVariantIds;
    protected $userErrors;

    
    /**
     * The removed product variant ids.
     *
     * @return string[]
     */
    public function getRemovedProductVariantIds(): ?array
    {
        return $this->removedProductVariantIds;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifySellingPlanGroupUserError[]
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
            if (isset($data['removedProductVariantIds']) && $data['removedProductVariantIds'] !== null) {
                $instance->removedProductVariantIds = $data['removedProductVariantIds'];
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifySellingPlanGroupUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->removedProductVariantIds !== null) {
                $data['removedProductVariantIds'] = $this->removedProductVariantIds;
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
