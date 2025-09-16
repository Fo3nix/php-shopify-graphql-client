<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Carbon\Carbon;

class StaffMemberPrivateData
{
    protected $accountSettingsUrl;
    protected $createdAt;
    protected $permissions;

    
    /**
     * @return string
     */
    public function getAccountSettingsUrl()
    {
        return $this->accountSettingsUrl;
    }

    
    /**
     * @return Carbon
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    
    /**
     * @return StaffMemberPermissionEnumObject[]
     */
    public function getPermissions()
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
