<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCompanyLocation;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyStaffMember;

class ShopifyCompanyLocationStaffMemberAssignment
{
    protected $companyLocation;
    protected $id;
    protected $staffMember;

    
    /**
     * @return ShopifyCompanyLocation
     */
    public function getCompanyLocation()
    {
        return $this->companyLocation;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return ShopifyStaffMember
     */
    public function getStaffMember()
    {
        return $this->staffMember;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['companyLocation']) && $data['companyLocation'] !== null) {
                $instance->companyLocation = ShopifyCompanyLocation::fromArray($data['companyLocation']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['staffMember']) && $data['staffMember'] !== null) {
                $instance->staffMember = ShopifyStaffMember::fromArray($data['staffMember']);
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
            if ($this->companyLocation !== null) {
                $data['companyLocation'] = $this->companyLocation->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->staffMember !== null) {
                $data['staffMember'] = $this->staffMember->asArray();
            }
            return $data;
        }
}
