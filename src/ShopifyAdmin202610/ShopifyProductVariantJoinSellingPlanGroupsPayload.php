<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyProductVariant;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySellingPlanGroupUserError;

/**
 * Return type for `productVariantJoinSellingPlanGroups` mutation.
 */
class ShopifyProductVariantJoinSellingPlanGroupsPayload
{
    protected $productVariant;
    protected $userErrors;

    
    /**
     * The product variant object.
     *
     * @return ShopifyProductVariant
     */
    public function getProductVariant(): ?ShopifyProductVariant
    {
        return $this->productVariant;
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
            if (isset($data['productVariant']) && $data['productVariant'] !== null) {
                $instance->productVariant = ShopifyProductVariant::fromArray($data['productVariant']);
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
            if ($this->productVariant !== null) {
                $data['productVariant'] = $this->productVariant->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
