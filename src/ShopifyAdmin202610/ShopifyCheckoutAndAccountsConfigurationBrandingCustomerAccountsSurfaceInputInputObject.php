<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for customizing the Customer Accounts surface.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsSurfaceInputInputObject extends InputObject
{
    protected $components;

    /**
     * The Customer Accounts components.
     */
    public function setComponents(ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsComponentsInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsComponentsInputInputObject): static
    {
        $this->components = $shopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsComponentsInputInputObject;

        return $this;
    }
}
