<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for customizing surfaces branding.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingSurfacesInputInputObject extends InputObject
{
    protected $checkout;
    protected $customerAccounts;
    protected $signIn;

    /**
     * The checkout surface customizations.
     */
    public function setCheckout(ShopifyCheckoutAndAccountsConfigurationBrandingCheckoutSurfaceInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingCheckoutSurfaceInputInputObject): static
    {
        $this->checkout = $shopifyCheckoutAndAccountsConfigurationBrandingCheckoutSurfaceInputInputObject;

        return $this;
    }

    /**
     * The customer accounts surface customizations.
     */
    public function setCustomerAccounts(ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsSurfaceInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsSurfaceInputInputObject): static
    {
        $this->customerAccounts = $shopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsSurfaceInputInputObject;

        return $this;
    }

    /**
     * The sign-in surface customizations.
     */
    public function setSignIn(ShopifyCheckoutAndAccountsConfigurationBrandingSignInSurfaceInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingSignInSurfaceInputInputObject): static
    {
        $this->signIn = $shopifyCheckoutAndAccountsConfigurationBrandingSignInSurfaceInputInputObject;

        return $this;
    }
}
