<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCompany;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCompanyContact;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCompanyLocation;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCompanyContactRole;

/**
 * The CompanyContactRoleAssignment describes the company and location associated to a company contact's role.
 */
class ShopifyCompanyContactRoleAssignment implements ShopifyNode
{
    protected $company;
    protected $companyContact;
    protected $companyLocation;
    protected $createdAt;
    protected $id;
    protected $role;
    protected $updatedAt;

    
    /**
     * The company this role assignment belongs to.
     *
     * @return ShopifyCompany
     */
    public function getCompany(): ?ShopifyCompany
    {
        return $this->company;
    }

    
    /**
     * The company contact for whom this role is assigned.
     *
     * @return ShopifyCompanyContact
     */
    public function getCompanyContact(): ?ShopifyCompanyContact
    {
        return $this->companyContact;
    }

    
    /**
     * The company location to which the role is assigned.
     *
     * @return ShopifyCompanyLocation
     */
    public function getCompanyLocation(): ?ShopifyCompanyLocation
    {
        return $this->companyLocation;
    }

    
    /**
     * The date and time ([ISO 8601 format](http://en.wikipedia.org/wiki/ISO_8601)) when the assignment record was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * A globally-unique ID.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The role that's assigned to the company contact.
     *
     * @return ShopifyCompanyContactRole
     */
    public function getRole(): ?ShopifyCompanyContactRole
    {
        return $this->role;
    }

    
    /**
     * The date and time ([ISO 8601 format](http://en.wikipedia.org/wiki/ISO_8601)) when the assignment record was last updated.
     *
     * @return Carbon
     */
    public function getUpdatedAt(): ?Carbon
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
