<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields used to update the text fields customizations.
 */
class ShopifyCheckoutBrandingTextFieldInputInputObject extends InputObject
{
    protected $border;
    protected $typography;

    /**
     * The border used for text fields.
     */
    public function setBorder($shopifyCheckoutBrandingBorder): static
    {
        $this->border = new RawObject($shopifyCheckoutBrandingBorder);

        return $this;
    }

    /**
     * The typography customizations used for text fields.
     */
    public function setTypography(ShopifyCheckoutBrandingTypographyStyleInputInputObject $shopifyCheckoutBrandingTypographyStyleInputInputObject): static
    {
        $this->typography = $shopifyCheckoutBrandingTypographyStyleInputInputObject;

        return $this;
    }
}
