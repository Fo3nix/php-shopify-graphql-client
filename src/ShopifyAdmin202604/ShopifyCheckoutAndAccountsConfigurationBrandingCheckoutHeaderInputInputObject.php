<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for customizing the checkout header.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingCheckoutHeaderInputInputObject extends InputObject
{
    protected $alignment;
    protected $logo;
    protected $divided;
    protected $colors;
    protected $background;
    protected $padding;
    protected $position;
    protected $cartLink;

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

    /**
     * The header position.
     */
    public function setPosition($shopifyCheckoutAndAccountsConfigurationBrandingHeaderPosition): static
    {
        $this->position = new RawObject($shopifyCheckoutAndAccountsConfigurationBrandingHeaderPosition);

        return $this;
    }

    /**
     * The input for cart link customizations for 1-page checkout. This field allows to customize the cart icon that renders by default on 1-page checkout.
     */
    public function setCartLink(ShopifyCheckoutAndAccountsConfigurationBrandingHeaderCartLinkInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingHeaderCartLinkInputInputObject): static
    {
        $this->cartLink = $shopifyCheckoutAndAccountsConfigurationBrandingHeaderCartLinkInputInputObject;

        return $this;
    }
}
