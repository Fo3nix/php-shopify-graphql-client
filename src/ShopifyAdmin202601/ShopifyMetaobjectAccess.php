<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

class ShopifyMetaobjectAccess
{
    protected $admin;
    protected $customerAccount;
    protected $storefront;

    
    /**
     * @return ShopifyMetaobjectAdminAccessEnumObject
     */
    public function getAdmin()
    {
        return $this->admin;
    }

    
    /**
     * @return ShopifyMetaobjectCustomerAccountAccessEnumObject
     */
    public function getCustomerAccount()
    {
        return $this->customerAccount;
    }

    
    /**
     * @return ShopifyMetaobjectStorefrontAccessEnumObject
     */
    public function getStorefront()
    {
        return $this->storefront;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['admin']) && $data['admin'] !== null) {
                $instance->admin = $data['admin'];
            }
            if (isset($data['customerAccount']) && $data['customerAccount'] !== null) {
                $instance->customerAccount = $data['customerAccount'];
            }
            if (isset($data['storefront']) && $data['storefront'] !== null) {
                $instance->storefront = $data['storefront'];
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
            if ($this->admin !== null) {
                $data['admin'] = $this->admin;
            }
            if ($this->customerAccount !== null) {
                $data['customerAccount'] = $this->customerAccount;
            }
            if ($this->storefront !== null) {
                $data['storefront'] = $this->storefront;
            }
            return $data;
        }
}
