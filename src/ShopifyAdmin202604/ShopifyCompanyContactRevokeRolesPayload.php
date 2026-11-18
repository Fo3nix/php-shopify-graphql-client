<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyBusinessCustomerUserError;

/**
 * Return type for `companyContactRevokeRoles` mutation.
 */
class ShopifyCompanyContactRevokeRolesPayload
{
    protected $revokedRoleAssignmentIds;
    protected $userErrors;

    
    /**
     * A list of role assignment IDs that were removed from the company contact.
     *
     * @return string[]
     */
    public function getRevokedRoleAssignmentIds(): ?array
    {
        return $this->revokedRoleAssignmentIds;
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
            if (isset($data['revokedRoleAssignmentIds']) && $data['revokedRoleAssignmentIds'] !== null) {
                $instance->revokedRoleAssignmentIds = $data['revokedRoleAssignmentIds'];
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
            if ($this->revokedRoleAssignmentIds !== null) {
                $data['revokedRoleAssignmentIds'] = $this->revokedRoleAssignmentIds;
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
