<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCompany;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCompanyContact;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCompanyLocation;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCompanyContactRole;

class ShopifyCompanyContactRoleAssignment
{
    protected $company;
    protected $companyContact;
    protected $companyLocation;
    protected $createdAt;
    protected $id;
    protected $role;
    protected $updatedAt;

    
    /**
     * @return ShopifyCompany
     */
    public function getCompany()
    {
        return $this->company;
    }

    
    /**
     * @return ShopifyCompanyContact
     */
    public function getCompanyContact()
    {
        return $this->companyContact;
    }

    
    /**
     * @return ShopifyCompanyLocation
     */
    public function getCompanyLocation()
    {
        return $this->companyLocation;
    }

    
    /**
     * @return Carbon
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return ShopifyCompanyContactRole
     */
    public function getRole()
    {
        return $this->role;
    }

    
    /**
     * @return Carbon
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['company']) && $data['company'] !== null) {
                $instance->company = ShopifyCompany::fromArray($data['company']);
            }
            if (isset($data['companyContact']) && $data['companyContact'] !== null) {
                $instance->companyContact = ShopifyCompanyContact::fromArray($data['companyContact']);
            }
            if (isset($data['companyLocation']) && $data['companyLocation'] !== null) {
                $instance->companyLocation = ShopifyCompanyLocation::fromArray($data['companyLocation']);
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['role']) && $data['role'] !== null) {
                $instance->role = ShopifyCompanyContactRole::fromArray($data['role']);
            }
            if (isset($data['updatedAt']) && $data['updatedAt'] !== null) {
                $instance->updatedAt = new Carbon($data['updatedAt']);
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
            if ($this->company !== null) {
                $data['company'] = $this->company->asArray();
            }
            if ($this->companyContact !== null) {
                $data['companyContact'] = $this->companyContact->asArray();
            }
            if ($this->companyLocation !== null) {
                $data['companyLocation'] = $this->companyLocation->asArray();
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->role !== null) {
                $data['role'] = $this->role->asArray();
            }
            if ($this->updatedAt !== null) {
                $data['updatedAt'] = $this->updatedAt->toIso8601String();
            }
            return $data;
        }
}
