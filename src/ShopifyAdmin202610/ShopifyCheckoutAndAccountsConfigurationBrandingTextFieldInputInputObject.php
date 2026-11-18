<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for customizing the text fields.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingTextFieldInputInputObject extends InputObject
{
    protected $border;
    protected $typography;

    /**
     * The border.
     */
    public function setBorder($shopifyCheckoutAndAccountsConfigurationBrandingBorder): static
    {
        $this->border = new RawObject($shopifyCheckoutAndAccountsConfigurationBrandingBorder);

        return $this;
    }

    /**
     * The typography.
     */
    public function setTypography(ShopifyCheckoutAndAccountsConfigurationBrandingTypographyStyleInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingTypographyStyleInputInputObject): static
    {
        $this->typography = $shopifyCheckoutAndAccountsConfigurationBrandingTypographyStyleInputInputObject;

        return $this;
    }
}
