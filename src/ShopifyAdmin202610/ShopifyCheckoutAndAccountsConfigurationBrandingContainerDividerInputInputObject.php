<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for customizing a container's divider.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingContainerDividerInputInputObject extends InputObject
{
    protected $borderStyle;
    protected $borderWidth;
    protected $visibility;

    /**
     * The divider style.
     */
    public function setBorderStyle($shopifyCheckoutAndAccountsConfigurationBrandingBorderStyle): static
    {
        $this->borderStyle = new RawObject($shopifyCheckoutAndAccountsConfigurationBrandingBorderStyle);

        return $this;
    }

    /**
     * The divider width.
     */
    public function setBorderWidth($shopifyCheckoutAndAccountsConfigurationBrandingBorderWidth): static
    {
        $this->borderWidth = new RawObject($shopifyCheckoutAndAccountsConfigurationBrandingBorderWidth);

        return $this;
    }

    /**
     * The divider visibility.
     */
    public function setVisibility($shopifyCheckoutAndAccountsConfigurationBrandingVisibility): static
    {
        $this->visibility = new RawObject($shopifyCheckoutAndAccountsConfigurationBrandingVisibility);

        return $this;
    }
}
