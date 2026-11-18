<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for customizing the Express Checkout.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingExpressCheckoutInputInputObject extends InputObject
{
    protected $button;

    /**
     * The Express Checkout buttons customizations.
     */
    public function setButton(ShopifyCheckoutAndAccountsConfigurationBrandingExpressCheckoutButtonInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingExpressCheckoutButtonInputInputObject): static
    {
        $this->button = $shopifyCheckoutAndAccountsConfigurationBrandingExpressCheckoutButtonInputInputObject;

        return $this;
    }
}
