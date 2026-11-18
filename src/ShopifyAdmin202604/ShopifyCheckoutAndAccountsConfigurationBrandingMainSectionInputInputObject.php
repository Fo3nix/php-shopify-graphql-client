<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for customizing the main sections.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingMainSectionInputInputObject extends InputObject
{
    protected $colors;
    protected $background;
    protected $cornerRadius;
    protected $border;
    protected $borderStyle;
    protected $borderWidth;
    protected $shadow;
    protected $padding;

    /**
     * The colors customizations.
     */
    public function setColors(ShopifyCheckoutAndAccountsConfigurationBrandingColorsInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingColorsInputInputObject): static
    {
        $this->colors = $shopifyCheckoutAndAccountsConfigurationBrandingColorsInputInputObject;

        return $this;
    }

    /**
     * The background style of the main sections.
     */
    public function setBackground($shopifyCheckoutAndAccountsConfigurationBrandingBackground): static
    {
        $this->background = new RawObject($shopifyCheckoutAndAccountsConfigurationBrandingBackground);

        return $this;
    }

    /**
     * The corner radius of the main sections.
     */
    public function setCornerRadius($shopifyCheckoutAndAccountsConfigurationBrandingCornerRadius): static
    {
        $this->cornerRadius = new RawObject($shopifyCheckoutAndAccountsConfigurationBrandingCornerRadius);

        return $this;
    }

    /**
     * The border for the main sections.
     */
    public function setBorder($shopifyCheckoutAndAccountsConfigurationBrandingSimpleBorder): static
    {
        $this->border = new RawObject($shopifyCheckoutAndAccountsConfigurationBrandingSimpleBorder);

        return $this;
    }

    /**
     * The border style of the main sections.
     */
    public function setBorderStyle($shopifyCheckoutAndAccountsConfigurationBrandingBorderStyle): static
    {
        $this->borderStyle = new RawObject($shopifyCheckoutAndAccountsConfigurationBrandingBorderStyle);

        return $this;
    }

    /**
     * The border width of the main sections.
     */
    public function setBorderWidth($shopifyCheckoutAndAccountsConfigurationBrandingBorderWidth): static
    {
        $this->borderWidth = new RawObject($shopifyCheckoutAndAccountsConfigurationBrandingBorderWidth);

        return $this;
    }

    /**
     * The shadow of the main sections.
     */
    public function setShadow($shopifyCheckoutAndAccountsConfigurationBrandingShadow): static
    {
        $this->shadow = new RawObject($shopifyCheckoutAndAccountsConfigurationBrandingShadow);

        return $this;
    }

    /**
     * The padding of the main sections.
     */
    public function setPadding($shopifyCheckoutAndAccountsConfigurationBrandingSpacingKeyword): static
    {
        $this->padding = new RawObject($shopifyCheckoutAndAccountsConfigurationBrandingSpacingKeyword);

        return $this;
    }
}
