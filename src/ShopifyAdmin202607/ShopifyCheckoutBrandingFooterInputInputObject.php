<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields when mutating the checkout footer settings.
 */
class ShopifyCheckoutBrandingFooterInputInputObject extends InputObject
{
    protected $position;
    protected $divided;
    protected $alignment;
    protected $content;
    protected $colorScheme;
    protected $padding;

    /**
     * The input field for setting the footer position customizations.
     */
    public function setPosition($shopifyCheckoutBrandingFooterPosition): static
    {
        $this->position = new RawObject($shopifyCheckoutBrandingFooterPosition);

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
     * The footer alignment settings. You can set the footer native content alignment to the left, center, or right.
     */
    public function setAlignment($shopifyCheckoutBrandingFooterAlignment): static
    {
        $this->alignment = new RawObject($shopifyCheckoutBrandingFooterAlignment);

        return $this;
    }

    /**
     * The input field for setting the footer content customizations.
     */
    public function setContent(ShopifyCheckoutBrandingFooterContentInputInputObject $shopifyCheckoutBrandingFooterContentInputInputObject): static
    {
        $this->content = $shopifyCheckoutBrandingFooterContentInputInputObject;

        return $this;
    }

    /**
     * The selected color scheme of the footer container.
     */
    public function setColorScheme($shopifyCheckoutBrandingColorSchemeSelection): static
    {
        $this->colorScheme = new RawObject($shopifyCheckoutBrandingColorSchemeSelection);

        return $this;
    }

    /**
     * The padding of the footer container.
     */
    public function setPadding($shopifyCheckoutBrandingSpacingKeyword): static
    {
        $this->padding = new RawObject($shopifyCheckoutBrandingSpacingKeyword);

        return $this;
    }
}
