<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for customizing the shared settings.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingSharedInputInputObject extends InputObject
{
    protected $cornerRadius;
    protected $typography;
    protected $colors;

    /**
     * Select a shared corner radius setting that overrides all other corner radii customizations.
     */
    public function setCornerRadius($shopifyCheckoutAndAccountsConfigurationBrandingSharedCornerRadius): static
    {
        $this->cornerRadius = new RawObject($shopifyCheckoutAndAccountsConfigurationBrandingSharedCornerRadius);

        return $this;
    }

    /**
     * The shared typography customizations.
     */
    public function setTypography(ShopifyCheckoutAndAccountsConfigurationBrandingSharedTypographyStyleInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingSharedTypographyStyleInputInputObject): static
    {
        $this->typography = $shopifyCheckoutAndAccountsConfigurationBrandingSharedTypographyStyleInputInputObject;

        return $this;
    }

    /**
     * The shared color customizations.
     */
    public function setColors(ShopifyCheckoutAndAccountsConfigurationBrandingSharedColorsInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingSharedColorsInputInputObject): static
    {
        $this->colors = $shopifyCheckoutAndAccountsConfigurationBrandingSharedColorsInputInputObject;

        return $this;
    }
}
