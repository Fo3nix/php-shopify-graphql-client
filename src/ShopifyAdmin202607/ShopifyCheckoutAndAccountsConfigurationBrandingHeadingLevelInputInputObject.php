<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for customizing the heading level.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingHeadingLevelInputInputObject extends InputObject
{
    protected $typography;

    /**
     * The typography.
     */
    public function setTypography(ShopifyCheckoutAndAccountsConfigurationBrandingTypographyStyleInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingTypographyStyleInputInputObject): static
    {
        $this->typography = $shopifyCheckoutAndAccountsConfigurationBrandingTypographyStyleInputInputObject;

        return $this;
    }
}
