<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields used to update the main sections customizations.
 */
class ShopifyCheckoutBrandingMainSectionInputInputObject extends InputObject
{
    protected $colorScheme;
    protected $background;
    protected $cornerRadius;
    protected $border;
    protected $borderStyle;
    protected $borderWidth;
    protected $shadow;
    protected $padding;

    /**
     * The selected color scheme for the main sections.
     */
    public function setColorScheme($shopifyCheckoutBrandingColorSchemeSelection): static
    {
        $this->colorScheme = new RawObject($shopifyCheckoutBrandingColorSchemeSelection);

        return $this;
    }

    /**
     * The background style of the main sections.
     */
    public function setBackground($shopifyCheckoutBrandingBackground): static
    {
        $this->background = new RawObject($shopifyCheckoutBrandingBackground);

        return $this;
    }

    /**
     * The corner radius of the main sections.
     */
    public function setCornerRadius($shopifyCheckoutBrandingCornerRadius): static
    {
        $this->cornerRadius = new RawObject($shopifyCheckoutBrandingCornerRadius);

        return $this;
    }

    /**
     * The border for the main sections.
     */
    public function setBorder($shopifyCheckoutBrandingSimpleBorder): static
    {
        $this->border = new RawObject($shopifyCheckoutBrandingSimpleBorder);

        return $this;
    }

    /**
     * The border style of the main sections.
     */
    public function setBorderStyle($shopifyCheckoutBrandingBorderStyle): static
    {
        $this->borderStyle = new RawObject($shopifyCheckoutBrandingBorderStyle);

        return $this;
    }

    /**
     * The border width of the main sections.
     */
    public function setBorderWidth($shopifyCheckoutBrandingBorderWidth): static
    {
        $this->borderWidth = new RawObject($shopifyCheckoutBrandingBorderWidth);

        return $this;
    }

    /**
     * The shadow of the main sections.
     */
    public function setShadow($shopifyCheckoutBrandingShadow): static
    {
        $this->shadow = new RawObject($shopifyCheckoutBrandingShadow);

        return $this;
    }

    /**
     * The padding of the main sections.
     */
    public function setPadding($shopifyCheckoutBrandingSpacingKeyword): static
    {
        $this->padding = new RawObject($shopifyCheckoutBrandingSpacingKeyword);

        return $this;
    }
}
