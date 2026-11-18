<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Carbon\Carbon;

/**
 * Represents the data used to customize the Shopify admin experience for a logged-in staff member.
 */
class ShopifyStaffMemberPrivateData
{
    protected $accountSettingsUrl;
    protected $createdAt;
    protected $permissions;

    
    /**
     * The URL to the staff member's account settings page.
     *
     * @return string
     */
    public function getAccountSettingsUrl(): mixed
    {
        return $this->accountSettingsUrl;
    }

    
    /**
     * The date and time when the staff member was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * Access permissions for the staff member.
     *
     * @return string[] ShopifyStaffMemberPermissionEnumObject values
     */
    public function getPermissions(): ?array
    {
        return $this->permissions;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['accountSettingsUrl']) && $data['accountSettingsUrl'] !== null) {
                $instance->accountSettingsUrl = $data['accountSettingsUrl'];
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['permissions']) && $data['permissions'] !== null) {
                $instance->permissions = $data['permissions'];
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
            if ($this->accountSettingsUrl !== null) {
                $data['accountSettingsUrl'] = $this->accountSettingsUrl;
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->permissions !== null) {
                $data['permissions'] = $this->permissions;
            }
            return $data;
        }
}
