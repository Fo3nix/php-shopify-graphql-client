<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields used to update the design system.
 */
class ShopifyCheckoutBrandingDesignSystemInputInputObject extends InputObject
{
    protected $colors;
    protected $typography;
    protected $cornerRadius;

    /**
     * The color settings for global colors and color schemes.
     */
    public function setColors(ShopifyCheckoutBrandingColorsInputInputObject $shopifyCheckoutBrandingColorsInputInputObject): static
    {
        $this->colors = $shopifyCheckoutBrandingColorsInputInputObject;

        return $this;
    }

    /**
     * The typography.
     */
    public function setTypography(ShopifyCheckoutBrandingTypographyInputInputObject $shopifyCheckoutBrandingTypographyInputInputObject): static
    {
        $this->typography = $shopifyCheckoutBrandingTypographyInputInputObject;

        return $this;
    }

    /**
     * The corner radius variables.
     */
    public function setCornerRadius(ShopifyCheckoutBrandingCornerRadiusVariablesInputInputObject $shopifyCheckoutBrandingCornerRadiusVariablesInputInputObject): static
    {
        $this->cornerRadius = $shopifyCheckoutBrandingCornerRadiusVariablesInputInputObject;

        return $this;
    }
}
