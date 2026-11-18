<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCompanyContactRoleAssignment;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyBusinessCustomerUserError;

/**
 * Return type for `companyLocationAssignRoles` mutation.
 */
class ShopifyCompanyLocationAssignRolesPayload
{
    protected $roleAssignments;
    protected $userErrors;

    
    /**
     * A list of newly created assignments of company contacts to a company location.
     *
     * @return ShopifyCompanyContactRoleAssignment[]
     */
    public function getRoleAssignments(): ?array
    {
        return $this->roleAssignments;
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
            if (isset($data['roleAssignments']) && $data['roleAssignments'] !== null) {
                $instance->roleAssignments = array_map(function($item) { return ShopifyCompanyContactRoleAssignment::fromArray($item); }, $data['roleAssignments']);
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
            if ($this->roleAssignments !== null) {
                $data['roleAssignments'] = array_map(function($item) { return $item->asArray(); }, $this->roleAssignments);
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
