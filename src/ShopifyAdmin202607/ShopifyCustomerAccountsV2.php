<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

/**
 * Information about the shop's customer account-related settings. Includes the [customer account version](https://shopify.dev/docs/api/admin-graphql/latest/objects/CustomerAccountsV2#field-CustomerAccountsV2.fields.customerAccountsVersion) which indicates whether the merchant is using new customer accounts or legacy customer accounts, along with other account configuration such as login requirements.
 */
class ShopifyCustomerAccountsV2
{
    protected $customerAccountsVersion;
    protected $loginLinksVisibleOnStorefrontAndCheckout;
    protected $loginRequiredAtCheckout;
    protected $url;

    
    /**
     * Indicates which version of customer accounts the merchant is using in online store and checkout.
     *
     * @return string A ShopifyCustomerAccountsVersionEnumObject value
     */
    public function getCustomerAccountsVersion(): ?string
    {
        return $this->customerAccountsVersion;
    }

    
    /**
     * Login links are shown in online store and checkout.
     *
     * @return bool
     */
    public function getLoginLinksVisibleOnStorefrontAndCheckout(): ?bool
    {
        return $this->loginLinksVisibleOnStorefrontAndCheckout;
    }

    
    /**
     * Customers are required to log in to their account before checkout.
     *
     * @return bool
     */
    public function getLoginRequiredAtCheckout(): ?bool
    {
        return $this->loginRequiredAtCheckout;
    }

    
    /**
     * The root url for the customer accounts pages.
     *
     * @return string
     */
    public function getUrl(): mixed
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
