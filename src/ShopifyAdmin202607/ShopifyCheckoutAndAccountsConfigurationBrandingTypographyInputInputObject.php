<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for customizing the typography.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingTypographyInputInputObject extends InputObject
{
    protected $size;
    protected $primary;
    protected $secondary;

    /**
     * The font size.
     */
    public function setSize(ShopifyCheckoutAndAccountsConfigurationBrandingFontSizeInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingFontSizeInputInputObject): static
    {
        $this->size = $shopifyCheckoutAndAccountsConfigurationBrandingFontSizeInputInputObject;

        return $this;
    }

    /**
     * The font group used for most components such as text, buttons and form controls.
     */
    public function setPrimary(ShopifyCheckoutAndAccountsConfigurationBrandingFontGroupInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingFontGroupInputInputObject): static
    {
        $this->primary = $shopifyCheckoutAndAccountsConfigurationBrandingFontGroupInputInputObject;

        return $this;
    }

    /**
     * The font group used for heading components by default.
     */
    public function setSecondary(ShopifyCheckoutAndAccountsConfigurationBrandingFontGroupInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingFontGroupInputInputObject): static
    {
        $this->secondary = $shopifyCheckoutAndAccountsConfigurationBrandingFontGroupInputInputObject;

        return $this;
    }
}
