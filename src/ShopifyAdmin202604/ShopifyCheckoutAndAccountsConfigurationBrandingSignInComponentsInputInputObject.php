<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for customizing the sign-in components.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingSignInComponentsInputInputObject extends InputObject
{
    protected $main;
    protected $header;

    /**
     * The main customizations.
     */
    public function setMain(ShopifyCheckoutAndAccountsConfigurationBrandingSignInMainInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingSignInMainInputInputObject): static
    {
        $this->main = $shopifyCheckoutAndAccountsConfigurationBrandingSignInMainInputInputObject;

        return $this;
    }

    /**
     * The header customizations.
     */
    public function setHeader(ShopifyCheckoutAndAccountsConfigurationBrandingSignInHeaderInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingSignInHeaderInputInputObject): static
    {
        $this->header = $shopifyCheckoutAndAccountsConfigurationBrandingSignInHeaderInputInputObject;

        return $this;
    }
}
