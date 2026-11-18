<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for customizing the customer accounts header.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsHeaderInputInputObject extends InputObject
{
    protected $alignment;
    protected $colors;
    protected $logo;
    protected $padding;

    /**
     * The header alignment.
     */
    public function setAlignment($shopifyCheckoutAndAccountsConfigurationBrandingHeaderAlignment): static
    {
        $this->alignment = new RawObject($shopifyCheckoutAndAccountsConfigurationBrandingHeaderAlignment);

        return $this;
    }

    /**
     * The colors customizations for the header container.
     */
    public function setColors(ShopifyCheckoutAndAccountsConfigurationBrandingColorsInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingColorsInputInputObject): static
    {
        $this->colors = $shopifyCheckoutAndAccountsConfigurationBrandingColorsInputInputObject;

        return $this;
    }

    /**
     * The store logo.
     */
    public function setLogo(ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsLogoInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsLogoInputInputObject): static
    {
        $this->logo = $shopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsLogoInputInputObject;

        return $this;
    }

    /**
     * The padding of the header container.
     */
    public function setPadding($shopifyCheckoutAndAccountsConfigurationBrandingSpacingKeyword): static
    {
        $this->padding = new RawObject($shopifyCheckoutAndAccountsConfigurationBrandingSpacingKeyword);

        return $this;
    }
}
