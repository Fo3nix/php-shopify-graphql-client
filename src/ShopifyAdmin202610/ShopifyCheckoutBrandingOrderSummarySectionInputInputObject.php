<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields used to update the order summary sections customizations.
 */
class ShopifyCheckoutBrandingOrderSummarySectionInputInputObject extends InputObject
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
     * The selected color scheme for the order summary sections.
     */
    public function setColorScheme($shopifyCheckoutBrandingColorSchemeSelection): static
    {
        $this->colorScheme = new RawObject($shopifyCheckoutBrandingColorSchemeSelection);

        return $this;
    }

    /**
     * The background style of the order summary sections.
     */
    public function setBackground($shopifyCheckoutBrandingBackground): static
    {
        $this->background = new RawObject($shopifyCheckoutBrandingBackground);

        return $this;
    }

    /**
     * The corner radius of the order summary sections.
     */
    public function setCornerRadius($shopifyCheckoutBrandingCornerRadius): static
    {
        $this->cornerRadius = new RawObject($shopifyCheckoutBrandingCornerRadius);

        return $this;
    }

    /**
     * The border for the order summary sections.
     */
    public function setBorder($shopifyCheckoutBrandingSimpleBorder): static
    {
        $this->border = new RawObject($shopifyCheckoutBrandingSimpleBorder);

        return $this;
    }

    /**
     * The border style of the order summary sections.
     */
    public function setBorderStyle($shopifyCheckoutBrandingBorderStyle): static
    {
        $this->borderStyle = new RawObject($shopifyCheckoutBrandingBorderStyle);

        return $this;
    }

    /**
     * The border width of the order summary sections.
     */
    public function setBorderWidth($shopifyCheckoutBrandingBorderWidth): static
    {
        $this->borderWidth = new RawObject($shopifyCheckoutBrandingBorderWidth);

        return $this;
    }

    /**
     * The shadow of the order summary sections.
     */
    public function setShadow($shopifyCheckoutBrandingShadow): static
    {
        $this->shadow = new RawObject($shopifyCheckoutBrandingShadow);

        return $this;
    }

    /**
     * The padding of the order summary sections.
     */
    public function setPadding($shopifyCheckoutBrandingSpacingKeyword): static
    {
        $this->padding = new RawObject($shopifyCheckoutBrandingSpacingKeyword);

        return $this;
    }
}
