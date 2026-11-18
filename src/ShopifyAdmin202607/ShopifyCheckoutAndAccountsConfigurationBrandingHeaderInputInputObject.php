<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for customizing the header.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingHeaderInputInputObject extends InputObject
{
    protected $alignment;
    protected $logo;
    protected $divided;
    protected $colors;
    protected $background;
    protected $padding;

    /**
     * The header alignment.
     */
    public function setAlignment($shopifyCheckoutAndAccountsConfigurationBrandingHeaderAlignment): static
    {
        $this->alignment = new RawObject($shopifyCheckoutAndAccountsConfigurationBrandingHeaderAlignment);

        return $this;
    }

    /**
     * The store logo.
     */
    public function setLogo(ShopifyCheckoutAndAccountsConfigurationBrandingLogoInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingLogoInputInputObject): static
    {
        $this->logo = $shopifyCheckoutAndAccountsConfigurationBrandingLogoInputInputObject;

        return $this;
    }

    /**
     * The divided setting.
     */
    public function setDivided($divided): static
    {
        $this->divided = $divided;

        return $this;
    }

    /**
     * The colors customizations for the header container.
     */
    public function setColors(ShopifyCheckoutAndAccountsConfigurationBrandingColorsInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingColorsInputInputObject): static
    {
        $this->colors = $shopifyCheckoutAndAccountsConfigurationBrandingColorsInputInputObject;

        return $this;
    }

    /**
     * The background style of the header container.
     */
    public function setBackground($shopifyCheckoutAndAccountsConfigurationBrandingBackground): static
    {
        $this->background = new RawObject($shopifyCheckoutAndAccountsConfigurationBrandingBackground);

        return $this;
    }

    /**
     * The padding of the header container.
     */
    public function setPadding($shopifyCheckoutAndAccountsConfigurationBrandingSpacingKeyword): static
    {
        $this->padding = new RawObject($shopifyCheckoutAndAccountsConfigurationBrandingSpacingKeyword);

        return $this;
    }
}
