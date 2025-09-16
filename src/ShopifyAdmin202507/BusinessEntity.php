<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\BusinessEntityAddress;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ShopifyPaymentsAccount;

class BusinessEntity
{
    protected $address;
    protected $archived;
    protected $companyName;
    protected $displayName;
    protected $id;
    protected $primary;
    protected $shopifyPaymentsAccount;

    
    /**
     * @return BusinessEntityAddress
     */
    public function getAddress()
    {
        return $this->address;
    }

    
    /**
     * @return bool
     */
    public function getArchived()
    {
        return $this->archived;
    }

    
    /**
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    
    /**
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
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
    public function getPrimary()
    {
        return $this->primary;
    }

    
    /**
     * @return ShopifyPaymentsAccount
     */
    public function getShopifyPaymentsAccount()
    {
        return $this->shopifyPaymentsAccount;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['address']) && $data['address'] !== null) {
                $instance->address = BusinessEntityAddress::fromArray($data['address']);
            }
            if (isset($data['archived']) && $data['archived'] !== null) {
                $instance->archived = $data['archived'];
            }
            if (isset($data['companyName']) && $data['companyName'] !== null) {
                $instance->companyName = $data['companyName'];
            }
            if (isset($data['displayName']) && $data['displayName'] !== null) {
                $instance->displayName = $data['displayName'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['primary']) && $data['primary'] !== null) {
                $instance->primary = $data['primary'];
            }
            if (isset($data['shopifyPaymentsAccount']) && $data['shopifyPaymentsAccount'] !== null) {
                $instance->shopifyPaymentsAccount = ShopifyPaymentsAccount::fromArray($data['shopifyPaymentsAccount']);
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
            if ($this->address !== null) {
                $data['address'] = $this->address->asArray();
            }
            if ($this->archived !== null) {
                $data['archived'] = $this->archived;
            }
            if ($this->companyName !== null) {
                $data['companyName'] = $this->companyName;
            }
            if ($this->displayName !== null) {
                $data['displayName'] = $this->displayName;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->primary !== null) {
                $data['primary'] = $this->primary;
            }
            if ($this->shopifyPaymentsAccount !== null) {
                $data['shopifyPaymentsAccount'] = $this->shopifyPaymentsAccount->asArray();
            }
            return $data;
        }
}
