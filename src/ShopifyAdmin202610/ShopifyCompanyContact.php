<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCompany;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCustomer;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyDraftOrderConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyOrderConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCompanyContactRoleAssignmentConnection;

/**
 * A person who acts on behalf of a [`Company`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Company) to make B2B purchases. Company contacts are associated with [`Customer`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Customer) accounts and can place orders on behalf of their company.
 *
 * Each contact can be assigned to one or more [`CompanyLocation`](https://shopify.dev/docs/api/admin-graphql/latest/objects/CompanyLocation) objects with specific roles that determine their permissions and access to catalogs, pricing, and payment terms configured for those locations.
 */
class ShopifyCompanyContact implements ShopifyNode
{
    protected $company;
    protected $createdAt;
    protected $customer;
    protected $draftOrders;
    protected $id;
    protected $isMainContact;
    protected $lifetimeDuration;
    protected $locale;
    protected $orders;
    protected $roleAssignments;
    protected $title;
    protected $updatedAt;

    
    /**
     * The company to which the contact belongs.
     *
     * @return ShopifyCompany
     */
    public function getCompany(): ?ShopifyCompany
    {
        return $this->company;
    }

    
    /**
     * The date and time ([ISO 8601 format](http://en.wikipedia.org/wiki/ISO_8601)) at which the company contact was created at Shopify.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * The customer associated to this contact.
     *
     * @return ShopifyCustomer
     */
    public function getCustomer(): ?ShopifyCustomer
    {
        return $this->customer;
    }

    
    /**
     * The list of draft orders for the company contact.
     *
     * @return ShopifyDraftOrderConnection
     */
    public function getDraftOrders(): ?ShopifyDraftOrderConnection
    {
        return $this->draftOrders;
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
     * Whether the contact is the main contact of the company.
     *
     * @return bool
     */
    public function getIsMainContact(): ?bool
    {
        return $this->isMainContact;
    }

    
    /**
     * The lifetime duration of the company contact, since its creation date on Shopify. Examples: `1 year`, `2 months`, `3 days`.
     *
     * @return string
     */
    public function getLifetimeDuration(): ?string
    {
        return $this->lifetimeDuration;
    }

    
    /**
     * The company contact's locale (language).
     *
     * @return string
     */
    public function getLocale(): ?string
    {
        return $this->locale;
    }

    
    /**
     * The list of orders for the company contact.
     *
     * @return ShopifyOrderConnection
     */
    public function getOrders(): ?ShopifyOrderConnection
    {
        return $this->orders;
    }

    
    /**
     * The list of roles assigned to this company contact.
     *
     * @return ShopifyCompanyContactRoleAssignmentConnection
     */
    public function getRoleAssignments(): ?ShopifyCompanyContactRoleAssignmentConnection
    {
        return $this->roleAssignments;
    }

    
    /**
     * The company contact's job title.
     *
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    
    /**
     * The date and time ([ISO 8601 format](http://en.wikipedia.org/wiki/ISO_8601)) at which the company contact was last updated.
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
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['customer']) && $data['customer'] !== null) {
                $instance->customer = ShopifyCustomer::fromArray($data['customer']);
            }
            if (isset($data['draftOrders']) && $data['draftOrders'] !== null) {
                $instance->draftOrders = ShopifyDraftOrderConnection::fromArray($data['draftOrders']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['isMainContact']) && $data['isMainContact'] !== null) {
                $instance->isMainContact = $data['isMainContact'];
            }
            if (isset($data['lifetimeDuration']) && $data['lifetimeDuration'] !== null) {
                $instance->lifetimeDuration = $data['lifetimeDuration'];
            }
            if (isset($data['locale']) && $data['locale'] !== null) {
                $instance->locale = $data['locale'];
            }
            if (isset($data['orders']) && $data['orders'] !== null) {
                $instance->orders = ShopifyOrderConnection::fromArray($data['orders']);
            }
            if (isset($data['roleAssignments']) && $data['roleAssignments'] !== null) {
                $instance->roleAssignments = ShopifyCompanyContactRoleAssignmentConnection::fromArray($data['roleAssignments']);
            }
            if (isset($data['title']) && $data['title'] !== null) {
                $instance->title = $data['title'];
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
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->customer !== null) {
                $data['customer'] = $this->customer->asArray();
            }
            if ($this->draftOrders !== null) {
                $data['draftOrders'] = $this->draftOrders->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->isMainContact !== null) {
                $data['isMainContact'] = $this->isMainContact;
            }
            if ($this->lifetimeDuration !== null) {
                $data['lifetimeDuration'] = $this->lifetimeDuration;
            }
            if ($this->locale !== null) {
                $data['locale'] = $this->locale;
            }
            if ($this->orders !== null) {
                $data['orders'] = $this->orders->asArray();
            }
            if ($this->roleAssignments !== null) {
                $data['roleAssignments'] = $this->roleAssignments->asArray();
            }
            if ($this->title !== null) {
                $data['title'] = $this->title;
            }
            if ($this->updatedAt !== null) {
                $data['updatedAt'] = $this->updatedAt->toIso8601String();
            }
            return $data;
        }
}
