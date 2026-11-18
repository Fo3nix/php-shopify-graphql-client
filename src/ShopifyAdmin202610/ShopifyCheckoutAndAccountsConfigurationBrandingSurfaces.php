<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCheckoutAndAccountsConfigurationBrandingCheckoutSurface;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsSurface;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCheckoutAndAccountsConfigurationBrandingSignInSurface;

/**
 * The surface-specific component customizations for checkout and customer accounts.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingSurfaces
{
    protected $checkout;
    protected $customerAccounts;
    protected $signIn;

    
    /**
     * The checkout-specific component overrides.
     *
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingCheckoutSurface
     */
    public function getCheckout(): ?ShopifyCheckoutAndAccountsConfigurationBrandingCheckoutSurface
    {
        return $this->checkout;
    }

    
    /**
     * The customer accounts-specific component overrides.
     *
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsSurface
     */
    public function getCustomerAccounts(): ?ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsSurface
    {
        return $this->customerAccounts;
    }

    
    /**
     * The sign-in-specific component overrides.
     *
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingSignInSurface
     */
    public function getSignIn(): ?ShopifyCheckoutAndAccountsConfigurationBrandingSignInSurface
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
