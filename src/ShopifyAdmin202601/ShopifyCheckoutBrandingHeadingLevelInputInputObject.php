<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for heading level customizations.
 */
class ShopifyCheckoutBrandingHeadingLevelInputInputObject extends InputObject
{
    protected $typography;

    /**
     * The typography customizations used for headings.
     */
    public function setTypography(ShopifyCheckoutBrandingTypographyStyleInputInputObject $shopifyCheckoutBrandingTypographyStyleInputInputObject): static
    {
        $this->typography = $shopifyCheckoutBrandingTypographyStyleInputInputObject;

        return $this;
    }
}
