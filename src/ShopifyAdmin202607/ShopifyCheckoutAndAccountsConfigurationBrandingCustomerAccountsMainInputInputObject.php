<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for customizing the main container.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsMainInputInputObject extends InputObject
{
    protected $colors;
    protected $section;

    /**
     * The colors customizations.
     */
    public function setColors(ShopifyCheckoutAndAccountsConfigurationBrandingColorsInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingColorsInputInputObject): static
    {
        $this->colors = $shopifyCheckoutAndAccountsConfigurationBrandingColorsInputInputObject;

        return $this;
    }

    /**
     * The customizations for the main sections.
     */
    public function setSection(ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsMainSectionInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsMainSectionInputInputObject): static
    {
        $this->section = $shopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsMainSectionInputInputObject;

        return $this;
    }
}
