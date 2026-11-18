<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields used to update the header customizations.
 */
class ShopifyCheckoutBrandingHeaderInputInputObject extends InputObject
{
    protected $alignment;
    protected $position;
    protected $logo;
    protected $banner;
    protected $divided;
    protected $cartLink;
    protected $colorScheme;
    protected $padding;

    /**
     * The header alignment.
     */
    public function setAlignment($shopifyCheckoutBrandingHeaderAlignment): static
    {
        $this->alignment = new RawObject($shopifyCheckoutBrandingHeaderAlignment);

        return $this;
    }

    /**
     * The header position.
     */
    public function setPosition($shopifyCheckoutBrandingHeaderPosition): static
    {
        $this->position = new RawObject($shopifyCheckoutBrandingHeaderPosition);

        return $this;
    }

    /**
     * The store logo.
     */
    public function setLogo(ShopifyCheckoutBrandingLogoInputInputObject $shopifyCheckoutBrandingLogoInputInputObject): static
    {
        $this->logo = $shopifyCheckoutBrandingLogoInputInputObject;

        return $this;
    }

    /**
     * The background image of the header (must not be of SVG format).
     */
    public function setBanner(ShopifyCheckoutBrandingImageInputInputObject $shopifyCheckoutBrandingImageInputInputObject): static
    {
        $this->banner = $shopifyCheckoutBrandingImageInputInputObject;

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
     * The input for cart link customizations for 1-page checkout. This field allows to customize the cart icon that renders by default on 1-page checkout.
     */
    public function setCartLink(ShopifyCheckoutBrandingHeaderCartLinkInputInputObject $shopifyCheckoutBrandingHeaderCartLinkInputInputObject): static
    {
        $this->cartLink = $shopifyCheckoutBrandingHeaderCartLinkInputInputObject;

        return $this;
    }

    /**
     * The selected color scheme of the header container.
     */
    public function setColorScheme($shopifyCheckoutBrandingColorSchemeSelection): static
    {
        $this->colorScheme = new RawObject($shopifyCheckoutBrandingColorSchemeSelection);

        return $this;
    }

    /**
     * The padding of the header container.
     */
    public function setPadding($shopifyCheckoutBrandingSpacingKeyword): static
    {
        $this->padding = new RawObject($shopifyCheckoutBrandingSpacingKeyword);

        return $this;
    }
}
