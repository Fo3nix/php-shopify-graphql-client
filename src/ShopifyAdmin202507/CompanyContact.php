<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Company;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Customer;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\DraftOrderConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\OrderConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CompanyContactRoleAssignmentConnection;

class CompanyContact
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
     * @return Company
     */
    public function getCompany()
    {
        return $this->company;
    }

    
    /**
     * @return Carbon
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    
    /**
     * @return Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    
    /**
     * @return DraftOrderConnection
     */
    public function getDraftOrders()
    {
        return $this->draftOrders;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return bool
     */
    public function getIsMainContact()
    {
        return $this->isMainContact;
    }

    
    /**
     * @return string
     */
    public function getLifetimeDuration()
    {
        return $this->lifetimeDuration;
    }

    
    /**
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    
    /**
     * @return OrderConnection
     */
    public function getOrders()
    {
        return $this->orders;
    }

    
    /**
     * @return CompanyContactRoleAssignmentConnection
     */
    public function getRoleAssignments()
    {
        return $this->roleAssignments;
    }

    
    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
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
                $instance->company = Company::fromArray($data['company']);
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['customer']) && $data['customer'] !== null) {
                $instance->customer = Customer::fromArray($data['customer']);
            }
            if (isset($data['draftOrders']) && $data['draftOrders'] !== null) {
                $instance->draftOrders = DraftOrderConnection::fromArray($data['draftOrders']);
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
                $instance->orders = OrderConnection::fromArray($data['orders']);
            }
            if (isset($data['roleAssignments']) && $data['roleAssignments'] !== null) {
                $instance->roleAssignments = CompanyContactRoleAssignmentConnection::fromArray($data['roleAssignments']);
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
