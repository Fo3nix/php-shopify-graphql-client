<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifySellingPlanGroup;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifySellingPlanGroupUserError;

/**
 * Return type for `sellingPlanGroupCreate` mutation.
 */
class ShopifySellingPlanGroupCreatePayload
{
    protected $sellingPlanGroup;
    protected $userErrors;

    
    /**
     * The created selling plan group object.
     *
     * @return ShopifySellingPlanGroup
     */
    public function getSellingPlanGroup(): ?ShopifySellingPlanGroup
    {
        return $this->sellingPlanGroup;
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
            if (isset($data['sellingPlanGroup']) && $data['sellingPlanGroup'] !== null) {
                $instance->sellingPlanGroup = ShopifySellingPlanGroup::fromArray($data['sellingPlanGroup']);
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
            if ($this->sellingPlanGroup !== null) {
                $data['sellingPlanGroup'] = $this->sellingPlanGroup->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
