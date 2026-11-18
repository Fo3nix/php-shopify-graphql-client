<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for customizing the global divider.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingDividerStyleInputInputObject extends InputObject
{
    protected $borderStyle;
    protected $borderWidth;

    /**
     * The border style for the divider.
     */
    public function setBorderStyle($shopifyCheckoutAndAccountsConfigurationBrandingBorderStyle): static
    {
        $this->borderStyle = new RawObject($shopifyCheckoutAndAccountsConfigurationBrandingBorderStyle);

        return $this;
    }

    /**
     * The border width for the divider.
     */
    public function setBorderWidth($shopifyCheckoutAndAccountsConfigurationBrandingBorderWidth): static
    {
        $this->borderWidth = new RawObject($shopifyCheckoutAndAccountsConfigurationBrandingBorderWidth);

        return $this;
    }
}
