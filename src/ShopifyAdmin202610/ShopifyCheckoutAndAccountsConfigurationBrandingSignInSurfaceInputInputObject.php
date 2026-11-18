<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for customizing the sign-in surface.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingSignInSurfaceInputInputObject extends InputObject
{
    protected $components;

    /**
     * The sign-in components.
     */
    public function setComponents(ShopifyCheckoutAndAccountsConfigurationBrandingSignInComponentsInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingSignInComponentsInputInputObject): static
    {
        $this->components = $shopifyCheckoutAndAccountsConfigurationBrandingSignInComponentsInputInputObject;

        return $this;
    }
}
