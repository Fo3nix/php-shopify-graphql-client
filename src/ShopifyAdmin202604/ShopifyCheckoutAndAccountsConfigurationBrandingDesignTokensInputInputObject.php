<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for customizing the design tokens.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingDesignTokensInputInputObject extends InputObject
{
    protected $colors;
    protected $typography;
    protected $cornerRadius;

    /**
     * The color customizations for global colors.
     */
    public function setColors(ShopifyCheckoutAndAccountsConfigurationBrandingDesignTokensColorsInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingDesignTokensColorsInputInputObject): static
    {
        $this->colors = $shopifyCheckoutAndAccountsConfigurationBrandingDesignTokensColorsInputInputObject;

        return $this;
    }

    /**
     * The typography.
     */
    public function setTypography(ShopifyCheckoutAndAccountsConfigurationBrandingTypographyInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingTypographyInputInputObject): static
    {
        $this->typography = $shopifyCheckoutAndAccountsConfigurationBrandingTypographyInputInputObject;

        return $this;
    }

    /**
     * The corner radius variables.
     */
    public function setCornerRadius(ShopifyCheckoutAndAccountsConfigurationBrandingCornerRadiusVariablesInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingCornerRadiusVariablesInputInputObject): static
    {
        $this->cornerRadius = $shopifyCheckoutAndAccountsConfigurationBrandingCornerRadiusVariablesInputInputObject;

        return $this;
    }
}
