<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields used to update the buttons customizations.
 */
class ShopifyCheckoutBrandingButtonInputInputObject extends InputObject
{
    protected $background;
    protected $border;
    protected $cornerRadius;
    protected $blockPadding;
    protected $inlinePadding;
    protected $typography;

    /**
     * The background style used for buttons.
     */
    public function setBackground($shopifyCheckoutBrandingBackgroundStyle): static
    {
        $this->background = new RawObject($shopifyCheckoutBrandingBackgroundStyle);

        return $this;
    }

    /**
     * The border used for buttons.
     */
    public function setBorder($shopifyCheckoutBrandingSimpleBorder): static
    {
        $this->border = new RawObject($shopifyCheckoutBrandingSimpleBorder);

        return $this;
    }

    /**
     * The corner radius used for buttons.
     */
    public function setCornerRadius($shopifyCheckoutBrandingCornerRadius): static
    {
        $this->cornerRadius = new RawObject($shopifyCheckoutBrandingCornerRadius);

        return $this;
    }

    /**
     * The block padding used for buttons.
     */
    public function setBlockPadding($shopifyCheckoutBrandingSpacing): static
    {
        $this->blockPadding = new RawObject($shopifyCheckoutBrandingSpacing);

        return $this;
    }

    /**
     * The inline padding used for buttons.
     */
    public function setInlinePadding($shopifyCheckoutBrandingSpacing): static
    {
        $this->inlinePadding = new RawObject($shopifyCheckoutBrandingSpacing);

        return $this;
    }

    /**
     * The typography style used for buttons.
     */
    public function setTypography(ShopifyCheckoutBrandingTypographyStyleInputInputObject $shopifyCheckoutBrandingTypographyStyleInputInputObject): static
    {
        $this->typography = $shopifyCheckoutBrandingTypographyStyleInputInputObject;

        return $this;
    }
}
