<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCompanyLocation;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyStaffMember;

/**
 * A representation of store's staff member who is assigned to a [company location](https://shopify.dev/api/admin-graphql/latest/objects/CompanyLocation) of the shop. The staff member's actions will be limited to objects associated with the assigned company location.
 */
class ShopifyCompanyLocationStaffMemberAssignment implements ShopifyNode
{
    protected $companyLocation;
    protected $id;
    protected $staffMember;

    
    /**
     * The company location the staff member is assigned to.
     *
     * @return ShopifyCompanyLocation
     */
    public function getCompanyLocation(): ?ShopifyCompanyLocation
    {
        return $this->companyLocation;
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
     * Represents the data of a staff member who's assigned to a company location.
     *
     * @return ShopifyStaffMember
     */
    public function getStaffMember(): ?ShopifyStaffMember
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
