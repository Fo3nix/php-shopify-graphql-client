<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields used to update the selects customizations.
 */
class ShopifyCheckoutBrandingSelectInputInputObject extends InputObject
{
    protected $border;
    protected $typography;

    /**
     * The border used for selects.
     */
    public function setBorder($shopifyCheckoutBrandingBorder): static
    {
        $this->border = new RawObject($shopifyCheckoutBrandingBorder);

        return $this;
    }

    /**
     * The typography customizations used for selects.
     */
    public function setTypography(ShopifyCheckoutBrandingTypographyStyleInputInputObject $shopifyCheckoutBrandingTypographyStyleInputInputObject): static
    {
        $this->typography = $shopifyCheckoutBrandingTypographyStyleInputInputObject;

        return $this;
    }
}
