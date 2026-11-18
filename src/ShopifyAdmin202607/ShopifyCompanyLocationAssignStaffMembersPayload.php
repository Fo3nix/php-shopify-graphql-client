<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCompanyLocationStaffMemberAssignment;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyBusinessCustomerUserError;

/**
 * Return type for `companyLocationAssignStaffMembers` mutation.
 */
class ShopifyCompanyLocationAssignStaffMembersPayload
{
    protected $companyLocationStaffMemberAssignments;
    protected $userErrors;

    
    /**
     * The list of created staff member assignments.
     *
     * @return ShopifyCompanyLocationStaffMemberAssignment[]
     */
    public function getCompanyLocationStaffMemberAssignments(): ?array
    {
        return $this->companyLocationStaffMemberAssignments;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyBusinessCustomerUserError[]
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
            if (isset($data['companyLocationStaffMemberAssignments']) && $data['companyLocationStaffMemberAssignments'] !== null) {
                $instance->companyLocationStaffMemberAssignments = array_map(function($item) { return ShopifyCompanyLocationStaffMemberAssignment::fromArray($item); }, $data['companyLocationStaffMemberAssignments']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyBusinessCustomerUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->companyLocationStaffMemberAssignments !== null) {
                $data['companyLocationStaffMemberAssignments'] = array_map(function($item) { return $item->asArray(); }, $this->companyLocationStaffMemberAssignments);
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
