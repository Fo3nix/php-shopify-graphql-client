<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for customizing the customer accounts footer.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsFooterInputInputObject extends InputObject
{
    protected $alignment;
    protected $colors;
    protected $padding;

    /**
     * The footer alignment settings. You can set the footer native content alignment to the left, center, or right.
     */
    public function setAlignment($shopifyCheckoutAndAccountsConfigurationBrandingFooterAlignment): static
    {
        $this->alignment = new RawObject($shopifyCheckoutAndAccountsConfigurationBrandingFooterAlignment);

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
     * The padding of the footer container.
     */
    public function setPadding($shopifyCheckoutAndAccountsConfigurationBrandingSpacingKeyword): static
    {
        $this->padding = new RawObject($shopifyCheckoutAndAccountsConfigurationBrandingSpacingKeyword);

        return $this;
    }
}
