<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCustomerSegmentMembersQuery;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCustomerSegmentMembersQueryUserError;

/**
 * Return type for `customerSegmentMembersQueryCreate` mutation.
 */
class ShopifyCustomerSegmentMembersQueryCreatePayload
{
    protected $customerSegmentMembersQuery;
    protected $userErrors;

    
    /**
     * The newly created customer segment members query.
     *
     * @return ShopifyCustomerSegmentMembersQuery
     */
    public function getCustomerSegmentMembersQuery(): ?ShopifyCustomerSegmentMembersQuery
    {
        return $this->customerSegmentMembersQuery;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyCustomerSegmentMembersQueryUserError[]
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
            if (isset($data['customerSegmentMembersQuery']) && $data['customerSegmentMembersQuery'] !== null) {
                $instance->customerSegmentMembersQuery = ShopifyCustomerSegmentMembersQuery::fromArray($data['customerSegmentMembersQuery']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyCustomerSegmentMembersQueryUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->customerSegmentMembersQuery !== null) {
                $data['customerSegmentMembersQuery'] = $this->customerSegmentMembersQuery->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
