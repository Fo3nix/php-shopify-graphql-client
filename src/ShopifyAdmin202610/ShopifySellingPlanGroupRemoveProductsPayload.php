<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySellingPlanGroupUserError;

/**
 * Return type for `sellingPlanGroupRemoveProducts` mutation.
 */
class ShopifySellingPlanGroupRemoveProductsPayload
{
    protected $removedProductIds;
    protected $userErrors;

    
    /**
     * The removed product ids.
     *
     * @return string[]
     */
    public function getRemovedProductIds(): ?array
    {
        return $this->removedProductIds;
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
            if (isset($data['removedProductIds']) && $data['removedProductIds'] !== null) {
                $instance->removedProductIds = $data['removedProductIds'];
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
            if ($this->removedProductIds !== null) {
                $data['removedProductIds'] = $this->removedProductIds;
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
