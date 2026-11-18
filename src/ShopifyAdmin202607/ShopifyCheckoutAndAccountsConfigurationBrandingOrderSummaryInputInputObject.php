<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for customizing the order summary container.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingOrderSummaryInputInputObject extends InputObject
{
    protected $colors;
    protected $backgroundImage;
    protected $divider;
    protected $section;

    /**
     * The colors customizations.
     */
    public function setColors(ShopifyCheckoutAndAccountsConfigurationBrandingColorsInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingColorsInputInputObject): static
    {
        $this->colors = $shopifyCheckoutAndAccountsConfigurationBrandingColorsInputInputObject;

        return $this;
    }

    /**
     * The background image of the order summary container (must not be of SVG format).
     */
    public function setBackgroundImage(ShopifyCheckoutAndAccountsConfigurationBrandingImageInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingImageInputInputObject): static
    {
        $this->backgroundImage = $shopifyCheckoutAndAccountsConfigurationBrandingImageInputInputObject;

        return $this;
    }

    /**
     * Divider style and visibility on the order summary container.
     */
    public function setDivider(ShopifyCheckoutAndAccountsConfigurationBrandingContainerDividerInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingContainerDividerInputInputObject): static
    {
        $this->divider = $shopifyCheckoutAndAccountsConfigurationBrandingContainerDividerInputInputObject;

        return $this;
    }

    /**
     * The customizations for the order summary sections.
     */
    public function setSection(ShopifyCheckoutAndAccountsConfigurationBrandingOrderSummarySectionInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingOrderSummarySectionInputInputObject): static
    {
        $this->section = $shopifyCheckoutAndAccountsConfigurationBrandingOrderSummarySectionInputInputObject;

        return $this;
    }
}
