<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields used to update the main container customizations.
 */
class ShopifyCheckoutBrandingMainInputInputObject extends InputObject
{
    protected $colorScheme;
    protected $backgroundImage;
    protected $divider;
    protected $section;

    /**
     * The selected color scheme for the main container of the checkout.
     */
    public function setColorScheme($shopifyCheckoutBrandingColorSchemeSelection): static
    {
        $this->colorScheme = new RawObject($shopifyCheckoutBrandingColorSchemeSelection);

        return $this;
    }

    /**
     * The background image of the main container (must not be of SVG format).
     */
    public function setBackgroundImage(ShopifyCheckoutBrandingImageInputInputObject $shopifyCheckoutBrandingImageInputInputObject): static
    {
        $this->backgroundImage = $shopifyCheckoutBrandingImageInputInputObject;

        return $this;
    }

    /**
     * Divider style and visibility on the main container.
     */
    public function setDivider(ShopifyCheckoutBrandingContainerDividerInputInputObject $shopifyCheckoutBrandingContainerDividerInputInputObject): static
    {
        $this->divider = $shopifyCheckoutBrandingContainerDividerInputInputObject;

        return $this;
    }

    /**
     * The settings for the main sections.
     */
    public function setSection(ShopifyCheckoutBrandingMainSectionInputInputObject $shopifyCheckoutBrandingMainSectionInputInputObject): static
    {
        $this->section = $shopifyCheckoutBrandingMainSectionInputInputObject;

        return $this;
    }
}
