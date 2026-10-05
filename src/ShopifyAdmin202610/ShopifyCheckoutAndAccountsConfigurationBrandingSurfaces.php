<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCheckoutAndAccountsConfigurationBrandingCheckoutSurface;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsSurface;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCheckoutAndAccountsConfigurationBrandingSignInSurface;

class ShopifyCheckoutAndAccountsConfigurationBrandingSurfaces
{
    protected $checkout;
    protected $customerAccounts;
    protected $signIn;

    
    /**
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingCheckoutSurface
     */
    public function getCheckout()
    {
        return $this->checkout;
    }

    
    /**
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsSurface
     */
    public function getCustomerAccounts()
    {
        return $this->customerAccounts;
    }

    
    /**
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingSignInSurface
     */
    public function getSignIn()
    {
        return $this->signIn;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['checkout']) && $data['checkout'] !== null) {
                $instance->checkout = ShopifyCheckoutAndAccountsConfigurationBrandingCheckoutSurface::fromArray($data['checkout']);
            }
            if (isset($data['customerAccounts']) && $data['customerAccounts'] !== null) {
                $instance->customerAccounts = ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsSurface::fromArray($data['customerAccounts']);
            }
            if (isset($data['signIn']) && $data['signIn'] !== null) {
                $instance->signIn = ShopifyCheckoutAndAccountsConfigurationBrandingSignInSurface::fromArray($data['signIn']);
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
            if ($this->checkout !== null) {
                $data['checkout'] = $this->checkout->asArray();
            }
            if ($this->customerAccounts !== null) {
                $data['customerAccounts'] = $this->customerAccounts->asArray();
            }
            if ($this->signIn !== null) {
                $data['signIn'] = $this->signIn->asArray();
            }
            return $data;
        }
}
