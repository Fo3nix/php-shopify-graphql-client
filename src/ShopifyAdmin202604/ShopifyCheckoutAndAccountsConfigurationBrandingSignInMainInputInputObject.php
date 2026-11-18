<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for customizing the sign-in main container.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingSignInMainInputInputObject extends InputObject
{
    protected $backgroundImage;
    protected $colors;
    protected $section;

    /**
     * The background image of the main container.
     */
    public function setBackgroundImage(ShopifyCheckoutAndAccountsConfigurationBrandingImageInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingImageInputInputObject): static
    {
        $this->backgroundImage = $shopifyCheckoutAndAccountsConfigurationBrandingImageInputInputObject;

        return $this;
    }

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
    public function setSection(ShopifyCheckoutAndAccountsConfigurationBrandingMainSectionInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingMainSectionInputInputObject): static
    {
        $this->section = $shopifyCheckoutAndAccountsConfigurationBrandingMainSectionInputInputObject;

        return $this;
    }
}
