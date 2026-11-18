<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields used to update the page, content, main and order summary dividers customizations.
 */
class ShopifyCheckoutBrandingDividerStyleInputInputObject extends InputObject
{
    protected $borderStyle;
    protected $borderWidth;

    /**
     * The border style for the divider.
     */
    public function setBorderStyle($shopifyCheckoutBrandingBorderStyle): static
    {
        $this->borderStyle = new RawObject($shopifyCheckoutBrandingBorderStyle);

        return $this;
    }

    /**
     * The border width for the divider.
     */
    public function setBorderWidth($shopifyCheckoutBrandingBorderWidth): static
    {
        $this->borderWidth = new RawObject($shopifyCheckoutBrandingBorderWidth);

        return $this;
    }
}
