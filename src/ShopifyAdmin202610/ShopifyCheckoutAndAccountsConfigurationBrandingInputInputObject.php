<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for customizing Checkout and Customer Accounts branding.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingInputInputObject extends InputObject
{
    protected $designTokens;
    protected $components;
    protected $surfaces;

    /**
     * The design tokens allows you to set values that represent specific attributes of your brand like color and font. These attributes are used throughout the user interface. This brings consistency and allows you to easily make broad design changes.
     */
    public function setDesignTokens(ShopifyCheckoutAndAccountsConfigurationBrandingDesignTokensInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingDesignTokensInputInputObject): static
    {
        $this->designTokens = $shopifyCheckoutAndAccountsConfigurationBrandingDesignTokensInputInputObject;

        return $this;
    }

    /**
     * The customizations that apply to specific components or areas of the user interface.
     */
    public function setComponents(ShopifyCheckoutAndAccountsConfigurationBrandingComponentsInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingComponentsInputInputObject): static
    {
        $this->components = $shopifyCheckoutAndAccountsConfigurationBrandingComponentsInputInputObject;

        return $this;
    }

    /**
     * The surface-level customizations.
     */
    public function setSurfaces(ShopifyCheckoutAndAccountsConfigurationBrandingSurfacesInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingSurfacesInputInputObject): static
    {
        $this->surfaces = $shopifyCheckoutAndAccountsConfigurationBrandingSurfacesInputInputObject;

        return $this;
    }
}
