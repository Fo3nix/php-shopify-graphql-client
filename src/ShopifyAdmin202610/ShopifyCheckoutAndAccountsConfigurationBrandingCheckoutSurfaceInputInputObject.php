<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for customizing the Checkout surface.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingCheckoutSurfaceInputInputObject extends InputObject
{
    protected $components;

    /**
     * The Checkout components.
     */
    public function setComponents(ShopifyCheckoutAndAccountsConfigurationBrandingCheckoutComponentsInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingCheckoutComponentsInputInputObject): static
    {
        $this->components = $shopifyCheckoutAndAccountsConfigurationBrandingCheckoutComponentsInputInputObject;

        return $this;
    }
}
