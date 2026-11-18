<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifySellingPlanGroupUserError;

/**
 * Return type for `sellingPlanGroupDelete` mutation.
 */
class ShopifySellingPlanGroupDeletePayload
{
    protected $deletedSellingPlanGroupId;
    protected $userErrors;

    
    /**
     * The ID of the deleted selling plan group object.
     *
     * @return string
     */
    public function getDeletedSellingPlanGroupId(): ?string
    {
        return $this->deletedSellingPlanGroupId;
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
            if (isset($data['deletedSellingPlanGroupId']) && $data['deletedSellingPlanGroupId'] !== null) {
                $instance->deletedSellingPlanGroupId = $data['deletedSellingPlanGroupId'];
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
            if ($this->deletedSellingPlanGroupId !== null) {
                $data['deletedSellingPlanGroupId'] = $this->deletedSellingPlanGroupId;
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
