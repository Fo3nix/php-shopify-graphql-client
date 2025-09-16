<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class CustomerAccountsV2
{
    protected $customerAccountsVersion;
    protected $loginLinksVisibleOnStorefrontAndCheckout;
    protected $loginRequiredAtCheckout;
    protected $url;

    
    /**
     * @return CustomerAccountsVersionEnumObject
     */
    public function getCustomerAccountsVersion()
    {
        return $this->customerAccountsVersion;
    }

    
    /**
     * @return bool
     */
    public function getLoginLinksVisibleOnStorefrontAndCheckout()
    {
        return $this->loginLinksVisibleOnStorefrontAndCheckout;
    }

    
    /**
     * @return bool
     */
    public function getLoginRequiredAtCheckout()
    {
        return $this->loginRequiredAtCheckout;
    }

    
    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['customerAccountsVersion']) && $data['customerAccountsVersion'] !== null) {
                $instance->customerAccountsVersion = $data['customerAccountsVersion'];
            }
            if (isset($data['loginLinksVisibleOnStorefrontAndCheckout']) && $data['loginLinksVisibleOnStorefrontAndCheckout'] !== null) {
                $instance->loginLinksVisibleOnStorefrontAndCheckout = $data['loginLinksVisibleOnStorefrontAndCheckout'];
            }
            if (isset($data['loginRequiredAtCheckout']) && $data['loginRequiredAtCheckout'] !== null) {
                $instance->loginRequiredAtCheckout = $data['loginRequiredAtCheckout'];
            }
            if (isset($data['url']) && $data['url'] !== null) {
                $instance->url = $data['url'];
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
            if ($this->customerAccountsVersion !== null) {
                $data['customerAccountsVersion'] = $this->customerAccountsVersion;
            }
            if ($this->loginLinksVisibleOnStorefrontAndCheckout !== null) {
                $data['loginLinksVisibleOnStorefrontAndCheckout'] = $this->loginLinksVisibleOnStorefrontAndCheckout;
            }
            if ($this->loginRequiredAtCheckout !== null) {
                $data['loginRequiredAtCheckout'] = $this->loginRequiredAtCheckout;
            }
            if ($this->url !== null) {
                $data['url'] = $this->url;
            }
            return $data;
        }
}
