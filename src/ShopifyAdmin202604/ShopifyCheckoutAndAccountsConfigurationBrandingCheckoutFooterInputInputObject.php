<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for customizing the checkout footer.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingCheckoutFooterInputInputObject extends InputObject
{
    protected $divided;
    protected $alignment;
    protected $content;
    protected $colors;
    protected $background;
    protected $padding;
    protected $position;

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
    public function setAlignment($shopifyCheckoutAndAccountsConfigurationBrandingFooterAlignment): static
    {
        $this->alignment = new RawObject($shopifyCheckoutAndAccountsConfigurationBrandingFooterAlignment);

        return $this;
    }

    /**
     * The input field for setting the footer content customizations.
     */
    public function setContent(ShopifyCheckoutAndAccountsConfigurationBrandingFooterContentInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingFooterContentInputInputObject): static
    {
        $this->content = $shopifyCheckoutAndAccountsConfigurationBrandingFooterContentInputInputObject;

        return $this;
    }

    /**
     * The colors customizations.
     */
    public function setColors(ShopifyCheckoutAndAccountsConfigurationBrandingColorsInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingColorsInputInputObject): static
    {
        $this->colors = $shopifyCheckoutAndAccountsConfigurationBrandingColorsInputInputObject;

        return $this;
    }

    /**
     * The background style of the footer container.
     */
    public function setBackground($shopifyCheckoutAndAccountsConfigurationBrandingBackground): static
    {
        $this->background = new RawObject($shopifyCheckoutAndAccountsConfigurationBrandingBackground);

        return $this;
    }

    /**
     * The padding of the footer container.
     */
    public function setPadding($shopifyCheckoutAndAccountsConfigurationBrandingSpacingKeyword): static
    {
        $this->padding = new RawObject($shopifyCheckoutAndAccountsConfigurationBrandingSpacingKeyword);

        return $this;
    }

    /**
     * The footer position.
     */
    public function setPosition($shopifyCheckoutAndAccountsConfigurationBrandingFooterPosition): static
    {
        $this->position = new RawObject($shopifyCheckoutAndAccountsConfigurationBrandingFooterPosition);

        return $this;
    }
}
