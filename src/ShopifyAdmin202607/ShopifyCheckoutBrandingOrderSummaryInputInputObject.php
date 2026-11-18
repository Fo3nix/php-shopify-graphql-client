<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields used to update the order summary container customizations.
 */
class ShopifyCheckoutBrandingOrderSummaryInputInputObject extends InputObject
{
    protected $colorScheme;
    protected $backgroundImage;
    protected $divider;
    protected $section;

    /**
     * The selected color scheme for the order summary container of the checkout.
     */
    public function setColorScheme($shopifyCheckoutBrandingColorSchemeSelection): static
    {
        $this->colorScheme = new RawObject($shopifyCheckoutBrandingColorSchemeSelection);

        return $this;
    }

    /**
     * The background image of the order summary container (must not be of SVG format).
     */
    public function setBackgroundImage(ShopifyCheckoutBrandingImageInputInputObject $shopifyCheckoutBrandingImageInputInputObject): static
    {
        $this->backgroundImage = $shopifyCheckoutBrandingImageInputInputObject;

        return $this;
    }

    /**
     * Divider style and visibility on the order summary container.
     */
    public function setDivider(ShopifyCheckoutBrandingContainerDividerInputInputObject $shopifyCheckoutBrandingContainerDividerInputInputObject): static
    {
        $this->divider = $shopifyCheckoutBrandingContainerDividerInputInputObject;

        return $this;
    }

    /**
     * The settings for the order summary sections.
     */
    public function setSection(ShopifyCheckoutBrandingOrderSummarySectionInputInputObject $shopifyCheckoutBrandingOrderSummarySectionInputInputObject): static
    {
        $this->section = $shopifyCheckoutBrandingOrderSummarySectionInputInputObject;

        return $this;
    }
}
