<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields used to update the global customizations.
 */
class ShopifyCheckoutBrandingGlobalInputInputObject extends InputObject
{
    protected $cornerRadius;
    protected $typography;

    /**
     * Select a global corner radius setting that overrides all other [corner radii](https://shopify.dev/docs/api/admin-graphql/latest/enums/CheckoutBrandingCornerRadius)
     * customizations.
     */
    public function setCornerRadius($shopifyCheckoutBrandingGlobalCornerRadius): static
    {
        $this->cornerRadius = new RawObject($shopifyCheckoutBrandingGlobalCornerRadius);

        return $this;
    }

    /**
     * The global typography customizations.
     */
    public function setTypography(ShopifyCheckoutBrandingTypographyStyleGlobalInputInputObject $shopifyCheckoutBrandingTypographyStyleGlobalInputInputObject): static
    {
        $this->typography = $shopifyCheckoutBrandingTypographyStyleGlobalInputInputObject;

        return $this;
    }
}
