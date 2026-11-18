<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for customizing the main container.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingMainInputInputObject extends InputObject
{
    protected $colors;
    protected $divider;
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
     * Divider style and visibility on the main container.
     */
    public function setDivider(ShopifyCheckoutAndAccountsConfigurationBrandingContainerDividerInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingContainerDividerInputInputObject): static
    {
        $this->divider = $shopifyCheckoutAndAccountsConfigurationBrandingContainerDividerInputInputObject;

        return $this;
    }

    /**
     * The customizations for the main sections.
     */
    public function setSection(ShopifyCheckoutAndAccountsConfigurationBrandingMainSectionInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingMainSectionInputInputObject): static
    {
        $this->section = $shopifyCheckoutAndAccountsConfigurationBrandingMainSectionInputInputObject;

        return $this;
    }
}
